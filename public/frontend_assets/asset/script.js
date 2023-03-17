jQuery(document).ready(function ($) {
    $(".commander aside").draggable();
    var title = $(".commander h1").text();
    $(".commander aside h2 span").text(title);
    $(".autre-format li").click(function () {
        $(".autre-format li").removeClass("selected");
        $(this).addClass("selected");
    });
    $(".defini").click(function () {
        // $('.size-entries').addClass('hide');
        // var l = $(this).find('.largeur').text();
        // var h = $(this).find('.hauteur').text();
        // $('.size-entries input[name="largeur"]').val(l);
        // $('.size-entries input[name="hauteur"]').val(h);
        $(".size-entries").addClass("hide");
        var paper_size_text = $(this).find(".paper_size_text").text();
        var l = $(this).find(".largeur").text();
        var h = $(this).find(".hauteur").text();
        $("#paper_size").val(paper_size_text);
        $("#smallest").val(l);
        $("#largest").val(h);
    });
    $(".perso").click(function () {
        $(".size-entries").removeClass("hide");
        // $('.size-entries input').val('00,00');
        var paper_size_text = $(this).find(".paper_size_text").text();
        $("#paper_size").val(paper_size_text);
        $("#smallest").val("00,00");
        $("#largest").val("00,00");
    });
    $("input[name=format]").click(function () {
        var vl = $(this).val();
        if (vl == "Autre format") {
            $(".autre-format").removeClass("hide");
        } else {
            $(".autre-format, .size-entries").addClass("hide");
        }
    });
    $("input[name=print]").click(function () {
        var vl = $(this).val();
        if (vl == "Autre format") {
            $(".autre-format").removeClass("hide");
        } else {
            $(".autre-format, .size-entries").addClass("hide");
        }
    });
    $(".ques-wrapper").click(function () {
        $(".ques-wrapper").removeClass("opned");
        $(this).addClass("opned");
    });
    $("input[name=cartouche]").click(function () {
        var c = $(this).val();
        if (c == "oui") {
            $(".cartouche .note").removeClass("hide");
        } else {
            $(".cartouche .note").addClass("hide");
        }
    });
    $("input[name=paiement]").click(function () {
        var c = $(this).val();
        if (c == "card") {
            $(".paiement > div.card").removeClass("hide");
            $(".add-to-cart button i").attr("class", "far fa-credit-card");
        } else {
            $(".paiement > div.card").addClass("hide");
            $(".add-to-cart button i").attr("class", "fab fa-paypal");
        }
    });

    $(".infos select[name=structure]").change(function () {
        var h = $(".infos select[name=structure]").val();
        if (h == "Autre") {
            $("input[name=autre-structure]").removeClass("hide");
        } else {
            $("input[name=autre-structure]").addClass("hide");
        }
    });
    $(".infos input[name=adresse-identique]").click(function () {
        var al = $(".infos input[name=adresse-livraison]").val();
        var cl = $(".infos input[name=code-postal-livraison]").val();
        var vl = $(".infos input[name=ville-livraison]").val();
        $(".infos input[name=adresse-faturation]").val(al);
        $(".infos input[name=code-postal-facturation]").val(cl);
        $(".infos input[name=ville-facturation]").val(vl);
    });

    $(document).on("click", ".price", function () {
        $(".table .row div").removeClass("selected");
        $(".table .row .qte").addClass("selected");
        var j = $(this);
        if (j.hasClass("j2")) {
            $(j).addClass("selected");
            $(".date .j2").addClass("selected");
        } else if (j.hasClass("j3")) {
            $(j).addClass("selected");
            $(".date .j3").addClass("selected");
        } else if (j.hasClass("j4")) {
            $(j).addClass("selected");
            $(".date .j4").addClass("selected");
        } else if (j.hasClass("j5")) {
            $(j).addClass("selected");
            $(".date .j5").addClass("selected");
        }
        var jj = $(j).text();
        $(".item td.prix").text(jj);
        var ht = parseFloat(jj);
        var tva = Math.round((ht * 20) / 100);
        var ttc = ht + tva;
        $("#product_cart_totalht").val(ht);
        $("#product_cart_totlettc").val(ttc);
        $("#product_cart_tva").val(tva);
        $(".tax-tva .prix").text(tva.toFixed(2) + " €");
        $(".total .prix").text(ttc.toFixed(2) + " €");
        var d = $(".row.date .selected").text();
        $(".livraison-date .date").text(d);
        $("#product_cart_date").val(dt);
        var dt = $(".row .selected .date").text();
        $("#livraison_date").val(dt);
    });

    $("#no_of_copies").on("input", function () {
        let val = $("#no_of_copies").val();
        let pricesDivEle = document.getElementById("prices-div");
        if (val && parseInt(val) > 0) {
            if (typeof prices === "object" && prices.length > 0) {
                let price = prices.find((p) => p.min_quantity <= val && p.max_quantity >= val);
                if (!price) {
                    price = prices
                        .sort((p1, p2) => {
                            if (p1.max_quantity < p2.max_quantity) {
                                return 1;
                            } else if (p1.max_quantity > p2.max_quantity) {
                                return -1;
                            }
                            return 0;
                        })
                        .at(0);
                }
                if (price && pricesDivEle) {
                    let first_day_price = (val * price.first_day_price).toFixed(2);
                    let second_day_price = (first_day_price * 0.95).toFixed(2);
                    let third_day_price = (first_day_price * 0.87).toFixed(2);
                    let fourth_day_price = (first_day_price * 0.83).toFixed(2);

                    pricesDivEle.innerHTML = `

                            <div class="qte selected">${val}</div>

                            <div class="price j2">
                             ${first_day_price} €
                            </div>

                            <div class="price j3"> ${second_day_price} €</div>

                            <div class="price j4"> ${third_day_price} €</div>

                            <div class="price j5"> ${fourth_day_price} €</div>

                    `;
                }
            }
        }
    });

    $(window).scroll(function () {
        var scroll = $(window).scrollTop();

        if (scroll >= 100) {
            jQuery(".commander aside, .panier aside").addClass("sticky");
        } else {
            jQuery(".commander aside, .panier aside").removeClass("sticky");
        }
    });
    $(".menu-toggle a").click(function () {
        $("header .logo").toggleClass("logo-mobile");
        $("header nav").toggleClass("show");
        $(".menu-toggle").toggleClass("close");
    });
    $("#modes-paiement a.add-new").click(function () {
        $("#modes-paiement form").removeClass("hide");
    });

    $(".integer-positive-validate").blur(function () {
        let val = $(this).val();
        if (parseInt(val) < 1) {
            alert("Enter a positive number");
            $(this).val(0);
        }
        if (val.includes(".")) {
            alert("Enter an integer");
            $(this).val(0);
        }
    });
    $(".max-limit-input-validation").blur(function () {
        let val = $(this).val();
        let max = $(this).attr("max");
        if (parseInt(val) < 0) {
            alert("Enter a positive number");
            $(this).val(0);
        }
        if (parseFloat(val) > parseFloat(max)) {
            alert("Max limit is: " + max);
            $(this).val(max);
        }
    });

    $("#couverture-papier").change(function () {
        let val = $(this).val();
        console.log(val);

        $("#couverture").find("option:not(:first-child)").addClass("hide");
        $("#couverture")
            .find("option")
            .each(function () {
                if ($(this).hasClass(val)) {
                    $(this).removeClass("hide");
                }
            });
    });

    let plasticBindColors = ["Blanche", "Noire", "Rouge", "Bleue", "Vert emeraude"];
    let metalBindColors = ["Noire", "Blanche", "Bleue", "Rouge", "Vert", "Argent"];
    let bandeBindColors = ["Noire", "Bleue", "Blanche", "Rouge", "Vert"];

    let otherBindInnerHtml = `
		<option value="Argent">Argent</option>
		<option value="Blanche">Blanche</option>
		<option value="Bleue">Bleue</option>
		<option value="Noire">Noire</option>
		<option value="Rouge">Rouge</option>
		<option value="Vert">Vert</option>
		<option value="Vert emeraude">Vert emeraude</option>
	`;

    $("#reliure").change(function () {
        let val = $(this).val();

        let firstSelectEle = `<option value="not selected">-- Select --</option>`;

        if (val == "bande") {
            $(".my-note").removeClass("hide");
        } else {
            $(".my-note").addClass("hide");
        }
        let innerHtml;
        if (val == "plastique") {
            innerHtml = firstSelectEle + getOptionsHtmlFromArray(plasticBindColors);
        } else if (val == "metalique") {
            innerHtml = firstSelectEle + getOptionsHtmlFromArray(metalBindColors);
        } else if (val == "bande") {
            innerHtml = firstSelectEle + getOptionsHtmlFromArray(bandeBindColors);
        } else if (val == "sans reliure") {
            innerHtml = firstSelectEle;
        } else {
            innerHtml = firstSelectEle + otherBindInnerHtml;
        }
        $("#reliure_couleur_choix").html(innerHtml);
    });
});

function getOptionsHtmlFromArray(arr) {
    let html = "";
    arr.forEach((ele) => {
        html += `
			<option value="${ele}"> ${ele} </option>
		`;
    });
    return html;
}
