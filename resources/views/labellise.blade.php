@extends('layouts.default')
@section('header_styles')
    <style>
        ul.to-given-styles li {
            padding-left: 1rem;
        }

        ul.to-given-styles li::marker {
            content: "-";
            font-size: 1.2rem;
            font-weight: bold;
        }
    </style>
@endsection
@section('content')
    <div class="container">
        <section class="content">
            <h1>Labellisé "imprim'Vert"</h1>
            <div class="single-page-content">
                <p>MediaGraphic s’inscrit dans une démarche visant à réduire son empreinte carbone. Nous sommes attentifs au respect de la charte proposée par le Label IMPRIM’VERT.</p>
                <p>Ce label nous guide au quotidien par le respect des 5 critères fondamentaux suivants :</p>
                <ul>
                    <li>Faire éliminer ses déchets selon une filière conforme à la réglementation et assurer sa traçabilité.</li>
                    <li>Sécuriser le stockage des liquides dangereux.</li>
                    <li>Ne pas utiliser certains produits étiquetés CMR anciennement « toxiques».</li>
                    <li>Assurer la sensibilisation environnementale du personnel de l’entreprise.</li>
                    <li>Mettre en place un suivi trimestriel des consommations énergétiques du son atelier de production.</li>
                </ul>
            </div>
        </section>
    </div>
@endsection
