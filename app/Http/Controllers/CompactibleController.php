<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class CompactibleController extends Controller
{
    public function clients()
    {

        $results = User::all();
        return view('admin.compatible.clients', compact('results'));
    }

    public function addClients()
    {
        return view('admin.compatible.add-clients');
    }
    public function saveClients(Request $request)
    {
        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'customer_type' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ]);

        $u = User::create([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'title' => $request->input('title') ? $request->input('title') : null,
            'customer_type' => $request->input('customer_type'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'password' => Hash::make($request->input('password')),
            'shiping_address' => $request->input('address') ? $request->input('address') : null,
            'shiping_postal' => $request->input('postal') ? $request->input('postal') : null,
            'shiping_city' => $request->input('city') ? $request->input('city') : null,
            'billing_address' => $request->input('billing_address') ? $request->input('billing_address') : null,
            'billing_postal' => $request->input('billing_postal') ? $request->input('billing_postal') : null,
            'billing_city' => $request->input('billing_city') ? $request->input('billing_city') : null,
            'service_id' => $request->input('service_id') ? $request->input('service_id') : null,
            'social_reason' => $request->input('social_reason') ? $request->input('social_reason') : null,
        ]);

        $u->email_verified_at = now();
        $u->save();

        return redirect('/admin/comptabililite/clients');
    }

    public function details($id)
    {

        $user = User::findOrFail($id);
        return view('admin.compatible.compte-client', compact('user'));
    }

    public function update(Request $request, $id)
    {

        // return  $request->all();
        $user = User::find($id);
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->phone = $request->input('phone');
        $user->billing_address = $request->input('billing_address');
        $user->shiping_address = $request->input('shipping_address');

        $user->update();
        return redirect()->back()->with('status', 'Student Updated Successfully');
    }

    public function compte_client_commandes_details($id)
    {


        $order_details = User::findOrFail($id);

        return view('admin.compatible.compte-client-commandes', compact('order_details'));
    }

    public function compte_client_devis($id)
    {


        $devis = User::findOrFail($id);

        return view('admin.compatible.compte-client-devis', compact('devis'));
    }
}