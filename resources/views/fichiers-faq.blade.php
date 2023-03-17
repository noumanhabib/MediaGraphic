@extends('layouts/default')
@section('title')
    Home
    @parent
@stop
@section('header_styles')

@stop

@section('content')

    <div id="aides" class="content-target">
        <h2>FAQ & Aide</h2>
        <div class="ques-wrapper opned">
            <div class="ques"><span class="fas fa-question-circle"></span> Qui sommes-nous ?</div>
            <div class="rep">

                <p>MediaGraphic, votre Imprimerie en ligne pas cher, est spécialiste depuis plusieurs années dans l’impression à la demande.</p>
                <p>Née en 1946 à Paris, notre société a su évoluer et s’adapter pour proposer à ses clients particuliers et professionnels les technologies les plus avancées en matière d’impression numérique de façon à offrir la meilleure
                    qualité d’impression du marché.</p>
                <p>Notre proposition :</p>
                <ul>
                    <li>• Un large choix de formats, de papiers, et de façonnages,</li>
                    <li>• Nous restons une petite entreprise en capacité de nous adapter aux exigences de ses clients,</li>
                    <li>• Nous pratiquons des tarifs très attractifs, même avec de petites quantités,</li>
                </ul>

            </div>

        </div>
        <div class="ques-wrapper">
            <div class="ques"><span class="fas fa-question-circle"></span> Comment passer commande ?</div>
            <div class="rep">
                <p>Sans aucun engagement, faites vous-même votre devis pour l'impression de vos travaux, définissez vos paramètres : format, quantité, type de façonnage...</p>
                <p>Avant de valider votre commande, vous choisissez la date de livraison, puis vous déposez en ligne vos fichiers pour nous les adresser. En sélectionnant la date de livraison la plus lointaine, vous bénéficiez d’un tarif
                    encore plus avantageux !</p>

            </div>
        </div>
        <div class="ques-wrapper">
            <div class="ques"><span class="fas fa-question-circle"></span> Y a-t-il un minimum de commande? </div>
            <div class="rep">
                <p>Le minimum de commande est de 6€ TTC livré .</p>
            </div>
        </div>
        <div class="ques-wrapper">
            <div class="ques"><span class="fas fa-question-circle"></span> Quels sont les formats de papier disponibles? </div>
            <div class="rep">
                <p>Concernant les tirages de Plans, nous proposons tous les formats standards, A0, A1, A2.</p>
                <p>Si les formats normalisés ne répondent pas à votre besoin, vous avez la possibilité de personnaliser les dimensions de vos travaux, dans les limites suivantes:</p>
                <ul>
                    <li>• Largeur maximale d’impression : 914 mm (ou 0,914 mètre)</li>
                    <li>• Longueur maximale : 4 mètres (livré roulé)</li>
                </ul>
                <p>
                    Les tirages courants pour les dossiers sont effectués en A4 et A3.
                </p>

            </div>
        </div>
        <div class="ques-wrapper">
            <div class="ques"><span class="fas fa-question-circle"></span> Format de fichiers préconisé</div>
            <div class="rep">
                <p>
                    Nous acceptons toutes les versions de PDF (non protégé par mot de passe). Le pdf est un fichier informatique qui respecte parfaitement le rendu final de vos travaux sans risque de modification automatique.
                </p>
            </div>
        </div>
        <div class="ques-wrapper">
            <div class="ques"><span class="fas fa-question-circle"></span> Comment préparer vos documents petit format ? </div>
            <div class="rep">
                <p>
                    La résolution optimale des fichiers petit format est de 300 dpi. <br />
                    Par ailleurs, nous avons besoin d'un fond perdu pour avoir un peu de marge pendant la découpe de votre travail. A cet effet, il est nécessaire de prévoir 2 mm de fond perdu sur les bords du document (espace libre de
                    toute information). Par prudence, placer les informations importantes à une distance de 4 mm minimum du format final. <br />
                    Si les documents n'ont pas de fond perdu, nous nous réservons le droit de couper les brochures en plus petit ou de laisser un contour blanc sur le document final. <br />
                    <br />
                    Les textes doivent être entièrement incorporées <br />
                    <br />
                    Nous ne vérifions pas les fautes d'orthographe et de syntaxe. <br />
                    <br />
                </p>
            </div>
        </div>
        <div class="ques-wrapper">
            <div class="ques"><span class="fas fa-question-circle"></span> Comment préparer vos documents grand format? </div>
            <div class="rep">
                <p>
                    Pour l'impression d'images sur supports grand format, la résolution optimale doit être de 150 ppi aux dimensions réelles. Nous n’acceptons pas les fichiers à échelle réduite. <br />
                    Les textes doivent être entièrement incorporées<br />
                    <br />
                    Nous ne vérifions pas les fautes d'orthographe et de syntaxe.<br />
                    <br />
                </p>
            </div>
        </div>
        <div class="ques-wrapper">
            <div class="ques"><span class="fas fa-question-circle"></span> Mode couleur </div>
            <div class="rep">
                <p>
                    Les fichiers d'impression, pour le petit et le grand format, doivent être en format d’impression, soit CMJN (cyan, magenta, jaune, noir). <br />
                    Si vous nous adressez des images avec des couleurs PANTONE ou RVB (format de couleurs destiné aux écrans), elles seront alors automatiquement transformées dans le profil colorimétrique le plus proche.<br />
                    Il existe de nombreux écrans et chacun est calibré de manière différente. C’est pourquoi, le document imprimé final peut ne pas être parfaitement fidèle à l’image qui apparaît sur votre ordinateur.<br />
                </p>
            </div>
        </div>
        <div class="ques-wrapper">
            <div class="ques"><span class="fas fa-question-circle"></span> Epaisseur maximale des documents destinés à la reliure </div>
            <div class="rep">
                <p>
                    Reliure plastique : 4 cm maximum <br />
                    Reliure métallique : 1,7 cm d’épaisseur maximum <br />
                    Reliure thermocollée : 100 feuilles, soit 200 pages maximum <br />
                    <br />
                </p>
            </div>
        </div>
        <div class="ques-wrapper">
            <div class="ques"><span class="fas fa-question-circle"></span> Quels sont les délais d'impression ? </div>
            <div class="rep">
                <p>
                    Dans le cas le plus fréquent, la fabrication est réalisée sous 1 jour ouvré,
                    puis le document est envoyé via "Lettre Suivie" ou "Colissimo". <br />
                    Délai de transport : J+2 (délais de la Poste) sauf Corse. <br />
                    Toutefois, nos dates de livraison restent indicatives. Notre méthode de travail, bien que rapide et personnalisée, ne nous permet pas de garantir les délais de la Poste ou de nos partenaires transporteurs.
                    <br />
                </p>
            </div>
        </div>
        <div class="ques-wrapper">
            <div class="ques"><span class="fas fa-question-circle"></span> Comment s’effectue le paiement ? </div>
            <div class="rep">
                <p>
                    Le règlement s’effectue par carte bancaire sur un site sécurisé ou via PayPal. <br />
                    Les clients professionnels ont la possibilité d’effectuer un règlement à J+30, par virement ou par chèque bancaire.
                    <br />
                </p>
            </div>
        </div>
    </div>
    <div class="retour hide">
        <a href="" class="btn"><i class="fas fa-arrow-left"></i> Retour</a>
    </div>
    </section>

    <!-- END CHAT -->

    <!-- END CONTAINER -->
@stop

{{-- page level scripts --}}
@section('footer_scripts')

    <script>
        $(document).ready(function() {
            $(".ques-wrapper").click(function() {
                $(".ques-wrapper").removeClass("opned");
                $(this).addClass("opned");
            });
        });
    </script>

@stop
