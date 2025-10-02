@extends('layouts.app')
@section('content')
    <div class="page-inner">
        <div class="page-header mb-4">
            <h3 class="fw-bold mb-3">Modifier l'Enseignant</h3>
            <ul class="breadcrumbs mb-3">
                <li class="nav-home">
                    <a href="{{ route('dashboard') }}">
                        <i class="icon-home"></i>
                    </a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="{{ route('teachers.index') }}">Enseignants</a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Modifier</a>
                </li>
            </ul>
        </div>

        <div class="bg-gray-100 p-5 shadow-lg rounded">
            <form method="POST" action="{{ route('teachers.update', $teacher->id) }}">
                @csrf
                @method('PUT')

                <h3 class="mb-4"><i class="fas fa-user-edit me-2"></i>Informations Personnelles</h3>
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label for="firstname" class="form-label fw-bold">Nom</label>
                            <input type="text" name="firstname" id="firstname" class="form-control" 
                                value="{{ old('firstname', $teacher->user->firstname) }}" required>
                            @error('firstname')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label for="lastname" class="form-label fw-bold">Prénom</label>
                            <input type="text" name="lastname" id="lastname" class="form-control" 
                                value="{{ old('lastname', $teacher->user->lastname) }}" required>
                            @error('lastname')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label for="email" class="form-label fw-bold">Email</label>
                            <input type="email" name="email" id="email" class="form-control" 
                                value="{{ old('email', $teacher->user->email) }}" required>
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label for="phone" class="form-label fw-bold">Téléphone</label>
                            <input type="text" name="phone" id="phone" class="form-control" 
                                value="{{ old('phone', $teacher->user->phone) }}" required>
                            @error('phone')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="form-group mb-3">
                    <label for="address" class="form-label fw-bold">Adresse</label>
                    <input type="text" name="address" id="address" class="form-control" 
                        value="{{ old('address', $teacher->user->address) }}" required>
                    @error('address')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label for="department_id" class="form-label fw-bold">Département</label>
                            <select name="department_id" id="department_id" class="form-select" required>
                                <option value="">-- Sélectionner un département --</option>
                                @foreach ($departments as $department)
                                    <option value="{{ $department->id }}" 
                                        {{ old('department_id', $teacher->department_id) == $department->id ? 'selected' : '' }}>
                                        {{ $department->title }}
                                    </option>
                                @endforeach
                            </select>
                            @error('department_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label for="statut" class="form-label fw-bold">Statut</label>
                            <select name="statut" id="statut" class="form-select" required>
                                <option value="actif" {{ old('statut', $teacher->statut) == 'actif' ? 'selected' : '' }}>Actif</option>
                                <option value="inactif" {{ old('statut', $teacher->statut) == 'inactif' ? 'selected' : '' }}>Inactif</option>
                                <option value="suspendu" {{ old('statut', $teacher->statut) == 'suspendu' ? 'selected' : '' }}>Suspendu</option>
                                <option value="observation" {{ old('statut', $teacher->statut) == 'observation' ? 'selected' : '' }}>Observation</option>
                            </select>
                            @error('statut')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>

                <hr class="my-4">

                <h3 class="mb-4"><i class="fas fa-clock me-2"></i>Créneaux Horaires</h3>
                @foreach ($days as $day)
                    <div class="mb-3 border p-3 rounded">
                        <h6 class="fw-bold">{{ $day->title }}</h6>
                        <div id="creneaux-{{ $day->id }}">
                            @php
                                $dayHoraires = $teacher->timeMagings->where('day_id', $day->id);
                            @endphp
                            
                            @if($dayHoraires->count() > 0)
                                @foreach($dayHoraires as $horaire)
                                    <div class="row mb-2">
                                        <div class="col">
                                            <input type="time" name="horaires[{{ $day->id }}][]" class="form-control"
                                                value="{{ $horaire->beginning }}">
                                        </div>
                                        <div class="col">
                                            <input type="time" name="end[{{ $day->id }}][]" class="form-control"
                                                value="{{ $horaire->end }}">
                                        </div>
                                        <div class="col">
                                            <select name="classes[{{ $day->id }}][]" class="form-select">
                                                <option value="">-- Classe --</option>
                                                @foreach ($classes as $classe)
                                                    <option value="{{ $classe->id }}" 
                                                        {{ $horaire->classe_id == $classe->id ? 'selected' : '' }}>
                                                        {{ $classe->title }}-{{ $classe->speciality->title }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                @endforeach
                            @else
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
                                                    {{ $classe->title }}-{{ $classe->speciality->title }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            @endif
                        </div>
                        <button type="button" class="btn btn-sm btn-outline-secondary"
                            onclick="ajouterCreneau({{ $day->id }})">
                            <i class="fas fa-plus me-1"></i> Ajouter un créneau
                        </button>
                    </div>
                @endforeach

                <div class="d-flex gap-2 mt-4">
                    <button type="submit" class="btn btn-dark btn-lg fw-bold py-2 px-5 rounded-pill">
                        <i class="fas fa-save me-2"></i>Enregistrer les modifications
                    </button>
                    <a href="{{ route('teachers.show', $teacher->id) }}" class="btn btn-secondary btn-lg py-2 px-5 rounded-pill">
                        <i class="fas fa-times me-2"></i>Annuler
                    </a>
                </div>
            </form>

            <script>
                function ajouterCreneau(jourId) {
                    const container = document.getElementById('creneaux-' + jourId);
                    const html = `
                <div class="row mb-2">
                    <div class="col">
                        <input type="time" name="horaires[\${jourId}][]" class="form-control" placeholder="Début">
                    </div>
                    <div class="col">
                        <input type="time" name="end[\${jourId}][]" class="form-control" placeholder="Fin">
                    </div>
                    <div class="col">
                        <select name="classes[\${jourId}][]" class="form-select">
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
    </div>
@endsection
