@extends('layouts.app')
@section('content')
    <div class="page-inner">
        <div class="page-header mb-4">
            <h3 class="fw-bold mb-3">Gestion des Enseignants</h3>
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
                    <a href="#">Enseignants</a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Liste</a>
                </li>
            </ul>
        </div>
        
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow-sm">
                    <div class="card-header bg-dark text-white rounded">
                        <div class="d-flex align-items-center">
                            <h4 class="card-title mb-0 text-white">
                                <i class="fas fa-users me-2"></i>Liste des Enseignants
                            </h4>
                            <a href="{{ route('teachers.create') }}" class="btn btn-light btn-round ms-auto">
                                <i class="fa fa-plus"></i>
                                Ajouter un Enseignant
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="add-row" class="display table table-striped table-hover">
                                <thead class="bg-light">
                                    <tr>
                                        <th><i class="fas fa-id-card me-1"></i> Matricule</th>
                                        <th><i class="fas fa-user me-1"></i> Nom Complet</th>
                                        <th><i class="fas fa-envelope me-1"></i> Email</th>
                                        <th><i class="fas fa-phone me-1"></i> Téléphone</th>
                                        <th><i class="fas fa-building me-1"></i> Département</th>
                                        <th><i class="fas fa-info-circle me-1"></i> Statut</th>
                                        <th><i class="fas fa-clock me-1"></i> Horaires</th>
                                        <th class="text-center" style="width: 10%"><i class="fas fa-cog me-1"></i> Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($teachers as $teacher)
                                        <tr class="align-middle">
                                            <td><strong class="text-primary">{{ $teacher->matricule }}</strong></td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar avatar-sm me-2 bg-primary text-white rounded-circle d-flex align-items-center justify-content-center">
                                                        {{ strtoupper(substr($teacher->user->firstname, 0, 1)) }}{{ strtoupper(substr($teacher->user->lastname, 0, 1)) }}
                                                    </div>
                                                    <span class="fw-bold">{{ $teacher->user->firstname }} {{ $teacher->user->lastname }}</span>
                                                </div>
                                            </td>
                                            <td><i class="fas fa-envelope text-muted me-1"></i> {{ $teacher->user->email }}</td>
                                            <td><i class="fas fa-phone text-muted me-1"></i> {{ $teacher->user->phone }}</td>
                                            <td>
                                                @if($teacher->department)
                                                    <span class="badge badge-primary px-3 py-2">
                                                        <i class="fas fa-building me-1"></i>{{ $teacher->department->title }}
                                                    </span>
                                                @else
                                                    <span class="badge badge-secondary px-3 py-2">
                                                        <i class="fas fa-exclamation-circle me-1"></i>Non assigné
                                                    </span>
                                                @endif
                                            </td>
                                            <td>
                                                @if($teacher->statut == 'actif')
                                                    <span class="badge badge-success px-3 py-2">
                                                        <i class="fas fa-check-circle me-1"></i>Actif
                                                    </span>
                                                @elseif($teacher->statut == 'inactif')
                                                    <span class="badge badge-danger px-3 py-2">
                                                        <i class="fas fa-times-circle me-1"></i>Inactif
                                                    </span>
                                                @elseif($teacher->statut == 'suspendu')
                                                    <span class="badge badge-warning px-3 py-2">
                                                        <i class="fas fa-pause-circle me-1"></i>Suspendu
                                                    </span>
                                                @else
                                                    <span class="badge badge-info px-3 py-2">
                                                        <i class="fas fa-info-circle me-1"></i>{{ ucfirst($teacher->statut) }}
                                                    </span>
                                                @endif
                                            </td>
                                            <td>
                                                @if($teacher->timeMagings->count() > 0)
                                                    <button type="button" class="btn btn-sm btn-info shadow-sm" data-bs-toggle="modal" 
                                                        data-bs-target="#horaireModal{{ $teacher->id }}">
                                                        <i class="fa fa-clock me-1"></i> Voir horaires 
                                                        <span class="badge bg-white text-info ms-1">{{ $teacher->timeMagings->count() }}</span>
                                                    </button>
                                                @else
                                                    <span class="text-muted fst-italic">
                                                        <i class="fas fa-calendar-times me-1"></i>Aucun horaire
                                                    </span>
                                                @endif
                                            </td>
                                            <td class="text-center">
                                                <div class="btn-group" role="group">
                                                    <a href="{{ route('teachers.show', $teacher->id) }}" 
                                                        class="btn btn-sm btn-primary" data-bs-toggle="tooltip" title="Voir les détails">
                                                        <i class="fa fa-eye"></i>
                                                    </a>
                                                    <a href="{{ route('teachers.edit', $teacher->id) }}" 
                                                        class="btn btn-sm btn-warning" data-bs-toggle="tooltip" title="Modifier">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <form action="{{ route('teachers.delete', $teacher->id) }}" method="POST" 
                                                        style="display: inline-block;" onsubmit="return confirm('⚠️ Êtes-vous sûr de vouloir supprimer cet enseignant ?')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger" data-bs-toggle="tooltip" title="Supprimer">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="8" class="text-center py-5">
                                                <div class="empty-state">
                                                    <i class="fas fa-user-slash fa-3x text-muted mb-3"></i>
                                                    <h5 class="text-muted">Aucun enseignant trouvé</h5>
                                                    <p class="text-muted">Commencez par ajouter un enseignant</p>
                                                    <a href="{{ route('teachers.create') }}" class="btn btn-primary mt-2">
                                                        <i class="fa fa-plus me-1"></i> Ajouter un Enseignant
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Modals pour afficher les horaires (en dehors du tableau) -->
        @foreach ($teachers as $teacher)
            <div class="modal fade" id="horaireModal{{ $teacher->id }}" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content shadow-lg border-0">
                        <div class="modal-header bg-info text-white">
                            <h5 class="modal-title">
                                <i class="fas fa-calendar-alt me-2"></i>
                                Horaires de <strong>{{ $teacher->user->firstname }} {{ $teacher->user->lastname }}</strong>
                            </h5>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body p-4">
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
                                        @foreach($teacher->timeMagings as $horaire)
                                            <tr>
                                                <td class="text-center">
                                                    <span class="badge badge-info px-3 py-2">{{ $horaire->day->title }}</span>
                                                </td>
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
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="modal-footer bg-light">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                <i class="fas fa-times me-1"></i> Fermer
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    
    @if (session('success'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                swal({
                    title: "Succès!",
                    text: "{{ session('success') }}",
                    icon: "success",
                    button: "OK",
                });
            });
        </script>
    @endif
@endsection
