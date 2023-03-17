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

    <!-- <section class="hero">
                                              </section> -->
    <section class="content commander" style="flex-direction: column">
        <h1>Commande de brochure et livret</h1>
        <div id="commande-brochure-livret">
            <form style="padding-left: 0;" id="commander-brochure-livret" method="post" action="{{ url('booklet') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-step step-1 opned">
                    <div class="step"><span>1</span> Configurez le produit</div>
                    <div class="pique">
                        <!-- <p class="half"><label>Piqure à cheval à préciser</label><input type="text" name="pique" placeholder="Préciser.."></p> -->
                        <p class="half">
                            Les brochures et livrets sont réalisés par pliage et reliés via une "piqure
                            à cheval".<br>Il s'agit d'une finition avec deux agrafes fixées sur la tranche du document.
                        </p>
                    </div>
                    <div>
                        <p class="half">
                            <label>Titre de votre dossier</label>
                            <input required type="text" name="file_name" placeholder="Nom de dossier">
                        </p>
                    </div>
                    <div class="nombre">
                        <p class="half">
                            <label>Nombre d'exemplaires</label>
                            <input type="number" required min="1" class="integer-positive-validate" id="no_of_copies" name="desired_copies" placeholder="Nombre d'exemplaires souhaité">
                        </p>
                    </div>
                    <div>
                        <!-- <h3>Format:</h3> -->
                        <p class="half">
                            <label>Format</label>
                            <select id="format" name="file_format">
                                <option value="not selected">-- Select --</option>
                                <option value="A4 fermé (=A3 ouvert)">A4 fermé (=A3 ouvert)</option>
                                <option value="A5 fermé (=A4 ouvert)">A5 fermé (=A4 ouvert)</option>
                            </select>
                        </p>
                    </div>
                    <div class="nombre pages">
                        <p class="half">
                            <label>Nombre de page</label>
                            <!-- <input type="number" min="1" name="n_page" placeholder=""> -->
                            <select id="n_page" name="no_of_pages">
                                <option value="not selected">-- Select --</option>
                                <option value="08">8 Pages y compris couverture</option>
                                <option value="12">12</option>
                                <option value="16">16</option>
                                <option value="20">20</option>
                                <option value="24">24</option>
                                <option value="28">28</option>
                                <option value="32">32</option>
                                <option value="36">36</option>
                                <option value="40">40</option>
                                <option value="44">44</option>
                                <option value="48">48</option>
                                <option value="52">52</option>
                                <option value="56">56</option>
                                <option value="60">60</option>
                                <option value="64">64</option>
                            </select>
                            <span class="help-info">
                                <i class="fas fa-info-circle"></i>
                                <span class="help-info-content">
                                    Attention: 1 page correspond à un côté imprimé d'une feuille - 1 recto/verso imprimé = 2
                                    pages
                                </span>
                            </span>
                        </p>
                    </div>
                    <div class="inpression">
                        <p class="half">
                            <label>Impression</label>
                            <select id="inpression" name="print">
                                <option value="not selected">-- Select --</option>
                                <option value="Couleur">Couleur</option>
                                <option value="Noir & Blanc">Noir & Blanc</option>
                            </select>
                        </p>
                    </div>
                    <div class="orientation">
                        <p class="half">
                            <label>Orientation</label>
                            <select id="orientation" name="orientation">
                                <option value="not selected">-- Select --</option>
                                <option value="vertical recto verso">Vertical recto verso</option>
                                <option value="horizontal recto verso">Horizontal recto verso(format paysage)</option>
                            </select>
                        </p>
                    </div>
                    <div>
                        <p class="half"><label>Papier</label>
                            <select id="papier" name="paper">
                                <option value="not selected">-- Select --</option>
                                <option value="80 gr">80 gr</option>
                                <option value="90 gr">90 gr</option>
                                <option value="120 gr satiné">120 gr satiné</option>
                                <option value="130 gr Couché brillant (Corep)">130 gr Couché brillant</option>
                            </select>
                        </p>
                    </div>
                    <div class="couverture">
                        <p class="half"><label>Couverture</label>
                            <select id="couverture_color" name="cover_transparent">
                                <option value="not selected">-- Select --</option>
                                <option value="Couleur">Couleur</option>
                                <option value="Noir&Blanc">Noir&Blanc</option>
                            </select>
                            <span class="help-info"><i class="fas fa-info-circle"></i>
                                <span class="help-info-content">1ère et 4ème de couverture</span>
                            </span>
                        </p>
                        <p class="half"><label></label>
                            <select id="couverture_paper" name="weight">
                                <option value="not selected">-- Select --</option>
                                <option value="80 gr">80 gr</option>
                                <option value="90 gr">90 gr</option>
                                <option value="120 gr satiné">120 gr satiné</option>
                                <option value="130 gr">130 gr</option>
                                <option value="160 gr">160 gr</option>
                            </select>
                            <span class="help-info"><i class="fas fa-info-circle"></i>
                                <span class="help-info-content">1ère et 4ème de couverture</span>
                            </span>
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
                            <i class="fas fa-info-circle"></i><span class="help-info-content">Vous pouvez déposer jusqu'à 20
                                fichiers. La taille limite par fichier est de 500Mo.<br>
                                Si votre fichier dépasse la taille maximum, veuillez nous contacter</span>
                        </span>
                    </div>
                </div>

                @include('components.delivery')

                <div class="fichier-joindre">
                    <input type="hidden" name="upload-files" id="upload-files" class="d-none">

                    <button type="submit" class="btn verse">


                        <i class="fas fa-upload"></i> Ajouter au chariot

                    </button>


                </div>

            </form>

            @include('components.side-cart')

        </div>
    </section>

    <!-- END CHAT -->

    <!-- END CONTAINER -->
@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
    <script type="text/javascript" src="{{ asset('frontend_assets/asset/script.js') }}"></script>

    <script>
        const prices = @json($prices);
    </script>
@stop
