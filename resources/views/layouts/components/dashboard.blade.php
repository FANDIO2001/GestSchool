@extends('layouts.app')

@section('content')
    <div class="page-inner ">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
            <div class="ms-md-auto py-2 py-md-0">
                <a href="#" class="btn btn-label-info btn-round me-2">Manage</a>
                <a href="#" class="btn btn-primary btn-round">Add Customer</a>
            </div>
        </div>
        <!-- Début de la section des cartes, restructurée pour un affichage horizontal -->
        <div class="row">
            <!-- Carte pour la Gestion des Personnels -->
            <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round mb-4">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-icon">
                                <div class="icon-big text-center icon-primary bubble-shadow-small">
                                    <i class="fas fa-users"></i>
                                </div>
                            </div>
                            <div class="col col-stats ms-3 ms-sm-0">
                                <div class="numbers">
                                    <p class="card-category">Gestion Des Personnels</p>
                                    <h4 class="card-title">1,294</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Carte pour la Gestion des Départements -->
            <div class="col-sm-6 col-md-3">
                <a href="{{ route('departements.create') }}">
                    <div class="card card-stats card-round mb-4">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-icon">
                                    <div class="icon-big text-center icon-info bubble-shadow-small">
                                        <i class="fas fa-sitemap"></i>
                                    </div>
                                </div>
                                <div class="col col-stats ms-3 ms-sm-0">
                                    <div class="numbers">
                                        <p class="card-category">Gestion Des Departement</p>
                                        <h4 class="card-title">1303</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Carte pour la Gestion des Professeurs (icône mise à jour) -->
            <div class="col-sm-6 col-md-3">
                <a href="{{ route('teashers.create') }}">
                    <div class="card card-stats card-round mb-4">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-icon">
                                    <div class="icon-big text-center icon-info bubble-shadow-small">
                                        <i class="fas fa-user-tie"></i> <!-- Icône changée pour 'fa-user-tie' -->
                                    </div>
                                </div>
                                <div class="col col-stats ms-3 ms-sm-0">
                                    <div class="numbers">
                                        <p class="card-category">Gestion Des Teachers</p>
                                        <h4 class="card-title">1303</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Carte pour la Gestion des Étudiants -->
            <div class="col-sm-6 col-md-3">
                <a href="{{ route('student.create') }}">
                    <div class="card card-stats card-round mb-4">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-icon">
                                    <div class="icon-big text-center icon-info bubble-shadow-small">
                                        <i class="fas fa-user-graduate"></i>
                                    </div>
                                </div>
                                <div class="col col-stats ms-3 ms-sm-0">
                                    <div class="numbers">
                                        <p class="card-category">Gestion Des Students</p>
                                        <h4 class="card-title">1233</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Carte pour la Gestion des sessions -->
            <div class="col-sm-6 col-md-3">
                <a href="{{ route('sessions.create') }}">
                    <div class="card card-stats card-round mb-4">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-icon">
                                    <div class="icon-big text-center icon-info bubble-shadow-small">
                                        <i class="fas fa-history"></i>
                                    </div>
                                </div>
                                <div class="col col-stats ms-3 ms-sm-0">
                                    <div class="numbers">
                                        <p class="card-category">Gestion Des sessions</p>
                                        <h4 class="card-title">103</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Carte pour la Gestion des Classes -->
            <div class="col-sm-6 col-md-3">
                <a href="{{ route('classes.create') }}">
                    <div class="card card-stats card-round mb-4">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-icon">
                                    <div class="icon-big text-center icon-success bubble-shadow-small">
                                        <i class="fas fas fa-chalkboard"></i>
                                    </div>
                                </div>
                                <div class="col col-stats ms-3 ms-sm-0">
                                    <div class="numbers">
                                        <p class="card-category">Gestion Des Classes</p>
                                        <h4 class="card-title">$ 1,345</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Carte pour la Gestion des Cours -->
            <div class="col-sm-6 col-md-3">
                <a href="{{ route('cours.create') }}">
                    <div class="card card-stats card-round mb-4">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-icon">
                                    <div class="icon-big text-center icon-secondary bubble-shadow-small">
                                        <i class="fas fa-book-open"></i>
                                    </div>
                                </div>
                                <div class="col col-stats ms-3 ms-sm-0">
                                    <div class="numbers">
                                        <p class="card-category">Gestion Des Cours</p>
                                        <h4 class="card-title">576</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <!-- Fin de la section des cartes -->
    </div>
@endsection
