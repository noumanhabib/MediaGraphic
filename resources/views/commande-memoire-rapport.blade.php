@extends('layouts/default')

@section('title')

    Home

    @parent

@stop

@section('header_styles')
    <style>
        .help-info-content {
            right: 0;
        }

        @media (max-width: 768px) {
            form {
                max-width: unset !important;
            }
        }
    </style>

@stop



@section('content')

    <!-- BEGIN PAGE CONTAINER-->

    <section class="content commander" style="flex-direction: column">

        <h1>Commande de mémoire et rapport</h1>

        <div id="commande-memoire-rapport">

            <form style="padding-left: 0;" id="commander-plan" method="post" action="{{ url('memory') }}" enctype="multipart/form-data">

                @csrf

                <div class="form-step step-1 opned">

                    <div class="step"><span>1</span> Configurez le produit</div>

                    <div>

                        <label for="nom-fichier">Titre de votre dossier</label>

                        <input required type="text" name="file_name" placeholder="Nom de dossier">

                    </div>

                    <div class="nombre">

                        <p class="half"><label>Nombre d'exemplaires</label>
                            <input type="hidden" name="product_quantity" id="product_quantity">
                            <input class="integer-positive-validate" type="number" min="1" id="no_of_copies" name="desired_copies" placeholder="Nombre d'exemplaires souhaité" required>

                        </p>

                    </div>



                    <h3>Format:</h3>

                    <!-- <button class="btn format-identique">Format identique</button> <button class="btn autre-format">Autre format</button> -->

                    <div class="format">

                        <ul class="autre-format">

                            <li class="perso">

                                <figure></figure>

                                <span class="type"><i class="fas fa-compress"></i></span>

                                <span class="size">Format personnalisé</span>
                                <span class="paper_size_text">Custom</span>

                            </li>

                            <li class="defini">

                                <figure></figure>

                                <span class="type">Format A3</span>
                                <span class="paper_size_text">A3</span>
                                <span class="size">
                                    <span class="hauteur">42</span>cm x
                                    <span class="largeur">29,7</span>cm
                                </span>

                            </li>

                            <li class="defini">

                                <figure></figure>

                                <span class="type">Format A4</span>
                                <span class="paper_size_text">A4</span>

                                <span class="size">
                                    <span class="hauteur">29,7</span>cm x
                                    <span class="largeur">21</span>cm
                                </span>

                            </li>

                            <li class="defini">

                                <figure></figure>

                                <span class="type">Format A5</span>
                                <span class="paper_size_text">A5</span>

                                <span class="size">
                                    <span class="hauteur">21</span>cm x
                                    <span class="largeur">14,8</span>cm
                                </span>

                            </li>

                        </ul>

                    </div>


                    <div class="size-entries cote hide">
                        <input type="hidden" name="paper_size" id="paper_size" value="custom">
                        <p class="half">
                            <label>Côté le plus petit (cm):</label>
                            <input class="cote-petit max-limit-input-validation" type="number" step="0.00" max="29.7" id="smallest" name="smallest" placeholder="Dimension maximale : 29,7 cm">
                        </p>

                        <p class="half">
                            <label>Côté le plus grand (cm):</label>
                            <input class="cote-grand max-limit-input-validation" type="number" step="0.00" max="42" id="largest" name="largest" placeholder="Dimension maximale : 42 cm">
                        </p>

                    </div>

                    <div class="orientation">

                        <p class="half">
                            <label>Orientation</label>

                            <select id="orientation" name="orientation">

                                <option value="not selected">-- Select --</option>

                                <option value="vertical">Vertical</option>

                                <option value="horizontal">Horizontal (format paysage)</option>

                            </select>

                        </p>

                    </div>

                    <div class="transparent">

                        <p class="half"><label>Transparent sur Couverture</label>

                            <select id="transparent" name="transparent">

                                <option value="not selected">-- Select --</option>

                                <option value="transparent">Transparent</option>

                                <option value="transparent nervuré">Transparent nervuré</option>

                                <option value="pas de transparent">Pas de transparent</option>

                            </select>

                        </p>

                    </div>

                    <div class="couverture">

                        <p class="half"><label>Couverture (Papier)</label>

                            <select id="couverture-papier" name="cover_paper">

                                <option value="not selected">-- Select --</option>

                                <!-- <option value="papier souple 100g">Papier souple 100g</option>

                                                                                            <option value="papier rigide 300 gr">Papier rigide 300 gr</option> -->

                                <option value="lf-160">Lisse fin 160 grs</option>

                                <option value="le-250">Lisse épais 250 grs</option>

                                <option value="gce-250">Grain cuire épais 250 gr</option>

                            </select>

                        </p>

                        <p class="half"><label>Couverture</label>

                            <select id="couverture" name="cover">

                                <option value="not selected">-- Select --</option>

                                <option class="hide lf-160 le-250 gce-250" value="">Blanc</option>

                                <option class="hide lf-160" value="">Bleu alizé</option>

                                <option class="hide lf-160" value="">Bleu intense</option>

                                <option class="hide lf-160" value="">Vert</option>

                                <option class="hide lf-160" value="">Rose</option>

                                <option class="hide lf-160 gce-250" value="">Ivoire</option>

                                <option class="hide lf-160" value="">Jaune intense</option>

                                <option class="hide lf-160" value="">Rouge intense</option>

                                <option class="hide lf-160" value="">Jaune canari</option>

                                <option class="hide lf-160" value="">Vert intense</option>

                                <option class="hide lf-160" value="">Orange vif</option>

                                <option class="hide lf-160" value="">Fuschia</option>

                                <option class="hide lf-160" value="">Pêche</option>

                                <option class="hide lf-160" value="">Caramel</option>

                                <option class="hide le-250 gce-250" value="">Noir</option>

                                <option class="hide le-250" value="">Bleu</option>

                                <option class="hide gce-250" value="">Bleu royal</option>

                                <option class="hide gce-250" value="">Bleu clair</option>

                                <option class="hide le-250 gce-250" value="">Rouge</option>

                                <option class="hide le-250 gce-250" value="">Jaune</option>

                                <option class="hide le-250 gce-250" value="">Gris</option>

                                <option class="hide gce-250" value="">Vert foncé</option>

                                <option class="hide gce-250" value="">Bordeau</option>

                            </select>

                        </p>

                    </div>

                    <div class="nombre">

                        <p class="half">

                            <label>Nombre de page N&B</label>

                            <input type="number" required min="1" name="black_and_white_pages" placeholder="Nombre d'exemplaires souhaité">

                            <span class="help-info">
                                <i class="fas fa-info-circle"></i>
                                <span class="help-info-content">Attention: 1 page correspond à un côté imprimé d'une feuille - 1 recto/verso imprimé = 2 pages</span>
                            </span>

                        </p>

                        <p class="half">

                            <label>Nombre de pages couleur</label>

                            <input type="number" required min="1" name="color_pages" placeholder="Nombre d'exemplaires souhaité">

                            <span class="help-info">
                                <i class="fas fa-info-circle"></i>
                                <span class="help-info-content">Attention: 1 page correspond à un côté imprimé d'une feuille - 1 recto/verso imprimé = 2 pages</span>
                            </span>

                        </p>

                    </div>

                    <div class="grammage">

                        <p class="half"><label>Grammage</label>

                            <select id="grammage" name="weight">

                                <option value="not selected">-- Select --</option>

                                <option value="80 gr">80 gr</option>

                                <option value="90 gr">90 gr</option>

                            </select>

                        </p>

                    </div>

                    <div class="format-impression">

                        <p class="half"><label>Format d'impression</label>

                            <select id="format-impression" name="print_size">

                                <option value="not selected">-- Select --</option>

                                <option value="recto">Recto</option>

                                <option value="recto-verso">Recto / Verso</option>

                            </select>

                        </p>

                    </div>

                    <div class="dos-impression">

                        <h3>Dos imprimé:</h3>

                        <p class="half">
                            <label>
                                <input type="radio" required name="back_print" value="yes">Oui
                            </label>
                        </p>

                        <p class="half">
                            <label>
                                <input type="radio" required name="back_print" value="no">Non
                            </label>
                        </p>

                    </div>

                    <div class="dos-transparent">

                        <p class="half"><label>Transparent sur Dos</label>

                            <select id="dos-transparent" name="clear_back">

                                <option value="not selected">-- Select --</option>

                                <option value="transparent">Transparent</option>

                                <option value="transparent nervuré">Transparent nervuré</option>

                                <option value="pas de transparent">Pas de transparent</option>

                            </select>

                        </p>

                    </div>

                    <div class="dos">

                        <p class="half"><label>Dos</label>

                            <select id="dos" name="back_color">

                                <option value="not selected">-- Select --</option>

                                <option class="lf-160 le-250 gce-250" value="">Blanc</option>

                                <option class="lf-160" value="">Bleu alizé</option>

                                <option class="lf-160" value="">Bleu intense</option>

                                <option class="lf-160" value="">Vert</option>

                                <option class="lf-160" value="">Rose</option>

                                <option class="lf-160 gce-250" value="">Ivoire</option>

                                <option class="lf-160" value="">Jaune intense</option>

                                <option class="lf-160" value="">Rouge intense</option>

                                <option class="lf-160" value="">Jaune canari</option>

                                <option class="lf-160" value="">Vert intense</option>

                                <option class="lf-160" value="">Orange vif</option>

                                <option class="lf-160" value="">Fuschia</option>

                                <option class="lf-160" value="">Pêche</option>

                                <option class="lf-160" value="">Caramel</option>

                                <option class="le-250 gce-250" value="">Noir</option>

                                <option class="le-250" value="">Bleu</option>

                                <option class="gce-250" value="">Bleu royal</option>

                                <option class="gce-250" value="">Bleu clair</option>

                                <option class="le-250 gce-250" value="">Rouge</option>

                                <option class="le-250 gce-250" value="">Jaune</option>

                                <option class="le-250 gce-250" value="">Gris</option>

                                <option class="gce-250" value="">Vert foncé</option>

                                <option class="gce-250" value="">Bordeau</option>

                            </select>

                        </p>

                    </div>

                    <div class="reliure">

                        <p class="half"><label>Type de reliure</label>

                            <select id="reliure" name="binding_type[]">

                                <option value="not selected">-- Select --</option>

                                <option value="plastique">Reliure spirale plastique</option>

                                <option value="metalique">Reliure spirale metallique</option>

                                <option value="pince">pince</option>

                                <option value="bande">Reliure collée par bande toilée</option>

                                <option value="sans reliure">Sans reliure</option>

                            </select>

                            <span class="my-note small hide">100 pages maximum (soit 50 feuilles)</span>

                            <!-- <span class="help-info"><i class="fas fa-info-circle"></i><span class="help-info-content">Pour X pages recto ou X pages recto/Verso maximum</span></span> -->

                        </p>

                        <p class="half"><label></label>

                            <select id="reliure_cote" name="binding_type[]">

                                <option value="not selected">-- Select --</option>

                                <option value="sur le grand côté">Sur le grand côté</option>

                                <option value="sur le petit côté">Sur le petit côté</option>

                            </select>

                        </p>

                        <p class="half"><label>Couleur de la reliure</label>

                            <select id="reliure_couleur_choix">
                                <option value="not selected">-- Select --</option>

                            </select>

                        </p>

                    </div>

                    <div class="commentaire">

                        <p class="half">

                            <label>Commentaire (facultatif)</label>

                            <textarea name="comment" placeholder="Vote commentaire et observations ici..."></textarea>

                        </p>

                    </div>

                </div>

                <div class="form-step step-2">

                    <div class="step"><span>2</span> Ajoutez des fichiers</div>

                    <div class="fichier-joindre">

                        <label class="btn verse">

                            <input type="file" name="image" placeholder="Ajoutez des fichiers">

                            <i class="fas fa-upload"></i> Ajoutez des fichiers

                        </label>

                        <span class="help-info">

                            <i class="fas fa-info-circle"></i><span class="help-info-content">Vous pouvez déposer jusqu'à

                                20 fichiers. La taille limite par fichier est de 500Mo.<br>

                                Si votre fichier dépasse la taille maximum, veuillez nous contacter</span>

                        </span>

                    </div>

                    <!--  -->

                    @include('components.delivery')

                    <div class="fichier-joindre">

                        <button type="submit" class="btn verse">


                            <i class="fas fa-upload"></i> Ajouter au chariot

                        </button>


                    </div>

                    <!-- <input class="btn bg-btn" type="submit" name="submit" value="Commander"> -->

                </div>

            </form>

            @include('components.side-cart')

        </div>

    </section>

    <div class="call-to-action">

        <div class="description">

            <h2>Autre besoin?</h2>

            <p>Vous ne trouvez pas votre besoin et vous voulez une demande sur mesure?</p>

            <p><a href="/devis" class="btn bg-btn">Devis sur mesure <i class="fas fa-arrow-right"></i></a></p>

        </div>

        <div class="contact">

            <h2>Contact</h2>

            <p>Aide & Support</p>

            <p><a href="tel:0142069707"><i class="fa fa-phone-alt"></i> 01 42 06 97 07</a></p>

            <p><a href="/devis" class="btn bg-btn">Nous contacter<i class="fas fa-arrow-right"></i></a></p>

        </div>

    </div>



    <!-- END CONTAINER -->

@stop



{{-- page level scripts --}}

@section('footer_scripts')

    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
    <script type="text/javascript" src="{{ asset('frontend_assets/asset/script.js') }}"></script>

    <script>
        const prices = @json($prices);

        function setPrintSize(width, height) {
            document.getElementById("smallest").value = width;
            document.getElementById("largest").value = height;
        }
    </script>

@stop
