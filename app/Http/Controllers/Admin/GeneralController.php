<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Quotation;
use App\Models\User;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\Chat;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\View;

class GeneralController extends Controller
{
    public function adminFactures()
    {


        $quotations = DB::table("orders")
            ->join("users", "orders.user_id", "=", "users.id")
            ->select('users.*', 'orders.*')
            ->get();
        // dd($show);
        // $quotations = Quotation::where('status','<',3)->get();
        return view('admin.factures.index', compact('quotations'));
    }

    public function adminStatistiques()
    {
        $quotations = Quotation::where('status', '<', 3)->get();
        return view('admin.statistiques.index', compact('quotations'));
    }

    public function adminAvoris()
    {
        $quotations = Quotation::where('status', '<', 3)->get();
        return view('admin.avoris.index', compact('quotations'));
    }
    public function generate_pdf($id)
    {

        // return 'yes';
        $get_payment = User::find($id);
        $Pdf = Pdf::loadView('admin/compatible.myPDF', compact('get_payment'));
        return $Pdf->download('payment.pdf');
    }

    public function show_invoice($id)
    {

        $invoice = DB::table("orders")
            ->join("users", "orders.user_id", "=", "users.id")
            ->select('users.*', 'orders.*')
            ->get();
        return  view('admin.factures.invoice_data', compact('invoice'));
    }
    public function email_invoice(Order $id)
    {

        $send_email = Mail::to($id->user->email)->send(new \App\Mail\InvoiceMail($id));


        return redirect('admin/comptabililite/factures')->with('message', 'Invoice Send SucessfullY!');


        // dd($send_email);

    }
    public function send_invoice($id)
    {

        $invoice = DB::table("orders")
            ->join("users", "orders.user_id", "=", "users.id")
            ->select('users.*', 'orders.*')
            ->get();
        return  view('admin.factures.invoice_data', compact('invoice'));
    }

    public function chat_load($id)
    {
        $userTo = User::find($id);
        $messages = Chat::where('from_user_id', $id)->orwhere('to_user_id', $id)->get();
        if ($userTo) {
            $tomessageName = $userTo->first_name . ' ' . $userTo->last_name;
        } else {
            $tomessageName = "Unknown User";
        }
        // dd($message);
        return response()->json([
            'status' => 'ok',
            'tomessageName' => $tomessageName,
            'html' => View::make('admin/layouts/load_chat', compact('messages'))->render(),
        ]);
    }
    public function addChat(Request $request)
    {
        if (!$request->has('chat_id') || empty($request->get('chat_id'))) {
            return response()->json([
                'status' => 'error',
                'msg' => 'Please select any user for chat'

            ]);
        }
        if (!$request->has('msg') || empty($request->get('msg'))) {
            return response()->json([
                'status' => 'error',
                'msg' => 'Please select any msg'

            ]);
        }
        $chat = Chat::create([
            'from_user_id' => Auth::user()->id,
            'to_user_id' => $request->get('chat_id'),
            'to_message' => $request->get('msg'),
        ]);
        $messages = Chat::where('from_user_id', $request->get('chat_id'))->orwhere('to_user_id', $request->get('chat_id'))->get();
        // dd($message);
        return response()->json([

            'status' => 'ok',
            'html' => View::make('admin/layouts/load_chat', compact('messages'))->render(),

        ]);
    }
    public function addChatUser(Request $request)
    {
        if (!$request->has('msg') || empty($request->get('msg'))) {
            return response()->json([
                'status' => 'error',
                'msg' => 'Please select any msg'

            ]);
        }
        if (Auth::check()) {
            $user_id = Auth::user()->id;
            $chat = Chat::create([
                'from_user_id' => $user_id,
                'to_user_id' => 1,
                'from_message' => $request->get('msg'),
            ]);
            $messages = Chat::where('from_user_id', $user_id)->orwhere('to_user_id', $user_id)->get();
        } else {
            $chat_key = $request->chat_key;
            if ($chat_key) {
                $chat = Chat::create([
                    'from_user_id' => $chat_key,
                    'to_user_id' => 1,
                    'from_message' => $request->get('msg'),
                ]);
                $messages = Chat::where('from_user_id', $chat_key)->orwhere('to_user_id', $chat_key)->get();
            } else {
                return response()->json([], 404);
            }
        }

        return response()->json([
            'status' => 'ok',
            'html' => View::make('admin/layouts/load_chat_user', compact('messages'))->render(),
        ]);
    }

    public function chatloaduser(Request $request)
    {
        if (Auth::check()) {
            $user_id = Auth::user()->id;
            $messages = Chat::where('from_user_id', $user_id)->orwhere('to_user_id', $user_id)->get();
        } else {
            $chat_key = $request->chat_key;
            if ($chat_key) {
                $messages = Chat::where('from_user_id', $chat_key)->orwhere('to_user_id', $chat_key)->get();
            } else {
                return response()->json([], 404);
            }
        }
        return response()->json([
            'status' => 'ok',
            'html' => View::make('admin/layouts/load_chat_user', compact('messages'))->render(),
        ]);
    }
}