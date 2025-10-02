@extends('layouts.app')
@section('content')
    <div class="page-inner">
        <div class="page-header mb-4">
            <h3 class="fw-bold mb-3">Ajouter un Enseignant</h3>
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
                    <a href="#">Ajouter</a>
                </li>
            </ul>
        </div>

        <div class="bg-gray-100 p-5 shadow-lg rounded">
            <form method="POST" action="{{ route('teachers.store') }}">
                @csrf

                <h3 class="mb-4"><i class="fas fa-user-plus me-2"></i>Informations Personnelles</h3>
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label for="firstname" class="form-label fw-bold">Nom</label>
                            <input type="text" name="firstname" id="firstname" class="form-control" 
                                placeholder="Entrez le nom" value="{{ old('firstname') }}" required>
                            @error('firstname')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label for="lastname" class="form-label fw-bold">Prénom</label>
                            <input type="text" name="lastname" id="lastname" class="form-control" 
                                placeholder="Entrez le prénom" value="{{ old('lastname') }}" required>
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
                                placeholder="exemple@email.com" value="{{ old('email') }}" required>
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label for="phone" class="form-label fw-bold">Téléphone</label>
                            <input type="text" name="phone" id="phone" class="form-control" 
                                placeholder="+237 6XX XXX XXX" value="{{ old('phone') }}" required>
                            @error('phone')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="form-group mb-3">
                    <label for="address" class="form-label fw-bold">Adresse</label>
                    <input type="text" name="address" id="address" class="form-control" 
                        placeholder="Entrez l'adresse complète" value="{{ old('address') }}" required>
                    @error('address')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label for="department_id" class="form-label fw-bold">Département</label>
                    <select name="department_id" id="department_id" class="form-select" required>
                        <option value="">-- Sélectionner un département --</option>
                        @foreach ($departments as $department)
                            <option value="{{ $department->id }}" {{ old('department_id') == $department->id ? 'selected' : '' }}>
                                {{ $department->title }}
                            </option>
                        @endforeach
                    </select>
                    @error('department_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label for="password" class="form-label fw-bold">Mot de passe</label>
                            <input type="password" name="password" id="password" class="form-control" 
                                placeholder="Minimum 6 caractères" required>
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label for="password_confirmation" class="form-label fw-bold">Confirmer le mot de passe</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" 
                                placeholder="Retapez le mot de passe" required>
                        </div>
                    </div>
                </div>

                <hr class="my-4">

                <h3 class="mb-4"><i class="fas fa-clock me-2"></i>Créneaux Horaires</h3>
            @foreach ($days as $day)
                <div class="mb-3 border p-3 rounded bg-white shadow-sm">
                    <h6 class="fw-bold text-primary"><i class="fas fa-calendar-day me-2"></i>{{ $day->title }}</h6>
                    <div id="creneaux-{{ $day->id }}">
                        <div class="row mb-2">
                            <div class="col-md-4">
                                <label class="form-label small">Heure Début</label>
                                <input type="time" name="horaires[{{ $day->id }}][]" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label small">Heure Fin</label>
                                <input type="time" name="end[{{ $day->id }}][]" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label small">Classe</label>
                                <select name="classes[{{ $day->id }}][]" class="form-select">
                                    <option value="">-- Sélectionner --</option>
                                    @foreach ($classes as $classe)
                                        <option value="{{ $classe->id }}">
                                            {{ $classe->title }}-{{ $classe->speciality->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-sm btn-outline-primary"
                        onclick="ajouterCreneau({{ $day->id }})">
                        <i class="fas fa-plus me-1"></i> Ajouter un créneau
                    </button>
                </div>
            @endforeach

            <div class="d-flex gap-2 mt-4">
                <button type="submit" class="btn btn-dark btn-lg fw-bold py-2 px-5 rounded-pill">
                    <i class="fas fa-save me-2"></i>Enregistrer
                </button>
                <a href="{{ route('teachers.index') }}" class="btn btn-secondary btn-lg py-2 px-5 rounded-pill">
                    <i class="fas fa-times me-2"></i>Annuler
                </a>
            </div>
        </form>

        <script>
            function ajouterCreneau(jourId) {
                const container = document.getElementById('creneaux-' + jourId);
                const html = `
            <div class="row mb-2">
                <div class="col-md-4">
                    <label class="form-label small">Heure Début</label>
                    <input type="time" name="horaires[\${jourId}][]" class="form-control">
                </div>
                <div class="col-md-4">
                    <label class="form-label small">Heure Fin</label>
                    <input type="time" name="end[\${jourId}][]" class="form-control">
                </div>
                <div class="col-md-4">
                    <label class="form-label small">Classe</label>
                    <select name="classes[\${jourId}][]" class="form-select">
                        <option value="">-- Sélectionner --</option>
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
