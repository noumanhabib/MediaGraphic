@extends('layouts.default')

@section('content')
    <div class="container">
        <div class="row justify-content-center mt-4 mb-4" style="display: flex; justify-content: center; margin-top: 2rem;">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"> Veuillez vérifier votre adresse e-mail </div>

                    <div class="card-body">
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                {{ __('Un nouveau lien de vérification a été envoyé à votre adresse e-mail.') }}
                            </div>
                        @endif

                        Pour terminer votre inscription, veuillez consulter votre e-mail pour le lien de vérification. Si vous n'avez pas reçu l'e-mail de vérification.
                        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                            @csrf
                            <button type="submit" class="btn btn-link m-0 p-0 align-baseline"> Cliquez ici pour renvoyer le lien </button>.
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
