@extends('layouts/default')
@section('title')
    Mes Profile
    @parent
@stop
@section('header_styles')
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
@stop

@section('content')

    <section class="content">
        <form method="post">
            <div class="row">
                <h1>Profile</h1>
            </div>
            <div class="row mt-4 mb-4">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="firstname">First Name</label>
                        <input type="text" name="firstname" id="firstname" value="{{ Auth::user()->first_name }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="firstname">Last Name</label>
                        <input type="text" name="firstname" id="firstname" value="{{ Auth::user()->first_name }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" value="{{ Auth::user()->email }}" disabled readonly>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" name="phone" id="phone" value="{{ Auth::user()->phone }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="shiping_address">Shiping Address</label>
                        <input type="text" name="shiping_address" id="shiping_address" value="{{ Auth::user()->shiping_address }}" disabled readonly>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="shiping_postal">Shiping Postal</label>
                        <input type="text" name="shiping_postal" id="shiping_postal" value="{{ Auth::user()->shiping_postal }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="shiping_city">Shiping City</label>
                        <input type="text" name="shiping_city" id="shiping_city" value="{{ Auth::user()->shiping_city }}" disabled readonly>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="billing_address">Billing Address</label>
                        <input type="text" name="billing_address" id="billing_address" value="{{ Auth::user()->billing_address }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="billing_postal">Billing Postal</label>
                        <input type="text" name="billing_postal" id="billing_postal" value="{{ Auth::user()->billing_postal }}" disabled readonly>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="billing_city">Billing City</label>
                        <input type="text" name="billing_city" id="billing_city" value="{{ Auth::user()->billing_city }}">
                    </div>
                </div>
                @if (Auth::user()->customer_type == 'professional')
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="billing_city">Vous êtes</label>
                            <select name="service_id" required>
                                <option value="1" @if (Auth::user()->service_id == '1') selected @endif>Société</option>
                                <option value="2" @if (Auth::user()->service_id == '2') selected @endif>Association</option>
                                <option value="3" @if (Auth::user()->service_id == '3') selected @endif>Administration</option>
                                <option value="4" @if (Auth::user()->service_id == '4') selected @endif>Particulier</option>
                                <option value="5" @if (Auth::user()->service_id == '5') selected @endif>Autre</option>
                            </select>
                        </div>
                    </div>
                @endif
            </div>

            <div style="display: flex; justify-content: center">
                <button class="btn btn-success">Save</button>
            </div>
        </form>
    </section>

@stop

{{-- page level scripts --}}
@section('footer_scripts')
@stop

{{-- /usr/local/bin/php /home/learnunstoppable/account.learnunstoppable.com/artisan schedule:run >> /dev/null 2>&1 --}}
