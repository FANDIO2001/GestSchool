@extends('layouts.app')
@section('content')
    <div class="page-inner">
        <div class="page-header mb-4">
            <h3 class="fw-bold mb-3">Détails de l'Enseignant</h3>
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
                    <a href="#">Détails</a>
                </li>
            </ul>
        </div>

        <div class="row">
            <!-- Carte Informations Personnelles -->
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-header bg-dark text-white">
                        <h4 class="card-title mb-0 text-white">
                            <i class="fas fa-user me-2"></i>Informations Personnelles
                        </h4>
                    </div>
                    <div class="card-body text-center">
                        <div class="avatar avatar-xxl bg-primary text-white rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center" 
                            style="width: 120px; height: 120px; font-size: 48px;">
                            {{ strtoupper(substr($teacher->user->firstname, 0, 1)) }}{{ strtoupper(substr($teacher->user->lastname, 0, 1)) }}
                        </div>
                        <h4 class="fw-bold">{{ $teacher->user->firstname }} {{ $teacher->user->lastname }}</h4>
                        <p class="text-muted mb-3">
                            <strong class="text-primary">{{ $teacher->matricule }}</strong>
                        </p>
                        
                        @if($teacher->statut == 'actif')
                            <span class="badge badge-success px-4 py-2 mb-3">
                                <i class="fas fa-check-circle me-1"></i>Actif
                            </span>
                        @elseif($teacher->statut == 'inactif')
                            <span class="badge badge-danger px-4 py-2 mb-3">
                                <i class="fas fa-times-circle me-1"></i>Inactif
                            </span>
                        @elseif($teacher->statut == 'suspendu')
                            <span class="badge badge-warning px-4 py-2 mb-3">
                                <i class="fas fa-pause-circle me-1"></i>Suspendu
                            </span>
                        @else
                            <span class="badge badge-info px-4 py-2 mb-3">
                                <i class="fas fa-info-circle me-1"></i>{{ ucfirst($teacher->statut) }}
                            </span>
                        @endif

                        <hr>

                        <div class="text-start">
                            <p class="mb-2">
                                <i class="fas fa-envelope text-primary me-2"></i>
                                <strong>Email:</strong><br>
                                <span class="ms-4">{{ $teacher->user->email }}</span>
                            </p>
                            <p class="mb-2">
                                <i class="fas fa-phone text-primary me-2"></i>
                                <strong>Téléphone:</strong><br>
                                <span class="ms-4">{{ $teacher->user->phone }}</span>
                            </p>
                            <p class="mb-2">
                                <i class="fas fa-map-marker-alt text-primary me-2"></i>
                                <strong>Adresse:</strong><br>
                                <span class="ms-4">{{ $teacher->user->address }}</span>
                            </p>
                            <p class="mb-0">
                                <i class="fas fa-building text-primary me-2"></i>
                                <strong>Département:</strong><br>
                                <span class="ms-4">
                                    @if($teacher->department)
                                        <span class="badge badge-primary">{{ $teacher->department->title }}</span>
                                    @else
                                        <span class="badge badge-secondary">Non assigné</span>
                                    @endif
                                </span>
                            </p>
                        </div>

                        <hr>

                        <div class="d-grid gap-2">
                            <a href="{{ route('teachers.edit', $teacher->id) }}" class="btn btn-warning">
                                <i class="fas fa-edit me-1"></i> Modifier
                            </a>
                            <a href="{{ route('teachers.index') }}" class="btn btn-secondary">
                                <i class="fas fa-arrow-left me-1"></i> Retour à la liste
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Carte Emploi du Temps -->
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-header bg-info text-white">
                        <h4 class="card-title mb-0 text-white">
                            <i class="fas fa-calendar-alt me-2"></i>Emploi du Temps
                        </h4>
                    </div>
                    <div class="card-body">
                        @if($teacher->timeMagings->count() > 0)
                            <div class="table-responsive">
                                <table class="table table-hover table-bordered">
                                    <thead class="table-light">
                                        <tr>
                                            <th class="text-center"><i class="fas fa-calendar-day me-1"></i> Jour</th>
                                            <th class="text-center"><i class="fas fa-clock me-1"></i> Heure Début</th>
                                            <th class="text-center"><i class="fas fa-clock me-1"></i> Heure Fin</th>
                                            <th><i class="fas fa-chalkboard me-1"></i> Classe</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($teacher->timeMagings->groupBy('day_id') as $dayId => $horaires)
                                            @foreach($horaires as $index => $horaire)
                                                <tr>
                                                    @if($index == 0)
                                                        <td class="text-center align-middle" rowspan="{{ $horaires->count() }}">
                                                            <span class="badge badge-info px-3 py-2">{{ $horaire->day->title }}</span>
                                                        </td>
                                                    @endif
                                                    <td class="text-center">
                                                        <strong class="text-success">{{ $horaire->beginning }}</strong>
                                                    </td>
                                                    <td class="text-center">
                                                        <strong class="text-danger">{{ $horaire->end }}</strong>
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-primary px-3 py-2">
                                                            {{ $horaire->classe->title }} - {{ $horaire->classe->speciality->title }}
                                                        </span>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <div class="alert alert-info mt-3">
                                <i class="fas fa-info-circle me-2"></i>
                                <strong>Total:</strong> {{ $teacher->timeMagings->count() }} créneaux horaires
                            </div>
                        @else
                            <div class="text-center py-5">
                                <i class="fas fa-calendar-times fa-3x text-muted mb-3"></i>
                                <h5 class="text-muted">Aucun horaire défini</h5>
                                <p class="text-muted">Cet enseignant n'a pas encore d'emploi du temps.</p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
