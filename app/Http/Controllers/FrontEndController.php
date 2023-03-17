<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use App\Models\Invoice;
use App\Models\MainOrder;
use Illuminate\Http\Request;
use App\Models\ProductSetting;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\MessageBag;

class FrontEndController extends Controller
{

    public function index()
    {
        return view('main');
    }

    public function contactus()
    {
        return view('contactus');
    }

    public function myaccount()
    {
        return view('user_dashbord');
    }
    public function userDashboard()
    {
        if (Auth::check() && Auth::user()->role == "admin") {
            return Redirect::to('admin');
        }
        $bodyClass = "mon-compte";

        return view('user_dashbord', compact('bodyClass'));
    }

    public function userInvoices()
    {
        $invoices = Invoice::whereHas("order", function ($query) {
            $query->where("user_id", Auth::user()->id);
        })->orderBy("created_at", "desc")->get();

        return view('invoices', compact('invoices'));
    }
    public function userInvoicesPay(Request $request, $id)
    {
        $invoice = Invoice::findOrFail($id);
        $order = MainOrder::findOrFail($invoice->main_order_id);
        if ($request->has('stripeToken') == false || $request->input("stripeToken") == null || $request->input("stripeToken") == "") {
            return back()->with("error", "No stripe token provided");
        }
        $stripeResult = StripeController::chargePaymentFromToken($request->stripeToken, $invoice->amount);
        if (isset($stripeResult->id)) {
            $invoice->charge_id = $stripeResult->id;
            $invoice->payment_date = now();
            $invoice->payment_via = "stripe";
            $invoice->status = Invoice::STATUS_DONE;
            $invoice->save();

            $order->payment_status = MainOrder::ORDER_STATUS_PAYMENT_DONE;
            $order->save();

            return back()->with('success', 'Invoice paid successfully.');
        } else {
            return back()->with('error', 'Not able to make a charge');
        }
    }

    public function fichiers_faq()
    {
        $bodyClass = "mon-compte";
        return view('fichiers-faq', compact('bodyClass'));
    }

    public function command_plan(Request $request)
    {
        $prices = ProductSetting::where('type', 1)->get();

        $data = $this->get_cart_items_with_cookie($request);
        $cart_items = $data["cart_items"];
        $days_plus = $this->getAddedDays();

        $bodyClass = "commande-plan";
        return response(view('show_commande', compact('prices', 'days_plus', 'bodyClass', 'cart_items')))->cookie($data["cookie"]);
    }

    private function get_cart_items_with_cookie(Request $request)
    {
        $key = $request->cookie("cart_key");
        $cart_items = array();
        if (Auth::check()) {
            $cart_items = CartItem::join("carts", "cart_items.cart_id", "=", "carts.id")
                ->where(function ($query) use ($key) {
                    $query->where("carts.user_id", Auth::user()->id)->orWhere("carts.key", $key);
                })->select("cart_items.*")->get();
        } else {
            if ($key) {
                $cart_items = CartItem::join("carts", "cart_items.cart_id", "=", "carts.id")
                    ->where("carts.key", $key)
                    ->select("cart_items.*")->get();
            } else {
                $key = uniqid() . time() . uniqid();
            }
        }
        $cookie = cookie('cart_key', $key, 60 * 60 * 3600);

        return ["cookie" => $cookie, "cart_items" => $cart_items];
    }

    public function uploadFiles(Request $request)
    {
        if ($request->has('file') && $request->file('file')) {
            $file = $request->file('file');
            $filename = time() . "-" . $file->getClientOriginalName();
            $filesize = $file->getSize();
            $location = public_path("/uploads/files/");

            $return_arr = array();
            $file->move($location, $filename);
            $full_location_path = "/uploads/files/" . $filename;


            $return_arr = array("name" => $filename, "size" => $filesize, "src" => $full_location_path);

            return response()->json($return_arr);
        } else {
            return response()->json([], 402);
        }
    }

    public function memory_report(Request $request)
    {
        $bodyClass = "commande-memoire-rapport";
        $prices = ProductSetting::where('type', 2)->get();
        $data = $this->get_cart_items_with_cookie($request);
        $cart_items = $data["cart_items"];
        $days_plus = $this->getAddedDays();
        return response(view('commande-memoire-rapport', compact('prices', 'bodyClass', 'cart_items', 'days_plus')))->cookie($data["cookie"]);
    }

    public function booklet(Request $request)
    {
        $bodyClass = "commande-brochure-livret";
        $prices = ProductSetting::where('type', 3)->get();
        $data = $this->get_cart_items_with_cookie($request);
        $cart_items = $data["cart_items"];

        $days_plus = $this->getAddedDays();

        return response(view('commande-prochure-livret', compact('prices', 'bodyClass', 'cart_items', 'days_plus')))->cookie($data["cookie"]);
    }

    public function attach(Request $request)
    {
        $bodyClass = "commande-affiche";
        $days_plus = $this->getAddedDays();
        $prices = ProductSetting::where('type', 4)->get();

        $data = $this->get_cart_items_with_cookie($request);
        $cart_items = $data["cart_items"];

        return response(view('commande-affiche', compact('prices', 'days_plus', 'bodyClass', 'cart_items')))->cookie($data["cookie"]);
    }

    public function plans_life()
    {
        $bodyClass = "commande-dossier-plan";
        $prices = ProductSetting::where('type', 4)->get();
        return view('commande-dossier-plan', compact('prices', 'bodyClass'));
    }

    public function user_dashbord()
    {
        $bodyClass = "mon-compte";

        return view('user_dashbord', compact('bodyClass'));
    }

    public function panier(Request $request)
    {
        $bodyClass = "inscription";
        $data = $this->get_cart_items_with_cookie($request);
        $cart_items = $data["cart_items"];

        return view('panier', compact('bodyClass', 'cart_items'));
    }
    public function protectionViePrivee()
    {
        return view('protectionViePrivee');
    }
    public function mentionsLegales()
    {
        return view('mentionsLegales');
    }
    public function conditionDeVente()
    {
        return view('conditionDeVente');
    }
    public function labellise()
    {
        return view('labellise');
    }

    private function getAddedDays()
    {
        $date = now();
        $newDate = now()->copy()->setTime(17, 0, 0);

        $date->startOfWeek(Carbon::MONDAY);
        $date->endOfWeek(Carbon::SUNDAY);
        $day = 2;

        if ($date->lessThan($newDate)) {
            $day = 2;
        } else {
            $day = 3;
        }
        if ($date->weekday() == Carbon::SATURDAY) {
            $day = 4;
        }
        if ($date->weekday() == Carbon::SUNDAY) {
            $day = 3;
        }
        return $day;
    }
}