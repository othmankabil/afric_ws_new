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
                    <h5 class="h5 text-center">Veuillez saisir votre nouveau mot de passe.</h5>
                    <div class="empty-space col-xs-b30"></div>
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">


                                <input  placeholder="Adresse de messagerie" id="email" type="email" class="simple-input @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" >

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        <div class="empty-space col-xs-b10 col-sm-b20"></div>

                                <input placeholder="Nouveau mot de passe" id="password" type="password" class="simple-input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" autofocus>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        <div class="empty-space col-xs-b10 col-sm-b20"></div>


                                <input style="margin-bottom: 25px" placeholder="Confirmation du mot de passe" type="password" class="simple-input" name="password_confirmation" required autocomplete="new-password">

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <a class="button size-1 style-2">
                                <span class="button-wrapper">
                                    <span class="icon"><img src="{{asset('img/icon-21.png')}}" alt=""></span>
                                    <span class="text">Réinitialiser mon mot de passe</span>
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
