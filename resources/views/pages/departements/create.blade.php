@extends('layouts.app')

@section('content')
<div class="container mt-5">
<div class="row justify-content-center">
<div class="col-md-8 col-lg-6">
<div class="card shadow-lg border-0 rounded-3">
<div class="card-header bg-white text-center py-4 rounded-top-3">
<h2 class="h3 fw-bold text-gray-800 mb-0">Créer un nouveau Département</h2>
</div>

                <div class="card-body p-5">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger" role="alert">
                            <h5 class="alert-heading fw-bold">Erreur(s) de validation :</h5>
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="">
                        @csrf

                        <div class="mb-4">
                            <label for="title" class="form-label fw-semibold text-gray-700">Titre du Département</label>
                            <input 
                                type="text" 
                                id="title" 
                                name="title" 
                                value="{{ old('title') }}"
                                class="form-control rounded-lg"
                                placeholder="Ex: Département Informatique" 
                                required autofocus>
                        </div>

                        <div class="mb-4">
                            <label for="description" class="form-label fw-semibold text-gray-700">Description</label>
                            <textarea 
                                id="description" 
                                name="description" 
                                rows="4" 
                                class="form-control rounded-lg"
                                placeholder="Ex: Ce département gère les cours et les recherches en informatique et génie logiciel.">{{ old('description') }}</textarea>
                        </div>

                        <div class="d-grid mt-4">
                            <button 
                                type="submit" 
                                class="btn btn-primary fw-bold py-2 rounded-lg">
                                Créer le Département
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection