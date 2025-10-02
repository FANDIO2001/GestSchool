@extends('layouts.app')
@section('content')
    <div class="bg-gray-100 m-5 mb-0 p-5 shadow-lg ">
        <form method="POST" action="{{ route('teachers.store') }}">
            @csrf

            <h3>Enregistrer un enseignant</h3>
            <input type="text" name="firstname" class="form-control mb-2" placeholder="Nom" required>
            <input type="text" name="lastname" class="form-control mb-3" placeholder="Prénom" required>
            <input type="email" name="email" class="form-control mb-3" placeholder="Email" required>
            <input type="text" name="address" class="form-control mb-3" placeholder="Residence" required>
            <input type="text" name="phone" class="form-control mb-3" placeholder="Numero de telephone" required>
            
            <div class="mb-3">
                <label for="department_id" class="form-label fw-bold">Département</label>
                <select name="department_id" id="department_id" class="form-select" required>
                    <option value="">-- Sélectionner un département --</option>
                    @foreach ($departments as $department)
                        <option value="{{ $department->id }}">{{ $department->title }}</option>
                    @endforeach
                </select>
                @error('department_id')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            
            <input type="password" name="password" class="form-control mb-3" placeholder="Mot de passe" required>
            <input type="password" name="password_confirmation" class="form-control mb-3"
                placeholder="Confirmer le mot de passe" required>
            <h5>Créneaux horaires</h5>
            @foreach ($days as $day)
                <div class="mb-3 border p-3 rounded">
                    <h6>{{ $day->title }}</h6>
                    <div id="creneaux-{{ $day->id }}">
                        <div class="row mb-2">
                            <div class="col">
                                <input type="time" name="horaires[{{ $day->id }}][]" class="form-control"
                                    placeholder="Début">
                            </div>
                            <div class="col">
                                <input type="time" name="end[{{ $day->id }}][]" class="form-control"
                                    placeholder="Fin">
                            </div>
                            <div class="col">
                                <select name="classes[{{ $day->id }}][]" class="form-select">
                                    <option value="">-- Classe --</option>
                                    @foreach ($classes as $classe)
                                        <option value="{{ $classe->id }}">
                                            {{ $classe->title }}-{{ $classe->speciality->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-sm btn-outline-secondary"
                        onclick="ajouterCreneau({{ $day->id }})">+ Ajouter un créneau</button>
                </div>
            @endforeach

            <button type="submit" class="btn btn-dark btn-lg fw-bold py-2 w-30 text-align: center rounded-pill">
                Sauvegarder
            </button>
        </form>

        <script>
            function ajouterCreneau(jourId) {
                const container = document.getElementById('creneaux-' + jourId);
                const html = `
            <div class="row mb-2">
                <div class="col">
                    <input type="time" name="horaires[${jourId}][]" class="form-control" placeholder="Début">
                </div>
                <div class="col">
                    <input type="time" name="end[${jourId}][]" class="form-control" placeholder="Fin">
                </div>
                <div class="col">
                    <select name="classes[${jourId}][]" class="form-select">
                        @foreach ($classes as $classe)
                            <option value="{{ $classe->id }}">{{ $classe->title }}-{{ $classe->speciality->title }}</option>
                        @endforeach
                    </select>
                </div>
            </div>`;
                container.insertAdjacentHTML('beforeend', html);
            }
        </script>
    </div>
@endsection
