<!DOCTYPE html>
<html lang="fr">
<head>
    @extends('shared_layout.header_footer')

    @section('content')
        <div class="header-empty-space"></div>
        <div class="empty-space col-xs-b35 col-md-b50"></div>
    <div class="row justify-content-center">
        <div class="col-sm-6">
            <div   style="border: 1px #eee solid; padding: 15px;">
                <h5 class="h5 text-center">Veuillez saisir votre adresse e-mail. Vous recevrez un lien par e-mail pour créer un nouveau mot de passe.</h5>
                <div class="empty-space col-xs-b30"></div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                                <input style="margin-bottom: 25px" placeholder="Adresse de messagerie " id="email" type="email" class="simple-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <a class="button size-2 style-2">
                                <span class="button-wrapper">
                                    <span class="icon"><img src="{{asset('img/icon-28.png')}}" alt=""></span>
                                    <span class="text">Réinitialisation du mot de passe</span>
                                </span>
                                    <input type="submit" value="">
                                </a>
                            </div>
                        </div>
                    </form>
            </div>
                </div>
            </div>

        <div class="empty-space col-xs-b35 col-md-b70"></div>

@endsection
