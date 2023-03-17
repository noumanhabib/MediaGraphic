<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quotation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class QuotationController extends Controller
{
    public function devis()
    {
        return view('devis');
    }
    public function mydevis()
    {
        $quotations = Quotation::where('email', Auth::user()->email)->get();
        return view('devis.index', compact('quotations'));
    }
    public function traiter(Request $request)
    {
        $filter_date = $request->input("date");
        $first_name_filter = $request->input("first_name_filter");
        $last_name_filter = $request->input("last_name_filter");
        $quotations = Quotation::where('status', 0);
        if ($filter_date) {
            $quotations = $quotations->whereDate("created_at", $filter_date);
        }
        if ($first_name_filter) {
            $quotations = $quotations->where("first_name", $first_name_filter);
        }
        if ($last_name_filter) {
            $quotations = $quotations->where("last_name", $last_name_filter);
        }
        $quotations = $quotations->get();
        return view('admin.devis.index', compact('quotations', 'filter_date', 'first_name_filter', 'last_name_filter'));
    }
    public function encours(Request $request)
    {
        $filter_date = $request->input("date");
        $first_name_filter = $request->input("first_name_filter");
        $last_name_filter = $request->input("last_name_filter");
        $quotations = Quotation::where('status', 1);
        if ($filter_date) {
            $quotations = $quotations->whereDate("created_at", $filter_date);
        }
        if ($first_name_filter) {
            $quotations = $quotations->where("first_name", $first_name_filter);
        }
        if ($last_name_filter) {
            $quotations = $quotations->where("last_name", $last_name_filter);
        }
        $quotations = $quotations->get();
        return view('admin.devis.index', compact('quotations', 'filter_date', 'first_name_filter', 'last_name_filter'));
    }
    public function admindevis(Request $request)
    {
        $filter_date = $request->input("date");
        $first_name_filter = $request->input("first_name_filter");
        $last_name_filter = $request->input("last_name_filter");
        $quotations = Quotation::where('status', '<', 3);
        if ($filter_date) {
            $quotations = $quotations->whereDate("created_at", $filter_date);
        }
        if ($first_name_filter) {
            $quotations = $quotations->where("first_name", $first_name_filter);
        }
        if ($last_name_filter) {
            $quotations = $quotations->where("last_name", $last_name_filter);
        }
        $quotations = $quotations->get();
        return view('admin.devis.index', compact('quotations', 'filter_date', 'first_name_filter', 'last_name_filter'));
    }

    public function editdevis($id)
    {
        $quotation = Quotation::findorfail($id);
        return view('admin.devis.edit', compact('quotation'));
    }
    public function save_plans_life(Request $request)
    {
        $request->validate([
            "image" => ["required", "file"]
        ]);
        $quotation = new Quotation();
        $quotation->first_name = Auth::user()->first_name;
        $quotation->last_name = Auth::user()->last_name;
        $quotation->email = Auth::user()->email;
        $quotation->phone = Auth::user()->phone;
        $quotation->postalcode = Auth::user()->shiping_postal;
        $quotation->city = Auth::user()->shiping_city;
        $quotation->quantity = $request->get('quantity');
        $quotation->Impression = $request->get('Impression');
        $quotation->shaping = $request->get('shaping');
        $quotation->finishing = $request->get('finishing');
        $quotation->catridge = $request->get('catridge');
        $quotation->description = $request->get('comment');
        if ($file = $request->file('image')) {
            $extension = $file->getClientOriginalExtension() ?: 'png';
            $folderName = '/uploads/files/';
            $destinationPath = public_path() . $folderName;
            $safeName = time() . '_' . rand(0000, 99999999) . '.' . $extension;
            $file->move($destinationPath, $safeName);
            $quotation->image = $safeName;
        }
        if ($quotation->save() == true) {
            Mail::send('emails.quotation', ['quotation' => $quotation], function ($mailable) use ($quotation) {
                $mailable->to(config('app.admin_mail'));
                $mailable->subject('New Quotation');
            });

            Mail::send('emails.quotation-customer', [], function ($mailable) {
                $mailable->to(Auth::user()->email);
                $mailable->subject("Devis envoyé avec succès");
            });

            return Redirect::back()->with('success', 'Your plan file quotation forwerded to the admin.');
        } else {
            return Redirect::back()->with('error', 'Something went wrong.');
        }
    }
    public function updatedevis(Request $request, $id)
    {
        $quotation = Quotation::findorfail($id);
        $quotation->amount_include_tax = $request->get('ttc');
        $quotation->amount_exclude_tax = $request->get('ht');
        $quotation->status = 1;
        $quotation->save();
        Mail::send('emails.quotation-offer', ['quotation' => $quotation], function ($m) use ($quotation) {
            $m->to($quotation->email);
            $m->subject("Devis en anomalie");
        });
        return Redirect::to('admin/devis')->with('success', 'Devis has been updated.');
    }


    public function save(Request $request)
    {
        $request->validate([
            'email' => 'required|email'
        ]);
        DB::beginTransaction();
        $quotation = new Quotation();
        $quotation->first_name = $request->get('first_name');
        $quotation->last_name = $request->get('last_name');
        $quotation->email = $request->get('email');
        $quotation->phone = $request->get('phone');
        $quotation->postalcode = $request->get('postal');
        $quotation->city = $request->get('city');
        $quotation->description = $request->get('message');
        if ($file = $request->file('image')) {
            $extension = $file->getClientOriginalExtension() ?: 'png';
            $folderName = '/uploads/files/';
            $destinationPath = public_path() . $folderName;
            $safeName = time() . '_' . rand(0000, 99999999) . '.' . $extension;
            $file->move($destinationPath, $safeName);
            $quotation->image = $safeName;
        }
        if ($quotation->save() == true) {
            Mail::send('emails.quotation', ['quotation' => $quotation], function ($mailable) {
                $mailable->to(config('app.admin_mail'));
                $mailable->subject('New Quotation');
            });
            Mail::send('emails.quotation-customer', [], function ($mailable) use ($quotation) {
                $mailable->to($quotation->email);
                $mailable->subject("Devis envoyé avec succès");
            });
            DB::commit();
            return back()->with('success', 'Votre demande a bien été envoyée, nous vous répondrons dans les meilleurs délais.');
        }
        return back()->with('error', 'Something went wrong.');
    }
}
