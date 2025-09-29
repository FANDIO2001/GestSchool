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
                <h4 class="card-title">Ajouter un Eleve</h4>
                <a href="{{ route('students.index') }}" class="btn btn-dark btn-round ms-auto">
                    <i class="fa fa-eye"></i>
                    Liste des Eleves
                </a>
            </div>
        </div>
        <br>
        <form action="{{ route('students.store') }} " method="POST">
            @csrf

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nom</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="firstname"
                    placeholder="Nom de l'eleve">
                @error('firstname')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Prenom</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="lastname"
                    placeholder="Prenom de l'eleve">
                @error('lastname')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Residence</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="address"
                    placeholder="Residence de l'eleve">
                @error('address')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nom du pere</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="fathersName"
                    placeholder="Fathers'name">
                @error('fathersname')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nom de la mere</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="mothersName"
                    placeholder="Mothers'name">
                @error('mothersname')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Telephone des parents</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="phone_number"
                    placeholder="Telephone des parents">
                @error('phone_number')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Date d'inscription</label>
                <input type="date" class="form-control" id="exampleInputEmail1" name="annee"
                    placeholder="Telephone des parents">
                @error('annee')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Numero de Telephone</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="phone"
                    placeholder="Numero de telephone">
                @error('phone')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="email"
                    placeholder="Votre adresse email">
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="exampleInputEmail1" name="password"
                    placeholder="Password">
                @error('password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Confirmer le mot de passe</label>
                <input type="password" class="form-control" id="exampleInputEmail1" name="password_confirmation"
                    placeholder="confirm password">
                @error('password_confirmation')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Classe</label><br>
                <select name="classe_id" id="" class="form-control">
                    @foreach ($classes as $classe)
                        <option value="{{ $classe->id }}">
                            {{ $classe->title }}-{{ $classe->speciality->title }}
                        </option>
                    @endforeach

                </select>
                @error('password_confirmation')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>


            <button type="submit" class="btn btn-dark btn-lg fw-bold py-2 w-30 text-align: center rounded-pill">
                Sauvegarder
            </button>
        </form>
    </div>
@endsection
