@extends('layouts/default')

@section('title')

    Home

    @parent

@stop

@section('header_styles')

    <link rel="stylesheet" type="text/css" href="{{ asset('frontend_assets/dragdrop/style.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
    <style>
        .dz-success-mark {
            display: none;
        }

        .dz-error-mark {
            display: none;
        }

        .dropzone-field.dz-clickable.dz-started {
            display: flex;
            gap: 2rem;
            justify-content: center;
        }

        .upload-area {
            position: relative;
            overflow: visible;
            padding-bottom: 0;
        }

        .upload-area .dropzone-field {
            position: absolute;
            inset: 0;
            padding-top: 270px;
        }

        #dropzone-previews {
            display: flex;
            flex-wrap: wrap;
            gap: 2rem;
            justify-content: center;
        }

        .uploader {
            padding-bottom: 10px;
        }
    </style>

@stop



@section('content')

    <!-- BEGIN PAGE CONTAINER-->



    <!-- <section class="hero">

                                                              </section> -->

    <main class="commander">

        <section class="content">

            <h1>Commande Affiche</h1>



            <div id="commander-affiche">

                <form id="commander-affiche" method="post" action="{{ url('attach') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-step step-1 opned">

                        <div class="step"><span>1</span> Téléchargez vos fichiers</div>

                        <div class="uploader container">

                            <!-- Drag and Drop container-->

                            <div class="upload-area">

                                <!-- <i class="fas fa-upload"></i> -->

                                <img width="200px" src="{{ asset('frontend_assets/images/upload_icon.svg') }}">

                                <h2>Glissez déposez vos fichier ici</h2>

                                <p><i>ou</i></p>

                                <p class="btn">téléchargez vos fichiers</p>

                                <p class="small">Format PDF pour une qualité d’impression optimum</p>

                                <div id="dropzone-file-field" class="dropzone-field"> </div>

                            </div>

                            <div id="dropzone-previews" class="dropzone-previews">

                            </div>

                        </div>

                    </div>

                    <div class="form-step step-2">

                        <div class="step"><span>2</span> Configurez le produit</div>

                        <h3>Configurez votre impression:</h3>

                        <!-- <button class="btn format-identique">Format identique</button> <button class="btn autre-format">Autre format</button> -->

                        <div class="format">

                            <p class="half">
                                <input type="radio" name="format" value="Format identique">
                                <label for="format">Format identique</label>
                            </p>

                            <p class="half">
                                <input type="radio" name="format" value="Autre format">
                                <label for="format">Autre format</label>
                            </p>

                            <ul class="autre-format hide">

                                <li class="perso" onclick="setPrintSize('', '');">
                                    <figure></figure>

                                    <span class="type"><i class="fas fa-compress"></i></span>

                                    <span class="size">Format personnalisé</span>
                                    <span class="paper_size_text">Custom</span>

                                </li>

                                <li class="defini" onclick="setPrintSize(84.1, 118.9);">

                                    <figure></figure>

                                    <span class="type">Format A0</span>
                                    <span class="paper_size_text">A0</span>

                                    <span class="size">
                                        <span class="largeur">84,1</span>cm x
                                        <span class="hauteur">118,9</span>cm
                                    </span>

                                </li>

                                <li class="defini" onclick="setPrintSize(59.4, 84.1);">

                                    <figure></figure>

                                    <span class="type">Format A1</span>
                                    <span class="paper_size_text">A1</span>

                                    <span class="size">
                                        <span class="largeur">59,4</span>cm x
                                        <span class="hauteur">84,1</span>cm
                                    </span>

                                </li>

                                <li class="defini" onclick="setPrintSize(42, 59.4);">

                                    <figure></figure>

                                    <span class="type">Format A2</span>
                                    <span class="paper_size_text">A2</span>

                                    <span class="size">
                                        <span class="largeur">42</span>cm x
                                        <span class="hauteur">59,4</span>cm
                                    </span>

                                </li>

                            </ul>

                        </div>

                        <div class="size-entries hide">

                            <input type="hidden" name="paper_size" id="paper_size" value="custom">
                            <p class="half">
                                <label>Largeur:</label>
                                <input type="number" class="max-limit-input-validation" name="smallest" id="smallest" placeholder="Largeur (cm): Max 90cm" min="0" max="90">
                            </p>

                            <p class="half">
                                <label>Hauteur:</label>
                                <input type="number" class="max-limit-input-validation" name="largest" id="largest" placeholder="Haureur (cm): Max 400cm" min="0" max="400">
                            </p>

                        </div>

                        <div class="choix-couleur">

                            <p class="half">
                                <input type="radio" name="color_pages" value="Noir et blanc">
                                <label>Noir et blanc</label>
                            </p>

                            <p class="half">
                                <input type="radio" name="color_pages" value="Couleur">
                                <label>Couleur</label>
                            </p>

                        </div>

                        <div class="papier">

                            <h3>Choisir votre papier:</h3>

                            <p class="half"><input type="radio" name="paper" value="120gr"> <label>papier 120 gr

                                    couché mat</label></p>

                            <p class="half"><input type="radio" name="paper" value="180gr"> <label>papier 180 gr

                                    couché mat</label></p>

                            <p class="half"><input type="radio" name="paper" value="195gr-satine"> <label>papier

                                    195 gr satiné</label></p>

                            <p class="half"><input type="radio" name="paper" value="120gr-photo"> <label>papier

                                    195 gr photo</label></p>

                        </div>

                        <div class="faconnage">

                            <h3>Façonnage:</h3>

                            <p style="width:100%">Les affiches sont livrées roulées sous tube ultra résistant</p>

                        </div>

                        <div class="nombre">

                            <p><label>Nombre d'exemplaires souhaité</label>

                                <input type="number" class="integer-positive-validate" id="no_of_copies" min="1" name="quantite" placeholder="Nombre d'exemplaires souhaité" required>

                            </p>

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

    </main>



    <!-- END CHAT -->



    <!-- END CONTAINER -->

@stop



{{-- page level scripts --}}

@section('footer_scripts')

    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
    <script type="text/javascript" src="{{ asset('frontend_assets/asset/script.js') }}"></script>

    <script>
        const prices = @json($prices);
        let files = [];
        const uploadFilesEle = document.getElementById("upload-files");
        let myDropzone = new Dropzone("#dropzone-file-field", {
            url: "/dragdrop/upload_files",
            paramName: "file",
            addRemoveLinks: true,
            maxFiles: 100,
            previewsContainer: "#dropzone-previews",
            headers: {
                "X-CSRF-TOKEN": document.querySelector("meta[name='csrf-token']").content
            },
            success: file => {
                try {
                    let res = JSON.parse(file.xhr.response);
                    files.push(res.src);
                    uploadFilesEle.value = JSON.stringify(files);

                } catch (err) {
                    file._removeLink.click()
                }

            }
        });

        function setPrintSize(width, height) {
            document.getElementById("smallest").value = width;
            document.getElementById("largest").value = height;
        }
    </script>

@stop
