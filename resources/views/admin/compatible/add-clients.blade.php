@extends('admin/layouts/default')
@section('title')
    Commande Encours
    @parent
@stop
@section('header_styles')
    <style>
        .is-invalid+.invalid-feedback {
            color: red;
        }
    </style>
@stop

@section('content')

    <div class="page-content">
        <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
        <div class="clearfix"></div>
        <div class="content">
            <ul class="breadcrumb">

                <li>
                    <p>Vous êtes sur la page de</p>
                </li>
                <li><a href="#" class="active">Comptabilité - Clients</a>
                </li>
            </ul>
            <div class="row">
                <form action="/admin/comptabililite/add-clients" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-12 col-md-6 form-group">
                            <label for="customer_type" class="form-label"> Choose type </label>
                            <select name="customer_type" class="form-control" id="customer_type">
                                <option value="individuel">Individuel</option>
                                <option value="professional">Professional</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-6 form-group">
                            <label class="form-label" for="service_id"> Choose Profession </label>
                            <select name="service_id" class="form-control @error('service_id') is-invalid @enderror" id="service_id">
                                <option value="">-- Vous êtes? --</option>
                                <option value="1">Société</option>
                                <option value="2">Association</option>
                                <option value="3">Administration</option>
                                <option value="4">Particulier</option>
                                <option value="5">Autre</option>
                            </select>
                            @error('service_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-12 col-md-6 form-group">
                            <label class="form-label" for="first_name"> Prénom </label>
                            <input class="half form-control @error('first_name') is-invalid @enderror" type="text" required name="first_name" placeholder="Prénom">
                            @error('first_name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-12 col-md-6 form-group">
                            <label class="form-label" for="last_name"> Nom de famille </label>
                            <input class="half form-control @error('last_name') is-invalid @enderror" type="text" required name="last_name" placeholder="Nom de famille">
                            @error('last_name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-12 col-md-6 form-group">
                            <label class="form-label" for="email"> Email </label>
                            <input class="half form-control @error('email') is-invalid @enderror" type="email" required name="email" placeholder="Email">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-12 col-md-6 form-group">
                            <label class="form-label" for="phone"> Téléphone </label>
                            <input class="half form-control @error('phone') is-invalid @enderror" type="phone" required name="phone" placeholder="Téléphone">
                            @error('phone')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-12 form-group">
                            <label class="form-label" for="password"> Mot de passe </label>
                            <input class="form-control @error('password') is-invalid @enderror" type="password" required name="password" placeholder="Mot de passe">
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-12 form-group">
                            <label class="form-label" for="paddress"> Adresse de livraison </label>
                            <input class="form-control @error('address') is-invalid @enderror" type="text" required id="paddress" name="address" placeholder="Adresse de livraison">
                            @error('address')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="col-12 col-md-6 form-group">
                            <label class="form-label" for="postal"> Code postal </label>
                            <input class="half form-control @error('postal') is-invalid @enderror" required id="ppostal" type="text" name="postal" placeholder="Code postal">
                            @error('postal')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-12 col-md-6 form-group">
                            <label class="form-label" for="pcity"> Ville </label>
                            <input class="half form-control @error('city') is-invalid @enderror" type="text" id="pcity" required name="city" placeholder="Ville">
                            @error('city')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-12 form-group">
                            <label class="form-label" for="pbilling_address"> Adresse de facturation </label>
                            <input type="text" class="form-control @error('billing_address') is-invalid @enderror" id="pbilling_address" name="billing_address" placeholder="Adresse de facturation">
                            @error('billing_address')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>

                        <div class="col-12 col-md-6 form-group">
                            <label class="form-label" for="billing_postal"> Code postal </label>
                            <input class="half form-control @error('billing_postal') is-invalid @enderror" id="pbilling_postal" type="text" name="billing_postal" placeholder="Code postal">
                            @error('billing_postal')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-12 col-md-6 form-group">
                            <label class="form-label" for="billing_city"> Ville </label>
                            <input class="half form-control @error('billing_city') is-invalid @enderror" id="pbilling_city" type="text" name="billing_city" placeholder="Ville">
                            @error('billing_city')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="mt-5 mb-5" style="margin-top: 20px; margin-bottom: 20px; display: flex; justify-content: center;">
                        <button class="btn btn-outline-primary" type="submit">Save</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- END PAGE -->
    </div>


@stop

{{-- page level scripts --}}
@section('footer_scripts')

@stop
