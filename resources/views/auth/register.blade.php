<!DOCTYPE html>
<html lang="fr">
<head>
    <meta name="description" content="formulaire pour S’enregistrer au site afric domotique">
    <meta property="og:description" content="formulaire pour S’enregistrer au site afric domotique">
    <meta property="og:title" content="enregistrer">
    <meta name="keywords" content="S’enregistrer,register afric domotique,">

    @extends('shared_layout.header_footer')

@section('content')
    <div id="loader-wrapper"></div>

    <div id="content-block">

        <div class="header-empty-space"></div>
        <div class="empty-space col-xs-b35 col-md-b50"></div>
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <div   style="border: 1px #eee solid; padding: 15px;">
        <h3 class="h3 text-center">Inscription</h3>
        <div class="empty-space col-xs-b30"></div>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                                <input placeholder="Nom" id="name" type="text" class="simple-input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        <div class="empty-space col-xs-b10 col-sm-b20"></div>

                        <input placeholder="Adresse de messagerie" id="email" type="email" class="simple-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror



    <div class="empty-space col-xs-b10 col-sm-b20"></div>

    <input placeholder="Mot de passe" id="password" type="password" class="simple-input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror


    <div class="empty-space col-xs-b10 col-sm-b20"></div>

    <input placeholder="Confirmation du mot de passe" id="password-confirm" type="password" class="simple-input" name="password_confirmation" required autocomplete="new-password">
            <div class="row">
                    <div class="col-sm-11 text-right">
                <div class="empty-space col-md-b35"></div>

                            <a class="button size-2 style-3">
                                <span class="button-wrapper">
                                    <span class="icon"><img src="{{asset('img/icon-4.png')}}" alt=""></span>
                                    <span class="text">S’enregistrer</span>
                                </span>
                                            <input type="submit" value="">
                            </a>
                </div>
            </div>
                        <div class="popup-or" >
                            <span><img src="{{asset('img/headicon.ico')}}" style="max-height: 50px;max-width: 50px"></span>
                        </div>
    </form>

</div>
</div>
        </div>
    </div>

    <div class="empty-space col-xs-b35 col-md-b70"></div>

@endsection
