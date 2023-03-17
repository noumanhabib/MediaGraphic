<div class="form-step step-3">

    <div class="step">
        <span>3</span> Sélectionnez le prix et la date de livraison
    </div>

    <div class="date-time">

        <h3>Séléctionnez le prix et la date de livraison:</h3>

        <h5>Livraison en France métropolitaine</h5>

        <p><i>Plus vous anticipez votre commande, plus le tarif est bas !</i><br>

            Les dates de livraison sont indicatives et 99 % d'entre elles arrivent avant la date

            estimée.</p>

        <p class="prix-ttc"><span>Prix TTC:</span> <span class="prix"></span></p>

        <h4 class="prix-indicatif">Livraison indicative</h4>

        <div class="table">

            <div class="row date">

                <div></div>

                <div class="j2 selected">

                    <span class="day">
                        {{ \App\Models\Functions::dateToFrench(date('l', strtotime(' +' . $days_plus + 1 . ' day')), 'l') }}
                    </span>
                    <span class="date">{{ date('d/m', strtotime(' +' . $days_plus + 1 . ' day')) }}</span>

                </div>

                <div class="j3">

                    <span class="day">
                        {{ \App\Models\Functions::dateToFrench(date('l', strtotime(' +' . $days_plus + 2 . ' day')), 'l') }}
                    </span>
                    <span class="date">{{ date('d/m', strtotime(' +' . $days_plus + 2 . ' day')) }}</span>

                </div>

                <div class="j4">

                    <span class="day">
                        {{ \App\Models\Functions::dateToFrench(date('l', strtotime(' +' . $days_plus + 3 . ' day')), 'l') }}
                    </span>
                    <span class="date">{{ date('d/m', strtotime(' +' . $days_plus + 3 . ' day')) }}</span>

                </div>

                <div class="j5">

                    <span class="day">
                        {{ \App\Models\Functions::dateToFrench(date('l', strtotime(' +' . $days_plus + 4 . ' day')), 'l') }}
                    </span>
                    <span class="date">{{ date('d/m', strtotime(' +' . $days_plus + 4 . ' day')) }}</span>

                </div>

            </div>

            <div id="prices-div" class="row">

            </div>
        </div>


    </div>

    <!-- <input class="btn bg-btn" type="submit" name="submit" value="Commander"> -->

    <div class="d-none">

        <input type="hidden" name="product_quantity" id="product_quantity">
        <input type="hidden" name="product_cart_totalht" id="product_cart_totalht">
        <input type="hidden" name="product_cart_name" value="Nom de plan N°1" id="product_cart_name">
        <input type="hidden" name="product_cart_tva" id="product_cart_tva">
        <input type="hidden" name="product_cart_totlettc" id="product_cart_totlettc">
        <input type="hidden" name="product_cart_date" id="product_cart_date">
        <input type="hidden" name="livraison-date" id="livraison_date" value="">

    </div>


</div>
