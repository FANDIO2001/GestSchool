@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg border-0">
                    <div class="card-header bg-white text-center py-4">
                        <h2 class="h3 font-weight-bold mb-0 text-gray-800">Créer un nouveau Cours</h2>
                    </div>

                    <div class="card-body p-4">
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        @if ($errors->any())
                            <div class="alert alert-danger" role="alert">
                                <h4 class="alert-heading font-weight-bold">Erreur(s) de validation :</h4>
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('cours.store') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="name" class="form-label font-weight-bold">Nom du Cours</label>
                                <input 
                                    type="text" 
                                    id="name" 
                                    name="name" 
                                    value="{{ old('name') }}"
                                    class="form-control"
                                    placeholder="Ex: Mathématiques" 
                                    required autofocus>
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label font-weight-bold">Description</label>
                                <textarea 
                                    id="description" 
                                    name="description" 
                                    rows="4" 
                                    class="form-control"
                                    placeholder="Ex: Cours d'introduction aux mathématiques pour le niveau 6e.">{{ old('description') }}</textarea>
                            </div>

                            <div class="d-grid gap-2">
                                <button 
                                    type="submit" 
                                    class="btn btn-primary btn-block">
                                    Créer le Cours
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection