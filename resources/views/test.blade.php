@extends('shared_layout.header_footer')

@section('content')
    <div id="loader-wrapper"></div>

    <div id="content-block">

        <div class="header-empty-space"></div>
        <div class="empty-space col-xs-b35 col-md-b50"></div>
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <div   style="border: 1px #eee solid; padding: 15px;">
                    <h3 class="h3 text-center">Log in</h3>
                    <div class="empty-space col-xs-b30"></div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <input  placeholder="adresse de messagerie "  id="email" type="email" class="simple-input  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        <div class="empty-space col-xs-b10 col-sm-b20"></div>
                        <div class="single-line-form">
                            <input placeholder="Mot de passe " id="password" type="password" class="simple-input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                </span>
                            @enderror
                        </div>
                        <div class="empty-space col-xs-b10 col-sm-b20"></div>
                        <div class="row">
                            <div class="col-sm-6 col-xs-b10 col-sm-b0">
                                <div class="empty-space col-sm-b5"></div>
                                <div class="form-check">
                                    <label class="checkbox-entry" for="remember">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <span>Se souvenir de moi</span>
                                    </label>
                                </div>
                                <div class="empty-space col-xs-b5"></div>
                                <div class="form-group">

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __(' Mot de passe perdu?') }}
                                        </a>
                                    @endif

                                </div>
                            </div>
                            <div class="col-sm-6 text-right">
                                <a class="button size-2 style-3">
                                <span class="button-wrapper">
                                    <span class="icon"><img src="{{asset('img/icon-4.png')}}" alt=""></span>
                                    <span class="text">Connexion</span>
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
