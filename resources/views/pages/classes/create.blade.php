@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-15 col-lg-15">
                <div class="card border-0 shadow-lg rounded-4">
                    <div class="card-header bg-dark text-white text-center py-3 rounded-top-4">
                        <h2 class="h3 fw-bold mb-0">Créer une nouvelle Classe</h2>
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

                        <form method="POST" action="{{ route('classes.store') }}">
                            @csrf

                            {{-- Nom de la classe --}}
                            <div class="mb-4">
                                <label for="name" class="form-label fw-semibold text-black">Nom de la Classe</label>
                                <input type="text" id="name" name="name" value="{{ old('name') }}"
                                    class="form-control form-control-lg rounded-pill @error('name') is-invalid @enderror" placeholder="Ex: 6e A" required autofocus>
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Niveau de la classe --}}
                            <div class="mb-4">
                                <label for="level" class="form-label fw-semibold text-black">Niveau</label>
                                <select id="level" name="level"
                                    class="form-select form-select-lg rounded-pill @error('level') is-invalid @enderror" required>
                                    <option value="">Sélectionnez un niveau</option>
                                    <option value="6e" {{ old('level') == '6e' ? 'selected' : '' }}>6ème</option>
                                    <option value="5e" {{ old('level') == '5e' ? 'selected' : '' }}>5ème</option>
                                    <option value="4e" {{ old('level') == '4e' ? 'selected' : '' }}>4ème</option>
                                    <option value="3e" {{ old('level') == '3e' ? 'selected' : '' }}>3ème</option>
                                    <option value="2nde" {{ old('level') == '2nde' ? 'selected' : '' }}>2nde</option>
                                    <option value="1ère" {{ old('level') == '1ère' ? 'selected' : '' }}>1ère</option>
                                    <option value="Terminale" {{ old('level') == 'Terminale' ? 'selected' : '' }}>Terminale</option>
                                </select>
                                @error('level')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-dark btn-lg fw-bold py-2 w-50 rounded-pill">
                                    Créer la Classe
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection