@extends('layout.index')

@section('content')
<div class="container container_main">
    <div class="row justify-content-center row_login">
        <div class="col-md-8">
            <div class="card milieu">
                <h1 class="card-header login">SE CONNECTER</h1>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}" class="form_login">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">Adresse email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control input1 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Entrez votre email">
                                <br>
                                @error('email')
                                    <span class="invalid-feedback error_login" role="alert">
                                        <strong>Email ou mot de passe invalide</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">Mot de passe</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control input1 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Entrez votre mot de passe">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Mot de passe invalide</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        Se souvenir de moi
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary btn_login">
                                    Se connecter
                                </button>
                                <br>
                                <br>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link forgot_link" href="{{ route('password.request') }}">
                                        Mot de passe oublié ?
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                    <br>   
                    <div class="other_connexion">
                        <p>Connectez-vous avec :</p>
                        <div class="login_social_icon">
                            <p class="icon_twitter"><x-bi-twitter /></p>
                            <p class="icon_google"><x-bi-google /></p>
                            <p class="icon_facebook"><x-bi-facebook /></p>
                        </div>
                        <div>
                            <p>
                                Vous n'avez pas encore de compte ? 
                                <a href="{{route('register')}}" class="create_account">Inscrivez-vous</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
