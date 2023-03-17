@extends('layouts/default')
@section('title')
    Home
    @parent
@stop
@section('header_styles')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
    <link href="{{ url('frontend_assets/table.css') }}" rel="stylesheet" type="text/css" />
@stop

@section('content')

    <main>
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div id="vos-commandes" class="content-target">
                        <h2>Mes Invoices</h2>
                        <table class="table-bordered table-flip-scroll cf table-full table">
                            <tbody>
                                <tr>
                                    <th>N°</th>
                                    <th>Order Id</th>
                                    <th>Generated On</th>
                                    <th>Status</th>
                                    <th>Payment Date</th>
                                    <th class="action">Action</th>
                                </tr>
                                @if (count($invoices))
                                    @foreach ($invoices as $invoice)
                                        <tr class="item">
                                            <td>{{ $invoice->id }}</td>
                                            <td>{{ $invoice->main_order_id }}</td>
                                            <td>{{ date('d/m/Y', strtotime($invoice->created_at)) }}</td>
                                            <td style="text-transform: capitalize;">
                                                {{ $invoice->status }}
                                            </td>
                                            <td>
                                                @if ($invoice->payment_date)
                                                    {{ date('d/m/Y', strtotime($invoice->payment_date)) }}
                                                @else
                                                    N/A
                                                @endif
                                            </td>
                                            <td class="action">
                                                @if ($invoice->status == 'pending')
                                                    <form action="{{ url('/user/invoices/pay/' . $invoice->id) }}" method="post" style="display: inline-block">
                                                        @csrf
                                                        <p class="make-an-order">
                                                            <script src="https://checkout.stripe.com/checkout.js" class="stripe-button" data-key="{{ env('STRIPE_KEY') }}" data-image="{{ url('/frontend_assets/images/header_logo.svg') }}" data-name="{{ env('APP_NAME') }}"
                                                                    data-description="Order Payment" data-amount="{{ 100 * $invoice->amount }}" data-currency="eur" data-email="{{ Auth::user()->email }}" data-label="Valider"></script>
                                                        </p>
                                                    </form>
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
    </main>

@stop
