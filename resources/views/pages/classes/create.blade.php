@extends('layouts.app')

        @include('layouts.components.sidebar')
@section('content')
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg p-4">
                    <h2 class="card-title text-center text-primary mb-4">Créer une nouvelle Classe</h2>

                    <form method="POST" action=" ">
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

                        <div class="mb-3">
                            <label for="name" class="form-label fw-semibold">Nom de la Classe</label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}"
                                class="form-control" placeholder="Ex: 6e A" required autofocus>
                        </div>

                        <div class="mb-3">
                            <label for="level" class="form-label fw-semibold">Niveau</label>
                            <select id="level" name="level" class="form-select" required>
                                <option value="">Sélectionnez un niveau</option>
                                <option value="6e">6ème</option>
                                <option value="5e">5ème</option>
                                <option value="4e">4ème</option>
                                <option value="3e">3ème</option>
                                <option value="2nde">2nde</option>
                                <option value="1ère">1ère</option>
                                <option value="Terminale">Terminale</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary w-100 fw-bold">
                            Créer la Classe
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection