@extends('layouts.app')
@section('content')
    <div class="bg-gray-100 m-5 mb-0 p-5 shadow-lg ">
        <div class="card-header bg-indigo-700">
            <div class="d-flex align-items-center">
                <h4 class="card-title">Ajouter une specialite</h4>
                <a href="{{ route('specialities.index') }}" class="btn btn-primary btn-round ms-auto">
                    <i class="fa fa-eye"></i>
                    Liste des Specialites
                </a>
            </div>
        </div>
        <br>
        <form action="{{ route('specialities.store') }} " method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Intitule</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="title">
                @error('title')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Description</label>
                <textarea id="" cols="30" rows="10"class="form-control" name=" description"></textarea>
                @error('description')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary ">Enregistrer</button>
        </form>
    </div>
@endsection
