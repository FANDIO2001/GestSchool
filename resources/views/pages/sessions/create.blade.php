@extends('layouts.app')

@section('content')
    <title>Inscription</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <div class="container d-flex justify-content-center align-items-center min-vh-100 py-5">
        <div class="w-100" style="max-width: 600px;">
            <div class="card shadow-lg p-4">
                <h2 class="text-center mb-4 text-primary">GestSession</h2>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    @if ($errors->any())
                        <div class="alert alert-danger" role="alert">
                            <p class="fw-bold">Oups ! Une erreur est survenue.</p>
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="name" class="form-label fw-semibold">Nom</label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}" class="form-control" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="firstname" class="form-label fw-semibold">Prénom</label>
                            <input type="text" id="firstname" name="firstname" value="{{ old('firstname') }}" class="form-control" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label fw-semibold">Adresse Email</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="phone" class="form-label fw-semibold">Téléphone</label>
                        <input type="tel" id="phone" name="phone" value="{{ old('phone') }}" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="role" class="form-label fw-semibold">Rôle</label>
                        <select id="role" name="role" class="form-select" required>
                            <option value="">Sélectionnez un rôle</option>
                            <option value="proviseur">Proviseur</option>
                            <option value="enseignant">Enseignant</option>
                            <option value="eleve">Élève</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label fw-semibold">Mot de passe</label>
                        <input type="password" id="password" name="password" class="form-control" required>
                    </div>

                    <div class="mb-4">
                        <label for="password_confirmation" class="form-label fw-semibold">Confirmer le mot de passe</label>
                        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-primary w-100 fw-bold">
                        S'inscrire
                    </button>
                </form>

                <div class="text-center mt-3">
                    <p class="text-muted">
                        Déjà un compte ?
                        <a href="{{ route('login') }}" class="text-decoration-none text-primary fw-bold">Se connecter</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
@endsection