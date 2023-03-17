@extends('layouts/default')
@section('title')
    My Devis
    @parent
@stop
@section('header_styles')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
    <link href="{{ url('frontend_assets/table.css') }}" rel="stylesheet" type="text/css" />
@stop

@section('content')

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div id="vos-commandes" class="content-target">
                    <h2>Mes Devis</h2>
                    <table class="table-bordered table-flip-scroll cf table-full table">
                        <tbody>
                            <tr>
                                <th>N°</th>
                                <th>Date</th>
                                <th>Par</th>
                                <th>Objet de devis</th>
                                <th class="price">Montant HT</th>
                                <th class="price">Montant TTC</th>
                                <th>Statut</th>
                                <th>Etat</th>
                                <th class="action">Action</th>
                            </tr>
                            @if (count($quotations))
                                @foreach ($quotations as $quotation)
                                    <tr class="item">
                                        <td>{{ $quotation->id }}</td>
                                        <td>{{ date('d/m/Y', strtotime($quotation->created_at)) }}</td>
                                        <td>{{ $quotation->first_name . ' ' . $quotation->last_name }}</td>
                                        <td>{{ $quotation->description }}</td>
                                        <td class="price">
                                            @if ($quotation->amount_exclude_tax)
                                                {{ $quotation->amount_exclude_tax . ' €' }}
                                            @endif
                                        </td>
                                        <td class="price">
                                            @if ($quotation->amount_include_tax)
                                                {{ $quotation->amount_include_tax . ' €' }}
                                            @endif
                                        </td>
                                        <td>
                                            @if ($quotation->status == 0)
                                                A traiter
                                            @endif
                                        </td>
                                        <td><span class="label label-warning">A traiter</span></td>
                                        <td class="action">
                                            @if ($quotation->status == 1)
                                                @if (Auth::user()->customer_type == 'professional')
                                                    <form action="{{ url('devis/accept/' . $quotation->id) }}" method="post">
                                                        @csrf

                                                        <button class="btn btn-primary">Order Payment</button>
                                                    </form>
                                                @else
                                                    <form action="{{ url('devis/accept/' . $quotation->id) }}" method="POST">
                                                        @csrf
                                                        <script src="https://checkout.stripe.com/checkout.js" class="stripe-button" data-key="{{ env('STRIPE_KEY') }}" data-image="{{ url('/frontend_assets/images/header_logo.svg') }}" data-name="{{ env('APP_NAME') }}"
                                                                data-description="Order Payment" data-email="{{ Auth::user()->email }}" data-amount="{{ $quotation->amount_include_tax * 100 }}"></script>
                                                    </form>
                                                @endif
                                            @else
                                                <span class="text-warning"></span>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <script src="https://js.stripe.com/v3/"></script>
@stop
