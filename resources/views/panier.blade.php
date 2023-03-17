@extends('layouts/default')
@section('title')
    Domicile
    @parent
@stop
@section('header_styles')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
    <link href="{{ url('frontend_assets/table.css') }}" rel="stylesheet" type="text/css" />
@stop
@if (Auth::check() && sizeof($cart_items) > 0)
    @php
        $totalAmount = 0;
        $fullTotalAmount = 0;
    @endphp
@endif
@section('content')

    <main class="panier">

        <section class="content">
            <h1>Chariot</h1>

            <div style="display: flex; justify-content: center;">


                <table class="table-full table-striped table" style="max-width: 1200px">
                    <tbody>
                        <tr>
                            <th>#</th>
                            <th>Quantité</th>
                            <th>Taper</th>
                            <th>Total</th>
                            <th>Date</th>
                            <th></th>
                        </tr>
                        @forelse ($cart_items as $item)
                            @php
                                $totalAmount += $item->amount;
                            @endphp
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->no_of_copies }}</td>
                                <td>{{ $item->type }}</td>
                                <td>{{ number_format($item->amount, 2) }} €</td>
                                <td>{{ $item->date }}</td>
                                <td>
                                    <form action="/cart/delete/{{ $item->id }}" method="post" style="display: inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger">Effacer</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4">Aucun élément présent</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </section>


        <section class="content">
            <h1>Validation de commande</h1>
            @if (Auth::check() && sizeof($cart_items) > 0)
                @php
                    $tva = $totalAmount * 0.2;
                    $fullTotalAmount = $totalAmount + $tva;
                @endphp
                <div style="display: flex; align-items: center; flex-direction: column; gap: 1rem; margin-bottom: 2rem;">
                    <div style="display: flex;">
                        <h3>Sous-total: </h3> <span>{{ number_format($totalAmount, 2) }} €</span>
                    </div>
                    <div style="display: flex;">
                        <h3>TVA 20%: </h3> <span>{{ number_format($tva, 2) }} €</span>
                    </div>
                    <div style="display: flex;">
                        <h3>Total TTC: </h3> <span>{{ number_format($fullTotalAmount, 2) }} €</span>
                    </div>

                </div>

                <form action="/place-order" method="post">
                    @csrf
                    <div style="display: flex; justify-content: center; margin-bottom: 10px;">
                        @if (Auth::user()->customer_type == 'professional')
                            <p class="make-an-order">
                                <button class="btn" type="submit">Valider</button>
                            </p>
                        @else
                            <p class="make-an-order">
                                <script src="https://checkout.stripe.com/checkout.js" class="stripe-button" data-key="{{ env('STRIPE_KEY') }}" data-image="{{ url('/frontend_assets/images/header_logo.svg') }}" data-name="{{ env('APP_NAME') }}"
                                        data-description="Paiement de la commande" data-amount="{{ 100 * $fullTotalAmount }}" data-currency="eur" data-email="{{ Auth::user()->email }}" data-label="Valider"></script>
                            </p>
                        @endif

                    </div>
                </form>
            @endif
        </section>
    </main>


@stop

{{-- page level scripts --}}
@section('footer_scripts')

@stop
