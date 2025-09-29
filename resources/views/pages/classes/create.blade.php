@extends('layouts.app')
@section('content')
    <hr class="bg-dark" style="height: 5px;">
    <div class="bg-gray-100 m-5 mb-0 p-5 shadow-lg ">
        <div class="card-header bg-indigo-700">
            <div class="d-flex align-items-center">
                <h4 class="card-title">Ajouter une Classe</h4>
                <a href="{{ route('classes.index') }}" class="btn btn-dark btn-round ms-auto">
                    <i class="fa fa-eye "></i>
                    Liste des Classes
                </a>
            </div>
        </div>
        <br>
        <form action="{{ route('classes.store') }} " method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Intitule</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="title">
                @error('title')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Specialite</label>
                <select name="speciality_id" id="speciality_id" class="form-control">
                    @foreach ($specialities as $speciality)
                        <option value="{{ $speciality->id }}">
                            {{ $speciality->title }}
                        </option>
                    @endforeach

                </select>
            </div>
            <div class="d-flex justify-content-center ">
                <button type="submit" class="btn btn-dark btn-lg fw-bold py-2 w-30 text-align: center rounded-pill">
                    Sauvegarder
                </button>
            </div>
        </form>
    </div>
@endsection
