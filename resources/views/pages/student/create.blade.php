@extends('layouts.app')
@section('content')

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-15 col-lg-15">
            <div class="card border-0 shadow-lg rounded-4">
                <div class="card-header bg-dark text-white text-center py-3 rounded-top-4">
                    <h2 class="h3 fw-bold mb-0">Créer un Nouvel Eleve </h2>
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

                    <form method="POST" action="{{ route('students.store') }}">
                        @csrf
                        {{-- Nom du père --}}
                        <div class="mb-4">
                            <label for="fathersname" class="form-label fw-semibold text-gray-700">Nom du père</label>
                            <input type="text" id="fathersname" name="fathersname" value="{{ old('fathersname') }}"
                                class="form-control form-control-lg rounded-pill @error('fathersname') is-invalid @enderror" placeholder="Nom du père" required>
                            @error('fathersname')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Nom de la mère --}}
                        <div class="mb-4">
                            <label for="mothersname" class="form-label fw-semibold text-gray-700">Nom de la mère</label>
                            <input type="text" id="mothersname" name="mothersname" value="{{ old('mothersname') }}"
                                class="form-control form-control-lg rounded-pill @error('mothersname') is-invalid @enderror" placeholder="Nom de la mère" required>
                            @error('mothersname')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Numéro de téléphone --}}
                        <div class="mb-4">
                            <label for="phone_number" class="form-label fw-semibold text-gray-700">Numéro de téléphone des parents</label>
                            <input type="text" id="phone_number" name="phone_number" value="{{ old('phone_number') }}"
                                class="form-control form-control-lg rounded-pill @error('phone_number') is-invalid @enderror" placeholder="Ex: +237 670 83 53 55" required>
                            @error('phone_number')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Matricule --}}
                        <div class="mb-4">
                            <label for="matricule" class="form-label fw-semibold text-gray-700">Matricule</label>
                            <input type="text" id="matricule" name="matricule" value="{{ old('matricule') }}"
                                class="form-control form-control-lg rounded-pill @error('matricule') is-invalid @enderror" placeholder="Ex: S12345678" required>
                            @error('matricule')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Statut de l'étudiant --}}
                        <div class="mb-5">
                            <label for="stus" class="form-label fw-semibold text-gray-700">Statut</label>
                            <select id="stus" name="stus" class="form-select form-control-lg rounded-pill @error('stus') is-invalid @enderror" required>
                                <option value="regulier" {{ old('stus') == 'regulier' ? 'selected' : '' }}>Régulier</option>
                                <option value="irregulier" {{ old('stus') == 'irregulier' ? 'selected' : '' }}>Irrégulier</option>
                                <option value="demissionnaire" {{ old('stus') == 'demissionnaire' ? 'selected' : '' }}>Démissionnaire</option>
                                <option value="exclu" {{ old('stus') == 'exclu' ? 'selected' : '' }}>Exclu</option>
                                <option value="observation" {{ old('stus') == 'observation' ? 'selected' : '' }}>Observation</option>
                            </select>
                            @error('stus')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                       <div class="d-flex justify-content-center ">
                            <button type="submit" class="btn btn-dark btn-lg fw-bold py-2 w-50 text-align: center rounded-pill">
                                Créer Eleve
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection