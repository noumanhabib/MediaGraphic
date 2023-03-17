<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <title>Page d'accueil</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend_assets/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend_assets/style.css') }}">
    <link rel="icon" type="image/png" href="{{ url('images/favico.png') }}" sizes="32x32">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    {{--  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rasa:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&display=swap" rel="stylesheet">
 --}}
    <style>
        /*  html {
            font-size: 17px;
        } */

        * {
            /* font-family: 'Rasa', Arial, Helvetica, serif; */
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        .open-button {
            background-color: #555;
            color: white;
            padding: 16px 20px;
            border: none;
            cursor: pointer;
            opacity: 0.8;
            position: fixed;
            bottom: 23px;
            right: 28px;
            width: 280px;
        }

        .chat-popup {
            display: none;
            position: fixed;
            bottom: 0;
            right: 15px;
            border: 3px solid #f1f1f1;
            z-index: 100009;
            background: white;
            width: 350px;
        }

        .form-container {
            min-width: 270px;
            padding: 10px;
            padding-right: 0;
            background-color: white;
        }

        .form-container textarea {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            border: none;
            background: #f1f1f1;
            resize: none;
            min-height: 200px;
        }

        .form-container textarea:focus {
            background-color: #ddd;
            outline: none;
        }

        .form-container .btn {
            background-color: #04AA6D;
            color: white;
            padding: 16px 20px;
            border: none;
            cursor: pointer;
            width: 100%;
            margin-bottom: 10px;
            opacity: 0.8;
            min-width: max-content !important;
        }

        .form-container .cancel {
            background-color: red;

        }

        .form-container .btn:hover,
        .open-button:hover {
            opacity: 1;
        }

        @media (min-width: 768px) {
            .menu-toggle {
                display: none;
            }
        }

        .chat-btn-seeting {
            position: fixed;
            min-width: auto;
            right: 10px;
            bottom: 10px;
            z-index: 1000;
            background: #2E3079;
            padding: 14px 35px;
            color: white;
            font-size: larger;
            font-weight: 600;
            text-transform: capitalize;
            border-radius: 50px;
            border: 2px solid #2E3079;
        }

        @media (max-width: 768px) {
            .chat-btn-seeting {
                min-width: 160px;
            }
        }

        .cross-icons {
            font-size: x-large;
            color: #2E3079;
            margin-right: 6px;
            margin-top: 4px;
        }

        .chat_heading {
            display: flex;
            justify-content: space-between;
        }

        .chat_heading .heading {
            color: #2E3079;
            padding-top: 4px;
            padding-left: 4px;
        }

        .send-icon {

            padding: 7px 6px 2px 2px;
            height: 2rem;
            background: transparent;
            color: #2E3079;

        }

        .chat-sendd {
            display: flex;
            align-items: center;
            width: 100%;
            margin-bottom: 2px;
            background: white;
            border: 2px solid;
        }

        .chat-sendd .type_message {
            background-color: transparent;
            width: 90%;
            border: none;
            outline: none;
            padding-left: 15px;
            margin-bottom: 0 !important;
            padding-block: 10px !important;
            font-size: 1.3rem !important;
        }

        .chat-messages {
            overflow-y: scroll;
            height: 360px;
        }

        .chat-messages .message_showA {
            background: #EFEFEF;
            padding: 5px 14px 9px;
            border-radius: 19px;
            border-top-left-radius: 0;
            margin: 4px 2px;
            display: inline-block;
            font-size: small;
            word-break: break-all;
        }

        .chat-messages .message_showB {
            background: #4e51a8;
            color: white;
            padding: 6px 10px;
            border-radius: 23px;
            border-top-left-radius: 0;
            margin: 4px 2px;
            margin-left: 6rem;
            font-size: small;
            display: inline-block;
            word-break: break-all;
        }

        .chat-messages .inner-message-div {
            display: flex;
            justify-content: flex-end;
        }

        .chat_text {
            border: 1px solid #2E3079;
            border-radius: 50px;
            color: white;
            background: #2E3079;
            margin: 7px;
            padding: 7px 11px;
        }

        ::-webkit-scrollbar {
            height: 1.5rem !important;
            width: 1rem;
        }

        ::-webkit-scrollbar-track {
            background-color: transparent;
        }

        ::-webkit-scrollbar-thumb {
            background-color: #2E3079;
        }
    </style>
    <!--page level css-->
    @yield('header_styles')
    <!--end of page level css-->
</head>

<body class="{{ isset($bodyClass) ? $bodyClass : 'home' }}">
    <header>
        <div class="logo">
            <a href="/"><img src="{{ asset('frontend_assets/images/logo-180-black.png') }}"></a>
        </div>
        <nav class="toggle-able-menu" style="display: flex;">
            <ul>
                <li @if (Request::is('/')) class="current" @endif><a href="{{ url('/') }}">Accueil</a></li>
                <li @if (Request::is('devis')) class="current" @endif><a href="{{ url('devis') }}">Devis sur mesure</a></li>
                <li @if (Request::is('fichiers-faq')) class="current" @endif><a href="{{ url('fichiers-faq') }}">Envoi de vos fichiers & F.A.Q</a></li>
                @guest
                    <li @if (Request::is('register')) class="current" @endif><a href="{{ url('register') }}">Register</a></li>

                @endguest
                <li><span>Aide &amp; Conseil? <a href="tel:01 42 06 90 02">01 42 06 90 02</a></span> <span>Du lundi au
                        vendredi - 9h00 - 17h00</span></li>
            </ul>
            <ul>
                @guest
                    <li><a href="{{ url('login') }}"><i class="fas fa-sign-in-alt"></i> <span>Connexion</span></a></li>
                @else
                    <li style="display: flex; flex-direction: column;"><a href="{{ url('user-dashboard') }}"><i class="far fa-user"></i> <span>Mon compte</span></a>
                    </li>
                    <li>
                        <form onclick="this.submit();" id="logout-form" action="{{ route('logout') }}" method="post" title="Logout" style="display: inline-block; cursor: pointer">
                            @csrf
                            <a> <i class="fas fa-sign-out-alt"></i> <span>Se déconnecter</span> </a>
                        </form>
                    </li>
                    <li><a href="{{ url('panier') }}"><i class="fas fa-shopping-basket"></i> <span>Panier</span></a></li>
                @endguest
            </ul>
        </nav>
        <div class="menu-toggle">
            <a href="#!" id="toggle-the-menu">
                <i class="fas fa-bars"></i>
                <i class="fas fa-ellipsis-v"></i>
            </a>
        </div>
    </header>

    @if (!Request::is('register') && !Request::is('contactus'))
        <section class="services">
            <div>
                <h2><a @if (Request::is('command_plan')) class="current" @endif href="{{ url('command_plan') }}">PLAN</a></h2>
            </div>
            <div>
                <h2><a @if (Request::is('memory')) class="current" @endif href="{{ url('memory') }}">MÉMOIRE & RAPPORT</a></h2>
            </div>
            <div>
                <h2><a @if (Request::is('booklet')) class="current" @endif href="{{ url('booklet') }}">BROCHURE & LIVRET</a></h2>
            </div>
            <div>
                <h2><a @if (Request::is('attach')) class="current" @endif href="{{ url('attach') }}">AFFICHE</a></h2>
            </div>
            <div>
                <h2><a @if (Request::is('plans_life')) class="current" @endif href="{{ url('plans_life') }}">DOSSIER DE PLANS</a></h2>
            </div>
        </section>
    @endif

    {{-- Notification, errors, success messages --}}

    @if ($errors->any())
        <div class="alert alert-danger">
            <ol>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ol>
        </div>
    @endif

    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissable margin5">
            <strong>Succès:</strong> {{ $message }}
        </div>
    @endif

    @if ($message = Session::get('error'))
        <div class="alert alert-danger alert-dismissable margin5">
            <strong>Erreur:</strong> {{ $message }}
        </div>
    @endif

    @if ($message = Session::get('warning'))
        <div class="alert alert-warning alert-dismissable margin5">
            <strong>Avertissement:</strong> {{ $message }}
        </div>
    @endif

    @if ($message = Session::get('info'))
        <div class="alert alert-info alert-dismissable margin5">
            <strong>Info:</strong> {{ $message }}
        </div>
    @endif

    {{-- Notification, errors, success messages End --}}

    <main style="padding: 0;">
        @yield('content')

    </main>

    <footer>
        <div class="widget">
            <ul>
                <li><a href="/protection-vie-privee">Protection des données personnelles</a></li>
                <li><a href="/mentions-legales">Mentions légales</a></li>
                <li><a href="/condition-de-vente">Conditions de vente</a></li>
            </ul>
        </div>
        <div class="widget">
            <ul>
                <li><a href="/labellise">Labellisé "imprim'Vert"</a></li>
                <li><a href="/contactus">Nous contacter</a></li>
            </ul>
        </div>
        <div class="widget paiement">
            <h4>Moyens de paiement</h4>
            <img src="/images/paiement.png">
        </div>
        <div class="copyright">
            <p style="gap: 15px; display: flex; align-items: center; justify-content: center;"> Copyright © {{ date('Y') }} MEDIAGRAPHIC - Tous les droits sont réservés</p>
        </div>
    </footer>


    <script>
        $(document).ready(function() {
            $("#toggle-the-menu").click(function() {
                $(".toggle-able-menu").toggleClass("show");
            });
        });

        function openForm() {
            document.getElementById("myForm").style.display = "block";
            jQuery('#chat-bot').css('display', 'none');
        }

        function closeForm() {
            document.getElementById("myForm").style.display = "none";
            jQuery('#chat-bot').css('display', 'block');
        }
    </script>

    @yield('footer_scripts')

</body>

</html>
