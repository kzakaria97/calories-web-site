@extends('layout.index')

@section('content')
<div class="container cont1">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card cardMain">
                <h1 class="card-header title1">CRÉER UN COMPTE</h1>

                <div class="card-body card1">
                    <form method="POST" action="{{ route('register') }}" class="form1">
                        @csrf
                        <div class="form2">
                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end" >Nom</label>

                                <div class="col-md-6">
                                    <input class="input1" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Indiquez votre nom">

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">Adresse email</label>

                                <div class="col-md-6">
                                    <input class="input1" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Indiquez votre email">
                                    <br>
                                    @error('email')
                                        <p class="invalid-feedback error_register" role="alert">
                                            Cette addresse email <br>est déjâ utilisée
                                        </p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form2">
                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end">Mot de passe</label>

                                <div class="col-md-6">
                                    <input class="input1" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Mot de passe">
                                    <br>
                                    @error('password')
                                        <p class="invalid-feedback error_register" role="alert">
                                            Le mot de passe doit <br> contenir au moins 8 caractères
                                        </p>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">Confirmez mot de passe</label>

                                <div class="col-md-6">
                                    <input class="input1" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Retappez le mot de passe">
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary btn_sign_up">
                                    S'INSCRIRE
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
