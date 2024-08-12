@extends('layouts.auth')
@section('title', 'Connexion à Artisan Connect')
@section('content')
{{-- message --}}
{!! Toastr::message() !!}
<div class="login-content">
    <div class="login-userset">
        <div class="login-logo">
            <img src="{{ URL::to('assets/img/logo.png') }}" alt="img">
        </div>
        <div class="login-userheading">
            <h3>Connectez vous a votre compte</h3>
            {{-- <h4>Please login to your account</h4> --}}
        </div>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-login">
                <label>Votre Gmail</label>
                <div class="form-addons">
                    <input type="text" name="email" placeholder="Entrez votre adresse gmail" value="{{ old('email') }}">
                    <img src="{{ URL::to('assets/img/icons/mail.svg') }}" alt="img">
                </div>
                @error('email')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-login">
                <label>Votre mot de passe</label>
                <div class="pass-group">
                    <input type="password" name="password" class="pass-input" placeholder="Entrez votre mot de passe">
                    <span class="fas toggle-password fa-eye-slash"></span>
                </div>
                @error('password')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-login">
                <div class="alreadyuser">
                    <h4><a href="{{ route('auth.forgot-password') }}" class="hover-a">Mot de passe oublié ?</a></h4>
                </div>
            </div>
            <div class="form-login">
                <button type="submit" class="btn btn-login">Connectez vous...</button>
            </div>
        </form>
        <div class="signinform text-center">
            <h4>Vous n'avez pas de compte ? <a href="{{ route('register') }}" class="hover-a">Créer votre compte</a></h4>
        </div>
        <div class="form-setlogin">
            <h4>Ou, connectez vous avec</h4>
        </div>
        <div class="form-sociallink">
            <ul>
                <li>
                    <a href="{{ route('social.login', ['provider' => 'google']) }}">
                        <img src="{{ URL::to('assets/img/icons/google.png') }}" class="me-2" alt="google">
                        Se connecter avec Google
                    </a>
                </li>
                <li>
                    <a href="{{ route('social.login', ['provider' => 'facebook']) }}">
                        <img src="{{ URL::to('assets/img/icons/facebook.png') }}" class="me-2" alt="facebook">
                        Se connecter avec Facebook
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

@endsection