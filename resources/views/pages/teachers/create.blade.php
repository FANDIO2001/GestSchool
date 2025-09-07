@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg p-4">
                    <h2 class="card-title text-center text-primary mb-4">Créer un enseignant</h2>

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
                                <option value="regulier" {{ old('stus') == 'regulier' ? 'selected' : '' }}>Actif</option>
                                <option value="irregulier" {{ old('stus') == 'iregulier' ? 'selected' : '' }}>Inactif</option>
                                <option value="suspendu" {{ old('stus') == 'suspendu' ? 'selected' : '' }}>Suspendu</option>
                                <option value="observation" {{ old('stus') == 'observation' ? 'selected' : '' }}>Observation</option>
                            </select>
                            @error('stus')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary w-100 fw-bold">
                            Créer teachers
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection