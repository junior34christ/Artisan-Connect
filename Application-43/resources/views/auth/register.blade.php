@extends('layouts.auth')
@section('title', 'Enregistrement à Artisan Connect')
@section('content')
<div class="login-content">
    <div class="login-userset">
        <div class="login-logo">
            <img src="{{ URL::to('assets/img/logo.png') }}" alt="img">
        </div>
        <div class="login-userheading">
            <h3>Créer votre compte</h3>
            <h4>Continuer là où vous vous êtes arrêter</h4>
        </div>
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="form-login">
                <label>Votre prénom</label>
                <div class="form-addons">
                    <input type="text" name="first_name" placeholder="Entrez votre prénom" required>
                    <img src="{{ URL::to('assets/img/icons/users1.svg') }}" alt="img">
                </div>
                @error('first_name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-login">
                <label>Votre Gmail</label>
                <div class="form-addons">
                    <input type="email" name="email" placeholder="Entrez votre adresse gmail" required>
                    <img src="{{ URL::to('assets/img/icons/mail.svg') }}" alt="img">
                </div>
            </div>
            <div class="form-group local-forms">
                <label>Choisir votre métier </label>
                <select class="form-control select @error('role_name') is-invalid @enderror" name="role_name"
                    id="role_name" required>
                    <option selected disabled>Sélectionnez</option>
                    @foreach ($roles as $role)
                    <option value="{{ $role->name }}">{{ $role->name }}</option>
                    @endforeach
                </select>
                @error('role_name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-login">
                <label>Mot de passe</label>
                <div class="pass-group">
                    <input type="password" class="pass-input" name="password" placeholder="Entrez votre mot de pase"
                        required>
                    <span class="fas toggle-password fa-eye-slash"></span>
                </div>
            </div>
            <div class="form-login">
                <label>Confirmer votre mot de passe</label>
                <div class="pass-group">
                    <input type="password" class="pass-confirm" name="password_confirmation"
                        placeholder="Comfirmez votre mot de passe" required>
                    <span class="fas toggle-password fa-eye-slash"></span>
                </div>
            </div>
            <div class="form-login">
                <button type="submit" class="btn btn-login">Enregistrer vous...</button>
            </div>
        </form>
        <div class="signinform text-center">
            <h4>Vous avez déjà un compte? <a href="{{ route('login') }}" class="hover-a">Connecter vous</a></h4>
        </div>
        <div class="form-setlogin">
            <h4>Ou, enregistrer vous avec</h4>
        </div>
        <div class="form-sociallink">
            <ul>
                <li>
                    <a href="{{ route('social.login', ['provider' => 'google']) }}">
                        <img src="{{ URL::to('assets/img/icons/google.png') }}" class="me-2" alt="google">
                        S'enregistrer avec Google
                    </a>
                </li>
                <li>
                    <a href="{{ route('social.login', ['provider' => 'facebook']) }}">
                        <img src="{{ URL::to('assets/img/icons/facebook.png') }}" class="me-2" alt="facebook">
                        S'enregistrer avec Facebook
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

@endsection