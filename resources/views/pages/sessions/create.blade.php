@extends('layouts.app')

@section('content')

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-15 col-lg-15">
            <div class="card border-0 shadow-lg rounded-4">
                <div class="card-header bg-dark text-white text-center py-3 rounded-top-4">
                    <h2 class="h3 fw-bold mb-0">Créer une Session</h2>
                </div>

                <div class="card-body p-5">
                    @if ($errors->any())
                        <div class="alert alert-danger rounded-3" role="alert">
                            <h5 class="alert-heading fw-bold">Erreur(s) de validation :</h5>
                            <ul class="mb-0">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="">
                        @csrf
                        
                        {{-- Nom --}}
                        <div class="mb-4">
                            <label for="name" class="form-label fw-semibold text-gray-700">Nom</label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}"
                                class="form-control form-control-lg rounded-pill @error('name') is-invalid @enderror" placeholder="Nom" required>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Prénom --}}
                        <div class="mb-4">
                            <label for="firstname" class="form-label fw-semibold text-gray-700">Prénom</label>
                            <input type="text" id="firstname" name="firstname" value="{{ old('firstname') }}"
                                class="form-control form-control-lg rounded-pill @error('firstname') is-invalid @enderror" placeholder="Prénom" required>
                            @error('firstname')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Numéro de téléphone --}}
                        <div class="mb-4">
                            <label for="phone_number" class="form-label fw-semibold text-gray-700">Numéro de téléphone des parents</label>
                            <input type="tel" id="phone_number" name="phone_number" value="{{ old('phone_number') }}"
                                class="form-control form-control-lg rounded-pill @error('phone_number') is-invalid @enderror" placeholder="Ex: +237 670 83 53 55" required>
                            @error('phone_number')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- E-mail--}}
                        <div class="mb-4">
                            <label for="email" class="form-label fw-semibold text-gray-700">Email</label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}"
                                class="form-control form-control-lg rounded-pill @error('email') is-invalid @enderror" placeholder="Ex: exemple@mail.com" required>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Password--}}
                        <div class="mb-4">
                            <label for="password" class="form-label fw-semibold text-gray-700">Mot de passe</label>
                            <input type="password" id="password" name="password"
                                class="form-control form-control-lg rounded-pill @error('password') is-invalid @enderror" placeholder="Mot de passe" required>
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Confirmer Password--}}
                        <div class="mb-4">
                            <label for="password_confirmation" class="form-label fw-semibold text-gray-700">Confirmer le mot de passe</label>
                            <input type="password" id="password_confirmation" name="password_confirmation"
                                class="form-control form-control-lg rounded-pill" placeholder="Confirmer le mot de passe" required>
                        </div>
                        
                        {{-- Rôle --}}
                        <div class="mb-5">
                            <label for="role" class="form-label fw-semibold text-gray-700">Rôle</label>
                            <select id="role" name="role" class="form-select form-control-lg rounded-pill @error('role') is-invalid @enderror" required>
                                <option value="proviseur" {{ old('role') == 'proviseur' ? 'selected' : '' }}>Proviseur</option>
                                <option value="enseignant" {{ old('role') == 'enseignant' ? 'selected' : '' }}>Enseignant</option>
                                <option value="eleve" {{ old('role') == 'eleve' ? 'selected' : '' }}>Élève</option>
                            </select>
                            @error('role')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                       
                          <div class="d-flex justify-content-center ">
                            <button type="submit" class="btn btn-dark btn-lg fw-bold py-2 w-50 text-align: center rounded-pill">
                                Créer Eleve
                            </button>
                        </div>
                        </div>
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
    </div>
</div>
@endsection