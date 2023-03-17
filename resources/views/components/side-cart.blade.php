@php
    $totalAmount = 0;
    $fullTotalAmount = 0;
@endphp
@if (isset($cart_items) && sizeof($cart_items) > 0)

    <form action="/place-order" method="post">
        @csrf
        <aside>

            <h2>Récapitulatif de votre panier<span></span></h2>

            <table>
                <tr>
                    <th>#</th>
                    <th>Quantité</th>
                    <th>Total</th>
                </tr>
                @forelse ($cart_items as $cart_item)
                    @php
                        $totalAmount += $cart_item->amount;
                    @endphp
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $cart_item->no_of_copies }}</td>
                        <td>{{ number_format($cart_item->amount, 2) }} €</td>
                    </tr>

                @empty
                    <tr>
                        <td colspan="3">Le panier est vide</td>
                    </tr>
                @endforelse

                @if (sizeof($cart_items) > 0)
                    @php
                        $tva = $totalAmount * 0.2;
                        $fullTotalAmount = $totalAmount + $tva;
                    @endphp
                    <tr>
                        <td>Sous-total</td>
                        <td></td>
                        <td>{{ number_format($totalAmount, 2) }} €</td>
                    </tr>
                    <tr>
                        <td>TVA 20%</td>
                        <td></td>
                        <td>{{ number_format($tva, 2) }} €</td>
                    </tr>
                    <tr>
                        <td>Total TTC</td>
                        <td></td>
                        <td>{{ number_format($fullTotalAmount, 2) }} €</td>
                    </tr>
                @endif

            </table>
            @if (sizeof($cart_items) > 0)
                @if (Auth::check())
                    @php
                        $fullTotalAmount = $fullTotalAmount * 100;
                    @endphp
                    @if (Auth::user()->customer_type == 'professional')
                        <div style="display: flex; justify-content: center; margin-bottom: 10px;">

                            <p class="make-an-order">
                                <button class="btn" type="submit">Valider</button>
                            </p>

                        </div>
                    @else
                        <div style="display: flex; justify-content: center; margin-bottom: 10px;">

                            <p class="make-an-order">
                                <script src="https://checkout.stripe.com/checkout.js" class="stripe-button" data-key="{{ env('STRIPE_KEY') }}" data-image="{{ url('/frontend_assets/images/header_logo.svg') }}" data-name="{{ env('APP_NAME') }}"
                                        data-description="Order Payment" data-amount="{{ $fullTotalAmount }}" data-currency="eur" data-email="{{ Auth::user()->email }}" data-label="Valider"></script>
                            </p>

                        </div>
                    @endif
                @else
                    <div style="display: flex; justify-content: center; margin-bottom: 10px;">

                        <p class="make-an-order">
                            <button class="btn" type="submit">Valider</button>
                        </p>

                    </div>
                @endif
            @endif

            <p class="devis-sur-mesure small">Vous ne trouvez pas votre besoin ? <a href="/devis">Devis sur mesure</a></p>

        </aside>
    </form>
@else
    <aside>

        <h2>Récapitulatif de votre panier<span></span></h2>

        <table>
            <tr>
                <th>#</th>
                <th>Quantité</th>
                <th>Total</th>
            </tr>

            <tr>
                <td colspan="3">Le panier est vide</td>
            </tr>

        </table>

        <p class="devis-sur-mesure small">Vous ne trouvez pas votre besoin ? <a href="/devis">Devis sur mesure</a></p>

    </aside>

@endif
