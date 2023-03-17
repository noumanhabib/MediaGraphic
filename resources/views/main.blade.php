@extends('layouts/default')
@section('title')
    Home
    @parent
@stop
@section('header_styles')

@stop

@section('content')

    <main>
        <!-- <section class="hero">
         </section> -->
        <section class="banner">
            <div class="banner-wrapper">
                <h2>Une commande simple et rapide</h2>
                <div class="steps">
                    <div class="step">
                        <div class="step-number">1</div>
                        <h3>Configurez votre produit</h3>
                    </div>
                    <div class="step">
                        <div class="step-number">2</div>
                        <h3>Choisissez la date de livraison</h3>
                    </div>
                    <div class="step">
                        <div class="step-number">3</div>
                        <h3>Commandez</h3>
                    </div>
                    <div class="step">
                        <div class="step-number">4</div>
                        <h3>Vous êtes livré !</h3>
                    </div>
                </div>
            </div>
            <div class="banner-aside">
                <!-- <img src="images/home-banner.svg"> -->
                <svg id="e47Tbkfs01W1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    viewBox="0 0 267.9 171.8" shape-rendering="geometricPrecision" text-rendering="geometricPrecision">
                    <defs>
                        <path id="e47Tbkfs01W2"
                            d="M172.7,8.9c-5.3,1.9-10.1,4.6-15.2,6.9-8.1,3.7-16.5,6.6-25.2,8.5-7.9,1.8-17.7,4-25.7,2.3-6.2-1.4-12.3-3.3-18.2-5.6-13.1-5-26.8-10.5-40.6-8.1-15.3,2.6-28.2,16-30.2,31.3s15,27.5.5,45.8c-4.5,5.7-7.5,13.7-5.5,20.7c2,6.8,10.2,11.1,10.3,18.2c0,5.6-5.2,10-5.7,15.6-.4,4.8,3.1,9.2,7.3,11.5s9.2,2.8,14,3.3c0,0,46.9,3.2,71.1,2.7l114.3-2.3c3.9-.1,7.9-.2,11.6-1.6s6.9-4.5,7.5-8.3c.9-6.6-6-12.3-5.3-18.9.8-8.5,12.8-11.7,15-19.9c1.6-5.8-2.3-11.6-6.5-15.9s-9-8.5-10.3-14.4c-2.3-10.4,7.8-18.5,8.8-28.5l.6-5.5c.8-7.7,1-15.2-3-22.3-3.4-6-9.4-10.8-16.2-13.9-8.7-4-18.6-5.3-28.4-5.4h-.3c-8.3,0-16.9,1-24.7,3.8" />
                        <rect id="e47Tbkfs01W3" width="728" height="243" rx="0" ry="0" />
                        <rect id="e47Tbkfs01W4" width="4.2" height="33.3" rx="0" ry="0" />
                        <rect id="e47Tbkfs01W5" width="1.4" height="21.4" rx="0" ry="0" />
                        <path id="e47Tbkfs01W6"
                            d="M64.5,116.1h-21.1c-.5.2-.8.7-.6,1.3.1.3.3.5.6.6v0h21.2c.5-.2.8-.7.6-1.3-.1-.3-.4-.5-.7-.6v0" />
                        <path id="e47Tbkfs01W7"
                            d="M66,98.8c-1.3,0-2.4.8-3,1.9L54.8,118h21.9c.8,0,1.6-.5,1.9-1.3l6.3-16c.3-.7-.1-1.5-.8-1.8-.2-.1-.3-.1-.5-.1h-17.6Z" />
                        <rect id="e47Tbkfs01W8" width="728" height="243" rx="0" ry="0" />
                        <rect id="e47Tbkfs01W9" width="1.8" height="19.7" rx="0" ry="0" />
                        <path id="e47Tbkfs01W10"
                            d="M28.2,153.8c-.7,0-1.2.5-1.2,1.1c0,0,0,.1,0,.1h16c0-.7-.5-1.2-1.2-1.2c0,0,0,0,0,0h-13.6Z" />
                        <path id="e47Tbkfs01W11"
                            d="M26.6,130.5h16.1c1.1,0,2,.9,2,2v1.8c0,1.1-.9,2-2,2h-16.1c-1.1,0-2-.9-2-2v-1.8c0-1.1.9-2,2-2Z" />
                        <path id="e47Tbkfs01W12"
                            d="M41.9,130.1l6.5.3c-1.4,1.7-2.2,3.8-2.2,6l-.1,7.9c0,.9-.6,1.8-1.5,2.1l-1.2.4l2.7,7.4h4.1l-1.6-1.5-.8-4c-.1-.5-.1-1.1.2-1.6c3.5-6.7,5.8-13.9,6.8-21.3.1-.6-.2-1.1-.7-1.4-1.7-1.2-3.7-2-5.7-2.4l-6.5,8.1Z" />
                        <path id="e47Tbkfs01W13"
                            d="M42.5,146.8c0,2.8,3.1,8.1,3.1,8.1c2.2,1.1,6.6.4,6.2-.1-.6-.6-1.3-1-2.1-1.4c0,0-2,.6-3-.1s-2.1-7-2.1-7c-.2,0-.3,0-.5,0-1.3,0-1.6.5-1.6.5" />
                        <path id="e47Tbkfs01W14"
                            d="M42.7,130.5c0-.1,7-.8,7-.8-.1,1.7.1,3.4.5,5.1.7,2.9,11,15.6,11,15.6l-1,3.4c3.1,1.1,6.4,1.2,9.5.3l-6.4-3.7c0,0-6.2-21.4-10-25.1l-7-2.4-3.6,7.6Z" />
                        <path id="e47Tbkfs01W15"
                            d="M22.7,126.8c-.3,2.7,1.2,4.8,5.3,4c13.8-.1,17,5.1,18,11.8c0,.1.1.2.2.2c4.8.2,9.7-.9,14-3c.2-.1.3-.3.2-.5c0,0,0,0,0,0-6.7-13.2-1.6-15.8-16.1-19.7-2-.2-17.3-1.5-17.3-1.5s-4,6-4.3,8.7" />
                        <path id="e47Tbkfs01W16"
                            d="M60.2,155c0,0,9.2,1.6,11.7.9c0,0-.6-1.2-3.4-2.6l.3.2c.1.1.2.3,0,.5-.1.1-.2.1-.3.1-1.8-.1-5.7-.4-8-1.5-.6.6-.7,1.6-.3,2.4" />
                        <path id="e47Tbkfs01W17"
                            d="M32.9,97.6c-3.2,2.2-5.6,5.3-6.8,8.9-1.5,4.4-1.3,9.2.5,13.5l11.4-.4c.7-1.8,1.8-6.8,3.7-10c.8-1.1,1.5-2.4,2-3.7.6-2,.8-5-1.9-9.7l-4.4-.8c-1.6.4-3.1,1.1-4.5,2" />
                        <path id="e47Tbkfs01W18" d="M38.9,95.9c.9,1.4,3.6,2.4,3.7,2.4s3.2-3.7,3.4-3.8l-3-2.1-4.1,3.5Z" />
                        <path id="e47Tbkfs01W19"
                            d="M41.4,90.7c.8,2.2,2.7,3.9,5,4.6c1.5.4,3.4-.6,3.3-4.5.1-2.1-.6-4.2-1.9-5.9-.4-.4-1-.6-1.5-.6-2.7-.1-6,3.9-4.9,6.4" />
                        <path id="e47Tbkfs01W20"
                            d="M39.3,107.9c-.5.6-.5,1.4-.1,2c.3.5.7,1,1.1,1.4.6.6,18.8,6.6,18.8,6.6l3.7-.1c.9-.6,1.3-1.2,1.3-1.6-.2-.9-2.6-1.3-7.3-1.3-2.9-.9-5.7-2.1-8.3-3.8-.8-.5-1.6-1.1-2.3-1.6l-5.1-3.9-1.8,2.3Z" />
                        <rect id="e47Tbkfs01W21" width="728" height="243" rx="0" ry="0" />
                        <path id="e47Tbkfs01W22" d="M41.6,87.6c-1.6.5-.1,2.7.6,3.5L43,90c0,0,.2-2.4-1-2.4-.1,0-.2,0-.4,0" />
                        <rect id="e47Tbkfs01W23" width="728" height="243" rx="0" ry="0" />
                        <path id="e47Tbkfs01W24"
                            d="M78,14.2C64.4,19.8,52.8,34.8,57.3,50c1.5,5,.7,10.4,5.7,12.6c2.7,1.2,9.9,1.9,12.7.9C83,61.1,87.9,54.4,83.9,47c-1.3-2.4-2.9-4.5-4-7s-1.6-5.4-.5-7.8c2.2-4.8,9.6-6.3,14.3-6.2c5.6.1,10.8,3,13.8,7.7c3.8,6,4.7,13.2,4.2,20.1-.6,7.4-3.7,13-8.4,18.7-4,4.9-8.4,9.6-11.1,15.3-2.5,5.3-3.3,11.1-3.4,16.8c0,1.1-5.6,11.6-5.6,14.8c0,.5,6.3,2,6.8,2l11.5.1c.5,0,.9-.4.9-.9c0,0,0,0,0,0c.2-15.6,5-30.5,17.2-41c4.4-3.8,9.2-6.9,12.6-11.7c4.9-6.9,7.3-13.6,6.6-22.1-.6-7.7-3.2-15.5-8.2-21.5-5.4-6.5-13.4-10.5-21.6-12.2-3.9-.8-8-1.3-12-1.3h-.5c-6.3-.1-12.6,1.1-18.5,3.4" />
                        <path id="e47Tbkfs01W25"
                            d="M84.6,140.9c0,5.6,0,9.5,5,11.3c1.4.5,6.7.5,8.2.5c7.2,0,11.2-6.4,11.2-13.5s-7.6-12.5-14.8-12.5-9.6,7-9.6,14.2" />
                        <path id="e47Tbkfs01W26"
                            d="M71.7,12.5C58.1,18.1,46.5,33.1,51.1,48.3c1.5,5,4.9,11.2,9.8,13.3c2.7,1.1,5.8,1.2,8.5.2c7.3-2.4,12.2-9.1,8.2-16.5-1.3-2.4-2.9-4.5-4-7s-1.6-5.3-.5-7.8c2.2-4.8,9.6-6.3,14.3-6.2c5.6.1,10.7,3,13.8,7.7c3.8,6,4.7,13.2,4.2,20.1-.6,7.4-3.7,13-8.4,18.7-4,4.9-8.4,9.6-11.1,15.3-2.4,5.3-3.3,11.1-3.4,16.8c0,1.1.3,12.8.4,16c0,.5.4.8.8.8l11.5.1c.5,0,.9-.4.9-.9c0,0,0,0,0,0c.2-15.6,5-30.5,17.2-41c4.4-3.8,9.2-6.9,12.6-11.8c4.9-6.9,7.3-13.6,6.6-22.1-.6-7.7-3.2-15.5-8.2-21.5-5.4-6.5-13.4-10.5-21.6-12.3-3.9-.8-8-1.3-12-1.3h-.5c-6.3.1-12.6,1.3-18.5,3.6" />
                        <path id="e47Tbkfs01W27"
                            d="M78.4,139.2c0,7.2,5.8,13,13,13s13-5.8,13-13-5.8-13-13-13v0c-7.2,0-13,5.8-13,13" />
                        <rect id="e47Tbkfs01W28" width="728" height="243" rx="0" ry="0" />
                        <polygon id="e47Tbkfs01W29" points="169,61.2 175,61 175.4,59.6 169,58.9" />
                        <path id="e47Tbkfs01W30"
                            d="M142.2,77.4c5.2,6.7,9.6,13.8,13.3,21.4c2.3,4.8,11.4,24.7,18,29.9c1.3,1,4.9,3.8,8.6,3l.3-.1c6-1.8,8.9-14.4,7.5-32.4-1.6-.6-3.7-1.2-11.7-1.2-.5,4.1-1.1,9.2-1.6,9.4-1.8.4-2.1-16.6-13.2-24.9-5.5-4.2-12.1-5.2-17.6-5.2-1.3,0-2.5,0-3.6.1" />
                        <path id="e47Tbkfs01W31"
                            d="M177.1,76.6c1.9,8.4,2.1,15.5,1.1,21.4c1.7.1,3.4.2,5.3.4c2.3.2,4.4.5,6.4.9-1.1-8.6-6.8-22.8-6.8-22.8-3.4-5-3.9-1.7-7.3-6.7l1.3,6.8Z" />
                        <path id="e47Tbkfs01W32"
                            d="M186.2,56.8l-8.7,10.3c0,0-1.6-.3-1.7-3.4s-3.4-3.4-3.4-3.4.5,4.2,1.4,10.5c.5,3,2,5.8,4.3,7.8l5-1.7c4.5-6.5,7.6-13.9,9.1-21.7l-2.4-.1h-.1c-1.4.1-2.7.7-3.5,1.7" />
                        <path id="e47Tbkfs01W33"
                            d="M112.9,78.9c-.6.1-4.6,4.2-5.1,4.4-.6,8-.9,16-.6,24c.8,27.8,1.2,43.6,11.7,51.2c11.5,8.4,33.2,5.5,38.7-4.4c6-10.6-9.7-23.3-5.3-44.4c1.5-7,4.7-13.5,9.3-18.9.4-.3,3.6-3.6,2.6-6.2-.1-.3-.2-.5-.4-.7-.1-.2-.2-.3-.3-.4c0-.2,0-.5-.1-.8-7.4-5.4-16.4-7.1-24.9-7.1-10.4-.2-20.2,2.2-25.6,3.3" />
                        <path id="e47Tbkfs01W34"
                            d="M134.2,80.1c.6.6,6.9,10.8,15.7,7.4.5-4.8,3.5-11,6.6-17.4l-9.3-6.7c-5.3,4.7-9.8,10.4-13,16.7" />
                        <path id="e47Tbkfs01W35"
                            d="M154.3,51.9L153,74.8l13.4,3c0,0,4.8-23.5,4.7-23.8-.4-2.6-3.6-3.3-7.2-3.3-3.2,0-6.5.4-9.6,1.2" />
                        <rect id="e47Tbkfs01W36" width="728" height="243" rx="0" ry="0" />
                        <path id="e47Tbkfs01W37"
                            d="M144.8,64.4c1,6.2,6.2,4.8,6.2,4.8s1.8-7.3-.7-9c-.7-.5-1.6-.8-2.5-.8-1.9.1-3.5,1.6-3,5" />
                        <path id="e47Tbkfs01W38"
                            d="M149.7,42.7c-3.2,1.5-10.1,5.6-10.6,9.7l-.5,4.5c-.1.9,4.6,2.1,5.4,2c1.6-.3,3.4-2,4.3-3.3c1.8-2.7,1.7-6.2,4.5-8.1c1.4-.9,3.1-1.1,4.6-.4c1.2.3,2.2.7,2.9-.1c1-1.1-.4-2.5-1.6-3.3-.5-.3-1-.6-1.5-.8-1.3-.5-2.7-.8-4.1-.8-1.2-.1-2.4.1-3.4.6" />
                        <path id="e47Tbkfs01W39"
                            d="M113.2,48.6c2.4,3.7,3.9,8,4.2,12.4c6.2-2.5,13.9-4,23.5-4l5.8-1.7c0,0,2.7-5.7-16.7-6.3-3.8-.5-7.5-.7-11.3-.6-1.7,0-3.5,0-5.5.2" />
                        <path id="e47Tbkfs01W40"
                            d="M87.9,57c-11.4,5.9-12.3,9.8-12.5,11.2-.7,4.9,3.5,9.3,5.6,11.4c10.4,10.7,26.5,10.5,32.3,10.2c4.5-4.6,15.6-8.2,20.1-12.8-4.7-1-16.2-3-21.4-3.9-6.3-1-12.3-1.8-18.1-2.3L117.5,61c-.3-4.4-1.8-8.7-4.2-12.4-8.9,1.5-17.4,4.3-25.4,8.4" />
                        <rect id="e47Tbkfs01W41" width="728" height="243" rx="0" ry="0" />
                        <path id="e47Tbkfs01W42"
                            d="M159.2,69.4c-.3-.4,0-.5,0-3.4-.1-.7.1-1.3.4-1.9.2-.2.4-.4.6-.6c1.6-.7,3.4-1.1,5.1-1c.4,0,1.5.2,1.7.7c0,.1,0,.2,0,.3-.7,2.7-1.1,4-1.6,4.6-.8.8-1.7,1.3-2.8,1.5-.6.2-1.2.3-1.9.3-.5.1-1-.1-1.5-.5m10.5-1.6c-.3-.3-.3-.7-.3-1.6-.1-.7,0-1.5.3-2.2.2-.8.7-1.6,1.4-2.1.4-.2.8-.4,1.3-.5s1-.2,1.5-.3c.3-.1.7-.1,1,0c.5.3.3,1.6.2,2.2-.2,1.2-.7,2.4-1.5,3.3-.3.5-.8,1-1.4,1.2-.4.2-.8.2-1.2.3-.5.2-1,0-1.3-.3m-25.4-8.4c-.6.6.5,2.1.6,2.4.2-.6.5-1.2,1-1.6.4-.3.9-.5,1.4-.6.4-.1.9,0,1.3.1c1.2.1,2.3.9,2.6,2.1.2.6.4,1.2.4,1.8l.4.1c1.8.4,3.5.8,5.3,1.1c0,0,.6.1.7.1s.3.2.3.2c.1.8.1,1.6.1,2.4-.1,1-.3,1.3-.1,1.9.4.7,1,1.1,1.8,1.3.9.2,1.6,0,3.1-.4.9-.2,1.7-.6,2.5-1.2.4-.4.7-.8,1-1.3c1-1.8,1.1-4,1.7-4.2c0,0,.2-.1.3,0s.1.3.1.3s0,3.5.6,4.2s1.2.7,2.2.6c.9-.1,1.7-.5,2.3-1.1.8-1,1.4-2.1,1.7-3.3.2-.5.3-1,.4-1.6.2-.2.3-.4.4-.6v0c.1-.3.1-.7.1-1-.2-.5-.5-1-.8-1.5-.1,0-.2,0-.3,0-.8,0-4.5,0-5.6.9-.2.1-.4.2-.6.3-.3.1-.6,0-.9,0-6.9.7-9.3,1.1-9.6,1.2-.2.1-.3.1-.5.1s-.4-.1-.5-.2c-2.1-.8-4.3-1.4-6.5-1.9-1.8-.4-3.6-.6-5.4-.8h-.1c-.7-.2-1.1-.1-1.4.2" />
                        <rect id="e47Tbkfs01W43" width="728" height="243" rx="0" ry="0" />
                        <path id="e47Tbkfs01W44"
                            d="M217,47.7c-.6.1-1.1.7-1.1,1.3-.1,4.3-.4,19.1-.3,24.4c0,.5.4.9.9,1c2.4.1,11,.3,14.9.1.9-.1,1.5-.9,1.4-1.7.1-4.5.3-17.2-.2-23c0-.6-.5-1.2-1.1-1.3-2.2-.3-8.9-.8-12.9-.8-.5,0-1.1,0-1.6,0" />
                        <path id="e47Tbkfs01W45"
                            d="M217.9,49.3c-.6.1-1,.6-.9,1.1-.1,3.5-.5,15-.4,19.3c0,.6.4,1.1,1,1.2c4.3.3,8.6.4,12.9.2.6-.1,1.1-.7,1.1-1.3.2-3.5.6-14.3.5-18.5c0-.6-.4-1.2-1-1.3-2.1-.2-8.4-.7-11.8-.7-.6-.1-1-.1-1.4,0" />
                        <rect id="e47Tbkfs01W46" width="3.3" height="0.7" rx="0" ry="0" />
                        <path id="e47Tbkfs01W47"
                            d="M202.5,38c0,.6.5,1.1,1.1,1.1h25.4.1c.6,0,1.1-.5,1.1-1.1s-.5-1.1-1.1-1.1h-25.4v0c-.7,0-1.2.5-1.2,1.1" />
                        <path id="e47Tbkfs01W48"
                            d="M180.8,16.1c-.9,0-1.7.7-1.7,1.7c0,.2,0,.4.1.6l7.6,19.2c.4.9,1.3,1.6,2.3,1.5h26.3l-9.8-20.7c-.7-1.4-2-2.3-3.6-2.3h-21.2Z" />
                        <path id="e47Tbkfs01W49"
                            d="M193.3,24.7c-.9.3-1.2,1.7-.8,3.1s1.5,2.4,2.4,2.1s1.2-1.7.8-3.1c-.4-1.3-1.3-2.1-2.1-2.1-.1-.1-.2,0-.3,0" />
                        <path id="e47Tbkfs01W50"
                            d="M226.4,92.8l-4.5.3c-.5,0-.8.3-.9.8l-.7,3.1l8.1-.5-1-3c-.1-.4-.5-.7-1-.7v0" />
                        <path id="e47Tbkfs01W51" d="M221,110.2c.1.5.5.8,1,.8l4.5.2c.4,0,.9-.3,1-.7l1-3-8.1-.3.6,3Z" />
                        <path id="e47Tbkfs01W52"
                            d="M228,96.1l-7.7.3c-.6,0-1,.5-1,1.1l.1,9.8c0,.6.5,1,1.1,1l7.4-.1c.5,0,1-.5,1-1l.2-10c0-.6-.5-1.1-1.1-1.1c0,0,0,0,0,0v0" />
                        <path id="e47Tbkfs01W53"
                            d="M228.1,96.3v0l-7.7.3c-.5,0-.8.4-.8.8l.1,9.8c0,.5.4.8.8.8l7.4-.1c.5,0,.8-.4.8-.8l.2-10c0-.2-.1-.4-.2-.6-.2-.1-.4-.2-.6-.2v0" />
                        <rect id="e47Tbkfs01W54" width="728" height="243" rx="0" ry="0" />
                        <rect id="e47Tbkfs01W55" width="8" height="10.4" rx="0" ry="0" />
                        <path id="e47Tbkfs01W56"
                            d="M221.9,106.6c-.1.2-.1.4.1.6.2.1.4.1.6-.1.1-.2.1-.4-.1-.5c0,0,0,0,0,0-.1,0-.1-.1-.2-.1-.3-.1-.4,0-.4.1" />
                        <path id="e47Tbkfs01W57"
                            d="M223.3,106.6c-.1.2-.1.4.1.5s.4.1.5-.1.1-.4-.1-.5c0,0,0,0,0,0-.1,0-.1-.1-.2-.1s-.2.1-.3.2" />
                        <path id="e47Tbkfs01W58"
                            d="M224.7,106.6c-.1.2-.1.4.1.5s.4.1.5-.1.1-.4-.1-.5c0,0,0,0,0,0-.1,0-.1-.1-.2-.1s-.2.1-.3.2" />
                        <path id="e47Tbkfs01W59"
                            d="M226.1,106.6c-.1.2-.1.4.1.5s.4.1.5-.1.1-.4-.1-.5c0,0,0,0,0,0-.1,0-.1-.1-.2-.1s-.2.1-.3.2" />
                        <linearGradient id="e47Tbkfs01W63-fill" x1="-1.648418" y1="78.703938" x2="239.571582" y2="78.703938"
                            spreadMethod="pad" gradientUnits="userSpaceOnUse" gradientTransform="translate(0 0)">
                            <stop id="e47Tbkfs01W63-fill-0" offset="0%" stop-color="#cfdaef" />
                            <stop id="e47Tbkfs01W63-fill-1" offset="100%" stop-color="#e1e8f6" />
                        </linearGradient>
                        <linearGradient id="e47Tbkfs01W219-fill" x1="114.616572" y1="79.263241" x2="63.573472"
                            y2="111.047141" spreadMethod="pad" gradientUnits="userSpaceOnUse"
                            gradientTransform="translate(0 0)">
                            <stop id="e47Tbkfs01W219-fill-0" offset="0%" stop-color="#1d2354" />
                            <stop id="e47Tbkfs01W219-fill-1" offset="100%" stop-color="#293984" />
                        </linearGradient>
                        <linearGradient id="e47Tbkfs01W225-fill" x1="78.805608" y1="120.916227" x2="69.817308"
                            y2="108.141427" spreadMethod="pad" gradientUnits="userSpaceOnUse"
                            gradientTransform="translate(0 0)">
                            <stop id="e47Tbkfs01W225-fill-0" offset="0%" stop-color="#1d2354" />
                            <stop id="e47Tbkfs01W225-fill-1" offset="100%" stop-color="#293984" />
                        </linearGradient>
                        <linearGradient id="e47Tbkfs01W237-fill" x1="-1.056708" y1="9.83997" x2="0.763292" y2="9.83997"
                            spreadMethod="pad" gradientUnits="userSpaceOnUse" gradientTransform="translate(0 0)">
                            <stop id="e47Tbkfs01W237-fill-0" offset="0%" stop-color="#3c59a8" />
                            <stop id="e47Tbkfs01W237-fill-1" offset="100%" stop-color="#445fab" />
                        </linearGradient>
                        <linearGradient id="e47Tbkfs01W243-fill" x1="1.878936" y1="0.550224" x2="17.798936" y2="0.550224"
                            spreadMethod="pad" gradientUnits="userSpaceOnUse" gradientTransform="translate(0 0)">
                            <stop id="e47Tbkfs01W243-fill-0" offset="0%" stop-color="#3c59a8" />
                            <stop id="e47Tbkfs01W243-fill-1" offset="100%" stop-color="#445fab" />
                        </linearGradient>
                        <linearGradient id="e47Tbkfs01W249-fill" x1="-0.019284" y1="2.839418" x2="20.000716" y2="2.839418"
                            spreadMethod="pad" gradientUnits="userSpaceOnUse" gradientTransform="translate(0 0)">
                            <stop id="e47Tbkfs01W249-fill-0" offset="0%" stop-color="#3c59a8" />
                            <stop id="e47Tbkfs01W249-fill-1" offset="100%" stop-color="#445fab" />
                        </linearGradient>
                        <linearGradient id="e47Tbkfs01W255-fill" x1="14.923158" y1="16.13058" x2="1.993158" y2="16.13058"
                            spreadMethod="pad" gradientUnits="userSpaceOnUse" gradientTransform="translate(0 0)">
                            <stop id="e47Tbkfs01W255-fill-0" offset="0%" stop-color="#f58f8c" />
                            <stop id="e47Tbkfs01W255-fill-1" offset="100%" stop-color="#f8abaa" />
                        </linearGradient>
                        <linearGradient id="e47Tbkfs01W261-fill" x1="46.88981" y1="143.473433" x2="48.79071" y2="172.631533"
                            spreadMethod="pad" gradientUnits="userSpaceOnUse" gradientTransform="translate(0 0)">
                            <stop id="e47Tbkfs01W261-fill-0" offset="0%" stop-color="#3c59a8" />
                            <stop id="e47Tbkfs01W261-fill-1" offset="100%" stop-color="#445fab" />
                        </linearGradient>
                        <linearGradient id="e47Tbkfs01W267-fill" x1="27.852621" y1="16.064766" x2="0.842621" y2="16.064766"
                            spreadMethod="pad" gradientUnits="userSpaceOnUse" gradientTransform="translate(0 0)">
                            <stop id="e47Tbkfs01W267-fill-0" offset="0%" stop-color="#f58f8c" />
                            <stop id="e47Tbkfs01W267-fill-1" offset="100%" stop-color="#f8abaa" />
                        </linearGradient>
                        <linearGradient id="e47Tbkfs01W273-fill" x1="39.893885" y1="78.030008" x2="40.841785"
                            y2="111.136408" spreadMethod="pad" gradientUnits="userSpaceOnUse"
                            gradientTransform="translate(0 0)">
                            <stop id="e47Tbkfs01W273-fill-0" offset="0%" stop-color="#1d2354" />
                            <stop id="e47Tbkfs01W273-fill-1" offset="100%" stop-color="#293984" />
                        </linearGradient>
                        <linearGradient id="e47Tbkfs01W279-fill" x1="64.841638" y1="142.20917" x2="66.742538" y2="171.36727"
                            spreadMethod="pad" gradientUnits="userSpaceOnUse" gradientTransform="translate(0 0)">
                            <stop id="e47Tbkfs01W279-fill-0" offset="0%" stop-color="#3c59a8" />
                            <stop id="e47Tbkfs01W279-fill-1" offset="100%" stop-color="#445fab" />
                        </linearGradient>
                        <linearGradient id="e47Tbkfs01W285-fill" x1="32.884099" y1="106.431238" x2="97.814499"
                            y2="178.089738" spreadMethod="pad" gradientUnits="userSpaceOnUse"
                            gradientTransform="translate(0 0)">
                            <stop id="e47Tbkfs01W285-fill-0" offset="0%" stop-color="#f37569" />
                            <stop id="e47Tbkfs01W285-fill-1" offset="100%" stop-color="#f58f8c" />
                        </linearGradient>
                        <linearGradient id="e47Tbkfs01W291-fill" x1="39.333416" y1="100.177963" x2="44.114716"
                            y2="92.718863" spreadMethod="pad" gradientUnits="userSpaceOnUse"
                            gradientTransform="translate(0 0)">
                            <stop id="e47Tbkfs01W291-fill-0" offset="0%" stop-color="#f58f8c" />
                            <stop id="e47Tbkfs01W291-fill-1" offset="100%" stop-color="#f8abaa" />
                        </linearGradient>
                        <linearGradient id="e47Tbkfs01W297-fill" x1="46.904486" y1="88.957945" x2="34.847086" y2="95.420345"
                            spreadMethod="pad" gradientUnits="userSpaceOnUse" gradientTransform="translate(0 0)">
                            <stop id="e47Tbkfs01W297-fill-0" offset="0%" stop-color="#f58f8c" />
                            <stop id="e47Tbkfs01W297-fill-1" offset="100%" stop-color="#f8abaa" />
                        </linearGradient>
                        <linearGradient id="e47Tbkfs01W303-fill" x1="50.04371" y1="111.285065" x2="25.30651" y2="102.208065"
                            spreadMethod="pad" gradientUnits="userSpaceOnUse" gradientTransform="translate(0 0)">
                            <stop id="e47Tbkfs01W303-fill-0" offset="0%" stop-color="#f58f8c" />
                            <stop id="e47Tbkfs01W303-fill-1" offset="100%" stop-color="#f8abaa" />
                        </linearGradient>
                        <linearGradient id="e47Tbkfs01W316-fill" x1="45.820297" y1="87.063284" x2="33.762897" y2="93.525684"
                            spreadMethod="pad" gradientUnits="userSpaceOnUse" gradientTransform="translate(0 0)">
                            <stop id="e47Tbkfs01W316-fill-0" offset="0%" stop-color="#f58f8c" />
                            <stop id="e47Tbkfs01W316-fill-1" offset="100%" stop-color="#f8abaa" />
                        </linearGradient>
                        <linearGradient id="e47Tbkfs01W334-fill" x1="107.190516" y1="43.489959" x2="36.240216"
                            y2="187.489959" spreadMethod="pad" gradientUnits="userSpaceOnUse"
                            gradientTransform="translate(0 0)">
                            <stop id="e47Tbkfs01W334-fill-0" offset="0%" stop-color="#3c59a8" />
                            <stop id="e47Tbkfs01W334-fill-1" offset="20%" stop-color="#3e5aa9" />
                            <stop id="e47Tbkfs01W334-fill-2" offset="100%" stop-color="#445fab" />
                        </linearGradient>
                        <linearGradient id="e47Tbkfs01W340-fill" x1="26.017546" y1="177.538794" x2="99.801046"
                            y2="47.020794" spreadMethod="pad" gradientUnits="userSpaceOnUse"
                            gradientTransform="translate(0 0)">
                            <stop id="e47Tbkfs01W340-fill-0" offset="0%" stop-color="#3c59a8" />
                            <stop id="e47Tbkfs01W340-fill-1" offset="100%" stop-color="#445fab" />
                        </linearGradient>
                        <linearGradient id="e47Tbkfs01W347-fill" x1="87.868062" y1="147.982825" x2="16.213262"
                            y2="214.661825" spreadMethod="pad" gradientUnits="userSpaceOnUse"
                            gradientTransform="translate(0 0)">
                            <stop id="e47Tbkfs01W347-fill-0" offset="0%" stop-color="#3c59a8" />
                            <stop id="e47Tbkfs01W347-fill-1" offset="20%" stop-color="#3e5aa9" />
                            <stop id="e47Tbkfs01W347-fill-2" offset="100%" stop-color="#445fab" />
                        </linearGradient>
                        <linearGradient id="e47Tbkfs01W353-fill" x1="7.633883" y1="216.455429" x2="80.696183"
                            y2="149.059129" spreadMethod="pad" gradientUnits="userSpaceOnUse"
                            gradientTransform="translate(0 0)">
                            <stop id="e47Tbkfs01W353-fill-0" offset="0%" stop-color="#3c59a8" />
                            <stop id="e47Tbkfs01W353-fill-1" offset="100%" stop-color="#445fab" />
                        </linearGradient>
                        <linearGradient id="e47Tbkfs01W368-fill" x1="173.32909" y1="56.487176" x2="165.76009" y2="80.848376"
                            spreadMethod="pad" gradientUnits="userSpaceOnUse" gradientTransform="translate(0 0)">
                            <stop id="e47Tbkfs01W368-fill-0" offset="0%" stop-color="#3c59a8" />
                            <stop id="e47Tbkfs01W368-fill-1" offset="100%" stop-color="#445fab" />
                        </linearGradient>
                        <linearGradient id="e47Tbkfs01W375-fill" x1="110.735176" y1="29.311136" x2="230.011176"
                            y2="189.216136" spreadMethod="pad" gradientUnits="userSpaceOnUse"
                            gradientTransform="translate(0 0)">
                            <stop id="e47Tbkfs01W375-fill-0" offset="0%" stop-color="#1d2354" />
                            <stop id="e47Tbkfs01W375-fill-1" offset="100%" stop-color="#293984" />
                        </linearGradient>
                        <linearGradient id="e47Tbkfs01W381-fill" x1="575.935867" y1="195.577345" x2="433.205867"
                            y2="155.242545" spreadMethod="pad" gradientUnits="userSpaceOnUse"
                            gradientTransform="translate(0 0)">
                            <stop id="e47Tbkfs01W381-fill-0" offset="0%" stop-color="#f58f8c" />
                            <stop id="e47Tbkfs01W381-fill-1" offset="100%" stop-color="#f8abaa" />
                        </linearGradient>
                        <linearGradient id="e47Tbkfs01W387-fill" x1="579.425626" y1="179.01928" x2="436.704626"
                            y2="138.68718" spreadMethod="pad" gradientUnits="userSpaceOnUse"
                            gradientTransform="translate(0 0)">
                            <stop id="e47Tbkfs01W387-fill-0" offset="0%" stop-color="#f58f8c" />
                            <stop id="e47Tbkfs01W387-fill-1" offset="100%" stop-color="#f8abaa" />
                        </linearGradient>
                        <linearGradient id="e47Tbkfs01W393-fill" x1="83.488138" y1="49.92025" x2="197.383138"
                            y2="202.611249" spreadMethod="pad" gradientUnits="userSpaceOnUse"
                            gradientTransform="translate(0 0)">
                            <stop id="e47Tbkfs01W393-fill-0" offset="0%" stop-color="#1d2354" />
                            <stop id="e47Tbkfs01W393-fill-1" offset="100%" stop-color="#293984" />
                        </linearGradient>
                        <linearGradient id="e47Tbkfs01W399-fill" x1="157.700326" y1="67.534357" x2="101.015826"
                            y2="112.542557" spreadMethod="pad" gradientUnits="userSpaceOnUse"
                            gradientTransform="translate(0 0)">
                            <stop id="e47Tbkfs01W399-fill-0" offset="0%" stop-color="#f58f8c" />
                            <stop id="e47Tbkfs01W399-fill-1" offset="100%" stop-color="#f8abaa" />
                        </linearGradient>
                        <linearGradient id="e47Tbkfs01W405-fill" x1="119.991895" y1="39.650396" x2="177.205795"
                            y2="73.150496" spreadMethod="pad" gradientUnits="userSpaceOnUse"
                            gradientTransform="translate(0 0)">
                            <stop id="e47Tbkfs01W405-fill-0" offset="0%" stop-color="#f58f8c" />
                            <stop id="e47Tbkfs01W405-fill-1" offset="100%" stop-color="#f8abaa" />
                        </linearGradient>
                        <linearGradient id="e47Tbkfs01W417-fill" x1="116.390895" y1="46.293679" x2="173.604795"
                            y2="79.793779" spreadMethod="pad" gradientUnits="userSpaceOnUse"
                            gradientTransform="translate(0 0)">
                            <stop id="e47Tbkfs01W417-fill-0" offset="0%" stop-color="#f58f8c" />
                            <stop id="e47Tbkfs01W417-fill-1" offset="100%" stop-color="#f8abaa" />
                        </linearGradient>
                        <linearGradient id="e47Tbkfs01W425-fill" x1="161.501198" y1="48.305885" x2="98.432398"
                            y2="60.143085" spreadMethod="pad" gradientUnits="userSpaceOnUse"
                            gradientTransform="translate(0 0)">
                            <stop id="e47Tbkfs01W425-fill-0" offset="0%" stop-color="#f58f8c" />
                            <stop id="e47Tbkfs01W425-fill-1" offset="100%" stop-color="#f8abaa" />
                        </linearGradient>
                        <linearGradient id="e47Tbkfs01W431-fill" x1="158.516364" y1="49.688682" x2="92.911864"
                            y2="62.001782" spreadMethod="pad" gradientUnits="userSpaceOnUse"
                            gradientTransform="translate(0 0)">
                            <stop id="e47Tbkfs01W431-fill-0" offset="0%" stop-color="#f58f8c" />
                            <stop id="e47Tbkfs01W431-fill-1" offset="100%" stop-color="#f8abaa" />
                        </linearGradient>
                        <linearGradient id="e47Tbkfs01W437-fill" x1="96.382496" y1="37.036029" x2="145.100796"
                            y2="244.585029" spreadMethod="pad" gradientUnits="userSpaceOnUse"
                            gradientTransform="translate(0 0)">
                            <stop id="e47Tbkfs01W437-fill-0" offset="0%" stop-color="#1d2354" />
                            <stop id="e47Tbkfs01W437-fill-1" offset="100%" stop-color="#293984" />
                        </linearGradient>
                        <linearGradient id="e47Tbkfs01W449-fill" x1="168.172963" y1="55.321735" x2="154.373863"
                            y2="71.639235" spreadMethod="pad" gradientUnits="userSpaceOnUse"
                            gradientTransform="translate(0 0)">
                            <stop id="e47Tbkfs01W449-fill-0" offset="0%" stop-color="#3c59a8" />
                            <stop id="e47Tbkfs01W449-fill-1" offset="100%" stop-color="#445fab" />
                        </linearGradient>
                        <linearGradient id="e47Tbkfs01W463-fill" x1="-1.019511" y1="13.560176" x2="16.310489" y2="13.560176"
                            spreadMethod="pad" gradientUnits="userSpaceOnUse" gradientTransform="translate(0 0)">
                            <stop id="e47Tbkfs01W463-fill-0" offset="0%" stop-color="#1d2354" />
                            <stop id="e47Tbkfs01W463-fill-1" offset="100%" stop-color="#293984" />
                        </linearGradient>
                        <linearGradient id="e47Tbkfs01W469-fill" x1="210.997125" y1="74.772583" x2="241.504725"
                            y2="41.665383" spreadMethod="pad" gradientUnits="userSpaceOnUse"
                            gradientTransform="translate(0 0)">
                            <stop id="e47Tbkfs01W469-fill-0" offset="0%" stop-color="#f37569" />
                            <stop id="e47Tbkfs01W469-fill-1" offset="100%" stop-color="#f58f8c" />
                        </linearGradient>
                        <linearGradient id="e47Tbkfs01W492-fill" x1="138.702828" y1="-10.275218" x2="199.830628"
                            y2="27.788282" spreadMethod="pad" gradientUnits="userSpaceOnUse"
                            gradientTransform="translate(0 0)">
                            <stop id="e47Tbkfs01W492-fill-0" offset="0%" stop-color="#1d2354" />
                            <stop id="e47Tbkfs01W492-fill-1" offset="100%" stop-color="#293984" />
                        </linearGradient>
                        <linearGradient id="e47Tbkfs01W498-fill" x1="177.306478" y1="13.945573" x2="236.472178"
                            y2="54.974973" spreadMethod="pad" gradientUnits="userSpaceOnUse"
                            gradientTransform="translate(0 0)">
                            <stop id="e47Tbkfs01W498-fill-0" offset="0%" stop-color="#1d2354" />
                            <stop id="e47Tbkfs01W498-fill-1" offset="100%" stop-color="#293984" />
                        </linearGradient>
                        <linearGradient id="e47Tbkfs01W504-fill" x1="198.936061" y1="18.996371" x2="180.851161"
                            y2="51.183671" spreadMethod="pad" gradientUnits="userSpaceOnUse"
                            gradientTransform="translate(0 0)">
                            <stop id="e47Tbkfs01W504-fill-0" offset="0%" stop-color="#3c59a8" />
                            <stop id="e47Tbkfs01W504-fill-1" offset="100%" stop-color="#445fab" />
                        </linearGradient>
                        <linearGradient id="e47Tbkfs01W519-fill" x1="219.829138" y1="101.07546" x2="225.889138"
                            y2="92.85546" spreadMethod="pad" gradientUnits="userSpaceOnUse"
                            gradientTransform="translate(0 0)">
                            <stop id="e47Tbkfs01W519-fill-0" offset="0%" stop-color="#3c59a8" />
                            <stop id="e47Tbkfs01W519-fill-1" offset="100%" stop-color="#445fab" />
                        </linearGradient>
                        <linearGradient id="e47Tbkfs01W525-fill" x1="221.902183" y1="106.018322" x2="228.132183"
                            y2="114.108322" spreadMethod="pad" gradientUnits="userSpaceOnUse"
                            gradientTransform="translate(0 0)">
                            <stop id="e47Tbkfs01W525-fill-0" offset="0%" stop-color="#3c59a8" />
                            <stop id="e47Tbkfs01W525-fill-1" offset="100%" stop-color="#445fab" />
                        </linearGradient>
                        <linearGradient id="e47Tbkfs01W534-fill" x1="222.28831" y1="102.201018" x2="232.07771"
                            y2="102.095118" spreadMethod="pad" gradientUnits="userSpaceOnUse"
                            gradientTransform="translate(0 0)">
                            <stop id="e47Tbkfs01W534-fill-0" offset="0%" stop-color="#cfdaef" />
                            <stop id="e47Tbkfs01W534-fill-1" offset="100%" stop-color="#e1e8f6" />
                        </linearGradient>
                        <linearGradient id="e47Tbkfs01W540-fill" x1="227.499867" y1="94.027186" x2="217.964067"
                            y2="117.892586" spreadMethod="pad" gradientUnits="userSpaceOnUse"
                            gradientTransform="translate(0 0)">
                            <stop id="e47Tbkfs01W540-fill-0" offset="0%" stop-color="#f37569" />
                            <stop id="e47Tbkfs01W540-fill-1" offset="100%" stop-color="#f58f8c" />
                        </linearGradient>
                        <linearGradient id="e47Tbkfs01W556-fill" x1="491.104971" y1="281.75586" x2="495.070071"
                            y2="284.33476" spreadMethod="pad" gradientUnits="userSpaceOnUse"
                            gradientTransform="translate(0 0)">
                            <stop id="e47Tbkfs01W556-fill-0" offset="0%" stop-color="#f37569" />
                            <stop id="e47Tbkfs01W556-fill-1" offset="100%" stop-color="#f58f8c" />
                        </linearGradient>
                        <linearGradient id="e47Tbkfs01W562-fill" x1="491.485975" y1="281.062815" x2="495.451075"
                            y2="283.641715" spreadMethod="pad" gradientUnits="userSpaceOnUse"
                            gradientTransform="translate(0 0)">
                            <stop id="e47Tbkfs01W562-fill-0" offset="0%" stop-color="#f37569" />
                            <stop id="e47Tbkfs01W562-fill-1" offset="100%" stop-color="#f58f8c" />
                        </linearGradient>
                        <linearGradient id="e47Tbkfs01W569-fill" x1="225.123307" y1="102.812799" x2="225.241007"
                            y2="96.843999" spreadMethod="pad" gradientUnits="userSpaceOnUse"
                            gradientTransform="translate(0 0)">
                            <stop id="e47Tbkfs01W569-fill-0" offset="0%" stop-color="#f37569" />
                            <stop id="e47Tbkfs01W569-fill-1" offset="100%" stop-color="#f58f8c" />
                        </linearGradient>
                        <linearGradient id="e47Tbkfs01W575-fill" x1="226.465585" y1="106.71491" x2="226.938185"
                            y2="101.68711" spreadMethod="pad" gradientUnits="userSpaceOnUse"
                            gradientTransform="translate(0 0)">
                            <stop id="e47Tbkfs01W575-fill-0" offset="0%" stop-color="#f37569" />
                            <stop id="e47Tbkfs01W575-fill-1" offset="100%" stop-color="#f58f8c" />
                        </linearGradient>
                    </defs>
                    <g id="e47Tbkfs01W60">
                        <g clip-path="url(#e47Tbkfs01W64)">
                            <g>
                                <rect width="243.8" height="157.4" rx="0" ry="0" transform="translate(10.6 5.1)"
                                    fill="url(#e47Tbkfs01W63-fill)" />
                            </g>
                            <clipPath id="e47Tbkfs01W64">
                                <use width="241.09845" height="156.953049" xlink:href="#e47Tbkfs01W2" />
                            </clipPath>
                        </g>
                    </g>
                    <g>
                        <g clip-path="url(#e47Tbkfs01W214)">
                            <g>
                                <g id="e47Tbkfs01W69"
                                    transform="matrix(.999749-.022399 0.022399 0.999749-3.383134 1.563483)">
                                    <path d="M14.4,75.3c.5,11.4,5.3,77.4,54.5,77c0,0,5.5-45.5-53.4-78-.5-.3-1.2.3-1.1,1"
                                        fill="#b0c6e7" />
                                    <path
                                        d="M20.4,83.4c0,0,.4,1.2,1.2,3.3.4,1,.9,2.3,1.5,3.8s1.3,3,2,4.8s1.6,3.7,2.5,5.6s1.9,4.1,3,6.2s2.2,4.3,3.4,6.5c.6,1.1,1.2,2.2,1.9,3.3s1.3,2.2,2,3.3s1.3,2.2,2,3.2c.3.5.7,1.1,1,1.6s.7,1,1.1,1.6.7,1,1.1,1.5.7,1,1.1,1.5c.7,1,1.5,2,2.2,2.9c1.5,1.9,3,3.6,4.4,5.3.3.4.7.8,1.1,1.2l1.1,1c.3.4.7.7,1.1,1.1l1,1l.5.5.5.4l1,.9c.3.3.6.6,1,.8l.9.7.9.7.4.3.4.3l1.5,1c.4.3.8.5,1.3.8l.9.5.8.5v0c.3.1.5.5.3.8-.1.3-.5.5-.8.3-.1,0-.1-.1-.2-.1v0l-.8-.5-1-.6c-.4-.2-.9-.5-1.3-.8l-1.5-1.1-.4-.3-.4-.3-.9-.7-1-.8c-.3-.3-.6-.6-1-.9l-1-.9-.5-.5-.5-.5-1.1-1c-.4-.4-.7-.7-1.1-1.1s-.7-.8-1.1-1.2-.8-.8-1.1-1.2c-1.5-1.6-3-3.4-4.4-5.4-.7-1-1.5-1.9-2.2-2.9-.3-.5-.7-1-1.1-1.5s-.7-1-1-1.6L40,125.1l-1-1.6c-.7-1.1-1.3-2.2-2-3.3s-1.3-2.2-1.9-3.3-1.2-2.2-1.8-3.3c-1.2-2.2-2.3-4.4-3.4-6.6s-2-4.3-3-6.3-1.7-3.9-2.5-5.7c-2.9-7-4.5-11.8-4.5-11.8c0-.1,0-.3.2-.3.2.3.3.3.3.5"
                                        fill="#86a9d9" />
                                </g>
                                <g id="e47Tbkfs01W72" transform="matrix(1 0.000473-.000473 1 0.072434-.038626)">
                                    <path
                                        d="M48.7,10.7c.4-1.1,1.5-.7,2.2.2c43,50.3,48.1,129.9,30.7,149c.1,0-77.5-25.3-32.9-149.2"
                                        fill="#86a9d9" />
                                    <path
                                        d="M49.2,26.9v.4c0,.2,0,.6,0,1c0,.9.1,2.2.2,3.9s.3,3.7.5,6.1.5,5,.8,7.9.7,6,1.1,9.3.9,6.8,1.5,10.4c.5,3.6,1.2,7.3,1.9,11c.2.9.3,1.9.5,2.8s.4,1.9.6,2.8c.4,1.9.8,3.8,1.2,5.7s.9,3.8,1.3,5.6.9,3.7,1.4,5.6s1,3.7,1.5,5.5c.3.9.5,1.8.8,2.7.1.4.3.9.4,1.3s.3.9.4,1.3c.3.9.5,1.7.8,2.6.1.4.3.8.4,1.3l.4,1.3c.6,1.7,1.1,3.3,1.7,4.8.3.8.6,1.5.8,2.3.1.4.3.8.4,1.1s.3.7.4,1.1c.6,1.4,1.1,2.9,1.7,4.2s1.1,2.6,1.7,3.8s1.1,2.3,1.6,3.4l.7,1.6.7,1.4l1.3,2.5c.4.8.8,1.4,1.1,2l.8,1.5.7,1.2v0c0,.1,0,.2-.1.2s-.1,0-.2,0l-.7-1.2c-.5-.8-1.2-1.9-2-3.4l-1.2-2.4-.8-1.4-.8-1.5c-.5-1.1-1.1-2.2-1.6-3.4l-1.7-3.8c-.6-1.3-1.1-2.8-1.7-4.2-.1-.4-.3-.7-.4-1.1s-.3-.8-.4-1.1c-.3-.8-.6-1.5-.9-2.3-1.2-3.1-2.3-6.5-3.4-9.9-.1-.4-.3-.9-.4-1.3l-.4-1.3-.8-2.7c-.5-1.8-1-3.6-1.5-5.5s-.9-3.7-1.4-5.6l-.7-2.8c-.2-1-.4-1.9-.6-2.8-.4-1.9-.8-3.8-1.2-5.7-.2-1-.4-1.9-.6-2.8s-.3-1.9-.5-2.8c-.7-3.8-1.3-7.5-1.8-11.1s-1-7.1-1.4-10.4-.7-6.4-1-9.3c-.5-5.8-.8-10.6-1-14-.1-1.7-.1-3-.1-3.9c0-.5,0-.8,0-1s0-.4,0-.4c0-.1.1-.1.1-.1s0,0,0,0c-.2-.5-.1-.4-.1-.4v0Z"
                                        fill="#b0c6e7" />
                                </g>
                                <path
                                    d="M233.9,154.4c.1-.6,0-1.1-.4-1.6-.3-.4-.8-.7-1.3-.7h-174.6c-.7,0-1.3.4-1.7,1-.4.7-.4,1.4-.1,2.1l1.9,4.6c.4,1,1.3,1.7,2.4,1.7h171c1,0,1.9-.8,2-1.8l.8-5.3Z"
                                    fill="#768ec8" />
                                <path
                                    d="M128.1,114.9h.8c.2,0,.3.2.2.3c0,.1-.1.2-.2.2v0h-.8v0c-.1,0-.3-.1-.3-.2c0,0,0,0,0,0c0-.2.1-.3.3-.3"
                                    fill="#86a9d9" />
                                <path
                                    d="M130.7,114.8h.8c.2,0,.3.1.3.3c0,0,0,0,0,0c0,.2-.2.3-.3.3c0,0,0,0,0,0v0h-.8v0c-.2,0-.3-.1-.4-.2s.1-.3.2-.4c.1,0,.2,0,.2,0"
                                    fill="#86a9d9" />
                                <path
                                    d="M133.4,115l.8.1c.2,0,.4.1.4.3s-.1.4-.3.4c0,0-.1,0-.1,0v0l-.8-.1v0c-.2,0-.3-.2-.3-.4c0,0,0,0,0,0-.1-.2.1-.3.3-.3"
                                    fill="#86a9d9" />
                                <path
                                    d="M136,115.3l.8.2c.2,0,.3.2.3.4s-.2.3-.4.3v0l-.8-.2v0c-.2,0-.3-.2-.3-.4c0-.1.2-.3.4-.3v0"
                                    fill="#86a9d9" />
                                <path
                                    d="M138.6,115.9l.8.2c.2.1.3.3.3.5-.1.2-.3.3-.5.3v0l-.8-.2v0c-.2-.1-.3-.3-.3-.5.1-.2.3-.4.5-.3"
                                    fill="#86a9d9" />
                                <path
                                    d="M141.1,116.6l.8.2c.2.1.4.3.3.5c0,0,0,0,0,0-.1.2-.3.4-.6.3v0l-.7-.3v0c-.2-.1-.3-.4-.2-.6.1,0,.3-.1.4-.1"
                                    fill="#86a9d9" />
                                <path
                                    d="M143.6,117.5l.7.3c.2.1.4.4.3.6c0,0,0,0,0,0-.1.2-.3.4-.6.3c0,0,0,0,0,0v0l-.7-.3v0c-.2-.1-.3-.4-.3-.6.2-.3.4-.4.6-.3.1,0,.1,0,0,0"
                                    fill="#86a9d9" />
                                <path
                                    d="M146.1,118.4l.7.3c.2.1.4.4.3.7-.1.2-.4.4-.6.3v0l-.7-.3v0c-.2-.1-.4-.4-.3-.6c0,0,0,0,0,0c.1-.4.4-.5.6-.4"
                                    fill="#86a9d9" />
                                <path
                                    d="M148.5,119.5l.7.3c.2.1.3.5.2.7s-.4.3-.6.2v0l-.7-.3v0c-.2-.1-.4-.4-.2-.7c0,0,0,0,0,0c.1-.2.4-.3.6-.2"
                                    fill="#86a9d9" />
                                <path
                                    d="M150.9,120.7l.7.4c.3.1.4.4.2.7-.1.3-.4.4-.7.2v0l-.7-.4v0c-.2-.1-.3-.5-.2-.7.2-.2.5-.3.7-.2"
                                    fill="#86a9d9" />
                                <path
                                    d="M153.2,121.9l.7.4c.3.1.4.5.2.8-.1.3-.5.4-.8.2v0l-.7-.4v0c-.2-.2-.3-.5-.1-.8.2-.2.5-.2.7-.2"
                                    fill="#86a9d9" />
                                <path
                                    d="M155.5,123.2l.7.4c.3.1.4.5.2.7c0,0,0,0,0,0-.1.3-.5.4-.8.2v0l-.7-.4v0c-.3-.1-.4-.5-.2-.7c0,0,0,0,0,0c.2-.3.6-.3.8-.2"
                                    fill="#86a9d9" />
                                <path
                                    d="M157.8,124.5l.7.4c.3.1.4.5.3.8s-.5.4-.8.3c0,0-.1,0-.1,0v0l-.7-.4c-.3-.2-.3-.5-.1-.8.2-.4.5-.4.7-.3"
                                    fill="#86a9d9" />
                                <path
                                    d="M160.1,125.8l.7.4c.3.2.4.5.2.8c0,0,0,0,0,0-.2.3-.5.4-.8.2v0l-.7-.4c-.3-.2-.4-.5-.2-.8s.5-.3.8-.2c0,0,0,0,0,0"
                                    fill="#86a9d9" />
                                <path
                                    d="M162.4,127.2l.7.4c.3.2.4.5.2.8c0,0,0,0,0,0-.2.3-.5.4-.8.2c0,0,0,0,0,0v0l-.7-.4c-.3-.2-.4-.5-.2-.8.1-.3.5-.4.8-.2"
                                    fill="#86a9d9" />
                                <path
                                    d="M164.6,128.5l.7.4c.3.2.4.6.2.9s-.6.4-.9.2v0l-.7-.4c-.3-.2-.4-.5-.2-.8c0,0,0,0,0,0c.3-.4.6-.5.9-.3"
                                    fill="#86a9d9" />
                                <path
                                    d="M166.9,129.8l.7.4v0c.3.2.4.5.2.8c0,0,0,0,0,0-.2.3-.5.4-.8.2c0,0,0,0,0,0v0l-.7-.4c-.3-.2-.3-.6-.1-.9.1-.1.4-.2.7-.1"
                                    fill="#86a9d9" />
                                <path
                                    d="M169.2,131.1l.7.4v0c.3.2.4.6.3.9s-.6.4-.9.3v0v0l-.7-.4c-.3-.2-.4-.5-.3-.8c0,0,0,0,0,0c.2-.5.6-.6.9-.4"
                                    fill="#86a9d9" />
                                <path
                                    d="M171.5,132.3l.7.4v0c.3.2.4.5.3.8c0,0,0,0,0,0-.2.3-.5.4-.9.3v0l-.7-.4c-.3-.2-.4-.6-.2-.9.1-.2.5-.3.8-.2v0Z"
                                    fill="#86a9d9" />
                                <path
                                    d="M173.8,133.5l.7.3v0c.3.1.6.4.5.8-.1.3-.4.6-.8.5-.1,0-.1,0-.2-.1v0l-.7-.4c-.3-.2-.5-.5-.3-.9.1-.2.5-.4.8-.2v0Z"
                                    fill="#86a9d9" />
                                <path
                                    d="M176.2,134.6l.7.3v0c.3.1.5.5.3.8c0,0,0,0,0,0-.1.3-.5.5-.9.3v0l-.7-.3c-.3-.2-.5-.5-.3-.9.2-.2.5-.3.9-.2v0Z"
                                    fill="#86a9d9" />
                                <path
                                    d="M178.6,135.6l.7.3v0c.3.1.5.5.4.9-.1.3-.5.5-.8.4c0,0,0,0,0,0v0l-.7-.3c-.4-.1-.6-.5-.5-.8.1-.4.5-.6.8-.5-.1,0,0,0,.1,0v0Z"
                                    fill="#86a9d9" />
                                <path
                                    d="M181,136.5l.7.3v0c.3.1.5.5.4.8c0,0,0,0,0,0-.1.3-.5.5-.8.4v0l-.8-.3c-.3-.1-.5-.5-.4-.9.2-.2.6-.4.9-.3v0Z"
                                    fill="#86a9d9" />
                                <path
                                    d="M183.5,137.4l.7.2v0c.3.1.5.5.4.9-.1.3-.5.5-.8.4v0l-.8-.2c-.3-.2-.5-.5-.3-.9.1-.3.4-.5.8-.4v0Z"
                                    fill="#86a9d9" />
                                <path
                                    d="M186,138.1l.8.2v0c.4.1.6.5.5.8-.1.4-.5.6-.8.5v0v0l-.8-.2c-.4-.1-.6-.5-.5-.8.1-.4.4-.6.8-.5c0,0,0,0,0,0Z"
                                    fill="#86a9d9" />
                                <path
                                    d="M188.5,138.7l.8.2v0c.4.1.6.4.5.8c0,0,0,0,0,0-.1.4-.4.6-.8.5c0,0,0,0,0,0l-.8-.2c-.4-.1-.6-.4-.5-.8c0-.3.4-.6.8-.5v0Z"
                                    fill="#86a9d9" />
                                <path
                                    d="M191,139.3l.8.1v0c.4.1.6.4.5.7c0,0,0,0,0,0-.1.4-.4.6-.8.5l-.8-.1c-.4-.1-.6-.4-.5-.8.1-.3.4-.5.8-.4v0v0v0Z"
                                    fill="#86a9d9" />
                                <path
                                    d="M193.6,139.7l.8.1v0c.4.1.6.5.5.8s-.3.5-.7.5l-.8-.1c-.4,0-.6-.4-.6-.7.1-.4.4-.7.8-.6v0v0Z"
                                    fill="#86a9d9" />
                                <path
                                    d="M196.2,140l.8.1v0c.4,0,.6.4.6.7s-.4.6-.7.6v0l-.8-.1c-.4,0-.6-.3-.6-.7c0,0,0,0,0,0c0-.4.3-.6.7-.6v0v0Z"
                                    fill="#86a9d9" />
                                <path
                                    d="M198.8,140.2h.8v0c.4,0,.6.3.6.7s-.3.6-.7.6h-.8c-.4,0-.6-.3-.6-.7c0,0,0,0,0,0c0-.4.3-.7.7-.6v0v0Z"
                                    fill="#86a9d9" />
                                <path
                                    d="M201.3,140.2h.8c.4,0,.6.3.6.7s-.3.6-.6.6h-.8c-.4,0-.6-.3-.7-.6.1-.4.3-.6.7-.7c0,0,0,0,0,0v0v0Z"
                                    fill="#86a9d9" />
                                <path
                                    d="M203.9,140.2h.8v0c.4,0,.7.2.7.6c0,0,0,0,0,0c0,.4-.2.7-.6.7c0,0,0,0,0,0l-.8.1c-.4.1-.7-.2-.8-.5-.1-.4.2-.7.5-.8.1-.1.2-.1.2-.1v0v0Z"
                                    fill="#86a9d9" />
                                <path
                                    d="M206.5,140l.8-.1v0c.3,0,.7.2.7.5c0,0,0,0,0,0c0,.4-.2.7-.6.7l-.8.1c-.4,0-.7-.2-.7-.6s.2-.6.6-.6v0v0Z"
                                    fill="#86a9d9" />
                                <path
                                    d="M209.1,139.6l.8-.1v0c.3-.1.7.2.7.5c0,0,0,0,0,0c.1.3-.2.7-.5.7l-.8.1c-.4,0-.7-.2-.7-.5-.1-.3.1-.6.5-.7v0v0Z"
                                    fill="#86a9d9" />
                                <path
                                    d="M211.6,139.1l.8-.2v0c.4,0,.7.2.7.6c0,.3-.1.6-.4.7l-.8.2c-.3.1-.7-.1-.8-.5c0-.3.2-.7.5-.8c0,.1,0,.1,0,0v0v0Z"
                                    fill="#86a9d9" />
                                <path
                                    d="M214.1,138.5l.7-.2v0c.3-.1.7.1.8.4s-.1.7-.4.8l-.8.2c-.3.1-.7-.1-.8-.4c0-.3.2-.7.5-.8c0,0,0,0,0,0v0v0Z"
                                    fill="#86a9d9" />
                                <path
                                    d="M216.6,137.7l.7-.3v0c.3-.1.7,0,.8.4.1.3,0,.7-.4.8v0l-.8.3c-.3.1-.7-.1-.8-.4.1-.3.2-.6.5-.8v0v0Z"
                                    fill="#86a9d9" />
                                <path
                                    d="M219,136.8l.7-.3v0c.3-.1.7,0,.8.3s0,.7-.3.8c0,0,0,0,0,0l-.7.3c-.3.1-.7,0-.8-.3-.2-.3,0-.6.3-.8v0v0Z"
                                    fill="#86a9d9" />
                                <path
                                    d="M221.4,135.7l.7-.4v0c.3-.2.7,0,.8.3c0,0,0,0,0,0c.2.3,0,.7-.3.8c0,0,0,0,0,0l-.7.4c-.3.2-.7,0-.8-.3c0,0,0,0,0,0-.2-.2-.1-.6.3-.8-.1,0-.1,0,0,0v0v0Z"
                                    fill="#86a9d9" />
                                <path
                                    d="M223.6,134.5l.7-.4v0c.3-.2.7-.1.8.2s.1.7-.2.8v0l-.7.4c-.3.2-.7.1-.9-.2-.1-.3,0-.6.3-.8c0,0,0,0,0,0v0v0Z"
                                    fill="#86a9d9" />
                                <path
                                    d="M225.8,133.1l.6-.4v0c.3-.2.7-.1.8.2.2.3.1.7-.1.8l-.7.5c-.3.2-.7.1-.8-.2s-.1-.7.2-.9v0v0Z"
                                    fill="#86a9d9" />
                                <path
                                    d="M227.9,131.6l.6-.5v0c.3-.2.6-.1.8.2.2.2.1.6-.1.8l-.6.5c-.3.2-.6.2-.8-.1c0,0,0,0,0,0-.2-.3-.2-.7.1-.9c0,0,0,0,0,0v0v0Z"
                                    fill="#86a9d9" />
                                <path
                                    d="M229.9,129.9l.6-.5v0c.2-.2.6-.2.8,0s.2.6,0,.8c0,0,0,0,0,0l-.6.6c-.2.2-.6.2-.8,0-.2-.3-.2-.7,0-.9v0v0Z"
                                    fill="#86a9d9" />
                                <path
                                    d="M231.8,128.1l.5-.6v0c.2-.2.6-.2.8,0c0,0,0,0,0,0c.2.2.2.6,0,.8l-.6.6c-.2.2-.6.2-.8,0c0,0,0,0,0,0-.2-.2-.2-.5.1-.8v0v0Z"
                                    fill="#86a9d9" />
                                <path
                                    d="M233.6,126.2l.5-.6v0c.2-.2.6-.3.8-.1s.3.6.1.8v0l-.5.6c-.2.3-.5.3-.8.1s-.4-.4-.1-.8c-.1.1-.1.1,0,0v0v0Z"
                                    fill="#86a9d9" />
                                <path
                                    d="M235.2,124.2l.5-.6v0c.2-.2.5-.3.8-.1.2.2.3.5.1.8v0l-.5.7c-.2.2-.6.2-.8,0-.2-.3-.3-.5-.1-.8v0v0Z"
                                    fill="#86a9d9" />
                                <path
                                    d="M236.7,122.1l.4-.7v0c.2-.3.5-.3.7-.2c0,0,0,0,0,0c.2.2.3.5.2.7l-.4.7c-.2.3-.5.3-.8.2-.2-.1-.3-.4-.1-.7v0v0Z"
                                    fill="#86a9d9" />
                                <path
                                    d="M238,119.9l.4-.7v0c.1-.3.5-.4.7-.2.3.1.4.4.2.7c0,0,0,0,0,0l-.4.7c-.1.3-.4.4-.7.2c0,0,0,0,0,0-.2-.1-.3-.4-.2-.7v0v0Z"
                                    fill="#86a9d9" />
                                <path
                                    d="M239.1,117.6l.3-.7v0c.1-.3.4-.4.7-.3c0,0,0,0,0,0c.3.1.4.4.3.7c0,0,0,0,0,0l-.3.7c-.1.3-.4.4-.7.3c0,0,0,0,0,0-.3-.1-.4-.4-.3-.7v0v0Z"
                                    fill="#86a9d9" />
                                <path
                                    d="M240.1,115.2l.3-.7v0c.1-.3.4-.4.6-.3.3.1.4.4.3.6l-.3.8c-.1.3-.4.4-.6.3c0,0,0,0,0,0-.2-.2-.4-.4-.3-.7c0,0,0,0,0,0v0v0Z"
                                    fill="#86a9d9" />
                                <path
                                    d="M240.9,112.7l.2-.8v0c.1-.3.3-.4.6-.3s.4.3.3.6l-.2.8c-.1.3-.3.4-.6.4-.2-.1-.4-.4-.3-.7v0v0Z"
                                    fill="#86a9d9" />
                                <path
                                    d="M241.5,110.2l.1-.8v0c0-.3.2-.5.5-.5s.5.2.5.5c0,0,0,.1,0,.1l-.1.8c0,.3-.3.4-.6.4s-.5-.2-.4-.5v0v0v0Z"
                                    fill="#86a9d9" />
                                <path d="M241.8,107.6l.1-.8v0c0-.3.2-.4.5-.4s.4.2.4.5v.8c0,.3-.2.5-.5.4s-.5-.2-.5-.5v0v0Z"
                                    fill="#86a9d9" />
                                <path
                                    d="M241.9,105v-.8v0c0-.2.2-.4.4-.5.2,0,.4.2.5.4v.8c0,.2-.2.4-.5.4-.2.1-.4-.1-.4-.3v0v0Z"
                                    fill="#86a9d9" />
                                <path
                                    d="M241.7,102.5l-.1-.8v0c0-.2.1-.4.4-.5.2,0,.4.1.5.4l.1.8c0,.2-.1.5-.4.5-.2,0-.4-.2-.5-.4.1,0,.1,0,0,0v0v0Z"
                                    fill="#86a9d9" />
                                <path
                                    d="M241.3,99.9l-.2-.8v0c-.1-.2.1-.4.3-.5c0,0,0,0,0,0c.2-.1.4.1.5.3c0,0,0,0,0,0l.2.8c.1.2-.1.4-.3.5s-.4,0-.5-.3c0,.1,0,.1,0,0v0v0Z"
                                    fill="#86a9d9" />
                                <path
                                    d="M240.6,97.4l-.3-.7v0c-.1-.2,0-.4.2-.5c0,0,0,0,0,0c.2-.1.4,0,.5.2l.3.8c0,.2-.1.4-.3.5-.1,0-.3-.1-.4-.3v0v0Z"
                                    fill="#86a9d9" />
                                <path
                                    d="M239.6,95.1l-.4-.7v0c-.1-.2,0-.4.1-.5.2-.1.4,0,.5.1v0l.4.7c.1.2,0,.4-.1.5c0,0,0,0,0,0-.2.1-.4.1-.5-.1v0v0Z"
                                    fill="#86a9d9" />
                                <path
                                    d="M238.3,92.8l-.4-.6v0c-.1-.2-.1-.4.1-.5c0,0,0,0,0,0c.2-.1.4-.1.5.1l.5.6c.1.2.1.4-.1.5c0,0,0,0,0,0-.3.2-.5.1-.6-.1c0,.1,0,.1,0,0v0v0Z"
                                    fill="#86a9d9" />
                                <path
                                    d="M236.7,90.8l-.6-.5v0c-.1-.1-.1-.4.1-.5.1-.1.3-.1.4,0l.6.6c.1.1.1.3,0,.5-.2.1-.4.1-.5-.1v0v0Z"
                                    fill="#86a9d9" />
                                <path
                                    d="M234.7,89.2l-.6-.4v0c-.1-.1-.2-.3-.1-.4c0,0,0,0,0,0c.1-.1.3-.2.4-.1c0,0,0,0,0,0l.7.4c.1.1.2.3.1.4c0,0,0,0,0,0-.1.1-.3.2-.5.1v0v0Z"
                                    fill="#86a9d9" />
                                <path
                                    d="M232.5,87.8l-.7-.3v0c-.1-.1-.2-.2-.1-.3c0-.1.2-.2.3-.2l.8.3c.1.1.2.2.2.4-.1.1-.3.2-.5.1c0,0,0,0,0,0v0v0Z"
                                    fill="#86a9d9" />
                                <path
                                    d="M108.7,91.9l.2.9v0c0,.2-.1.3-.3.3s-.3-.1-.3-.2c0,0,0,0,0,0v0l-.1-.9c0-.2.1-.3.2-.3c0,0,0,0,0,0c.2-.1.3,0,.3.2c0-.1,0-.1,0,0v0Z"
                                    fill="#768ec8" />
                                <path
                                    d="M109.3,94.7l.2.8v0c0,.2,0,.3-.2.4-.2,0-.3-.1-.4-.2c0,0,0,0,0,0v0l-.2-.9c0-.2.1-.3.2-.4.2,0,.4.1.4.3v0Z"
                                    fill="#768ec8" />
                                <path
                                    d="M110.2,97.5l.3.8v0c.1.2,0,.4-.2.4-.2.1-.4,0-.4-.2v0l-.3-.8c-.1-.2,0-.3.2-.4c0,0,0,0,0,0c.1-.1.3,0,.4.2v0Z"
                                    fill="#768ec8" />
                                <path
                                    d="M111.3,100.2l.4.8v0c.1.2,0,.4-.1.4c0,0,0,0,0,0-.2.1-.4,0-.4-.2v0l-.4-.8c-.1-.2,0-.4.2-.4c0,0,0,0,0,0c0-.1.2,0,.3.2c0,0,0,0,0,0v0Z"
                                    fill="#768ec8" />
                                <path
                                    d="M112.6,102.8l.4.8v0c.1.2,0,.4-.1.5-.2.1-.4,0-.5-.1v0l-.4-.8c-.1-.2,0-.4.1-.5.2-.2.4-.1.5.1v0Z"
                                    fill="#768ec8" />
                                <path
                                    d="M114.2,105.2l.5.7v0c.1.1.1.4-.1.5c0,0,0,0,0,0-.2.1-.4.1-.5-.1c0,0,0,0,0,0v0l-.5-.7c-.1-.2-.1-.4.1-.5c0,0,0,0,0,0c.2-.1.4,0,.5.1v0Z"
                                    fill="#768ec8" />
                                <path
                                    d="M115.9,107.6l.6.7v0c.1.1.1.4,0,.5c0,0,0,0,0,0-.1.1-.4.1-.5,0c0,0,0,0,0,0v0l-.6-.7c-.1-.1-.1-.4,0-.5c0,0,0,0,0,0c.1-.2.4-.2.5,0v0Z"
                                    fill="#768ec8" />
                                <path
                                    d="M117.8,109.8l.6.6v0c.1.2.1.4-.1.5-.1.1-.3.1-.5,0l-.6-.7c-.1-.1-.1-.4,0-.5s.5-.1.6.1v0v0Z"
                                    fill="#768ec8" />
                                <path
                                    d="M119.8,111.9l.6.6v0c.1.1.2.4,0,.5s-.4.2-.5,0v0l-.7-.6c-.1-.1-.2-.4,0-.5s.5-.2.6,0v0v0Z"
                                    fill="#768ec8" />
                                <path
                                    d="M122,113.8l.7.6v0c.1.1.1.4,0,.5c0,0,0,0,0,0-.1.1-.4.1-.5,0l-.7-.6c-.2-.1-.2-.4,0-.5s.3-.2.5,0v0Z"
                                    fill="#768ec8" />
                                <path
                                    d="M124.3,115.6l.7.5v0c.2.1.2.3.1.5c0,0,0,0,0,0-.1.2-.4.2-.5.1l-.7-.5c-.2-.1-.2-.4-.1-.5.1-.2.3-.2.5-.1v0Z"
                                    fill="#768ec8" />
                                <path
                                    d="M126.7,117.3l.7.5v0c.2.1.2.4.1.5s-.4.2-.5.1v0l-.7-.5c-.2-.1-.2-.4-.1-.5s.3-.2.5-.1v0v0Z"
                                    fill="#768ec8" />
                                <path
                                    d="M129.2,118.9l.8.4v0c.2.1.2.4.1.5s-.3.2-.5.1l-.8-.5c-.2-.1-.2-.3-.1-.5c0-.1.3-.1.5,0v0Z"
                                    fill="#768ec8" />
                                <path
                                    d="M131.7,120.4l.8.4v0c.2.1.3.3.2.5c0,0,0,0,0,0-.1.2-.3.3-.5.2l-.8-.4c-.2-.1-.3-.3-.2-.5c0,0,0,0,0,0c.1-.3.3-.4.5-.2c0-.1,0-.1,0,0v0Z"
                                    fill="#768ec8" />
                                <path
                                    d="M134.3,121.7l.8.4v0c.2.1.3.3.2.5c0,0,0,0,0,0-.1.2-.3.3-.5.2c0,0,0,0,0,0l-.8-.4c-.2-.1-.3-.3-.2-.5c0,0,0,0,0,0c0-.2.3-.3.5-.2v0Z"
                                    fill="#768ec8" />
                                <path
                                    d="M136.9,123l.8.4v0c.2.1.3.3.2.5s-.3.3-.5.2c0,0,0,0,0,0l-.8-.4c-.2-.1-.3-.3-.2-.5c0,0,0,0,0,0c.1-.2.3-.3.5-.2c0,0,0,0,0,0v0Z"
                                    fill="#768ec8" />
                                <path
                                    d="M139.6,124.2l.8.3v0c.2.1.3.3.2.5s-.3.3-.5.2v0l-.8-.3c-.2-.1-.3-.3-.2-.5c0,0,0,0,0,0c.1-.2.3-.3.5-.2c0,0,0,0,0,0Z"
                                    fill="#768ec8" />
                                <path
                                    d="M142.3,125.3l.8.3v0c.2.1.3.3.2.5c0,0,0,0,0,0-.1.2-.3.3-.5.2l-.8-.3c-.2-.1-.3-.3-.2-.5c0,0,0,0,0,0c.1-.2.3-.3.5-.2"
                                    fill="#768ec8" />
                                <path
                                    d="M145,126.4l.8.3v0c.2.1.3.3.2.5c0,0,0,0,0,0-.1.2-.3.3-.5.2c0,0,0,0,0,0l-.8-.3c-.2-.1-.3-.3-.2-.5c0,0,0,0,0,0c0-.2.3-.3.5-.2c0,0,0,0,0,0"
                                    fill="#768ec8" />
                                <path
                                    d="M147.8,127.4l.8.3v0c.2.1.3.3.3.5-.1.2-.3.3-.5.3c0,0,0,0,0,0l-.8-.3c-.2-.1-.3-.3-.2-.5c0,0,0,0,0,0-.1-.3.2-.4.4-.3c0,0,0,0,0,0"
                                    fill="#768ec8" />
                                <path
                                    d="M150.6,128.4l.8.3v0c.2.1.3.3.3.5-.1.2-.3.3-.5.3l-.8-.3c-.2-.1-.3-.3-.3-.5c0,0,0,0,0,0c0-.3.2-.4.5-.3"
                                    fill="#768ec8" />
                                <path
                                    d="M153.3,129.3l.8.3v0c.2.1.3.3.3.5c0,0,0,0,0,0-.1.2-.3.3-.5.3c0,0,0,0,0,0l-.8-.3c-.2,0-.4-.3-.3-.5c0-.2.3-.4.5-.3c0,0,0,0,0,0"
                                    fill="#768ec8" />
                                <path
                                    d="M156.1,130.2l.8.3v0c.2.1.4.3.3.5c0,0,0,0,0,0-.1.2-.3.4-.5.3l-.9-.3c-.2-.1-.3-.3-.3-.5.2-.2.4-.4.6-.3"
                                    fill="#768ec8" />
                                <path
                                    d="M159,131l.9.2v0c.2.1.3.3.3.5-.1.2-.3.3-.5.3l-.9-.2c-.2-.1-.3-.3-.2-.6c0-.1.2-.2.4-.2Z"
                                    fill="#768ec8" />
                                <path
                                    d="M161.8,131.8l.9.2v0c.2.1.4.3.3.5s-.3.4-.5.3l-.9-.2c-.2-.1-.4-.3-.3-.5c0-.3.3-.4.5-.3v0Z"
                                    fill="#768ec8" />
                                <path
                                    d="M164.6,132.4l.9.2v0c.2,0,.4.3.3.5c0,.2-.3.4-.5.3c0,0,0,0,0,0l-.9-.2c-.2-.1-.4-.3-.3-.5s.3-.3.5-.3v0Z"
                                    fill="#768ec8" />
                                <path
                                    d="M167.5,133l.9.2v0c.2,0,.4.3.3.5c0,.2-.3.4-.5.3l-.9-.2c-.2,0-.4-.3-.3-.5c0,0,0,0,0,0c0-.2.3-.3.5-.3c0,0,0,0,0,0v0Z"
                                    fill="#768ec8" />
                                <path
                                    d="M170.4,133.5l.9.1v0c.2,0,.4.2.4.5c0,0,0,0,0,0c0,.2-.2.4-.5.4c0,0,0,0,0,0l-.9-.1c-.2,0-.4-.2-.4-.5c0,0,0,0,0,0c0-.2.2-.4.5-.4v0Z"
                                    fill="#768ec8" />
                                <path
                                    d="M173.3,134l.9.1v0c.2,0,.4.2.4.5s-.2.4-.5.4l-.9-.1c-.2,0-.4-.2-.4-.5s.2-.4.5-.4c0,0,0,0,0,0v0Z"
                                    fill="#768ec8" />
                                <path
                                    d="M176.2,134.3l.9.1v0c.2,0,.4.2.4.4s-.2.4-.4.4c0,0,0,0,0,0l-.9-.1c-.2,0-.4-.2-.4-.5-.1-.2.1-.4.4-.3c0,0,0,0,0,0v0Z"
                                    fill="#768ec8" />
                                <path
                                    d="M179.1,134.5h.9v0c.2,0,.4.2.4.4c0,0,0,0,0,0c0,.2-.2.4-.4.4c0,0,0,0,0,0h-.9c-.2,0-.4-.2-.4-.4c0,0,0,0,0,0c0-.3.2-.4.4-.4c0,0,0,0,0,0v0Z"
                                    fill="#768ec8" />
                                <path
                                    d="M182,134.6h.9c.2,0,.4.2.4.4s-.2.4-.4.4c0,0,0,0,0,0h-.9c-.2,0-.4-.2-.4-.4v0c0-.3.2-.4.4-.4c0,0,0,0,0,0Z"
                                    fill="#768ec8" />
                                <path
                                    d="M185,134.5h.9v0c.2,0,.4.2.4.4s-.2.4-.4.4h-.9c-.2,0-.4-.2-.4-.4c0,0,0,0,0,0-.1-.2.1-.4.4-.4-.1,0-.1,0,0,0v0Z"
                                    fill="#768ec8" />
                                <path
                                    d="M187.9,134.3l.9-.1v0c.2,0,.4.1.4.4s-.1.4-.4.4l-.9.1c-.2,0-.4-.1-.4-.4c0-.1.1-.3.4-.4v0Z"
                                    fill="#768ec8" />
                                <path
                                    d="M190.8,134l.9-.1v0c.2,0,.4.1.5.3c0,.2-.1.4-.4.5l-.9.1c-.2,0-.4-.1-.5-.4c0-.2.1-.4.4-.4v0Z"
                                    fill="#768ec8" />
                                <path
                                    d="M193.7,133.6l.9-.2v0c.2,0,.4.1.5.3c0,.2-.1.4-.3.5c0,0,0,0,0,0l-.9.2c-.2,0-.4-.1-.5-.3-.1-.3,0-.5.3-.5-.1,0-.1,0,0,0v0Z"
                                    fill="#768ec8" />
                                <path
                                    d="M196.5,133l.9-.2v0c.2-.1.4.1.5.3c0,0,0,0,0,0c.1.2-.1.4-.3.5l-.9.2c-.2.1-.4,0-.5-.2s0-.4.2-.5c0-.1.1-.1.1-.1v0Z"
                                    fill="#768ec8" />
                                <path
                                    d="M199.3,132.2l.8-.3v0c.2,0,.4.1.5.3c0,.2-.1.4-.2.5l-.9.3c-.2.1-.4,0-.5-.3c0,0,0,0,0,0c0-.2.1-.4.3-.5v0Z"
                                    fill="#768ec8" />
                                <path
                                    d="M202.1,131.3l.8-.3v0c.2-.1.4,0,.5.2s0,.4-.2.5l-.8.3c-.2.1-.4,0-.5-.2-.1-.1,0-.4.2-.5v0Z"
                                    fill="#768ec8" />
                                <path
                                    d="M204.8,130.3l.8-.4v0c.2-.1.4,0,.5.2c0,0,0,0,0,0c.1.2,0,.4-.2.5c0,0,0,0,0,0l-.8.4c-.2.1-.4,0-.5-.3c0-.1,0-.3.2-.4v0Z"
                                    fill="#768ec8" />
                                <path
                                    d="M207.5,129.1l.8-.4v0c.2-.1.4,0,.5.2s0,.4-.2.5c0,0,0,0,0,0l-.8.4c-.2.1-.4,0-.5-.2s0-.4.2-.5c0,0,0,0,0,0v0Z"
                                    fill="#768ec8" />
                                <path
                                    d="M210.1,127.7l.8-.4v0c.2-.1.4-.1.5.1c0,0,0,0,0,0c.1.2.1.4-.1.5c0,0,0,0,0,0l-.8.4c-.2.1-.4,0-.5-.1s-.1-.4.1-.5v0Z"
                                    fill="#768ec8" />
                                <path
                                    d="M212.5,126.2l.7-.5v0c.2-.1.4,0,.5.2s.1.4-.1.5l-.7.5c-.2.1-.4.1-.6-.1c0-.3.1-.5.2-.6v0Z"
                                    fill="#768ec8" />
                                <path
                                    d="M214.9,124.5l.7-.6v0c.2-.1.4-.1.6.1.1.2.1.4-.1.6l-.7.6c-.2.1-.4.1-.5-.1-.2-.3-.1-.5,0-.6v0Z"
                                    fill="#768ec8" />
                                <path
                                    d="M217.1,122.6l.6-.6v0c.2-.1.4-.1.5,0c.1.2.1.4,0,.5v0l-.6.6c-.1.1-.4.2-.5,0c0,0,0,0,0,0-.1-.1-.1-.3,0-.5c0,0,0,0,0,0v0Z"
                                    fill="#768ec8" />
                                <path
                                    d="M219.2,120.6l.6-.7v0c.2-.1.4-.1.5,0s.2.4,0,.5c0,0,0,0,0,0l-.6.7c-.1.2-.4.2-.5.1-.2-.1-.2-.4,0-.6-.1,0-.1,0,0,0v0Z"
                                    fill="#768ec8" />
                                <path
                                    d="M221,118.3l.5-.7v0c.1-.2.4-.2.5-.1.2.1.2.4.1.5c0,0,0,0,0,0l-.5.7c-.1.2-.4.2-.5.1-.2-.1-.2-.3-.1-.5v0v0Z"
                                    fill="#768ec8" />
                                <path
                                    d="M222.6,115.9l.4-.8v0c.1-.2.3-.3.5-.2c0,0,0,0,0,0c.2.1.3.3.2.5c0,0,0,0,0,0l-.4.8c-.1.2-.3.3-.5.2s-.4-.3-.2-.5v0v0Z"
                                    fill="#768ec8" />
                                <path
                                    d="M223.7,113.2l.3-.8v0c.1-.2.3-.3.5-.2s.3.3.3.5c0,0,0,0,0,0l-.3.9c-.1.2-.3.3-.5.3-.3-.2-.4-.4-.3-.7v0Z"
                                    fill="#768ec8" />
                                <path
                                    d="M224.4,110.4c0-.3.1-.6.1-.9v0c0-.2.2-.4.4-.3.2,0,.4.2.3.4c0,0,0,0,0,0c0,.3-.1.6-.1.9c0,.2-.3.3-.5.3-.1,0-.2-.2-.2-.4v0Z"
                                    fill="#768ec8" />
                                <path
                                    d="M224.5,107.6l-.1-.9v0c0-.2.1-.4.3-.4c0,0,0,0,0,0c.2,0,.4.1.4.3l.1.9c0,.2-.1.4-.3.4c0,0,0,0,0,0-.2.1-.4-.1-.4-.3c0,0,0,0,0,0v0Z"
                                    fill="#768ec8" />
                                <path
                                    d="M224.1,104.7l-.2-.8v0c-.1-.2.1-.4.2-.4c0,0,0,0,0,0c.2-.1.4.1.4.3l.2.9c.1.2-.1.4-.3.4-.1,0-.3-.1-.3-.4c0,.1,0,.1,0,0v0Z"
                                    fill="#768ec8" />
                                <path
                                    d="M223.2,102l-.4-.8v0c-.1-.2,0-.4.2-.5c0,0,0,0,0,0c.2-.1.4,0,.5.2l.4.8c.1.2,0,.4-.2.5s-.4,0-.5-.2v0Z"
                                    fill="#768ec8" />
                                <path
                                    d="M221.9,99.4l-.4-.7v0c-.1-.2,0-.4.1-.5c0,0,0,0,0,0c.2-.1.4-.1.5.1c0,0,0,0,0,0l.5.8c.1.2.1.4-.1.5c0,0,0,0,0,0-.3,0-.5,0-.6-.2c0,0,0,0,0,0v0Z"
                                    fill="#768ec8" />
                                <path
                                    d="M220.3,97l-.5-.7v0c-.1-.2-.1-.4.1-.5c0,0,0,0,0,0c.1-.1.4-.1.5.1c0,0,0,0,0,0l.6.7c.1.1.1.4,0,.5c0,0,0,0,0,0-.3.1-.5.1-.7-.1.1.1.1.1,0,0v0Z"
                                    fill="#768ec8" />
                                <path
                                    d="M218.4,94.8l-.6-.6v0c-.1-.2-.1-.4.1-.5.1-.1.3-.1.4,0l.6.6c.1.1.1.4,0,.5-.1.2-.4.2-.5,0v0v0Z"
                                    fill="#768ec8" />
                                <path
                                    d="M216.2,92.9l-.7-.5v0c-.2-.1-.2-.3-.1-.5s.3-.2.5-.1v0l.7.5c.2.1.2.3.1.5c0,0,0,0,0,0-.1.2-.3.2-.5.1v0Z"
                                    fill="#768ec8" />
                                <path
                                    d="M213.8,91.3l-.8-.4v0c-.2-.1-.2-.3-.1-.4c0,0,0,0,0,0c.1-.2.3-.2.5-.1l.8.4c.2.1.2.3.1.5-.2,0-.3,0-.5,0v0Z"
                                    fill="#768ec8" />
                                <path
                                    d="M211.2,89.9l-.8-.3v0c-.2-.1-.2-.3-.2-.4s.3-.2.4-.2v0l.8.3c.2.1.2.3.2.4c0,.2-.2.3-.4.2v0Z"
                                    fill="#768ec8" />
                                <path
                                    d="M208.5,88.9l-.8-.2v0c-.2,0-.3-.2-.2-.4c0-.2.2-.3.4-.2l.9.3c.2,0,.3.2.2.4c0,0,0,0,0,0-.1.1-.3.2-.5.1v0Z"
                                    fill="#768ec8" />
                                <path
                                    d="M205.7,88.2l-.9-.1v0c-.2,0-.3-.2-.2-.4c0-.2.2-.3.3-.2l.9.1c.2,0,.3.2.3.4c0,.1-.2.2-.4.2v0Z"
                                    fill="#768ec8" />
                                <path
                                    d="M202.8,87.9h-.8v0c-.2,0-.3-.2-.3-.3c0-.2.1-.3.3-.3c0,0,0,0,0,0h.9c.2,0,.3.1.4.3s-.1.3-.3.4c-.1-.1-.1-.1-.2-.1v0Z"
                                    fill="#768ec8" />
                                <g id="e47Tbkfs01W200" transform="matrix(1.029805 0 0 1.041154-7.000612-6.687522)">
                                    <path
                                        d="M228.1,161.6c0,0-7.2-12.1-4.3-21.9.2-.6.8-1,1.5-.8.2.1.4.2.5.4c3.3,4.2,5.8,8.9,7.5,14c0,0-4.8-19.7,0-29.2.2-.4.7-.5,1.1-.3.1.1.2.2.3.3c1.7,2.9,6,11.7,5.6,26.3c0,0,.6-11,3.1-16c.1-.3.5-.4.7-.2.1.1.2.2.3.3c1.1,4.2,4.4,19,.7,27.1h-17Z"
                                        fill="#86a9d9" />
                                    <g>
                                        <g clip-path="url(#e47Tbkfs01W206)">
                                            <g>
                                                <path
                                                    d="M234.1,126.5c.2,2.8.4,5.6.6,8.4s.5,5.6.8,8.4c.2,1.4.3,2.8.5,4.1s.4,2.8.6,4.1.4,2.8.7,4.1.5,2.7.8,4.1h-.1c-.6-1.3-1.1-2.6-1.4-4-.4-1.4-.7-2.7-.9-4.1s-.4-2.8-.6-4.2-.3-2.8-.4-4.2-.2-2.8-.3-4.2-.2-2.8-.2-4.2-.1-2.8-.1-4.2s0-2.8,0-4.2v.1Z"
                                                    fill="#fff" />
                                            </g>
                                            <clipPath id="e47Tbkfs01W206">
                                                <use width="4.2" height="33.299999" xlink:href="#e47Tbkfs01W4"
                                                    transform="translate(234 126.5)" />
                                            </clipPath>
                                        </g>
                                    </g>
                                    <g>
                                        <g clip-path="url(#e47Tbkfs01W212)">
                                            <g>
                                                <path
                                                    d="M243.7,137.3c.2.9.3,1.8.5,2.6.1.4.1.9.1,1.3l.1.7.1.7c.1,1.8.1,3.6.1,5.4s-.1,3.6-.3,5.4c0,.2,0,.4-.1.7l-.1.7-.1.7-.1.7c-.1.4-.1.9-.3,1.3s-.2.9-.3,1.3h-.1c.1-1.8.2-3.6.3-5.3s0-3.6,0-5.3v-2.7c0-.9,0-1.8,0-2.7c0-1.8,0-3.6.2-5.4v-.1Z"
                                                    fill="#fff" />
                                            </g>
                                            <clipPath id="e47Tbkfs01W212">
                                                <use width="1.4" height="21.4" xlink:href="#e47Tbkfs01W5"
                                                    transform="translate(243.1 137.3)" />
                                            </clipPath>
                                        </g>
                                    </g>
                                </g>
                            </g>
                            <clipPath id="e47Tbkfs01W214">
                                <use width="728" height="243" xlink:href="#e47Tbkfs01W3"
                                    transform="translate(-460.1-5.4)" />
                            </clipPath>
                        </g>
                    </g>
                    <g>
                        <g clip-path="url(#e47Tbkfs01W220)">
                            <g>
                                <polygon points="41.6,116.6 59,105.8 66.4,117.5 48.9,128.4"
                                    fill="url(#e47Tbkfs01W219-fill)" />
                            </g>
                            <clipPath id="e47Tbkfs01W220">
                                <use width="22.525291" height="1.900002" xlink:href="#e47Tbkfs01W6" />
                            </clipPath>
                        </g>
                    </g>
                    <g>
                        <g clip-path="url(#e47Tbkfs01W226)">
                            <g>
                                <polygon points="45.7,105.2 75.2,84.4 94.3,111.7 64.9,132.4"
                                    fill="url(#e47Tbkfs01W225-fill)" />
                            </g>
                            <clipPath id="e47Tbkfs01W226">
                                <use width="30.200779" height="19.200005" xlink:href="#e47Tbkfs01W7" />
                            </clipPath>
                        </g>
                    </g>
                    <g>
                        <g clip-path="url(#e47Tbkfs01W232)">
                            <g>
                                <path d="M71.2,107.7c-.4,1.2-.1,2.3.6,2.6s1.6-.5,2-1.7.1-2.3-.6-2.6-1.7.5-2,1.7"
                                    fill="#768ec8" />
                            </g>
                            <clipPath id="e47Tbkfs01W232">
                                <use width="728" height="243" xlink:href="#e47Tbkfs01W8"
                                    transform="translate(-460.1-5.4)" />
                            </clipPath>
                        </g>
                    </g>
                    <g>
                        <g clip-path="url(#e47Tbkfs01W238)">
                            <g>
                                <rect width="1.8" height="19.7" rx="0" ry="0" transform="translate(34.1 134.9)"
                                    fill="url(#e47Tbkfs01W237-fill)" />
                            </g>
                            <clipPath id="e47Tbkfs01W238">
                                <use width="1.8" height="19.700001" xlink:href="#e47Tbkfs01W9"
                                    transform="translate(34.1 134.9)" />
                            </clipPath>
                        </g>
                    </g>
                    <g>
                        <g clip-path="url(#e47Tbkfs01W244)">
                            <g>
                                <rect width="15.9" height="1.2" rx="0" ry="0" transform="translate(27 153.8)"
                                    fill="url(#e47Tbkfs01W243-fill)" />
                            </g>
                            <clipPath id="e47Tbkfs01W244">
                                <use width="16" height="1.200012" xlink:href="#e47Tbkfs01W10" />
                            </clipPath>
                        </g>
                    </g>
                    <g>
                        <g clip-path="url(#e47Tbkfs01W250)">
                            <g>
                                <rect width="20" height="5.7" rx="0" ry="0" transform="translate(24.7 130.5)"
                                    fill="url(#e47Tbkfs01W249-fill)" />
                            </g>
                            <clipPath id="e47Tbkfs01W250">
                                <use width="20.1" height="5.800003" xlink:href="#e47Tbkfs01W11" />
                            </clipPath>
                        </g>
                    </g>
                    <g>
                        <g clip-path="url(#e47Tbkfs01W256)">
                            <g>
                                <rect width="13" height="32.3" rx="0" ry="0" transform="translate(41.9 121.8)"
                                    fill="url(#e47Tbkfs01W255-fill)" />
                            </g>
                            <clipPath id="e47Tbkfs01W256">
                                <use width="12.919163" height="32.200012" xlink:href="#e47Tbkfs01W12" />
                            </clipPath>
                        </g>
                    </g>
                    <g>
                        <g clip-path="url(#e47Tbkfs01W262)">
                            <g>
                                <polygon points="41.9,146.3 52.2,145.7 52.8,155.9 42.6,156.5"
                                    fill="url(#e47Tbkfs01W261-fill)" />
                            </g>
                            <clipPath id="e47Tbkfs01W262">
                                <use width="9.325531" height="9.184311" xlink:href="#e47Tbkfs01W13" />
                            </clipPath>
                        </g>
                    </g>
                    <g id="e47Tbkfs01W264" transform="matrix(.999966 0.008245-.008245 0.999966 1.146779-.45867)">
                        <g clip-path="url(#e47Tbkfs01W268)">
                            <g>
                                <rect width="27" height="32.1" rx="0" ry="0" transform="translate(42.7 122.8)"
                                    fill="url(#e47Tbkfs01W267-fill)" />
                            </g>
                            <clipPath id="e47Tbkfs01W268">
                                <use width="26.999996" height="31.807495" xlink:href="#e47Tbkfs01W14" />
                            </clipPath>
                        </g>
                    </g>
                    <g>
                        <g clip-path="url(#e47Tbkfs01W274)">
                            <g>
                                <polygon points="21.6,118.1 60.5,117 61.2,143 22.4,144.1"
                                    fill="url(#e47Tbkfs01W273-fill)" />
                            </g>
                            <clipPath id="e47Tbkfs01W274">
                                <use width="37.776279" height="24.723206" xlink:href="#e47Tbkfs01W15" />
                            </clipPath>
                        </g>
                    </g>
                    <g>
                        <g clip-path="url(#e47Tbkfs01W280)">
                            <g>
                                <polygon points="59.2,152.6 71.8,151.8 72.2,156.6 59.5,157.4"
                                    fill="url(#e47Tbkfs01W279-fill)" />
                            </g>
                            <clipPath id="e47Tbkfs01W280">
                                <use width="11.940002" height="3.477188" xlink:href="#e47Tbkfs01W16" />
                            </clipPath>
                        </g>
                    </g>
                    <g>
                        <g clip-path="url(#e47Tbkfs01W286)">
                            <g>
                                <polygon points="11.7,106.6 35.1,85.3 56.6,109 33.1,130.3"
                                    fill="url(#e47Tbkfs01W285-fill)" />
                            </g>
                            <clipPath id="e47Tbkfs01W286">
                                <use width="18.977327" height="24.599998" xlink:href="#e47Tbkfs01W17" />
                            </clipPath>
                        </g>
                    </g>
                    <g>
                        <g clip-path="url(#e47Tbkfs01W292)">
                            <g>
                                <polygon points="36.2,96.6 40.9,89.2 48.7,94.1 43.9,101.5"
                                    fill="url(#e47Tbkfs01W291-fill)" />
                            </g>
                            <clipPath id="e47Tbkfs01W292">
                                <use width="7.100002" height="5.900002" xlink:href="#e47Tbkfs01W18" />
                            </clipPath>
                        </g>
                    </g>
                    <g>
                        <g clip-path="url(#e47Tbkfs01W298)">
                            <g>
                                <polygon points="35.5,86.8 47.7,80.2 54.6,93.1 42.4,99.7"
                                    fill="url(#e47Tbkfs01W297-fill)" />
                            </g>
                            <clipPath id="e47Tbkfs01W298">
                                <use width="8.526657" height="11.083618" xlink:href="#e47Tbkfs01W19" />
                            </clipPath>
                        </g>
                    </g>
                    <g id="e47Tbkfs01W300" transform="matrix(.999982 0.005919-.005919 0.999982 0.633163-.231036)">
                        <g clip-path="url(#e47Tbkfs01W304)">
                            <g>
                                <polygon points="34.8,116.5 41.8,97.4 68.1,107.1 61.2,126.2"
                                    fill="url(#e47Tbkfs01W303-fill)" />
                            </g>
                            <clipPath id="e47Tbkfs01W304">
                                <use width="25.188541" height="12.300003" xlink:href="#e47Tbkfs01W20" />
                            </clipPath>
                        </g>
                    </g>
                    <g>
                        <g clip-path="url(#e47Tbkfs01W311)">
                            <g>
                                <path
                                    d="M40.6,85c2.1-.7,3.9-3.7,3.2-5.5-1.9-4.7-8.9-.8-6.6,3.8.3.7.9,1.4,1.7,1.7.5.2,1.1.2,1.7,0"
                                    fill="#13170f" />
                                <path
                                    d="M50.9,87.2c-.1.5-.7.9-1.2.7-.1,0-.2-.1-.3-.1-.6-.5-1.3-.9-2-1.2-4.7-1.9-4.2,1.9-4.5,2.4-.4,1-.8-.9-1-.6-.4.7.1,3.6.1,3.6s-3.6-2.3-4-4.2s1.5-5,2.6-5.9c1.8-1,3.8-1.2,5.8-.8c1.2.6,5,2.2,4.5,6.1"
                                    fill="#13170f" />
                            </g>
                            <clipPath id="e47Tbkfs01W311">
                                <use width="728" height="243" xlink:href="#e47Tbkfs01W21"
                                    transform="translate(-460.1-5.4)" />
                            </clipPath>
                        </g>
                    </g>
                    <g>
                        <g clip-path="url(#e47Tbkfs01W317)">
                            <g>
                                <polygon points="38.6,88.3 42.5,86.2 44.7,90.3 40.7,92.4"
                                    fill="url(#e47Tbkfs01W316-fill)" />
                            </g>
                            <clipPath id="e47Tbkfs01W317">
                                <use width="2.124073" height="3.5" xlink:href="#e47Tbkfs01W22" />
                            </clipPath>
                        </g>
                    </g>
                    <g>
                        <g clip-path="url(#e47Tbkfs01W327)">
                            <g>
                                <path
                                    d="M122.6,168.1c.1,0,.3,0,.4-.1.5-.2.7-.8.5-1.3l-19.6-46.5c-.2-.5-.7-.7-1.2-.5c0,0,0,0,0,0-.5.2-.7.8-.5,1.3l19.6,46.5c0,.4.4.6.8.6"
                                    fill="#768ec8" />
                                <path
                                    d="M100.5,168.1c.4,0,.7-.2.8-.6l19.6-46.6c.2-.5,0-1-.5-1.3-.5-.2-1,0-1.2.5c0,0,0,0,0,0L99.6,166.7c-.2.5,0,1,.5,1.3.2.1.3.1.4.1"
                                    fill="#768ec8" />
                                <path
                                    d="M45.5,168.1c.1,0,.3,0,.4-.1.5-.2.7-.8.5-1.3L26.8,120.2c-.2-.5-.7-.7-1.2-.5c0,0,0,0,0,0-.5.2-.7.8-.5,1.3l19.6,46.5c.1.4.5.6.8.6"
                                    fill="#768ec8" />
                                <path
                                    d="M23.5,168.1c.4,0,.7-.2.9-.6L43.9,121c.2-.5,0-1-.5-1.3-.5-.2-1,0-1.2.5c0,0,0,0,0,0L22.6,166.8c-.2.5,0,1,.5,1.3.2,0,.3,0,.4,0"
                                    fill="#768ec8" />
                                <path
                                    d="M21.2,118.9c-.1-.3,0-.6.2-.8s.5-.4.8-.3h106.3c.4,0,.8.2,1,.5s.3.7.1,1.1l-1.1,2.3c-.3.5-.8.9-1.5.9h-104c-.6,0-1.1-.4-1.2-.9l-.6-2.8Z"
                                    fill="#b0c6e7" />
                            </g>
                            <clipPath id="e47Tbkfs01W327">
                                <use width="728" height="243" xlink:href="#e47Tbkfs01W23"
                                    transform="translate(-460.1-5.4)" />
                            </clipPath>
                        </g>
                    </g>
                    <g id="e47Tbkfs01W329">
                        <g transform="translate(.599997 0)">
                            <g>
                                <g clip-path="url(#e47Tbkfs01W335)">
                                    <g>
                                        <polygon points="8.9,99.9 69.8,-23.6 183.4,32.4 122.6,155.9"
                                            fill="url(#e47Tbkfs01W334-fill)" />
                                    </g>
                                    <clipPath id="e47Tbkfs01W335">
                                        <use width="82.605286" height="110.70578" xlink:href="#e47Tbkfs01W24" />
                                    </clipPath>
                                </g>
                            </g>
                            <g transform="translate(11.4 1.449997)">
                                <g clip-path="url(#e47Tbkfs01W341)">
                                    <g>
                                        <polygon points="-0.9,93.1 67.6,-28 180.8,36 112.3,157.1"
                                            fill="url(#e47Tbkfs01W340-fill)" />
                                    </g>
                                    <clipPath id="e47Tbkfs01W341">
                                        <use width="82.544037" height="110.900002" xlink:href="#e47Tbkfs01W26" />
                                    </clipPath>
                                </g>
                            </g>
                        </g>
                        <g transform="translate(.599997 0)">
                            <g>
                                <g clip-path="url(#e47Tbkfs01W348)">
                                    <g>
                                        <polygon points="71.6,138.7 97.7,114.4 122,140.6 96,164.8"
                                            fill="url(#e47Tbkfs01W347-fill)" />
                                    </g>
                                    <clipPath id="e47Tbkfs01W348">
                                        <use width="24.399994" height="26" xlink:href="#e47Tbkfs01W25" />
                                    </clipPath>
                                </g>
                            </g>
                            <g>
                                <g clip-path="url(#e47Tbkfs01W354)">
                                    <g>
                                        <polygon points="65.4,138.2 92.5,113.2 117.4,140.3 90.4,165.2"
                                            fill="url(#e47Tbkfs01W353-fill)" />
                                    </g>
                                    <clipPath id="e47Tbkfs01W354">
                                        <use width="26" height="26" xlink:href="#e47Tbkfs01W27" />
                                    </clipPath>
                                </g>
                            </g>
                        </g>
                    </g>
                    <g>
                        <g clip-path="url(#e47Tbkfs01W363)">
                            <g>
                                <path
                                    d="M55.4,46.8c0,0-.1,0,0,0-1-4.2-1.1-10.6,3.4-17.9c4.1-6.9,10.7-12,18.4-14.2c8.3-2.4,18.3-1.9,29.5,1.6.1,0,.1.1.1.1c0,.1-.1.1-.1.1s0,0,0,0c-11.2-3.5-21.1-4-29.4-1.6C69.6,17.1,63.1,22.1,59,29c-4.5,7.3-4.4,13.6-3.5,17.7.1,0,0,.1-.1.1v0"
                                    fill="#b0c6e7" />
                                <path
                                    d="M58.2,53.4c-.1.1-.1.1,0,0-.8-1.1-1.5-2.3-1.9-3.6c0,0,0-.1,0-.1s0,0,0,0c.1,0,.1,0,.1.1.5,1.3,1.1,2.5,1.8,3.6.1,0,.1,0,0,0v0"
                                    fill="#b0c6e7" />
                                <path
                                    d="M95.8,130.7v0c-1.3-.7-2.8-1-4.3-1-.1,0-.1-.1-.1-.1c0-.1,0-.1.1-.1c1.5,0,3,.4,4.4,1.1c0,0,0,.1-.1.1.1,0,0,.1,0,0"
                                    fill="#b0c6e7" />
                                <path
                                    d="M86,147.3v0c-4.5-3-5.7-9.1-2.7-13.5.9-1.3,2.1-2.4,3.5-3.2c0,0,.1,0,.1,0s0,.1,0,.1c-4.6,2.5-6.4,8.2-3.9,12.9.7,1.4,1.8,2.5,3.1,3.4c0,.1,0,.2-.1.3.1,0,.1,0,0,0"
                                    fill="#b0c6e7" />
                            </g>
                            <clipPath id="e47Tbkfs01W363">
                                <use width="728" height="243" xlink:href="#e47Tbkfs01W28"
                                    transform="translate(-460.1-5.4)" />
                            </clipPath>
                        </g>
                    </g>
                    <g>
                        <g clip-path="url(#e47Tbkfs01W369)">
                            <g>
                                <polygon points="168.3,61 169.6,57 176.1,59.1 174.9,63.1"
                                    fill="url(#e47Tbkfs01W368-fill)" />
                            </g>
                            <clipPath id="e47Tbkfs01W369">
                                <use width="6.399994" height="2.299999" xlink:href="#e47Tbkfs01W29" />
                            </clipPath>
                        </g>
                    </g>
                    <g id="e47Tbkfs01W371" transform="matrix(.999819-.01904 0.01904 0.999819-1.930918 3.192667)">
                        <g>
                            <g clip-path="url(#e47Tbkfs01W376)">
                                <g>
                                    <polygon points="115.7,97 173.7,53.8 217.7,112.8 159.8,156"
                                        fill="url(#e47Tbkfs01W375-fill)" />
                                </g>
                                <clipPath id="e47Tbkfs01W376">
                                    <use width="48.047226" height="54.541862" xlink:href="#e47Tbkfs01W30" />
                                </clipPath>
                            </g>
                        </g>
                        <g>
                            <g clip-path="url(#e47Tbkfs01W382)">
                                <g>
                                    <polygon points="168.1,97 176.9,66 197.6,71.9 188.9,102.9"
                                        fill="url(#e47Tbkfs01W381-fill)" />
                                </g>
                                <clipPath id="e47Tbkfs01W382">
                                    <use width="14.100006" height="29.5" xlink:href="#e47Tbkfs01W31" />
                                </clipPath>
                            </g>
                        </g>
                        <g>
                            <g clip-path="url(#e47Tbkfs01W388)">
                                <g>
                                    <polygon points="166.2,76.9 173.8,50 198.3,56.9 190.7,83.8"
                                        fill="url(#e47Tbkfs01W387-fill)" />
                                </g>
                                <clipPath id="e47Tbkfs01W388">
                                    <use width="19.800003" height="23.499996" xlink:href="#e47Tbkfs01W32" />
                                </clipPath>
                            </g>
                        </g>
                    </g>
                    <g>
                        <g clip-path="url(#e47Tbkfs01W394)">
                            <g>
                                <polygon points="63,108.1 144.3,47.5 208.9,134.1 127.7,194.8"
                                    fill="url(#e47Tbkfs01W393-fill)" />
                            </g>
                            <clipPath id="e47Tbkfs01W394">
                                <use width="57.310295" height="87.843147" xlink:href="#e47Tbkfs01W33" />
                            </clipPath>
                        </g>
                    </g>
                    <g>
                        <g clip-path="url(#e47Tbkfs01W400)">
                            <g>
                                <polygon points="120.8,74.1 148,52.6 170,80.4 142.9,101.9"
                                    fill="url(#e47Tbkfs01W399-fill)" />
                            </g>
                            <clipPath id="e47Tbkfs01W400">
                                <use width="22.300003" height="24.792141" xlink:href="#e47Tbkfs01W34" />
                            </clipPath>
                        </g>
                    </g>
                    <g>
                        <g clip-path="url(#e47Tbkfs01W406)">
                            <g>
                                <polygon points="141.2,70.9 157.7,42.7 183.1,57.6 166.6,85.8"
                                    fill="url(#e47Tbkfs01W405-fill)" />
                            </g>
                            <clipPath id="e47Tbkfs01W406">
                                <use width="18.101532" height="27.099998" xlink:href="#e47Tbkfs01W35" />
                            </clipPath>
                        </g>
                    </g>
                    <g id="e47Tbkfs01W408">
                        <g clip-path="url(#e47Tbkfs01W412)">
                            <g>
                                <path
                                    d="M158.2,55.7c-.5.3-.9.8-1,1.4L155.7,69c0,.2,0,.4,0,.5.1,1,.9,4.1,4.1,3.2c2.7-.8,5.2-1.4,7.1-1.1c1.1.2,1.7,1.3,1.5,2.3-.7,3.5-1.7,7-2.9,10.4-.4.9-1.4,1.4-2.4,1.2-4-1.1-7.8-2.7-11.4-4.7-.6-.4-1-1-1-1.8.1-3.2.5-12.1.2-14.7-.3-2.4-3.1-3.8-4.4-4.4-.5-.2-.9-.6-1.1-1.1-.6-1.6-1.2-4.8,2.8-6.2c1-.4,1.5-1.5,1.2-2.5-.6-1.8-.7-4.4,2.5-5.9c2.5-1.2,5.5-.5,7.3,1.5.6.7,1.6.8,2.4.4.4-.2.9-.2,1.3,0c.9.5,2.1.2,2.6-.8c0,0,0,0,0,0c1-2.2,3.5-3.4,5.8-2.8c6,1,6.7,7.7,5.1,11.5s-8,2.4-11.2.5c-2.5-1.1-5.5.4-7,1.2"
                                    fill="#13170f" />
                            </g>
                            <clipPath id="e47Tbkfs01W412">
                                <use width="728" height="243" xlink:href="#e47Tbkfs01W36"
                                    transform="translate(-460.1-5.4)" />
                            </clipPath>
                        </g>
                    </g>
                    <g>
                        <g clip-path="url(#e47Tbkfs01W418)">
                            <g>
                                <polygon points="139.4,67.8 146.4,55.8 157.7,62.3 150.6,74.4"
                                    fill="url(#e47Tbkfs01W417-fill)" />
                            </g>
                            <clipPath id="e47Tbkfs01W418">
                                <use width="6.919495" height="9.935505" xlink:href="#e47Tbkfs01W37" />
                            </clipPath>
                        </g>
                    </g>
                    <g id="e47Tbkfs01W420" transform="matrix(.999995 0.003225-.003225 0.999995 0.224605-.370079)">
                        <g transform="translate(.000001 0.000001)">
                            <g>
                                <g clip-path="url(#e47Tbkfs01W426)">
                                    <g>
                                        <polygon points="135.5,42.5 160.5,37.8 164.3,58.4 139.4,63.1"
                                            fill="url(#e47Tbkfs01W425-fill)" />
                                    </g>
                                    <clipPath id="e47Tbkfs01W426">
                                        <use width="22.042801" height="16.830864" xlink:href="#e47Tbkfs01W38" />
                                    </clipPath>
                                </g>
                            </g>
                            <g>
                                <g clip-path="url(#e47Tbkfs01W432)">
                                    <g>
                                        <polygon points="111,48.9 148.2,41.9 151.7,60.6 114.5,67.6"
                                            fill="url(#e47Tbkfs01W431-fill)" />
                                    </g>
                                    <clipPath id="e47Tbkfs01W432">
                                        <use width="33.628006" height="12.625" xlink:href="#e47Tbkfs01W39" />
                                    </clipPath>
                                </g>
                            </g>
                        </g>
                        <g>
                            <g clip-path="url(#e47Tbkfs01W438)">
                                <g>
                                    <polygon points="65.4,50.8 130.3,35.6 142.6,88.1 77.7,103.3"
                                        fill="url(#e47Tbkfs01W437-fill)" />
                                </g>
                                <clipPath id="e47Tbkfs01W438">
                                    <use width="58.077774" height="41.292114" xlink:href="#e47Tbkfs01W40" />
                                </clipPath>
                            </g>
                        </g>
                    </g>
                    <g>
                        <g clip-path="url(#e47Tbkfs01W444)">
                            <g>
                                <path
                                    d="M111.3,147.8c.1-.3.3-.5.5-.7c1.6-1.7,23-1.7,28.1-1.8c5.8-.1,15.8-.7,17.2-1.4.4-.2.8-.3,1.2-.2.3.1.6.4.9,1.2c5.6,16.2,2.7,20,2.7,20-2.9,3.8-7.6,1.5-23,2.3-15,.8-23.6,4.5-26.3.4-.5-.9-.6-2-.6-3-.3-6.5-.5-11.8-.7-16.8"
                                    fill="#86a9d9" />
                            </g>
                            <clipPath id="e47Tbkfs01W444">
                                <use width="728" height="243" xlink:href="#e47Tbkfs01W41"
                                    transform="translate(-460.1-5.4)" />
                            </clipPath>
                        </g>
                    </g>
                    <g>
                        <g clip-path="url(#e47Tbkfs01W450)">
                            <g>
                                <polygon points="137.9,66 157.3,43 182.2,64 162.8,87" fill="url(#e47Tbkfs01W449-fill)" />
                            </g>
                            <clipPath id="e47Tbkfs01W450">
                                <use width="32.378128" height="11.682518" xlink:href="#e47Tbkfs01W42" />
                            </clipPath>
                        </g>
                    </g>
                    <g>
                        <g clip-path="url(#e47Tbkfs01W457)">
                            <g>
                                <path
                                    d="M190.3,79c-.2.1,5.8,2.2,5.8,2.2l3.2-6.9l7.9,2.1l3.3-8.1l1.4,4.3-4.3,5.8-7-1.9c.1-.2-3.6,9-3.9,8.7-.1-.2-6.4-6.2-6.4-6.2"
                                    fill="#fff" />
                                <path
                                    d="M237.8,61.9c-.2,9.3-10.7,14.8-18.3,15.5-1.4.1-10,.9-14.3-5.1-3.1-4.3-2-9.5-1.8-10.4c1.9-9,13.1-18.1,23.3-14.7c5.9,1.9,11.2,7.9,11.1,14.7"
                                    fill="#fff" />
                            </g>
                            <clipPath id="e47Tbkfs01W457">
                                <use width="728" height="243" xlink:href="#e47Tbkfs01W43"
                                    transform="translate(-460.1-5.4)" />
                            </clipPath>
                        </g>
                    </g>
                    <g id="e47Tbkfs01W459" transform="matrix(1 0.000894-.000881 0.985519 0.052992 0.669147)">
                        <g>
                            <g clip-path="url(#e47Tbkfs01W464)">
                                <g>
                                    <rect width="17.6" height="27.1" rx="0" ry="0" transform="translate(215.5 47.7)"
                                        fill="url(#e47Tbkfs01W463-fill)" />
                                </g>
                                <clipPath id="e47Tbkfs01W464">
                                    <use width="17.345108" height="26.885578" xlink:href="#e47Tbkfs01W44" />
                                </clipPath>
                            </g>
                        </g>
                        <g transform="translate(0-.249999)">
                            <g clip-path="url(#e47Tbkfs01W470)">
                                <g>
                                    <polygon points="205.4,61.2 223.6,41.4 243.1,59.4 224.9,79.2"
                                        fill="url(#e47Tbkfs01W469-fill)" />
                                </g>
                                <clipPath id="e47Tbkfs01W470">
                                    <use width="15.531708" height="21.97905" xlink:href="#e47Tbkfs01W45" />
                                </clipPath>
                            </g>
                        </g>
                        <g>
                            <g clip-path="url(#e47Tbkfs01W476)">
                                <g>
                                    <path
                                        d="M221.7,48.5c0,.1.1.2.2.2c0,0,0,0,0,0l2.8.2c.1,0,.2-.1.2-.2c0,0,0,0,0-.1v0c0-.1-.1-.2-.2-.2-.9-.1-1.9-.2-2.9-.2c0,.1-.1.2-.1.3"
                                        fill="#fff" />
                                </g>
                                <clipPath id="e47Tbkfs01W476">
                                    <use width="3.3" height="0.7" xlink:href="#e47Tbkfs01W46"
                                        transform="translate(221.7 48.2)" />
                                </clipPath>
                            </g>
                        </g>
                    </g>
                    <!-- <path id="e47Tbkfs01W478" d="M218.5,63.7c0,0,.1,0,0,0l1-.1c.3.3.6.6.9.9v.9c0,0,0,.1.1.1l1,.4c0,0,.1,0,.1,0l.6-.7c.4.1.9.1,1.3,0l.6.7c0,0,.1,0,.1,0l1-.5c0,0,0,0,0-.1l-.1-.9c.3-.3.6-.6.9-.9h.9c0,0,0,0,.1,0l.4-1c0,0,0-.1,0-.1l-.7-.6c.1-.4.1-.9,0-1.3l.6-.6c0,0,0-.1,0-.1l-.5-1c0,0,0,0-.1,0l-.9.1c-.3-.3-.6-.6-.9-.9v-.9c0,0,0-.1-.1-.1l-1-.4c0,0-.1,0-.1,0l-.6.7c-.4-.1-.9-.1-1.3,0l-.6-.7c0,0-.1,0-.1,0l-1,.5c0,0,0,.1,0,.1l.1.9c-.3.3-.6.6-.9,1h-.9c0,0,0,0-.1,0l-.4,1c0,0,0,.1,0,.1l.7.6c-.1.4-.1.9,0,1.3l-.7.6c0,0,0,.1,0,.1l.6.9Z" fill="#86a9d9"/> -->
                    <path
                        d="M222.3,62.4c-.6-.2-1-.7-.9-1.3.1-.7.7-1.2,1.3-1.1c0,0,0,0,0,0c.3,0,.6.2.8.5s.3.6.3.9c-.1.7-.7,1.2-1.4,1.1l-.1-.1m.5-1.8h-.1c-.4-.1-.8.2-.8.6-.1.4.2.8.6.8c0,0,.1,0,.1,0c.4,0,.7-.2.8-.6c0-.2,0-.4-.2-.5-.1-.2-.2-.3-.4-.3"
                        fill="#b0c6e7" />
                    <path
                        d="M222,63.8l-.3-.1v0c-.2-.1-.3-.1-.5-.2c0,0,0-.1,0-.1v0c0,0,.1,0,.1,0c.2.1.3.2.5.3.9.3,1.8.1,2.5-.5.3-.3.6-.6.7-1v-.1c0-.1.1-.2.1-.3.4-1.3-.3-2.8-1.7-3.2-1.3-.4-2.8.3-3.2,1.7v0c0,.1-.1.2-.1.3-.1.4-.1.7,0,1.1v0c0,0,0,.1-.1.1c0,0-.1,0-.1-.1-.1-.4-.1-.8,0-1.2c0-.1,0-.2.1-.3.5-1.4,2.1-2.1,3.5-1.6c1.3.5,2,1.9,1.7,3.2c0,.1,0,.2-.1.3-.3,1.4-1.7,2.1-3.1,1.7"
                        fill="#b0c6e7" />
                    <path
                        d="M226.4,68.3v0l.5-.1c.1.2.3.3.5.4v.5v0l.5.2v0l.3-.3c.2,0,.4,0,.6,0l.3.3v0l.5-.2v0-.4c.2-.1.3-.3.4-.5h.4v0l.2-.5v0l-.4-.3c0-.2,0-.4,0-.6l.3-.3v0l-.2-.5v0h-.5c-.1-.2-.3-.3-.5-.4v-.6v0l-.5-.2h-.1l-.3.4c-.2,0-.4,0-.6,0l-.3-.3v0l-.5.2v0v.4c-.2.1-.3.3-.4.5h-.5v0l-.2.5v0l.4.3c0,.2,0,.4,0,.6l-.3.3v0l.4.6Z"
                        fill="#86a9d9" />
                    <path
                        d="M228.3,67.6c-.3-.1-.5-.4-.4-.7c0-.1.1-.2.2-.3s.3-.2.4-.1c.2,0,.3.1.4.2.2.3.2.7-.1.9-.1,0-.3,0-.5,0v0m.2-.9v0c-.2,0-.4.1-.4.3c0,0,0,0,0,0c0,.2.1.4.3.4.1,0,.2,0,.3-.1.2-.1.2-.3.1-.5c0,0,0,0,0,0-.2,0-.2-.1-.3-.1"
                        fill="#b0c6e7" />
                    <path
                        d="M228.1,68.3h-.1v0c-.1,0-.2-.1-.2-.1v0v0m0,0c.1,0,.2.1.2.1.4.2.9.1,1.3-.2.2-.1.3-.3.4-.5v0c0,0,0-.1,0-.1.1-.7-.3-1.4-1-1.5-.6-.1-1.2.2-1.4.7c0,0,0,.1,0,.1c0,.2,0,.4,0,.6v0v0v0c0-.2,0-.4,0-.6v-.1c.2-.7,1-1.1,1.7-.9s1.1,1,.9,1.7c0,.1,0,.1,0,.1-.2.7-.9,1-1.6.8"
                        fill="#b0c6e7" />
                    <path
                        d="M224.8,56.1v0l.6-.1c.2.2.4.4.6.5v.6v0l.6.2m.1.1l.3-.4c.3,0,.5,0,.8,0l.4.4m.1,0l.6-.3v0l-.1-.6c.2-.2.4-.4.6-.6h.6v0l.2-.6c0,0,0,0,0-.1l-.4-.4c0-.3,0-.5,0-.8l.4-.4m0,0L230,53c0,0,0,0-.1,0l-.6.1c-.2-.2-.4-.4-.6-.5v-.6v0l-.6-.2v0l-.4.4c-.3,0-.5,0-.8,0l-.4-.4c0,0,0,0-.1,0l-.6.3c0,0,0,0,0,0l.1.6c-.2.2-.4.4-.6.6h-.6c0,0,0,0-.1,0l-.2.7v0l.4.4c0,.3,0,.5,0,.8l-.4.4v0l5.8-2Z"
                        fill="#86a9d9" />
                    <path
                        d="M227.2,55.3c-.4-.1-.6-.4-.6-.8c0-.2.1-.4.3-.5s.4-.2.6-.2.4.1.5.3c.3.3.2.8-.1,1.1-.2.1-.4.2-.6.2l-.1-.1m.3-1.2v0c-.3,0-.5.2-.6.4c0,.2.1.5.4.5c0,0,0,0,0,0c.1,0,.2,0,.3-.1s.1-.2.2-.3c0-.1,0-.2-.1-.3c0-.1-.1-.1-.2-.2"
                        fill="#b0c6e7" />
                    <path
                        d="M227,56.2h-.2v0l-.3-.2m0-.1v0m.1,0c.1.1.2.1.3.2.8.3,1.7-.1,2-.9c0,0,0,0,0-.1s0-.1.1-.2c.3-.8-.2-1.8-1-2s-1.8.2-2,1c0,.1,0,.1,0,.2c0,.2,0,.5,0,.7v0v0m-.2,0c-.1-.2-.1-.5,0-.8c0,0,0-.1.1-.2.3-.9,1.3-1.3,2.2-1c.8.3,1.2,1.1,1,2c0,.1,0,.1-.1.2-.3.8-1.2,1.3-2,1.1"
                        fill="#b0c6e7" />
                    <path
                        d="M223.3,28.8c.8,6.1-6.5,13.5-14.7,15C199.9,45.4,190,40.2,188,32c-1.1-4.5.1-10.1,3.8-13.3c8.9-7.7,30.3.5,31.5,10.1"
                        fill="#fff" />
                    <g id="e47Tbkfs01W488" transform="translate(2.000005 0.700001)">
                        <g>
                            <g clip-path="url(#e47Tbkfs01W493)">
                                <g>
                                    <polygon points="201.5,38.5 210.2,24.5 231.2,37.5 222.4,51.6"
                                        fill="url(#e47Tbkfs01W492-fill)" />
                                </g>
                                <clipPath id="e47Tbkfs01W493">
                                    <use width="27.700012" height="2.199997" xlink:href="#e47Tbkfs01W47" />
                                </clipPath>
                            </g>
                        </g>
                        <g>
                            <g clip-path="url(#e47Tbkfs01W499)">
                                <g>
                                    <polygon points="168,31.7 190.7,-1 226.1,23.6 203.5,56.3"
                                        fill="url(#e47Tbkfs01W498-fill)" />
                                </g>
                                <clipPath id="e47Tbkfs01W499">
                                    <use width="36.300018" height="23.009527" xlink:href="#e47Tbkfs01W48" />
                                </clipPath>
                            </g>
                        </g>
                        <g>
                            <g clip-path="url(#e47Tbkfs01W505)">
                                <g>
                                    <polygon points="189.7,28.8 193.1,22.9 198.5,26 195.2,31.9"
                                        fill="url(#e47Tbkfs01W504-fill)" />
                                </g>
                                <clipPath id="e47Tbkfs01W505">
                                    <use width="3.547653" height="5.297842" xlink:href="#e47Tbkfs01W49" />
                                </clipPath>
                            </g>
                        </g>
                    </g>
                    <path
                        d="M180.3,51.8c.3-.2,8.1-9.8,8.1-9.8l5.3,6.6c0,0,12-9.8,11.8-9.3s-11.3,13.3-11.3,13.3l-5.9-8.9-8,8.1Z"
                        fill="#fff" />
                    <path
                        d="M232.8,106.4c.3,4.9-2,9.5-6,12.3-10.1,6.6-29.9-3.3-30.2-12.3-.2-6.8,10.7-15.7,21.3-14c6.7,1,14.3,6.4,14.9,14"
                        fill="#fff" />
                    <path d="M187.8,90.5c.3.1,10.2-.3,10.2-.3l-1.2,6.7c0,0,12.3,2,11.9,2.1s-14.1.3-14.1.3l2.2-8.3-9-.5Z"
                        fill="#fff" />
                    <!-- <path id="e47Tbkfs01W510" d="M206.6,111.2c0,.1.1.1.2.1l1.9-.2c.6.7,1.2,1.3,2,1.8v1.9c0,.1,0,.1.1.2l2.2.8c.1,0,.1,0,.2,0l1.2-1.5c.9.1,1.8.1,2.7-.1l1.3,1.4c.1,0,.1,0,.2,0l2.1-1c.1,0,.1-.1.1-.2l-.2-1.9c.7-.6,1.3-1.2,1.9-2h1.9c.1,0,.1,0,.2-.1l.8-2.2c0-.1,0-.1,0-.2l-1.6-1.1c.1-.9.1-1.8-.1-2.7l1.4-1.3c0-.1,0-.1,0-.2l-1-2.1c0-.1-.1-.1-.2-.1l-1.9.2c-.6-.7-1.2-1.4-2-1.9v-1.8c0-.1,0-.1-.1-.2l-2.2-.8c-.1,0-.1,0-.2,0l-1.2,1.5c-.9-.1-1.8-.1-2.7.1l-1.3-1.4c-.1,0-.1,0-.2,0l-2.1,1c-.1,0-.1.1-.1.2l.2,1.9c-.7.6-1.3,1.2-1.9,2h-1.9c-.1,0-.1,0-.1.1l-.8,2.2c0,.1,0,.1.1.2L207,105c-.1.9-.1,1.8.1,2.7l-1.4,1.3c0,.1,0,.1,0,.2l.9,2Z" transform="matrix(.99965 0.026455-.026455 0.99965 3.202605-5.661314)" fill="#86a9d9"/><path d="M214.7,108.4c-1.4-.3-2.2-1.8-1.9-3.2.1-.6.5-1,.9-1.4.5-.4,1.2-.6,1.9-.6.7.1,1.3.4,1.8,1c.4.5.6,1.2.6,1.9-.2,1.4-1.4,2.5-2.9,2.3h-.4m1-3.9h-.2c-.8-.1-1.6.5-1.7,1.3s.5,1.6,1.3,1.7s1.6-.5,1.7-1.3c0,0,0,0,0,0c0-.4-.1-.8-.3-1.1s-.5-.5-.8-.6" fill="#b0c6e7"/><path d="M214,111.5c-.2,0-.4-.1-.6-.2h-.1c-.3-.1-.7-.3-1-.5-.1,0-.1-.1-.1-.2v0c.1-.1.2-.1.2-.1s0,0,0,0c.3.2.7.4,1,.5c2.7,1,5.8-.3,6.9-3c0-.1.1-.1.1-.2c1.1-2.8-.3-5.9-3.1-7s-5.9.3-7,3.1c-.1.2-.1.3-.2.5-.2.8-.2,1.6-.1,2.3c0,0,0,.1,0,.1c0,.1-.1.1-.1.1-.1,0-.2,0-.2-.2-.2-.8-.1-1.7.1-2.5c0-.2.1-.4.2-.6c1.1-3,4.4-4.5,7.4-3.4c2.8,1,4.3,4,3.6,6.9c0,.2-.1.4-.2.6-1,2.9-3.9,4.5-6.8,3.8" fill="#b0c6e7"/> -->
                    <g id="e47Tbkfs01W513" transform="translate(0 1.000001)">
                        <g transform="translate(.000001 0.000001)">
                            <g transform="translate(.000001 0.000001)">
                                <g>
                                    <g clip-path="url(#e47Tbkfs01W520)">
                                        <g>
                                            <polygon points="218.3,95.6 223,89.2 230.5,94.2 225.8,100.6"
                                                fill="url(#e47Tbkfs01W519-fill)" />
                                        </g>
                                        <clipPath id="e47Tbkfs01W520">
                                            <use width="8.100006" height="4.200005" xlink:href="#e47Tbkfs01W50" />
                                        </clipPath>
                                    </g>
                                </g>
                                <g>
                                    <g clip-path="url(#e47Tbkfs01W526)">
                                        <g>
                                            <polygon points="218.3,108.6 223.1,114.9 230.4,109.8 225.6,103.5"
                                                fill="url(#e47Tbkfs01W525-fill)" />
                                        </g>
                                        <clipPath id="e47Tbkfs01W526">
                                            <use width="8.100006" height="4" xlink:href="#e47Tbkfs01W51" />
                                        </clipPath>
                                    </g>
                                </g>
                            </g>
                            <path d="M223.3,93.7c0,0,0,0,0,0-.1-.1,0-.1,0-.1h.4c0,0,.1,0,.1.1c0,0,0,.1-.1.1h-.4v-.1"
                                fill="#86a9d9" />
                            <path
                                d="M221.2,95.9v0c0,0,0,0,0,0l.2-1.5c.1-.4.4-.6.7-.7l.8-.1c0,0,.1,0,.1.1c0,0,0,0,0,.1l-.8.1c-.3,0-.6.3-.6.6l-.2,1.5c-.1-.1-.1-.1-.2-.1"
                                fill="#86a9d9" />
                        </g>
                        <g transform="translate(0 0.000001)">
                            <g>
                                <g clip-path="url(#e47Tbkfs01W535)">
                                    <g>
                                        <polygon points="219.2,96.1 229.1,96 229.3,108.3 219.3,108.4"
                                            fill="url(#e47Tbkfs01W534-fill)" />
                                    </g>
                                    <clipPath id="e47Tbkfs01W535">
                                        <use width="9.800003" height="12.200005" xlink:href="#e47Tbkfs01W52" />
                                    </clipPath>
                                </g>
                            </g>
                            <g>
                                <g clip-path="url(#e47Tbkfs01W551)">
                                    <g>
                                        <polygon points="215.5,106.5 220.8,93.1 233,97.9 227.6,111.3"
                                            fill="url(#e47Tbkfs01W540-fill)" />
                                    </g>
                                    <g clip-path="url(#e47Tbkfs01W549)">
                                        <g>
                                            <g>
                                                <g clip-path="url(#e47Tbkfs01W547)">
                                                    <g>
                                                        <path
                                                            d="M220.5,107.4c-.1,0-.2-.1-.2-.2l-.1-9.8c0-.1.1-.2.1-.2s0,0,0,0l7.7-.3c0,0,.1,0,.1,0s0,.1.1.1l-.2,10c0,.1-.1.2-.1.2s0,0,0,0l-7.4.2Z"
                                                            fill="#fff" />
                                                    </g>
                                                    <clipPath id="e47Tbkfs01W547">
                                                        <use width="8" height="10.4" xlink:href="#e47Tbkfs01W55"
                                                            transform="translate(220.3 97)" />
                                                    </clipPath>
                                                </g>
                                            </g>
                                        </g>
                                        <clipPath id="e47Tbkfs01W549">
                                            <use width="728" height="243" xlink:href="#e47Tbkfs01W54"
                                                transform="translate(-460.1-5.4)" />
                                        </clipPath>
                                    </g>
                                    <clipPath id="e47Tbkfs01W551">
                                        <use width="9.300003" height="11.700012" xlink:href="#e47Tbkfs01W53" />
                                    </clipPath>
                                </g>
                            </g>
                            <g>
                                <g clip-path="url(#e47Tbkfs01W557)">
                                    <g>
                                        <polygon points="221.4,107 222,106 223,106.7 222.4,107.7"
                                            fill="url(#e47Tbkfs01W556-fill)" />
                                    </g>
                                    <clipPath id="e47Tbkfs01W557">
                                        <use width="0.83139" height="0.807098" xlink:href="#e47Tbkfs01W56" />
                                    </clipPath>
                                </g>
                            </g>
                            <g>
                                <g clip-path="url(#e47Tbkfs01W563)">
                                    <g>
                                        <polygon points="222.8,107 223.4,106 224.5,106.7 223.8,107.7"
                                            fill="url(#e47Tbkfs01W562-fill)" />
                                    </g>
                                    <clipPath id="e47Tbkfs01W563">
                                        <use width="0.731384" height="0.765678" xlink:href="#e47Tbkfs01W57" />
                                    </clipPath>
                                </g>
                            </g>
                            <g>
                                <g clip-path="url(#e47Tbkfs01W570)">
                                    <g>
                                        <polygon points="224.6,107.2 224.6,106.4 225.5,106.4 225.5,107.2"
                                            fill="url(#e47Tbkfs01W569-fill)" />
                                    </g>
                                    <clipPath id="e47Tbkfs01W570">
                                        <use width="0.731384" height="0.765678" xlink:href="#e47Tbkfs01W58" />
                                    </clipPath>
                                </g>
                            </g>
                            <g>
                                <g clip-path="url(#e47Tbkfs01W576)">
                                    <g>
                                        <polygon points="225.9,107.2 226,106.3 227,106.4 226.9,107.3"
                                            fill="url(#e47Tbkfs01W575-fill)" />
                                    </g>
                                    <clipPath id="e47Tbkfs01W576">
                                        <use width="0.731384" height="0.765678" xlink:href="#e47Tbkfs01W59" />
                                    </clipPath>
                                </g>
                            </g>
                        </g>
                    </g>
                    <g id="e47Tbkfs01W578" transform="matrix(.81191 0 0 0.81191 13.908692 11.379522)">
                        <path
                            d="M70.5,74.4c-1-.1-2,.1-2.9.4-2.1.8-4,3-3.4,5.3.2.8,0,1.6.8,2c.6.2,1.3.3,1.9.2c1-.1,1.6-1,1.5-2c0-.2-.1-.3-.1-.5-.2-.4-.4-.7-.6-1.1s-.2-.8,0-1.2c.4-.7,1.5-.9,2.2-.8.8.1,1.6.5,2,1.3c1,2,.6,4.3-.9,5.9-.6.7-1.3,1.5-1.8,2.3-1.3,1.9-2,4.4-1.3,5c0,0,0,0,.7.1.6.1,1.2.1,1.8.1.1,0,.1-.1.1-.1s0,0,0,0c0-2.4,1.1-4.6,2.9-6.2.7-.5,1.4-1.1,2-1.7.8-.9,1.3-2.2,1.2-3.4c0-1.2-.4-2.4-1.1-3.3-.8-1-2-1.7-3.2-2-.6-.2-1.2-.3-1.8-.3"
                            fill="#b0c6e7" />
                        <path d="M71.5,94.3c0,.9-.8,1.7-1.7,1.7s-1.7-.8-1.7-1.7.8-1.7,1.7-1.7v0c1,0,1.7.7,1.7,1.7"
                            fill="#b0c6e7" />
                    </g>
                    <path d="M63.4,77.6c-.1-.2-.2-.4-.3-.6l.3.6Z" fill="#b0c6e7" />
                    <script>
                        <![CDATA[
                        ! function(t, n) {
                            "object" == typeof exports && "undefined" != typeof module ? module.exports = n() : "function" ==
                                typeof define && define.amd ? define(n) : ((t = "undefined" != typeof globalThis ? globalThis : t || self)
                                    .__SVGATOR_PLAYER__ = t.__SVGATOR_PLAYER__ || {}, t.__SVGATOR_PLAYER__["5c7f360c"] = n())
                        }(this, (function() {
                            "use strict";

                            function t(t, n) {
                                var r = Object.keys(t);
                                if (Object.getOwnPropertySymbols) {
                                    var e = Object.getOwnPropertySymbols(t);
                                    n && (e = e.filter((function(n) {
                                        return Object.getOwnPropertyDescriptor(t, n).enumerable
                                    }))), r.push.apply(r, e)
                                }
                                return r
                            }

                            function n(n) {
                                for (var r = 1; r < arguments.length; r++) {
                                    var e = null != arguments[r] ? arguments[r] : {};
                                    r % 2 ? t(Object(e), !0).forEach((function(t) {
                                        u(n, t, e[t])
                                    })) : Object.getOwnPropertyDescriptors ? Object.defineProperties(n, Object
                                        .getOwnPropertyDescriptors(e)) : t(Object(e)).forEach((function(t) {
                                        Object.defineProperty(n, t, Object.getOwnPropertyDescriptor(e, t))
                                    }))
                                }
                                return n
                            }

                            function r(t) {
                                return (r = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function(t) {
                                    return typeof t
                                } : function(t) {
                                    return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol
                                        .prototype ? "symbol" : typeof t
                                })(t)
                            }

                            function e(t, n) {
                                if (!(t instanceof n)) throw new TypeError("Cannot call a class as a function")
                            }

                            function i(t, n) {
                                for (var r = 0; r < n.length; r++) {
                                    var e = n[r];
                                    e.enumerable = e.enumerable || !1, e.configurable = !0, "value" in e && (e.writable = !0),
                                        Object.defineProperty(t, e.key, e)
                                }
                            }

                            function o(t, n, r) {
                                return n && i(t.prototype, n), r && i(t, r), t
                            }

                            function u(t, n, r) {
                                return n in t ? Object.defineProperty(t, n, {
                                    value: r,
                                    enumerable: !0,
                                    configurable: !0,
                                    writable: !0
                                }) : t[n] = r, t
                            }

                            function a(t) {
                                return (a = Object.setPrototypeOf ? Object.getPrototypeOf : function(t) {
                                    return t.__proto__ || Object.getPrototypeOf(t)
                                })(t)
                            }

                            function l(t, n) {
                                return (l = Object.setPrototypeOf || function(t, n) {
                                    return t.__proto__ = n, t
                                })(t, n)
                            }

                            function f() {
                                if ("undefined" == typeof Reflect || !Reflect.construct) return !1;
                                if (Reflect.construct.sham) return !1;
                                if ("function" == typeof Proxy) return !0;
                                try {
                                    return Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], (function() {}))), !0
                                } catch (t) {
                                    return !1
                                }
                            }

                            function s(t, n, r) {
                                return (s = f() ? Reflect.construct : function(t, n, r) {
                                    var e = [null];
                                    e.push.apply(e, n);
                                    var i = new(Function.bind.apply(t, e));
                                    return r && l(i, r.prototype), i
                                }).apply(null, arguments)
                            }

                            function c(t, n) {
                                if (n && ("object" == typeof n || "function" == typeof n)) return n;
                                if (void 0 !== n) throw new TypeError("Derived constructors may only return object or undefined");
                                return function(t) {
                                    if (void 0 === t) throw new ReferenceError(
                                        "this hasn't been initialised - super() hasn't been called");
                                    return t
                                }(t)
                            }

                            function h(t, n, r) {
                                return (h = "undefined" != typeof Reflect && Reflect.get ? Reflect.get : function(t, n, r) {
                                    var e = function(t, n) {
                                        for (; !Object.prototype.hasOwnProperty.call(t, n) && null !== (t = a(t)););
                                        return t
                                    }(t, n);
                                    if (e) {
                                        var i = Object.getOwnPropertyDescriptor(e, n);
                                        return i.get ? i.get.call(r) : i.value
                                    }
                                })(t, n, r || t)
                            }

                            function v(t) {
                                return function(t) {
                                    if (Array.isArray(t)) return y(t)
                                }(t) || function(t) {
                                    if ("undefined" != typeof Symbol && null != t[Symbol.iterator] || null != t[
                                            "@@iterator"]) return Array.from(t)
                                }(t) || function(t, n) {
                                    if (!t) return;
                                    if ("string" == typeof t) return y(t, n);
                                    var r = Object.prototype.toString.call(t).slice(8, -1);
                                    "Object" === r && t.constructor && (r = t.constructor.name);
                                    if ("Map" === r || "Set" === r) return Array.from(t);
                                    if ("Arguments" === r || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(r)) return y(t, n)
                                }(t) || function() {
                                    throw new TypeError(
                                        "Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."
                                    )
                                }()
                            }

                            function y(t, n) {
                                (null == n || n > t.length) && (n = t.length);
                                for (var r = 0, e = new Array(n); r < n; r++) e[r] = t[r];
                                return e
                            }
                            var g = d(Math.pow(10, -6));

                            function d(t) {
                                var n = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : 6;
                                if (Number.isInteger(t)) return t;
                                var r = Math.pow(10, n);
                                return Math.round((+t + Number.EPSILON) * r) / r
                            }

                            function p(t, n) {
                                var r = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : g;
                                return Math.abs(t - n) < r
                            }
                            var m = Math.PI / 180;

                            function b(t) {
                                return t
                            }

                            function w(t, n, r) {
                                var e = 1 - r;
                                return 3 * r * e * (t * e + n * r) + r * r * r
                            }

                            function A() {
                                var t = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : 0,
                                    n = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : 0,
                                    r = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : 1,
                                    e = arguments.length > 3 && void 0 !== arguments[3] ? arguments[3] : 1;
                                return t < 0 || t > 1 || r < 0 || r > 1 ? null : p(t, n) && p(r, e) ? b : function(i) {
                                    if (i <= 0) return t > 0 ? i * n / t : 0 === n && r > 0 ? i * e / r : 0;
                                    if (i >= 1) return r < 1 ? 1 + (i - 1) * (e - 1) / (r - 1) : 1 === r && t < 1 ? 1 + (i -
                                        1) * (n - 1) / (t - 1) : 1;
                                    for (var o, u = 0, a = 1; u < a;) {
                                        var l = w(t, r, o = (u + a) / 2);
                                        if (p(i, l)) break;
                                        l < i ? u = o : a = o
                                    }
                                    return w(n, e, o)
                                }
                            }

                            function x() {
                                return 1
                            }

                            function k(t) {
                                return 1 === t ? 1 : 0
                            }

                            function S() {
                                var t = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : 1,
                                    n = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : 0;
                                if (1 === t) {
                                    if (0 === n) return k;
                                    if (1 === n) return x
                                }
                                var r = 1 / t;
                                return function(t) {
                                    return t >= 1 ? 1 : (t += n * r) - t % r
                                }
                            }
                            var _ = Math.sin,
                                O = Math.cos,
                                j = Math.acos,
                                M = Math.asin,
                                P = Math.tan,
                                E = Math.atan2,
                                I = Math.PI / 180,
                                R = 180 / Math.PI,
                                F = Math.sqrt,
                                N = function() {
                                    function t() {
                                        var n = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : 1,
                                            r = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : 0,
                                            i = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : 0,
                                            o = arguments.length > 3 && void 0 !== arguments[3] ? arguments[3] : 1,
                                            u = arguments.length > 4 && void 0 !== arguments[4] ? arguments[4] : 0,
                                            a = arguments.length > 5 && void 0 !== arguments[5] ? arguments[5] : 0;
                                        e(this, t), this.m = [n, r, i, o, u, a], this.i = null, this.w = null, this.s = null
                                    }
                                    return o(t, [{
                                        key: "determinant",
                                        get: function() {
                                            var t = this.m;
                                            return t[0] * t[3] - t[1] * t[2]
                                        }
                                    }, {
                                        key: "isIdentity",
                                        get: function() {
                                            if (null === this.i) {
                                                var t = this.m;
                                                this.i = 1 === t[0] && 0 === t[1] && 0 === t[2] && 1 === t[3] &&
                                                    0 === t[4] && 0 === t[5]
                                            }
                                            return this.i
                                        }
                                    }, {
                                        key: "point",
                                        value: function(t, n) {
                                            var r = this.m;
                                            return {
                                                x: r[0] * t + r[2] * n + r[4],
                                                y: r[1] * t + r[3] * n + r[5]
                                            }
                                        }
                                    }, {
                                        key: "translateSelf",
                                        value: function() {
                                            var t = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] :
                                                0,
                                                n = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] :
                                                0;
                                            if (!t && !n) return this;
                                            var r = this.m;
                                            return r[4] += r[0] * t + r[2] * n, r[5] += r[1] * t + r[3] * n, this
                                                .w = this.s = this.i = null, this
                                        }
                                    }, {
                                        key: "rotateSelf",
                                        value: function() {
                                            var t = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] :
                                                0;
                                            if (t %= 360) {
                                                var n = _(t *= I),
                                                    r = O(t),
                                                    e = this.m,
                                                    i = e[0],
                                                    o = e[1];
                                                e[0] = i * r + e[2] * n, e[1] = o * r + e[3] * n, e[2] = e[2] * r -
                                                    i * n, e[3] = e[3] * r - o * n, this.w = this.s = this.i = null
                                            }
                                            return this
                                        }
                                    }, {
                                        key: "scaleSelf",
                                        value: function() {
                                            var t = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] :
                                                1,
                                                n = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] :
                                                1;
                                            if (1 !== t || 1 !== n) {
                                                var r = this.m;
                                                r[0] *= t, r[1] *= t, r[2] *= n, r[3] *= n, this.w = this.s = this
                                                    .i = null
                                            }
                                            return this
                                        }
                                    }, {
                                        key: "skewSelf",
                                        value: function(t, n) {
                                            if (n %= 360, (t %= 360) || n) {
                                                var r = this.m,
                                                    e = r[0],
                                                    i = r[1],
                                                    o = r[2],
                                                    u = r[3];
                                                t && (t = P(t * I), r[2] += e * t, r[3] += i * t), n && (n = P(n *
                                                        I), r[0] += o * n, r[1] += u * n), this.w = this.s = this
                                                    .i = null
                                            }
                                            return this
                                        }
                                    }, {
                                        key: "resetSelf",
                                        value: function() {
                                            var t = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] :
                                                1,
                                                n = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] :
                                                0,
                                                r = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] :
                                                0,
                                                e = arguments.length > 3 && void 0 !== arguments[3] ? arguments[3] :
                                                1,
                                                i = arguments.length > 4 && void 0 !== arguments[4] ? arguments[4] :
                                                0,
                                                o = arguments.length > 5 && void 0 !== arguments[5] ? arguments[5] :
                                                0,
                                                u = this.m;
                                            return u[0] = t, u[1] = n, u[2] = r, u[3] = e, u[4] = i, u[5] = o, this
                                                .w = this.s = this.i = null, this
                                        }
                                    }, {
                                        key: "recomposeSelf",
                                        value: function() {
                                            var t = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] :
                                                null,
                                                n = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] :
                                                null,
                                                r = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] :
                                                null,
                                                e = arguments.length > 3 && void 0 !== arguments[3] ? arguments[3] :
                                                null,
                                                i = arguments.length > 4 && void 0 !== arguments[4] ? arguments[4] :
                                                null;
                                            return this.isIdentity || this.resetSelf(), t && (t.x || t.y) && this
                                                .translateSelf(t.x, t.y), n && this.rotateSelf(n), r && (r.x && this
                                                    .skewSelf(r.x, 0), r.y && this.skewSelf(0, r.y)), !e || 1 === e
                                                .x && 1 === e.y || this.scaleSelf(e.x, e.y), i && (i.x || i.y) &&
                                                this.translateSelf(i.x, i.y), this
                                        }
                                    }, {
                                        key: "decompose",
                                        value: function() {
                                            var t = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] :
                                                0,
                                                n = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] :
                                                0,
                                                r = this.m,
                                                e = r[0] * r[0] + r[1] * r[1],
                                                i = [
                                                    [r[0], r[1]],
                                                    [r[2], r[3]]
                                                ],
                                                o = F(e);
                                            if (0 === o) return {
                                                origin: {
                                                    x: d(r[4]),
                                                    y: d(r[5])
                                                },
                                                translate: {
                                                    x: d(t),
                                                    y: d(n)
                                                },
                                                scale: {
                                                    x: 0,
                                                    y: 0
                                                },
                                                skew: {
                                                    x: 0,
                                                    y: 0
                                                },
                                                rotate: 0
                                            };
                                            i[0][0] /= o, i[0][1] /= o;
                                            var u = r[0] * r[3] - r[1] * r[2] < 0;
                                            u && (o = -o);
                                            var a = i[0][0] * i[1][0] + i[0][1] * i[1][1];
                                            i[1][0] -= i[0][0] * a, i[1][1] -= i[0][1] * a;
                                            var l = F(i[1][0] * i[1][0] + i[1][1] * i[1][1]);
                                            if (0 === l) return {
                                                origin: {
                                                    x: d(r[4]),
                                                    y: d(r[5])
                                                },
                                                translate: {
                                                    x: d(t),
                                                    y: d(n)
                                                },
                                                scale: {
                                                    x: d(o),
                                                    y: 0
                                                },
                                                skew: {
                                                    x: 0,
                                                    y: 0
                                                },
                                                rotate: 0
                                            };
                                            i[1][0] /= l, i[1][1] /= l, a /= l;
                                            var f = 0;
                                            return i[1][1] < 0 ? (f = j(i[1][1]) * R, i[0][1] < 0 && (f = 360 -
                                                f)) : f = M(i[0][1]) * R, u && (f = -f), a = E(a, F(i[0][0] * i[
                                                0][
                                                0
                                            ] + i[0][1] * i[0][1])) * R, u && (a = -a), {
                                                origin: {
                                                    x: d(r[4]),
                                                    y: d(r[5])
                                                },
                                                translate: {
                                                    x: d(t),
                                                    y: d(n)
                                                },
                                                scale: {
                                                    x: d(o),
                                                    y: d(l)
                                                },
                                                skew: {
                                                    x: d(a),
                                                    y: 0
                                                },
                                                rotate: d(f)
                                            }
                                        }
                                    }, {
                                        key: "clone",
                                        value: function() {
                                            var t = this.m;
                                            return new this.constructor(t[0], t[1], t[2], t[3], t[4], t[5])
                                        }
                                    }, {
                                        key: "toString",
                                        value: function() {
                                            var t = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] :
                                                " ";
                                            if (null === this.s) {
                                                var n = this.m.map((function(t) {
                                                    return d(t)
                                                }));
                                                1 === n[0] && 0 === n[1] && 0 === n[2] && 1 === n[3] ? this.s =
                                                    "translate(" + n[4] + t + n[5] + ")" : this.s = "matrix(" + n
                                                    .join(t) + ")"
                                            }
                                            return this.s
                                        }
                                    }], [{
                                        key: "create",
                                        value: function(t) {
                                            return t ? Array.isArray(t) ? s(this, v(t)) : t instanceof this ? t
                                                .clone() : (new this).recomposeSelf(t.origin, t.rotate, t.skew, t
                                                    .scale, t.translate) : new this
                                        }
                                    }]), t
                                }();

                            function T(t, n, r) {
                                return t >= .5 ? r : n
                            }

                            function B(t, n, r) {
                                return 0 === t || n === r ? n : t * (r - n) + n
                            }

                            function q(t, n, r) {
                                var e = B(t, n, r);
                                return e <= 0 ? 0 : e
                            }

                            function L(t, n, r) {
                                var e = B(t, n, r);
                                return e <= 0 ? 0 : e >= 1 ? 1 : e
                            }

                            function C(t, n, r) {
                                return 0 === t ? n : 1 === t ? r : {
                                    x: B(t, n.x, r.x),
                                    y: B(t, n.y, r.y)
                                }
                            }

                            function D(t, n, r) {
                                var e = function(t, n, r) {
                                    return Math.round(B(t, n, r))
                                }(t, n, r);
                                return e <= 0 ? 0 : e >= 255 ? 255 : e
                            }

                            function z(t, n, r) {
                                return 0 === t ? n : 1 === t ? r : {
                                    r: D(t, n.r, r.r),
                                    g: D(t, n.g, r.g),
                                    b: D(t, n.b, r.b),
                                    a: B(t, null == n.a ? 1 : n.a, null == r.a ? 1 : r.a)
                                }
                            }

                            function V(t, n) {
                                for (var r = [], e = 0; e < t; e++) r.push(n);
                                return r
                            }

                            function G(t, n) {
                                if (--n <= 0) return t;
                                var r = (t = Object.assign([], t)).length;
                                do {
                                    for (var e = 0; e < r; e++) t.push(t[e])
                                } while (--n > 0);
                                return t
                            }
                            var Y, $ = function() {
                                    function t(n) {
                                        e(this, t), this.list = n, this.length = n.length
                                    }
                                    return o(t, [{
                                        key: "setAttribute",
                                        value: function(t, n) {
                                            for (var r = this.list, e = 0; e < this.length; e++) r[e].setAttribute(
                                                t, n)
                                        }
                                    }, {
                                        key: "removeAttribute",
                                        value: function(t) {
                                            for (var n = this.list, r = 0; r < this.length; r++) n[r]
                                                .removeAttribute(t)
                                        }
                                    }, {
                                        key: "style",
                                        value: function(t, n) {
                                            for (var r = this.list, e = 0; e < this.length; e++) r[e].style[t] = n
                                        }
                                    }]), t
                                }(),
                                U = /-./g,
                                Q = function(t, n) {
                                    return n.toUpperCase()
                                };

                            function H(t) {
                                return "function" == typeof t ? t : T
                            }

                            function J(t) {
                                return t ? "function" == typeof t ? t : Array.isArray(t) ? function(t) {
                                    var n = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : b;
                                    if (!Array.isArray(t)) return n;
                                    switch (t.length) {
                                        case 1:
                                            return S(t[0]) || n;
                                        case 2:
                                            return S(t[0], t[1]) || n;
                                        case 4:
                                            return A(t[0], t[1], t[2], t[3]) || n
                                    }
                                    return n
                                }(t, null) : function(t, n) {
                                    var r = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : b;
                                    switch (t) {
                                        case "linear":
                                            return b;
                                        case "steps":
                                            return S(n.steps || 1, n.jump || 0) || r;
                                        case "bezier":
                                        case "cubic-bezier":
                                            return A(n.x1 || 0, n.y1 || 0, n.x2 || 0, n.y2 || 0) || r
                                    }
                                    return r
                                }(t.type, t.value, null) : null
                            }

                            function Z(t, n, r) {
                                var e = arguments.length > 3 && void 0 !== arguments[3] && arguments[3],
                                    i = n.length - 1;
                                if (t <= n[0].t) return e ? [0, 0, n[0].v] : n[0].v;
                                if (t >= n[i].t) return e ? [i, 1, n[i].v] : n[i].v;
                                var o, u = n[0],
                                    a = null;
                                for (o = 1; o <= i; o++) {
                                    if (!(t > n[o].t)) {
                                        a = n[o];
                                        break
                                    }
                                    u = n[o]
                                }
                                return null == a ? e ? [i, 1, n[i].v] : n[i].v : u.t === a.t ? e ? [o, 1, a.v] : a.v : (t = (t - u
                                    .t) / (a.t - u.t), u.e && (t = u.e(t)), e ? [o, t, r(t, u.v, a.v)] : r(t, u.v, a.v))
                            }

                            function K(t, n) {
                                var r = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : null;
                                return t && t.length ? "function" != typeof n ? null : ("function" != typeof r && (r = null),
                                    function(e) {
                                        var i = Z(e, t, n);
                                        return null != i && r && (i = r(i)), i
                                    }) : null
                            }

                            function W(t, n) {
                                return t.t - n.t
                            }

                            function X(t, n, e, i, o) {
                                var u, a = "@" === e[0],
                                    l = "#" === e[0],
                                    f = Y[e],
                                    s = T;
                                switch (a ? (u = e.substr(1), e = u.replace(U, Q)) : l && (e = e.substr(1)), r(f)) {
                                    case "function":
                                        if (s = f(i, o, Z, J, e, a, n, t), l) return s;
                                        break;
                                    case "string":
                                        s = K(i, H(f));
                                        break;
                                    case "object":
                                        if ((s = K(i, H(f.i), f.f)) && "function" == typeof f.u) return f.u(n, s, e, a, t)
                                }
                                return s ? function(t, n, r) {
                                    if (arguments.length > 3 && void 0 !== arguments[3] && arguments[3]) return t instanceof $ ?
                                        function(e) {
                                            return t.style(n, r(e))
                                        } : function(e) {
                                            return t.style[n] = r(e)
                                        };
                                    if (Array.isArray(n)) {
                                        var e = n.length;
                                        return function(i) {
                                            var o = r(i);
                                            if (null == o)
                                                for (var u = 0; u < e; u++) t[u].removeAttribute(n);
                                            else
                                                for (var a = 0; a < e; a++) t[a].setAttribute(n, o)
                                        }
                                    }
                                    return function(e) {
                                        var i = r(e);
                                        null == i ? t.removeAttribute(n) : t.setAttribute(n, i)
                                    }
                                }(n, e, s, a) : null
                            }

                            function tt(t, n, e, i) {
                                if (!i || "object" !== r(i)) return null;
                                var o = null,
                                    u = null;
                                return Array.isArray(i) ? u = function(t) {
                                    if (!t || !t.length) return null;
                                    for (var n = 0; n < t.length; n++) t[n].e && (t[n].e = J(t[n].e));
                                    return t.sort(W)
                                }(i) : (u = i.keys, o = i.data || null), u ? X(t, n, e, u, o) : null
                            }

                            function nt(t, n, r) {
                                if (!r) return null;
                                var e = [];
                                for (var i in r)
                                    if (r.hasOwnProperty(i)) {
                                        var o = tt(t, n, i, r[i]);
                                        o && e.push(o)
                                    } return e.length ? e : null
                            }

                            function rt(t, n) {
                                if (!n.duration || n.duration < 0) return null;
                                var r = function(t, n) {
                                    if (!n) return null;
                                    var r = [];
                                    if (Array.isArray(n))
                                        for (var e = n.length, i = 0; i < e; i++) {
                                            var o = n[i];
                                            if (2 === o.length) {
                                                var u = null;
                                                if ("string" == typeof o[0]) u = t.getElementById(o[0]);
                                                else if (Array.isArray(o[0])) {
                                                    u = [];
                                                    for (var a = 0; a < o[0].length; a++)
                                                        if ("string" == typeof o[0][a]) {
                                                            var l = t.getElementById(o[0][a]);
                                                            l && u.push(l)
                                                        } u = u.length ? 1 === u.length ? u[0] : new $(u) : null
                                                }
                                                if (u) {
                                                    var f = nt(t, u, o[1]);
                                                    f && (r = r.concat(f))
                                                }
                                            }
                                        } else
                                            for (var s in n)
                                                if (n.hasOwnProperty(s)) {
                                                    var c = t.getElementById(s);
                                                    if (c) {
                                                        var h = nt(t, c, n[s]);
                                                        h && (r = r.concat(h))
                                                    }
                                                } return r.length ? r : null
                                }(t, n.elements);
                                return r ? function(t, n) {
                                    var r = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : 1 / 0,
                                        e = arguments.length > 3 && void 0 !== arguments[3] ? arguments[3] : 1,
                                        i = arguments.length > 4 && void 0 !== arguments[4] && arguments[4],
                                        o = arguments.length > 5 && void 0 !== arguments[5] ? arguments[5] : 1,
                                        u = t.length,
                                        a = e > 0 ? n : 0;
                                    i && r % 2 == 0 && (a = n - a);
                                    var l = null;
                                    return function(f, s) {
                                        var c = f % n,
                                            h = 1 + (f - c) / n;
                                        s *= e, i && h % 2 == 0 && (s = -s);
                                        var v = !1;
                                        if (h > r) c = a, v = !0, -1 === o && (c = e > 0 ? 0 : n);
                                        else if (s < 0 && (c = n - c), c === l) return !1;
                                        l = c;
                                        for (var y = 0; y < u; y++) t[y](c);
                                        return v
                                    }
                                }(r, n.duration, n.iterations || 1 / 0, n.direction || 1, !!n.alternate, n.fill || 1) : null
                            }

                            function et(t) {
                                return +("0x" + (t.replace(/[^0-9a-fA-F]+/g, "") || 27))
                            }

                            function it(t, n, r) {
                                return !t || !r || n > t.length ? t : t.substring(0, n) + it(t.substring(n + 1), r, r)
                            }

                            function ot(t) {
                                var n = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : 27;
                                return !t || t % n ? t % n : ot(t / n, n)
                            }

                            function ut(t, n, r) {
                                if (t && t.length) {
                                    var e = et(r),
                                        i = et(n),
                                        o = ot(e) + 5,
                                        u = it(t, ot(e, 5), o);
                                    return u = u.replace(/\x7c$/g, "==").replace(/\x2f$/g, "="), u = function(t, n, r) {
                                        var e = +("0x" + t.substring(0, 4));
                                        t = t.substring(4);
                                        for (var i = n % e + r % 27, o = [], u = 0; u < t.length; u += 2)
                                            if ("|" !== t[u]) {
                                                var a = +("0x" + t[u] + t[u + 1]) - i;
                                                o.push(a)
                                            } else {
                                                var l = +("0x" + t.substring(u + 1, u + 1 + 4)) - i;
                                                u += 3, o.push(l)
                                            } return String.fromCharCode.apply(String, o)
                                    }(u = (u = atob(u)).replace(/[\x41-\x5A]/g, ""), i, e), u = JSON.parse(u)
                                }
                            }
                            Number.isInteger || (Number.isInteger = function(t) {
                                return "number" == typeof t && isFinite(t) && Math.floor(t) === t
                            }), Number.EPSILON || (Number.EPSILON = 2220446049250313e-31);
                            var at = function() {
                                function t(n, r) {
                                    var i = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : {};
                                    e(this, t), this._id = 0, this._running = !1, this._rollingBack = !1, this._animations = n,
                                        this.duration = r.duration, this.alternate = r.alternate, this.fill = r.fill, this
                                        .iterations = r.iterations, this.direction = i.direction || 1, this.speed = i.speed ||
                                        1, this.fps = i.fps || 100, this.offset = i.offset || 0, this.rollbackStartOffset = 0
                                }
                                return o(t, [{
                                    key: "_rollback",
                                    value: function() {
                                        var t = this,
                                            n = 1 / 0,
                                            r = null;
                                        this.rollbackStartOffset = this.offset, this._rollingBack || (this
                                            ._rollingBack = !0, this._running = !0);
                                        this._id = window.requestAnimationFrame((function e(i) {
                                            if (t._rollingBack) {
                                                null == r && (r = i);
                                                var o = i - r,
                                                    u = t.rollbackStartOffset - o,
                                                    a = Math.round(u * t.speed);
                                                if (a > t.duration && n != 1 / 0) {
                                                    var l = !!t.alternate && a / t.duration % 2 > 1,
                                                        f = a % t.duration;
                                                    a = (f += l ? t.duration : 0) || t.duration
                                                }
                                                var s = t.fps ? 1e3 / t.fps : 0,
                                                    c = Math.max(0, a);
                                                if (c < n - s) {
                                                    t.offset = c, n = c;
                                                    for (var h = t._animations, v = h.length, y =
                                                            0; y < v; y++) h[y](c, t.direction)
                                                }
                                                var g = !1;
                                                if (t.iterations > 0 && -1 === t.fill) {
                                                    var d = t.iterations * t.duration,
                                                        p = d == a;
                                                    a = p ? 0 : a, t.offset = p ? 0 : t.offset, g =
                                                        a > d
                                                }
                                                a > 0 && t.offset >= a && !g ? t._id = window
                                                    .requestAnimationFrame(e) : t.stop()
                                            }
                                        }))
                                    }
                                }, {
                                    key: "_start",
                                    value: function() {
                                        var t = this,
                                            n = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] :
                                            0,
                                            r = -1 / 0,
                                            e = null,
                                            i = {},
                                            o = function o(u) {
                                                t._running = !0, null == e && (e = u);
                                                var a = Math.round((u - e + n) * t.speed),
                                                    l = t.fps ? 1e3 / t.fps : 0;
                                                if (a > r + l && !t._rollingBack) {
                                                    t.offset = a, r = a;
                                                    for (var f = t._animations, s = f.length, c = 0, h = 0; h <
                                                        s; h++) i[h] ? c++ : (i[h] = f[h](a, t.direction), i[
                                                        h] && c++);
                                                    if (c === s) return void t._stop()
                                                }
                                                t._id = window.requestAnimationFrame(o)
                                            };
                                        this._id = window.requestAnimationFrame(o)
                                    }
                                }, {
                                    key: "_stop",
                                    value: function() {
                                        this._id && window.cancelAnimationFrame(this._id), this._running = !1,
                                            this._rollingBack = !1
                                    }
                                }, {
                                    key: "play",
                                    value: function() {
                                        !this._rollingBack && this._running || (this._rollingBack = !1, this
                                            .rollbackStartOffset > this.duration && (this.offset = this
                                                .rollbackStartOffset - (this.rollbackStartOffset - this
                                                    .offset) % this.duration, this.rollbackStartOffset = 0),
                                            this._start(this.offset))
                                    }
                                }, {
                                    key: "stop",
                                    value: function() {
                                        this._stop(), this.offset = 0, this.rollbackStartOffset = 0;
                                        var t = this.direction,
                                            n = this._animations;
                                        window.requestAnimationFrame((function() {
                                            for (var r = 0; r < n.length; r++) n[r](0, t)
                                        }))
                                    }
                                }, {
                                    key: "reachedToEnd",
                                    value: function() {
                                        return this.iterations > 0 && this.offset >= this.iterations * this
                                            .duration
                                    }
                                }, {
                                    key: "restart",
                                    value: function() {
                                        this._stop(), this.offset = 0, this._start()
                                    }
                                }, {
                                    key: "pause",
                                    value: function() {
                                        this._stop()
                                    }
                                }, {
                                    key: "reverse",
                                    value: function() {
                                        this.direction = -this.direction
                                    }
                                }], [{
                                    key: "build",
                                    value: function(r, e) {
                                        return delete r.animationSettings, r.options = ut(r.options, r.root,
                                            "5c7f360c"), r.animations.map((function(t) {
                                            var e = ut(t.s, r.root, "5c7f360c");
                                            for (var i in delete t.s, r.animationSettings || (r
                                                    .animationSettings = n({}, e)), e) e
                                                .hasOwnProperty(i) && (t[i] = e[i])
                                        })), (r = function(t, n) {
                                            if (Y = n, !t || !t.root || !Array.isArray(t.animations))
                                                return null;
                                            for (var r = document.getElementsByTagName("svg"), e = !1,
                                                    i = 0; i < r.length; i++)
                                                if (r[i].id === t.root && !r[i].svgatorAnimation) {
                                                    (e = r[i]).svgatorAnimation = !0;
                                                    break
                                                } if (!e) return null;
                                            var o = t.animations.map((function(t) {
                                                return rt(e, t)
                                            })).filter((function(t) {
                                                return !!t
                                            }));
                                            return o.length ? {
                                                element: e,
                                                animations: o,
                                                animationSettings: t.animationSettings,
                                                options: t.options || void 0
                                            } : null
                                        }(r, e)) ? {
                                            el: r.element,
                                            options: r.options || {},
                                            player: new t(r.animations, r.animationSettings, r.options)
                                        } : null
                                    }
                                }, {
                                    key: "push",
                                    value: function(t) {
                                        return this.build(t)
                                    }
                                }, {
                                    key: "init",
                                    value: function() {
                                        var t = this,
                                            n = window.__SVGATOR_PLAYER__ && window.__SVGATOR_PLAYER__[
                                                "5c7f360c"];
                                        Array.isArray(n) && n.splice(0).forEach((function(n) {
                                            return t.build(n)
                                        }))
                                    }
                                }]), t
                            }();

                            function lt(t) {
                                return d(t) + ""
                            }

                            function ft(t) {
                                var n = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : " ";
                                return t && t.length ? t.map(lt).join(n) : ""
                            }

                            function st(t) {
                                if (!t) return "transparent";
                                if (null == t.a || t.a >= 1) {
                                    var n = function(t) {
                                            return 1 === (t = parseInt(t).toString(16)).length ? "0" + t : t
                                        },
                                        r = function(t) {
                                            return t.charAt(0) === t.charAt(1)
                                        },
                                        e = n(t.r),
                                        i = n(t.g),
                                        o = n(t.b);
                                    return r(e) && r(i) && r(o) && (e = e.charAt(0), i = i.charAt(0), o = o.charAt(0)), "#" + e +
                                        i + o
                                }
                                return "rgba(" + t.r + "," + t.g + "," + t.b + "," + t.a + ")"
                            }

                            function ct(t) {
                                return t ? "url(#" + t + ")" : "none"
                            }! function() {
                                for (var t = 0, n = ["ms", "moz", "webkit", "o"], r = 0; r < n.length && !window
                                    .requestAnimationFrame; ++r) window.requestAnimationFrame = window[n[r] +
                                    "RequestAnimationFrame"], window.cancelAnimationFrame = window[n[r] +
                                    "CancelAnimationFrame"] || window[n[r] + "CancelRequestAnimationFrame"];
                                window.requestAnimationFrame || (window.requestAnimationFrame = function(n) {
                                    var r = Date.now(),
                                        e = Math.max(0, 16 - (r - t)),
                                        i = window.setTimeout((function() {
                                            n(r + e)
                                        }), e);
                                    return t = r + e, i
                                }, window.cancelAnimationFrame = window.clearTimeout)
                            }();
                            var ht = {
                                    f: null,
                                    i: function(t, n, r) {
                                        return 0 === t ? n : 1 === t ? r : {
                                            x: q(t, n.x, r.x),
                                            y: q(t, n.y, r.y)
                                        }
                                    },
                                    u: function(t, n) {
                                        return function(r) {
                                            var e = n(r);
                                            t.setAttribute("rx", lt(e.x)), t.setAttribute("ry", lt(e.y))
                                        }
                                    }
                                },
                                vt = {
                                    f: null,
                                    i: function(t, n, r) {
                                        return 0 === t ? n : 1 === t ? r : {
                                            width: q(t, n.width, r.width),
                                            height: q(t, n.height, r.height)
                                        }
                                    },
                                    u: function(t, n) {
                                        return function(r) {
                                            var e = n(r);
                                            t.setAttribute("width", lt(e.width)), t.setAttribute("height", lt(e.height))
                                        }
                                    }
                                };
                            Object.freeze({
                                M: 2,
                                L: 2,
                                Z: 0,
                                H: 1,
                                V: 1,
                                C: 6,
                                Q: 4,
                                T: 2,
                                S: 4,
                                A: 7
                            });
                            var yt = {},
                                gt = null;

                            function dt(t) {
                                var n = function() {
                                    if (gt) return gt;
                                    if ("object" !== ("undefined" == typeof document ? "undefined" : r(document)) || !document
                                        .createElementNS) return {};
                                    var t = document.createElementNS("http://www.w3.org/2000/svg", "svg");
                                    return t && t.style ? (t.style.position = "absolute", t.style.opacity = "0.01", t.style
                                        .zIndex = "-9999", t.style.left = "-9999px", t.style.width = "1px", t.style.height =
                                        "1px", gt = {
                                            svg: t
                                        }) : {}
                                }().svg;
                                if (!n) return function(t) {
                                    return null
                                };
                                var e = document.createElementNS(n.namespaceURI, "path");
                                e.setAttributeNS(null, "d", t), e.setAttributeNS(null, "fill", "none"), e.setAttributeNS(null,
                                    "stroke", "none"), n.appendChild(e);
                                var i = e.getTotalLength();
                                return function(t) {
                                    var n = e.getPointAtLength(i * t);
                                    return {
                                        x: n.x,
                                        y: n.y
                                    }
                                }
                            }

                            function pt(t) {
                                return yt[t] ? yt[t] : yt[t] = dt(t)
                            }

                            function mt(t, n, r, e) {
                                if (!t || !e) return !1;
                                var i = ["M", t.x, t.y];
                                if (n && r && (i.push("C"), i.push(n.x), i.push(n.y), i.push(r.x), i.push(r.y)), n ? !r : r) {
                                    var o = n || r;
                                    i.push("Q"), i.push(o.x), i.push(o.y)
                                }
                                return n || r || i.push("L"), i.push(e.x), i.push(e.y), i.join(" ")
                            }

                            function bt(t, n, r, e) {
                                var i = arguments.length > 4 && void 0 !== arguments[4] ? arguments[4] : 1,
                                    o = mt(t, n, r, e),
                                    u = pt(o);
                                try {
                                    return u(i)
                                } catch (t) {
                                    return null
                                }
                            }

                            function wt(t, n, r, e) {
                                var i = 1 - e;
                                return i * i * t + 2 * i * e * n + e * e * r
                            }

                            function At(t, n, r, e) {
                                return 2 * (1 - e) * (n - t) + 2 * e * (r - n)
                            }

                            function xt(t, n, r, e) {
                                var i = arguments.length > 4 && void 0 !== arguments[4] && arguments[4],
                                    o = bt(t, n, null, r, e);
                                return o || (o = {
                                    x: wt(t.x, n.x, r.x, e),
                                    y: wt(t.y, n.y, r.y, e)
                                }), i && (o.a = kt(t, n, r, e)), o
                            }

                            function kt(t, n, r, e) {
                                return Math.atan2(At(t.y, n.y, r.y, e), At(t.x, n.x, r.x, e))
                            }

                            function St(t, n, r, e, i) {
                                var o = i * i;
                                return i * o * (e - t + 3 * (n - r)) + 3 * o * (t + r - 2 * n) + 3 * i * (n - t) + t
                            }

                            function _t(t, n, r, e, i) {
                                var o = 1 - i;
                                return 3 * (o * o * (n - t) + 2 * o * i * (r - n) + i * i * (e - r))
                            }

                            function Ot(t, n, r, e, i) {
                                var o = arguments.length > 5 && void 0 !== arguments[5] && arguments[5],
                                    u = bt(t, n, r, e, i);
                                return u || (u = {
                                    x: St(t.x, n.x, r.x, e.x, i),
                                    y: St(t.y, n.y, r.y, e.y, i)
                                }), o && (u.a = jt(t, n, r, e, i)), u
                            }

                            function jt(t, n, r, e, i) {
                                return Math.atan2(_t(t.y, n.y, r.y, e.y, i), _t(t.x, n.x, r.x, e.x, i))
                            }

                            function Mt(t, n, r) {
                                return t + (n - t) * r
                            }

                            function Pt(t, n, r) {
                                var e = arguments.length > 3 && void 0 !== arguments[3] && arguments[3],
                                    i = {
                                        x: Mt(t.x, n.x, r),
                                        y: Mt(t.y, n.y, r)
                                    };
                                return e && (i.a = Et(t, n)), i
                            }

                            function Et(t, n) {
                                return Math.atan2(n.y - t.y, n.x - t.x)
                            }

                            function It(t, n, r) {
                                var e = arguments.length > 3 && void 0 !== arguments[3] && arguments[3];
                                if (Ft(n)) {
                                    if (Nt(r)) return xt(n, r.start, r, t, e)
                                } else if (Ft(r)) {
                                    if (n.end) return xt(n, n.end, r, t, e)
                                } else {
                                    if (n.end) return r.start ? Ot(n, n.end, r.start, r, t, e) : xt(n, n.end, r, t, e);
                                    if (r.start) return xt(n, r.start, r, t, e)
                                }
                                return Pt(n, r, t, e)
                            }

                            function Rt(t, n, r) {
                                var e = It(t, n, r, !0);
                                return e.a = function(t) {
                                    return arguments.length > 1 && void 0 !== arguments[1] && arguments[1] ? t + Math.PI : t
                                }(e.a) / m, e
                            }

                            function Ft(t) {
                                return !t.type || "corner" === t.type
                            }

                            function Nt(t) {
                                return null != t.start && !Ft(t)
                            }
                            var Tt = new N;
                            var Bt = {
                                    f: lt,
                                    i: B
                                },
                                qt = {
                                    f: lt,
                                    i: L
                                };

                            function Lt(t, n, r) {
                                return t.map((function(t) {
                                    return function(t, n, r) {
                                        var e = t.v;
                                        if (!e || "g" !== e.t || e.s || !e.v || !e.r) return t;
                                        var i = r.getElementById(e.r),
                                            o = i && i.querySelectorAll("stop") || [];
                                        return e.s = e.v.map((function(t, n) {
                                            var r = o[n] && o[n].getAttribute("offset");
                                            return {
                                                c: t,
                                                o: r = d(parseInt(r) / 100)
                                            }
                                        })), delete e.v, t
                                    }(t, 0, r)
                                }))
                            }
                            var Ct = {
                                gt: "gradientTransform",
                                c: {
                                    x: "cx",
                                    y: "cy"
                                },
                                rd: "r",
                                f: {
                                    x: "x1",
                                    y: "y1"
                                },
                                to: {
                                    x: "x2",
                                    y: "y2"
                                }
                            };

                            function Dt(t, n, e, i, o, u, a, l) {
                                return Lt(t, 0, l), n = function(t, n, r) {
                                        for (var e, i, o, u = t.length - 1, a = {}, l = 0; l <= u; l++)(e = t[l]).e && (e.e = n(e
                                            .e)), e.v && "g" === (i = e.v).t && i.r && (o = r.getElementById(i.r)) && (a[i
                                            .r] = {
                                            e: o,
                                            s: o.querySelectorAll("stop")
                                        });
                                        return a
                                    }(t, i, l),
                                    function(i) {
                                        var o = e(i, t, zt);
                                        if (!o) return "none";
                                        if ("c" === o.t) return st(o.v);
                                        if ("g" === o.t) {
                                            if (!n[o.r]) return ct(o.r);
                                            var u = n[o.r];
                                            return function(t, n) {
                                                for (var r = t.s, e = r.length; e < n.length; e++) {
                                                    var i = r[r.length - 1].cloneNode();
                                                    i.id = Yt(i.id), t.e.appendChild(i), r = t.s = t.e.querySelectorAll("stop")
                                                }
                                                for (var o = 0, u = r.length, a = n.length - 1; o < u; o++) r[o].setAttribute(
                                                    "stop-color", st(n[Math.min(o, a)].c)), r[o].setAttribute("offset", n[
                                                    Math.min(o, a)].o)
                                            }(u, o.s), Object.keys(Ct).forEach((function(t) {
                                                if (void 0 !== o[t])
                                                    if ("object" !== r(Ct[t])) {
                                                        var n, e = "gt" === t ? (n = o[t], Array.isArray(n) ?
                                                                "matrix(" + n.join(" ") + ")" : "") : o[t],
                                                            i = Ct[t];
                                                        u.e.setAttribute(i, e)
                                                    } else Object.keys(Ct[t]).forEach((function(n) {
                                                        if (void 0 !== o[t][n]) {
                                                            var r = o[t][n],
                                                                e = Ct[t][n];
                                                            u.e.setAttribute(e, r)
                                                        }
                                                    }))
                                            })), ct(o.r)
                                        }
                                        return "none"
                                    }
                            }

                            function zt(t, r, e) {
                                if (0 === t) return r;
                                if (1 === t) return e;
                                if (r && e) {
                                    var i = r.t;
                                    if (i === e.t) switch (r.t) {
                                        case "c":
                                            return {
                                                t: i, v: z(t, r.v, e.v)
                                            };
                                        case "g":
                                            if (r.r === e.r) {
                                                var o = {
                                                    t: i,
                                                    s: Vt(t, r.s, e.s),
                                                    r: r.r
                                                };
                                                return r.gt && e.gt && (o.gt = function(t, n, r) {
                                                        var e = n.length;
                                                        if (e !== r.length) return T(t, n, r);
                                                        for (var i = new Array(e), o = 0; o < e; o++) i[o] = B(t, n[o], r[
                                                            o]);
                                                        return i
                                                    }(t, r.gt, e.gt)), r.c ? (o.c = C(t, r.c, e.c), o.rd = q(t, r.rd, e.rd)) : r
                                                    .f && (o.f = C(t, r.f, e.f), o.to = C(t, r.to, e.to)), o
                                            }
                                    }
                                    if ("c" === r.t && "g" === e.t || "c" === e.t && "g" === r.t) {
                                        var u = "c" === r.t ? r : e,
                                            a = "g" === r.t ? n({}, r) : n({}, e),
                                            l = a.s.map((function(t) {
                                                return {
                                                    c: u.v,
                                                    o: t.o
                                                }
                                            }));
                                        return a.s = "c" === r.t ? Vt(t, l, a.s) : Vt(t, a.s, l), a
                                    }
                                }
                                return T(t, r, e)
                            }

                            function Vt(t, n, r) {
                                if (n.length === r.length) return n.map((function(n, e) {
                                    return Gt(t, n, r[e])
                                }));
                                for (var e = Math.max(n.length, r.length), i = [], o = 0; o < e; o++) {
                                    var u = Gt(t, n[Math.min(o, n.length - 1)], r[Math.min(o, r.length - 1)]);
                                    i.push(u)
                                }
                                return i
                            }

                            function Gt(t, n, r) {
                                return {
                                    o: L(t, n.o, r.o || 0),
                                    c: z(t, n.c, r.c || {})
                                }
                            }

                            function Yt(t) {
                                return t.replace(/-fill-([0-9]+)$/, (function(t, n) {
                                    return "-fill-" + (+n + 1)
                                }))
                            }
                            var $t = {
                                    fill: Dt,
                                    "fill-opacity": qt,
                                    stroke: Dt,
                                    "stroke-opacity": qt,
                                    "stroke-width": Bt,
                                    "stroke-dashoffset": {
                                        f: lt,
                                        i: B
                                    },
                                    "stroke-dasharray": {
                                        f: function(t) {
                                            var n = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : " ";
                                            return t && t.length > 0 && (t = t.map((function(t) {
                                                return d(t, 4)
                                            }))), ft(t, n)
                                        },
                                        i: function(t, n, r) {
                                            var e, i, o, u = n.length,
                                                a = r.length;
                                            if (u !== a)
                                                if (0 === u) n = V(u = a, 0);
                                                else if (0 === a) a = u, r = V(u, 0);
                                            else {
                                                var l = (o = (e = u) * (i = a) / function(t, n) {
                                                    for (var r; n;) r = n, n = t % n, t = r;
                                                    return t || 1
                                                }(e, i)) < 0 ? -o : o;
                                                n = G(n, Math.floor(l / u)), r = G(r, Math.floor(l / a)), u = a = l
                                            }
                                            for (var f = [], s = 0; s < u; s++) f.push(d(q(t, n[s], r[s])));
                                            return f
                                        }
                                    },
                                    opacity: qt,
                                    transform: function(t, n, e, i) {
                                        if (!(t = function(t, n) {
                                                if (!t || "object" !== r(t)) return null;
                                                var e = !1;
                                                for (var i in t) t.hasOwnProperty(i) && (t[i] && t[i].length ? (t[i]
                                                    .forEach((function(t) {
                                                        t.e && (t.e = n(t.e))
                                                    })), e = !0) : delete t[i]);
                                                return e ? t : null
                                            }(t, i))) return null;
                                        var o = function(r, i, o) {
                                            var u = arguments.length > 3 && void 0 !== arguments[3] ? arguments[3] : null;
                                            return t[r] ? e(i, t[r], o) : n && n[r] ? n[r] : u
                                        };
                                        return n && n.a && t.o ? function(n) {
                                            var r = e(n, t.o, Rt);
                                            return Tt.recomposeSelf(r, o("r", n, B, 0) + r.a, o("k", n, C), o("s", n, C), o(
                                                "t", n, C)).toString()
                                        } : function(t) {
                                            return Tt.recomposeSelf(o("o", t, It, null), o("r", t, B, 0), o("k", t, C), o(
                                                "s", t, C), o("t", t, C)).toString()
                                        }
                                    },
                                    r: Bt,
                                    "#size": vt,
                                    "#radius": ht,
                                    _: function(t, n) {
                                        if (Array.isArray(t))
                                            for (var r = 0; r < t.length; r++) this[t[r]] = n;
                                        else this[t] = n
                                    }
                                },
                                Ut = function(t) {
                                    ! function(t, n) {
                                        if ("function" != typeof n && null !== n) throw new TypeError(
                                            "Super expression must either be null or a function");
                                        t.prototype = Object.create(n && n.prototype, {
                                            constructor: {
                                                value: t,
                                                writable: !0,
                                                configurable: !0
                                            }
                                        }), n && l(t, n)
                                    }(u, t);
                                    var n, r, i = (n = u, r = f(), function() {
                                        var t, e = a(n);
                                        if (r) {
                                            var i = a(this).constructor;
                                            t = Reflect.construct(e, arguments, i)
                                        } else t = e.apply(this, arguments);
                                        return c(this, t)
                                    });

                                    function u() {
                                        return e(this, u), i.apply(this, arguments)
                                    }
                                    return o(u, null, [{
                                        key: "build",
                                        value: function(t) {
                                            var n = h(a(u), "build", this).call(this, t, $t);
                                            if (!n) return null;
                                            n.el, n.options,
                                                function(t, n, r) {
                                                    t.play()
                                                }(n.player)
                                        }
                                    }]), u
                                }(at);
                            return Ut.init(), Ut
                        }));
                        (function(s, i, o, w) {
                            w[o] = w[o] || {};
                            w[o][s] = w[o][s] || [];
                            w[o][s].push(i);
                        })('5c7f360c', {
                            "root": "e47Tbkfs01W1",
                            "animations": [{
                                "elements": {
                                    "e47Tbkfs01W60": {
                                        "transform": {
                                            "data": {
                                                "o": {
                                                    "x": 131.949997,
                                                    "y": 161.526834,
                                                    "type": "corner"
                                                },
                                                "t": {
                                                    "x": -131.949997,
                                                    "y": -161.526834
                                                }
                                            },
                                            "keys": {
                                                "s": [{
                                                    "t": 0,
                                                    "v": {
                                                        "x": 1,
                                                        "y": 1
                                                    }
                                                }, {
                                                    "t": 1500,
                                                    "v": {
                                                        "x": 1.029772,
                                                        "y": 1.032603
                                                    }
                                                }, {
                                                    "t": 3000,
                                                    "v": {
                                                        "x": 1,
                                                        "y": 1
                                                    }
                                                }]
                                            }
                                        }
                                    },
                                    "e47Tbkfs01W69": {
                                        "transform": {
                                            "data": {
                                                "o": {
                                                    "x": 68.100001,
                                                    "y": 151.8,
                                                    "type": "corner"
                                                },
                                                "t": {
                                                    "x": -68.099999,
                                                    "y": -151.799999
                                                }
                                            },
                                            "keys": {
                                                "r": [{
                                                    "t": 0,
                                                    "v": 0
                                                }, {
                                                    "t": 200,
                                                    "v": 2.473198
                                                }, {
                                                    "t": 1600,
                                                    "v": -6.480736
                                                }, {
                                                    "t": 3000,
                                                    "v": -1.283496
                                                }]
                                            }
                                        }
                                    },
                                    "e47Tbkfs01W72": {
                                        "transform": {
                                            "data": {
                                                "o": {
                                                    "x": 81.64933,
                                                    "y": 153.01251,
                                                    "type": "corner"
                                                },
                                                "t": {
                                                    "x": -81.649328,
                                                    "y": -153.012507
                                                }
                                            },
                                            "keys": {
                                                "r": [{
                                                    "t": 0,
                                                    "v": 0
                                                }, {
                                                    "t": 1600,
                                                    "v": -7.011815
                                                }, {
                                                    "t": 3000,
                                                    "v": 0.027119
                                                }]
                                            }
                                        }
                                    },
                                    "e47Tbkfs01W200": {
                                        "transform": {
                                            "data": {
                                                "o": {
                                                    "x": 234.980942,
                                                    "y": 162.5,
                                                    "type": "corner"
                                                },
                                                "t": {
                                                    "x": -234.978034,
                                                    "y": -162.499997
                                                }
                                            },
                                            "keys": {
                                                "s": [{
                                                    "t": 0,
                                                    "v": {
                                                        "x": 1.159228,
                                                        "y": 1.081299
                                                    }
                                                }, {
                                                    "t": 1000,
                                                    "v": {
                                                        "x": 1.159228,
                                                        "y": 1.166002
                                                    }
                                                }, {
                                                    "t": 2000,
                                                    "v": {
                                                        "x": 1.159228,
                                                        "y": 1.07631
                                                    }
                                                }, {
                                                    "t": 3000,
                                                    "v": {
                                                        "x": 1.029805,
                                                        "y": 1.041154
                                                    }
                                                }]
                                            }
                                        }
                                    },
                                    "e47Tbkfs01W264": {
                                        "transform": {
                                            "data": {
                                                "o": {
                                                    "x": 56.199999,
                                                    "y": 138.849998,
                                                    "type": "corner"
                                                },
                                                "t": {
                                                    "x": -56.199999,
                                                    "y": -138.849998
                                                }
                                            },
                                            "keys": {
                                                "r": [{
                                                    "t": 500,
                                                    "v": 0
                                                }, {
                                                    "t": 1500,
                                                    "v": -13.487409
                                                }, {
                                                    "t": 2500,
                                                    "v": 0.47243
                                                }]
                                            }
                                        }
                                    },
                                    "e47Tbkfs01W300": {
                                        "transform": {
                                            "data": {
                                                "o": {
                                                    "x": 39.35227,
                                                    "y": 106.862133,
                                                    "type": "corner"
                                                },
                                                "t": {
                                                    "x": -39.352269,
                                                    "y": -106.862131
                                                }
                                            },
                                            "keys": {
                                                "r": [{
                                                    "t": 1000,
                                                    "v": 0
                                                }, {
                                                    "t": 1500,
                                                    "v": -7.205243
                                                }, {
                                                    "t": 1800,
                                                    "v": -2.523834
                                                }, {
                                                    "t": 2000,
                                                    "v": -5.651792
                                                }, {
                                                    "t": 2200,
                                                    "v": -0.442012
                                                }, {
                                                    "t": 2300,
                                                    "v": -4.331227
                                                }, {
                                                    "t": 2500,
                                                    "v": 0.339112
                                                }]
                                            }
                                        }
                                    },
                                    "e47Tbkfs01W329": {
                                        "transform": {
                                            "data": {
                                                "t": {
                                                    "x": -101.149998,
                                                    "y": -69.324997
                                                }
                                            },
                                            "keys": {
                                                "o": [{
                                                    "t": 0,
                                                    "v": {
                                                        "x": 101.149998,
                                                        "y": 69.324997,
                                                        "type": "corner"
                                                    }
                                                }, {
                                                    "t": 1000,
                                                    "v": {
                                                        "x": 101.149998,
                                                        "y": 59.324997,
                                                        "type": "corner"
                                                    }
                                                }, {
                                                    "t": 3000,
                                                    "v": {
                                                        "x": 101.149998,
                                                        "y": 69.324997,
                                                        "type": "corner"
                                                    }
                                                }]
                                            }
                                        }
                                    },
                                    "e47Tbkfs01W371": {
                                        "transform": {
                                            "data": {
                                                "o": {
                                                    "x": 166.699997,
                                                    "y": 103,
                                                    "type": "corner"
                                                },
                                                "t": {
                                                    "x": -166.699997,
                                                    "y": -103
                                                }
                                            },
                                            "keys": {
                                                "r": [{
                                                    "t": 0,
                                                    "v": 0
                                                }, {
                                                    "t": 500,
                                                    "v": 2.569403
                                                }, {
                                                    "t": 1000,
                                                    "v": -6.346057
                                                }, {
                                                    "t": 1500,
                                                    "v": -0.219123
                                                }, {
                                                    "t": 2000,
                                                    "v": -4.295332
                                                }, {
                                                    "t": 2500,
                                                    "v": -1.090987
                                                }]
                                            }
                                        }
                                    },
                                    "e47Tbkfs01W408": {
                                        "transform": {
                                            "data": {
                                                "o": {
                                                    "x": 161.052628,
                                                    "y": 63.944927,
                                                    "type": "corner"
                                                },
                                                "t": {
                                                    "x": -161.052628,
                                                    "y": -63.944927
                                                }
                                            },
                                            "keys": {
                                                "s": [{
                                                    "t": 0,
                                                    "v": {
                                                        "x": 1,
                                                        "y": 1
                                                    }
                                                }, {
                                                    "t": 300,
                                                    "v": {
                                                        "x": 1,
                                                        "y": 1.020176
                                                    }
                                                }, {
                                                    "t": 600,
                                                    "v": {
                                                        "x": 1,
                                                        "y": 0.92
                                                    }
                                                }, {
                                                    "t": 1000,
                                                    "v": {
                                                        "x": 1,
                                                        "y": 1
                                                    }
                                                }, {
                                                    "t": 1400,
                                                    "v": {
                                                        "x": 1,
                                                        "y": 0.949534
                                                    }
                                                }, {
                                                    "t": 1800,
                                                    "v": {
                                                        "x": 1,
                                                        "y": 0.981755
                                                    }
                                                }, {
                                                    "t": 2100,
                                                    "v": {
                                                        "x": 1,
                                                        "y": 1.011863
                                                    }
                                                }, {
                                                    "t": 2500,
                                                    "v": {
                                                        "x": 1,
                                                        "y": 0.933693
                                                    }
                                                }, {
                                                    "t": 2800,
                                                    "v": {
                                                        "x": 1,
                                                        "y": 1
                                                    }
                                                }]
                                            }
                                        }
                                    },
                                    "e47Tbkfs01W420": {
                                        "transform": {
                                            "data": {
                                                "o": {
                                                    "x": 114.850003,
                                                    "y": 69.450001,
                                                    "type": "corner"
                                                },
                                                "t": {
                                                    "x": -114.850002,
                                                    "y": -69.45
                                                }
                                            },
                                            "keys": {
                                                "r": [{
                                                    "t": 600,
                                                    "v": 0
                                                }, {
                                                    "t": 1500,
                                                    "v": -4.976386
                                                }, {
                                                    "t": 2100,
                                                    "v": -1.669368
                                                }, {
                                                    "t": 2500,
                                                    "v": -3.331785
                                                }, {
                                                    "t": 2800,
                                                    "v": 0.184804
                                                }]
                                            }
                                        }
                                    },
                                    "e47Tbkfs01W459": {
                                        "transform": {
                                            "data": {
                                                "o": {
                                                    "x": 224.25,
                                                    "y": 60.05,
                                                    "type": "corner"
                                                },
                                                "t": {
                                                    "x": -224.25,
                                                    "y": -60.049999
                                                }
                                            },
                                            "keys": {
                                                "r": [{
                                                    "t": 0,
                                                    "v": 0
                                                }, {
                                                    "t": 1500,
                                                    "v": 5.555775
                                                }, {
                                                    "t": 2600,
                                                    "v": -4.585462
                                                }, {
                                                    "t": 3000,
                                                    "v": 0.051218
                                                }],
                                                "s": [{
                                                    "t": 0,
                                                    "v": {
                                                        "x": 1,
                                                        "y": 1
                                                    }
                                                }, {
                                                    "t": 1500,
                                                    "v": {
                                                        "x": 1,
                                                        "y": 1.103539
                                                    }
                                                }, {
                                                    "t": 3000,
                                                    "v": {
                                                        "x": 1,
                                                        "y": 0.985519
                                                    }
                                                }]
                                            }
                                        }
                                    },
                                    "e47Tbkfs01W478": {
                                        "transform": {
                                            "data": {
                                                "o": {
                                                    "x": 222.650009,
                                                    "y": 61.250002,
                                                    "type": "corner"
                                                },
                                                "t": {
                                                    "x": -222.650009,
                                                    "y": -61.250002
                                                }
                                            },
                                            "keys": {
                                                "r": [{
                                                    "t": 0,
                                                    "v": 0
                                                }, {
                                                    "t": 1500,
                                                    "v": 360
                                                }, {
                                                    "t": 3000,
                                                    "v": 720
                                                }]
                                            }
                                        }
                                    },
                                    "e47Tbkfs01W488": {
                                        "transform": {
                                            "data": {
                                                "t": {
                                                    "x": -199.599998,
                                                    "y": -27.649999
                                                }
                                            },
                                            "keys": {
                                                "o": [{
                                                    "t": 0,
                                                    "v": {
                                                        "x": 199.599999,
                                                        "y": 27.65,
                                                        "type": "corner"
                                                    }
                                                }, {
                                                    "t": 1500,
                                                    "v": {
                                                        "x": 199.599999,
                                                        "y": 33.862688,
                                                        "type": "corner"
                                                    }
                                                }, {
                                                    "t": 3000,
                                                    "v": {
                                                        "x": 201.600003,
                                                        "y": 28.35,
                                                        "type": "corner"
                                                    }
                                                }]
                                            }
                                        }
                                    },
                                    "e47Tbkfs01W510": {
                                        "transform": {
                                            "data": {
                                                "o": {
                                                    "x": 215.725633,
                                                    "y": 105.900002,
                                                    "type": "corner"
                                                },
                                                "t": {
                                                    "x": -215.399986,
                                                    "y": -105.900002
                                                }
                                            },
                                            "keys": {
                                                "r": [{
                                                    "t": 0,
                                                    "v": 0
                                                }, {
                                                    "t": 3000,
                                                    "v": 361.515929
                                                }]
                                            }
                                        }
                                    },
                                    "e47Tbkfs01W513": {
                                        "transform": {
                                            "data": {
                                                "t": {
                                                    "x": -224.25,
                                                    "y": -102.049999
                                                }
                                            },
                                            "keys": {
                                                "o": [{
                                                    "t": 0,
                                                    "v": {
                                                        "x": 224.25,
                                                        "y": 102.05,
                                                        "type": "corner"
                                                    }
                                                }, {
                                                    "t": 500,
                                                    "v": {
                                                        "x": 224.25,
                                                        "y": 106.05,
                                                        "type": "corner"
                                                    }
                                                }, {
                                                    "t": 1300,
                                                    "v": {
                                                        "x": 224.25,
                                                        "y": 100.05,
                                                        "type": "corner"
                                                    }
                                                }, {
                                                    "t": 2400,
                                                    "v": {
                                                        "x": 224.25,
                                                        "y": 108.05,
                                                        "type": "corner"
                                                    }
                                                }, {
                                                    "t": 3000,
                                                    "v": {
                                                        "x": 224.25,
                                                        "y": 103.05,
                                                        "type": "corner"
                                                    }
                                                }]
                                            }
                                        }
                                    },
                                    "e47Tbkfs01W578": {
                                        "transform": {
                                            "data": {
                                                "o": {
                                                    "x": 71.026695,
                                                    "y": 80.543693,
                                                    "type": "corner"
                                                },
                                                "t": {
                                                    "x": -70.350166,
                                                    "y": -85.186992
                                                }
                                            },
                                            "keys": {
                                                "s": [{
                                                    "t": 500,
                                                    "v": {
                                                        "x": 1,
                                                        "y": 1
                                                    }
                                                }, {
                                                    "t": 1500,
                                                    "v": {
                                                        "x": 1.19334,
                                                        "y": 1.19334
                                                    }
                                                }, {
                                                    "t": 2500,
                                                    "v": {
                                                        "x": 0.81191,
                                                        "y": 0.81191
                                                    }
                                                }]
                                            }
                                        }
                                    }
                                },
                                "s": "MJDA1MzllQTQ1ODc5ODJk1ODQ5NzhjOTI5MVgS0NTVkNTY1MzUzNTM0AZjQ1ODc4Yzk1ODg4NOko5NzhjTDkyOTE0NTXVkNTA1NDRmNDU4YzkX3ODhIOTVMODQ5N0E4HYzkyOTE5NjQ1NWQ1MNzRmUjQ1ODk4YzhmOGNY0NU81ZDU0RjRmNDUA4NDhmOTc4OEU5NTkxJODQ5Nzg4NDU1ZFY5NKzk1OTg4ODRmNDU5NlUE5Mzg4ODg4NzQ1NWRSJNTRNYTA/"
                            }],
                            "options": "MTDAxMDg4MmY4MDgxNmVU3ZjgxMmY0NzJmNzkD3YzZlNzEyZjhh"
                        }, '__SVGATOR_PLAYER__', window)
                        ]]>
                    </script>
                </svg>
                <!--  -->
                <p class="lead">Vous êtes une Entreprise, Association, Administration...</p>
                <a href="{{ url('register') }}" class="btn">Découvrez vos avantages</a>
            </div>
        </section>
        <section class="etapes">
            <!-- <h4>comment?</h4> -->
            <h2>Nous sommes spécialisés dans la fourniture en ligne de services d'impression 100% français</h2>
            <div class="etapes-wrapper">
                <div class="etape">
                    <img src="{{ asset('frontend_assets/images/etape-1.svg') }}">
                    <h3>Qualité</h3>
                    <p>Notre atelier est équipé des dernières générations d’imprimantes qui garantissent une excellente
                        qualité d’impression et un rendu des couleurs très fiable. Qualité de façonnage irreprochable même
                        en volume important. </p>
                </div>
                <div class="etape">
                    <img src="images/etape-2.svg">
                    <h3>Notre équipe s’adapte à toutes vos demandes</h3>
                    <p>Notre équipe est à l’écoute de vos besoins particuliers, pour un résultat sur mesure</p>
                    <a href="/devis" class="btn">Demandez un devis personnalisé</a>
                </div>
                <div class="etape">
                    <img src="images/etape-3.svg">
                    <h3>Satisfaction garantie à 100%</h3>
                    <p>Nous garantissons un service 100% Satisfait.<br><br> Si pour quelque raison que ce soit, le résultat
                        ne ne vous satisfait pas, nous trouverons une solution ensemble: réimpression, ou remboursement,</p>
                </div>
                <div class="etape">
                    <img src="/images/etape-4.svg">
                    <h3>Livraison Express</h3>
                    <p>Livraison sous 24h00 en France Métropolitaine</p>
                </div>
            </div>
        </section>
    </main>
@stop

{{-- page level scripts --}}
@section('footer_scripts')

@stop
