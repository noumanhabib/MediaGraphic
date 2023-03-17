<?php

namespace App\Http\Controllers;

use App\Http\Controllers\StripeController;
use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Invoice;
use App\Models\MainOrder;
use App\Models\MainOrderItem;
use Illuminate\Http\Request;
use App\Models\Quotation;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class OrderController extends Controller
{
    public function adminEncours()
    {
        $orders = Order::where('status', 0)->get();
        return view('admin.commande.index', compact('orders'));
    }
    public function devisAccept($id, Request $request)
    {
        $quotation = Quotation::findorfail($id);
        if (Auth::user()->customer_type == 'professional') {
            $order = new MainOrder();
            $order->user_id = Auth::user()->id;
            $order->subtotal = $quotation->amount_exclude_tax;
            $order->tax = $quotation->amount_include_tax - $quotation->amount_exclude_tax;
            $order->total = $quotation->amount_include_tax;
            $order->payment_status = MainOrder::ORDER_STATUS_PAYMENT_PENDING;
            $order->status = MainOrder::ORDER_STATUS_PENDING;
            $order->save();
            $invoice = new Invoice();
            $invoice->main_order_id = $order->id;
            $invoice->amount = $quotation->amount_include_tax;
            $invoice->status = Invoice::STATUS_PENDING;
            $invoice->due_date = today()->addDays(29);
            $invoice->save();
            $order_item = new MainOrderItem();
            $order_item->main_order_id = $order->id;
            $order_item->type = "quotation";
            $order_item->print_details = null;
            $order_item->no_of_copies = $quotation->quantity;
            $order_item->date = null;
            $order_item->amount = $quotation->amount_include_tax;
            $order_item->files = json_encode(["/uploads/files/" . $quotation->image]);
            $order_item->save();
            $quotation->status = 3;
            $quotation->save();
            Mail::send('emails.quotation', ['quotation' => $quotation], function ($m) use ($quotation) {
                $m->from($quotation->email);
                $m->to(config('app.admin_mail'));
                $m->subject('New Order from Quotation');
            });
            return back()->with('success', 'Your quotation has been converted to the order. Your payment is pending and can be done in 30 days. A invoice is generated and placed inside your dashboard, that can be payable at anytime. We will notify you when your order is ready.');
        }

        $stripeResult = StripeController::chargePaymentFromToken($request->stripeToken, $quotation->amount_include_tax);
        if (isset($stripeResult->id)) {
            $order = new MainOrder();
            $order->user_id = Auth::user()->id;
            $order->subtotal = $quotation->amount_exclude_tax;
            $order->tax = $quotation->amount_include_tax - $quotation->amount_exclude_tax;
            $order->total = $quotation->amount_include_tax;
            $order->payment_status = MainOrder::ORDER_STATUS_PAYMENT_DONE;
            $order->status = MainOrder::ORDER_STATUS_PENDING;
            $order->save();
            $invoice = new Invoice();
            $invoice->main_order_id = $order->id;
            $invoice->amount = $quotation->amount_include_tax;
            $invoice->status = Invoice::STATUS_DONE;
            $invoice->payment_via = "stripe";
            $invoice->charge_id = $stripeResult->id;
            $invoice->due_date = today();
            $invoice->payment_date = today();
            $invoice->save();
            $order_item = new MainOrderItem();
            $order_item->main_order_id = $order->id;
            $order_item->type = "quotation";
            $order_item->print_details = null;
            $order_item->no_of_copies = $quotation->quantity;
            $order_item->date = null;
            $order_item->amount = $quotation->amount_include_tax;
            $order_item->files = json_encode(["/uploads/files/" . $quotation->image]);
            $order_item->save();
            $quotation->status = 3;
            $quotation->save();
            Mail::send('emails.quotation', ['quotation' => $quotation], function ($m) use ($quotation) {
                $m->from($quotation->email);
                $m->to(config('app.admin_mail'));
                $m->subject('New Order from Quotation');
            });
            return back()->with('success', 'Your quotation has been converted to the order.');
        }
        return back()->with('error', 'Stripe payment error occured. Make sure you pay via stripe');
    }

    public function placeOrder(Request $request)
    {
        if (Auth::user()->customer_type == 'professional') {
            return $this->placeOrderProfessional($request);
        }
        return $this->placeOrderIndividual($request);
    }

    public function placeOrderIndividual(Request $request)
    {
        $key = $request->cookie("cart_key");
        $totalAmount = CartItem::join("carts", "cart_items.cart_id", "=", "carts.id")
            ->where(function ($query) use ($key) {
                $query->where("carts.user_id", Auth::user()->id)->orWhere("carts.key", $key);
            })->sum("cart_items.amount");
        if ($totalAmount <= 0) {
            return back()->with("error", "Order amount is zero");
        }
        if ($request->has('stripeToken') == false || $request->input("stripeToken") == null || $request->input("stripeToken") == "") {
            return back()->with("error", "No stripe token provided");
        }
        $tva = $totalAmount * 0.2;
        $fullTotalAmount = $totalAmount + $tva;

        $stripeResult = StripeController::chargePaymentFromToken($request->stripeToken, $fullTotalAmount);
        if (isset($stripeResult->id)) {

            $order = new MainOrder();
            $order->user_id = Auth::user()->id;
            $order->subtotal = $totalAmount;
            $order->tax = $tva;
            $order->total = $fullTotalAmount;
            $order->payment_status = MainOrder::ORDER_STATUS_PAYMENT_DONE;
            $order->status = MainOrder::ORDER_STATUS_PENDING;
            $order->save();

            $invoice = new Invoice();
            $invoice->main_order_id = $order->id;
            $invoice->amount = $fullTotalAmount;
            $invoice->status = Invoice::STATUS_DONE;
            $invoice->payment_via = "stripe";
            $invoice->charge_id = $stripeResult->id;
            $invoice->due_date = today();
            $invoice->payment_date = today();
            $invoice->save();

            //create order_items
            $cart_items = CartItem::join("carts", "cart_items.cart_id", "=", "carts.id")
                ->where(function ($query) use ($key) {
                    $query->where("carts.user_id", Auth::user()->id)->orWhere("carts.key", $key);
                })->select("cart_items.*")->get();
            $cart_item_ids = [];
            foreach ($cart_items as $cart_item) {
                $cart_item_ids[] = $cart_item->id;
                $order_item = new MainOrderItem();
                $order_item->main_order_id = $order->id;
                $order_item->type = $cart_item->type;
                $order_item->print_details = $cart_item->print_details;
                $order_item->no_of_copies = $cart_item->no_of_copies;
                $order_item->date = $cart_item->date;
                $order_item->amount = $cart_item->amount;
                $order_item->files = $cart_item->files;
                $order_item->save();
            }

            CartItem::whereIn("id", $cart_item_ids)->delete();

            return back()->with('success', 'Your order has been placed and payment has been done. We will notify you when your order is ready');
        } else {
            return back()->with('error', 'Not able to make a charge');
        }
    }

    public function placeOrderProfessional(Request $request)
    {
        $key = $request->cookie("cart_key");
        $totalAmount = CartItem::join("carts", "cart_items.cart_id", "=", "carts.id")
            ->where(function ($query) use ($key) {
                $query->where("carts.user_id", Auth::user()->id)->orWhere("carts.key", $key);
            })->sum("cart_items.amount");
        if ($totalAmount <= 0) {
            return back()->with("error", "Order amount is zero");
        }
        $tva = $totalAmount * 0.2;
        $fullTotalAmount = $totalAmount + $tva;

        //Generate order
        //Send email
        $order = new MainOrder();
        $order->user_id = Auth::user()->id;
        $order->subtotal = $totalAmount;
        $order->tax = $tva;
        $order->total = $fullTotalAmount;
        $order->payment_status = MainOrder::ORDER_STATUS_PAYMENT_PENDING;
        $order->status = MainOrder::ORDER_STATUS_PENDING;
        $order->save();

        $invoice = new Invoice();
        $invoice->main_order_id = $order->id;
        $invoice->amount = $fullTotalAmount;
        $invoice->status = Invoice::STATUS_PENDING;
        $invoice->due_date = today()->addDays(29);
        $invoice->save();

        //create order_items
        $cart_items = CartItem::join("carts", "cart_items.cart_id", "=", "carts.id")
            ->where(function ($query) use ($key) {
                $query->where("carts.user_id", Auth::user()->id)->orWhere("carts.key", $key);
            })->select("cart_items.*")->get();
        $cart_item_ids = [];
        foreach ($cart_items as $cart_item) {
            $cart_item_ids[] = $cart_item->id;
            $order_item = new MainOrderItem();
            $order_item->main_order_id = $order->id;
            $order_item->type = $cart_item->type;
            $order_item->print_details = $cart_item->print_details;
            $order_item->no_of_copies = $cart_item->no_of_copies;
            $order_item->date = $cart_item->date;
            $order_item->amount = $cart_item->amount;
            $order_item->files = $cart_item->files;
            $order_item->save();
        }

        CartItem::whereIn("id", $cart_item_ids)->delete();

        return back()->with('success', 'Your order has been placed. Your payment is pending and can be done in 30 days. A invoice is generated and placed inside your dashboard, that can be payable at anytime. We will notify you when your order is ready');
    }

    public function deleteCartItem($id)
    {
        $cart_item = CartItem::findOrFail($id);
        $cart_item->delete();
        return back()->with("success", "Cart item deleted");

        return back()->with("error", "Cart item not found");
    }
}
