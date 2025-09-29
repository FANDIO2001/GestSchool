@extends('layouts.app')
@section('content')
    <div class="bg-gray-100 m-5 mb-0 p-5 shadow-lg ">
        <form action="{{ route('sessions.store') }}" method="POST">
            @csrf

            {{-- Autres champs comme date, classe, etc. --}}
            <div class="row">
                <div class="col">Heure de Debut <input type="time" name="heure_debut" class="form-control"
                        placeholder="heure_debut">
                    @error('heure_debut')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col">Heure de Fin <input type="time" name="heure_fin" class="form-control"
                        placeholder="Fin">
                    @error('heure_fin')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div><br>
            <input type="hidden" name="classe_id" value="{{ $classe->id }}">
            <input type="hidden" name="matiere_id" value="{{ $matiere->id }}">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Contenue du cours</label>
                <textarea name="synthese" id="" cols="30" rows="10" class="form-control"></textarea>
                @error('synthese')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <h5 class="mt-4">Liste des élèves</h5>
            <ul class="list-group">
                @foreach ($eleves as $eleve)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <span>
                            {{ $eleve->user->firstname }} {{ $eleve->user->lastname }}
                        </span>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="presents[]" value="{{ $eleve->id }}"
                                id="eleve-{{ $eleve->id }}">
                            <label class="form-check-label" for="eleve-{{ $eleve->id }}">
                                Present
                            </label>
                        </div>
                    </li>
                    <input type="hidden" name="eleves_id[]" value="{{ $eleve->id }}">
                @endforeach
            </ul><br>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Signaler un probleme</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="insident">
                @error('insident')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary mt-4">Enregistrer la séance</button>
        </form>

    </div>
@endsection
