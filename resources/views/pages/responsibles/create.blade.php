@extends('layouts.app')
@section('content')
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if (session('error '))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="bg-gray-100 m-5 mb-0 p-5 shadow-lg ">
        <div class="card-header bg-indigo-700">
            <div class="d-flex align-items-center">
                <h4 class="card-title">Ajouter un Responsable</h4>
                <a href="{{ route('responsibles.index') }}" class="btn btn-dark btn-round ms-auto">
                    <i class="fa fa-eye"></i>
                    Liste des Responsables
                </a>
            </div>
        </div>
        <br>
        <form action="{{ route('responsibles.store') }} " method="POST">
            @csrf

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nom</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="firstname">
                @error('firstname')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Prenom</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="lastname">
                @error('lastname')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Residence</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="address">
                @error('address')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Responsabilite</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="responsability">
                @error('responsabilite')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>



            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Numero de Telephone</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="phone">
                @error('phone')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="email">
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="exampleInputEmail1" name="password">
                @error('password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Confirmer le mot de passe</label>
                <input type="password" class="form-control" id="exampleInputEmail1" name="password_confirmation">
                @error('password_confirmation')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="d-flex justify-content-center ">
                <button type="submit" class="btn btn-dark btn-lg fw-bold py-2 w-30 text-align: center rounded-pill">
                    Sauvegarder
                </button>
            </div>
        </form>
    </div>
@endsection
