@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg p-4">
                    <h2 class="card-title text-center text-primary mb-4">Créer un nouvel étudiant</h2>

                    <form method="POST" action="">
                        @csrf

                        @if ($errors->any())
                            <div class="alert alert-danger" role="alert">
                                <p class="fw-bold">Erreur(s) de validation :</p>
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        {{-- Nom du père --}}
                        <div class="mb-3">
                            <label for="fathersname" class="form-label fw-semibold">Nom du père</label>
                            <input type="text" id="fathersname" name="fathersname" value="{{ old('fathersname') }}"
                                class="form-control" placeholder="Nom du père" required>
                            @error('fathersname')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Nom de la mère --}}
                        <div class="mb-3">
                            <label for="mothersname" class="form-label fw-semibold">Nom de la mère</label>
                            <input type="text" id="mothersname" name="mothersname" value="{{ old('mothersname') }}"
                                class="form-control" placeholder="Nom de la mère" required>
                            @error('mothersname')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Numéro de téléphone --}}
                        <div class="mb-3">
                            <label for="phone_number" class="form-label fw-semibold">Numéro de téléphone des parents</label>
                            <input type="text" id="phone_number" name="phone_number" value="{{ old('phone_number') }}"
                                class="form-control" placeholder="Ex: +237 670 83 53 55" required>
                            @error('phone_number')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Matricule --}}
                        <div class="mb-3">
                            <label for="matricule" class="form-label fw-semibold">Matricule</label>
                            <input type="text" id="matricule" name="matricule" value="{{ old('matricule') }}"
                                class="form-control" placeholder="Ex: S12345678" required>
                            @error('matricule')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Statut de l'étudiant --}}
                        <div class="mb-4">
                            <label for="stus" class="form-label fw-semibold">Statut</label>
                            <select id="stus" name="stus" class="form-select" required>
                                <option value="regulier" {{ old('stus') == 'regulier' ? 'selected' : '' }}>Régulier</option>
                                <option value="irregulier" {{ old('stus') == 'irregulier' ? 'selected' : '' }}>Irrégulier</option>
                                <option value="demisionnaire" {{ old('stus') == 'demisionnaire' ? 'selected' : '' }}>Démissionnaire</option>
                                <option value="exclu" {{ old('stus') == 'exclu' ? 'selected' : '' }}>Exclu</option>
                                <option value="observation" {{ old('stus') == 'observation' ? 'selected' : '' }}>Observation</option>
                            </select>
                            @error('stus')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary w-100 fw-bold">
                            Créer l'étudiant
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection