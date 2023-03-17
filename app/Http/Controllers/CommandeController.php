<?php

namespace App\Http\Controllers;

use App\Http\Controllers\StripeController;
use App\Models\Cart;
use App\Models\CartItem;
use Illuminate\Http\Request;
use App\Models\Commande;
use App\Models\CommandeDetail;
use App\Models\MainOrder;
use App\Models\MainOrderItem;
use App\Models\ProductSetting;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class CommandeController extends Controller
{
    public function mycommandes()
    {
        $orders = MainOrder::where('user_id', Auth::user()->id)->get();
        $data['title'] = 'All Commandes';
        return view('commande.index', compact('orders', 'data'));
    }
    public function updateProducts(Request $request, $id)
    {
        $data = $request->all();
        ProductSetting::where('type', $id)->delete();
        $prices = [];
        foreach ($data['min_quantity'] as $key => $min_quantity) {
            $prices[] = [
                "type" => $id,
                "min_quantity" => $min_quantity,
                "max_quantity" => $data['max_quantity'][$key],
                "first_day_price" => $data['first_day_price'][$key]
            ];
        }
        ProductSetting::insert($prices);
        return Redirect::back()->with('success', 'Le produit a été mis à jour.');
    }
    public function adminTraiters()
    {
        $orders = MainOrder::latest()->get();
        $data = [];
        $data['title'] = 'Commandes';
        return view('admin.commande.index', compact('orders', 'data'));
    }
    public function adminToBeProcessedOrders()
    {
        $orders = MainOrder::where("status", MainOrder::ORDER_STATUS_PENDING)->latest()->get();
        $data = [];
        $data['title'] = 'Commandes a traiter';
        return view('admin.commande.index', compact('orders', 'data'));
    }
    public function adminProducts()
    {
        return view('admin.products.index');
    }
    public function editProducts($id)
    {
        $prices = ProductSetting::where('type', $id)->orderBy('min_quantity')->get();
        return view('admin.products.edit', compact('id', 'prices'));
    }
    public function deleteProducts($id)
    {
        CommandeDetail::where('commande_id', $id)->delete();
        Commande::where('id', $id)->delete();
        return Redirect::back()->with('success', 'Le produit a été supprimé');
    }
    public function adminEncours()
    {
        $orders = MainOrder::where('status', MainOrder::ORDER_STATUS_PROCESSING)->get();
        $data['title'] = 'Commandes en cours';
        return view('admin.commande.index', compact('orders', 'data'));
    }
    public function detail($id)
    {
        $commande = MainOrder::findorfail($id);
        if ($commande->status == 0) {
            $status = 'A traiter';
        } elseif ($commande->status == 1) {
            $status = 'en cours';
        } else {
            $status = 'en cours';
        }
        $data['title'] = 'Commande ' . $status;
        $data['status'] = $status;

        $order_items = MainOrderItem::where("main_order_id", $id)->get();
        return view('commande.view', compact('commande', 'data', 'order_items'));
    }
    public function editcommande($id)
    {
        $commande = MainOrder::findorfail($id);
        if ($commande->status == 0) {
            $status = 'A traiter';
        } elseif ($commande->status == 1) {
            $status = 'en cours';
        } else {
            $status = 'en cours';
        }
        $data['title'] = 'Commande ' . $status;
        $data['status'] = $status;
        $order_items = MainOrderItem::where("main_order_id", $id)->get();

        return view('admin.commande.edit', compact('commande', 'data', 'order_items'));
    }
    public function statuscommande($st, $id)
    {
        $commande = MainOrder::findorfail($id);
        $commande->status = $st;
        if ($commande->save() == true) {
            return Redirect::back()->with('success', 'Votre statut a été modifié.');
        } else {
            return Redirect::back()->with('error', 'Quelque chose s\'est mal passé.');
        }
    }

    private function get_cart_using_cookie(Request $request): Cart|null
    {
        $cart = null;
        if (Auth::check()) {
            $user = Auth::user();
            $cart = Cart::where("user_id", $user->id)->first();
            if (is_null($cart)) {
                $cart = new Cart();
                $cart->user_id = $user->id;
                $cart->save();
            }
        } else {
            if ($request->hasCookie("cart_key") && $request->cookie("cart_key")) {
                $key = $request->cookie("cart_key");
                $cart = Cart::where("key", $key)->first();
                if (is_null($cart)) {
                    $cart = new Cart();
                    $cart->key = $key;
                    $cart->save();
                }
            }
        }
        return $cart;
    }

    public function save_command_plan(Request $request)
    {

        if ($request->input("upload-files") == null || $request->input("upload-files") == "") {
            return back()->with("error", "Please choose at least one file to print");
        }
        $print_date = Carbon::createFromFormat("d/m", $request->input("livraison-date"));
        if (!$print_date) {
            return back()->with("error", "Please choose a date");
        }
        $cart = $this->get_cart_using_cookie($request);

        $item_details = [
            "print" => $request->input("print"),
            "print_size_width" => $request->input("print_size_width"),
            "print_size_height" => $request->input("print_size_height"),
            "color" => $request->input("color"),
            "work_type" => $request->input("work_type"),
            "choose_paper" => $request->input("choose_paper"),
            "shaping" => $request->input("shaping"),
        ];

        $cart_item = new CartItem();
        $cart_item->cart_id = $cart->id;
        $cart_item->type = "plan";
        $cart_item->print_details = json_encode($item_details);
        $cart_item->no_of_copies = $request->input("no_of_copies");
        $cart_item->date = $print_date;
        $cart_item->amount = $request->input("product_cart_totalht");
        $cart_item->files = $request->input("upload-files");

        $cart_item->save();

        return back()->with("success", "Added to cart.");
    }

    public function save_memory_report(Request $request)
    {
        $print_date = Carbon::createFromFormat("d/m", $request->input("livraison-date"));
        if (!$print_date) {
            return back()->with("error", "Please choose a date");
        }

        $cart = $this->get_cart_using_cookie($request);

        $item_details = [
            "file_name" => $request->input("file_name"),
            "paper_size" => $request->input("paper_size"),
            "smallest" => $request->input("smallest"),
            "largest" => $request->input("largest"),
            "orientation" => $request->input("orientation"),
            "transparent" => $request->input("transparent"),
            "cover_paper" => $request->input("cover_paper"),
            "cover" => $request->input("cover"),
            "black_and_white_pages" => $request->input("black_and_white_pages"),
            "color_pages" => $request->input("color_pages"),
            "weight" => $request->input("weight"),
            "print_size" => $request->input("print_size"),
            "back_print" => $request->input("back_print"),
            "clear_back" => $request->input("clear_back"),
            "back_color" => $request->input("back_color"),
            "binding_type" => $request->input("binding_type"),
            "comment" => $request->input("comment"),
        ];

        $file = $request->file('image');
        if (is_null($file)) {
            return back()->with("error", "File is required");
        }
        $folderName = '/uploads/files/';
        $destinationPath = public_path($folderName);
        $safeName = time() . '-' . uniqid() . '.' . $file->getClientOriginalName();
        $file->move($destinationPath, $safeName);
        $files = json_encode([$folderName . $safeName]);

        $cart_item = new CartItem();
        $cart_item->cart_id = $cart->id;
        $cart_item->type = "memory";
        $cart_item->print_details = json_encode($item_details);
        $cart_item->no_of_copies = $request->input("desired_copies");
        $cart_item->date = $print_date;
        $cart_item->amount = $request->input("product_cart_totalht");
        $cart_item->files = $files;

        $cart_item->save();

        return back()->with("success", "Added to cart.");
    }
    public function save_booklet(Request $request)
    {
        $print_date = Carbon::createFromFormat("d/m", $request->input("livraison-date"));
        if (!$print_date) {
            return back()->with("error", "Please choose a date");
        }

        $cart = $this->get_cart_using_cookie($request);

        $item_details = [
            "file_name" => $request->input("file_name"),
            "file_format" => $request->input("file_format"),
            "no_of_pages" => $request->input("no_of_pages"),
            "print" => $request->input("print"),
            "orientation" => $request->input("orientation"),
            "paper" => $request->input("paper"),
            "cover_transparent" => $request->input("cover_transparent"),
            "weight" => $request->input("weight"),
            "comment" => $request->input("comment")
        ];

        $file = $request->file('image');
        if (is_null($file)) {
            return back()->with("error", "File is required");
        }
        $folderName = '/uploads/files/';
        $destinationPath = public_path($folderName);
        $safeName = time() . '-' . uniqid() . '.' . $file->getClientOriginalName();
        $file->move($destinationPath, $safeName);
        $files = json_encode([$folderName . $safeName]);

        $cart_item = new CartItem();
        $cart_item->cart_id = $cart->id;
        $cart_item->type = "booklet";
        $cart_item->print_details = json_encode($item_details);
        $cart_item->no_of_copies = $request->input("desired_copies");
        $cart_item->date = $print_date;
        $cart_item->amount = $request->input("product_cart_totalht");
        $cart_item->files = $files;

        $cart_item->save();

        return back()->with("success", "Added to cart.");
    }
    public function save_attach(Request $request)
    {

        if ($request->input("upload-files") == null || $request->input("upload-files") == "") {
            return back()->with("error", "Please choose at least one file to print");
        }
        $print_date = Carbon::createFromFormat("d/m", $request->input("livraison-date"));
        if (!$print_date) {
            return back()->with("error", "Please choose a date");
        }

        $cart = $this->get_cart_using_cookie($request);

        $item_details = [
            "format" => $request->input("format"),
            "paper_size" => $request->input("paper_size"),
            "smallest" => $request->input("smallest"),
            "largest" => $request->input("largest"),
            "color_pages" => $request->input("color_pages"),
            "paper" => $request->input("paper"),
        ];

        $cart_item = new CartItem();
        $cart_item->cart_id = $cart->id;
        $cart_item->type = "attach";
        $cart_item->print_details = json_encode($item_details);
        $cart_item->no_of_copies = $request->input("quantite");
        $cart_item->date = $print_date;
        $cart_item->amount = $request->input("product_cart_totalht");
        $cart_item->files = $request->input("upload-files");

        $cart_item->save();

        return back()->with("success", "Added to cart.");
    }
}
