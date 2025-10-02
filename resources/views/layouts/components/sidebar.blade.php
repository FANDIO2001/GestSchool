<div class="sidebar" data-background-color="dark">
    <div class="sidebar-logo">
        <div class="logo-header" data-background-color="dark">
            <a href="index.html" class="logo">
                <img src="{{ asset('assets/img/kaiadmin/logo_light.svg') }}" alt="navbar brand" class="navbar-brand"
                    height="20" />
            </a>
            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                    <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                    <i class="gg-menu-left"></i>
                </button>
            </div>
            <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
            </button>
        </div>
    </div>
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-secondary">
                <li class="nav-item active">
                    <a href="{{ route('dashboard') }}">
                        <i class="fas fa-tachometer-alt"></i>
                        Dashboard
                    </a>

                </li>

                <hr>
                @if (Auth::user()->rule == 'responsable' && Auth::user()->responsible->responsability == 'censeur')
                    <li class="nav-section">
                        <span class="sidebar-mini-icon">
                            <i class="fa fa-ellipsis-h"></i>
                        </span>
                        <h4 class="text-section">Gestion Pedagogiques</h4>
                    </li>
                    <li class="nav-item">
                        <a data-bs-toggle="collapse" href="#base">
                            <i class="fas fa-chalkboard-teacher text-white-500"></i>

                            <p>Enseignants</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="base">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="{{ route('teachers.create') }}">
                                        <i class="fas fa-plus"></i>
                                        <span class="">Ajouter un enseignant</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('teachers.index') }}">
                                        <i class="fas fa-users"></i>
                                        <span class="">Liste des enseignants</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="fas fa-list-check"></i>
                                        <span>suivis des cours</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a data-bs-toggle="collapse" href="#coursesMenu">
                            <i class="fas fa-book-open"></i>
                            <p>Cours</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="coursesMenu">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="{{ route('cours.create') }}">
                                        <i class="fas fa-plus"></i>
                                        <span>Ajouter un cours</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('cours.index') }}">
                                        <i class="fas fa-list-alt"></i>
                                        <span>Liste des Cours</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <hr>


                    <li class="nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarLayouts">
                            <i class="fas fa-sitemap"></i>
                            <p>Departements</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="sidebarLayouts">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="{{ route('departements.create') }}">
                                        <i class="fas fa-plus"></i>
                                        <span>Ajouter un departement</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('departements.index') }}">
                                        <i class="fas fa-list"></i>
                                        <span class="">Liste des departements</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a data-bs-toggle="collapse" href="#date">
                            <i class="fas fa-star-of-life"></i>
                            <p>Speciality</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="date">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="{{ route('specialities.create') }}">
                                        <i class="fas fa-plus"></i>
                                        <span>ajouter une specialite</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('specialities.index') }}">
                                        <i class="fas fa-list-alt"></i>
                                        <span>Liste des specialite</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <hr>
                    <li class="nav-item">
                        <a data-bs-toggle="collapse" href="#classes">
                            <i class="fas fa-calendar-alt"></i>
                            <p>Classes</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="classes">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="{{ route('classes.create') }}">
                                        <i class="fas fa-plus"></i>
                                        <span>ajouter une classe</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('classes.index') }}">
                                        <i class="fas fa-list"></i>
                                        <span>Liste des classes</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <hr>
                @endif


                @if (Auth::user()->rule == 'responsable' && Auth::user()->responsible->responsability == 'surveillant')
                    <li class="nav-section">
                        <span class="sidebar-mini-icon">
                            <i class="fa fa-ellipsis-h"></i>
                        </span>
                        <h4 class="text-section">Gestion Disciplinaire</h4>
                    </li>
                    <li class="nav-item">
                        <a data-bs-toggle="collapse" href="#forms">
                            <i class="fas fa-clock"></i>
                            <p>Gestion des heures</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="forms">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="forms/forms.html">
                                        <i class="fas fa-calendar-times"></i>
                                        <span>Comptabiliser les absences</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="forms/forms.html">
                                        <i class="fas fa-user-check"></i>
                                        <span>Justifier les absences</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="forms/forms.html">
                                        <i class="fas fa-file-invoice"></i>
                                        <span>tirer les fiche d'assiduite</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a data-bs-toggle="collapse" href="#tables">
                            <i class="fas fa-gavel"></i>
                            <p>Conseils de discipline</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="tables">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="tables/tables.html">
                                        <i class="fas fa-plus-circle"></i>
                                        <span class="sub-item">Creer un conseil de discipline</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="tables/datatables.html">
                                        <i class="fas fa-calendar-check"></i>
                                        <span class="sub-item">Conseils de discipline en cours</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <hr>
                @endif

                @if (Auth::user()->rule == 'responsable' && Auth::user()->responsible->responsability == 'proviseur')
                    <li class="nav-section">
                        <span class="sidebar-mini-icon">
                            <i class="fa fa-ellipsis-h"></i>
                        </span>
                        <h4 class="text-section">Gestion Administrative</h4>
                    </li>
                    <li class="nav-item">
                        <a data-bs-toggle="collapse" href="#maps">
                            <i class="fas fa-user-tie"></i>
                            <p>Responsables</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="maps">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="{{ route('responsibles.create') }}">
                                        <i class="fas fa-plus"></i>
                                        <span>ajouter un responsable</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('responsibles.index') }}">
                                        <i class="fas fa-users-cog"></i>
                                        <span>Liste des responsables</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a data-bs-toggle="collapse" href="#sessiondate">
                            <i class="fas fa-calendar-alt"></i>
                            <p>Seances</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="sessiondate">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="fas fa-plus"></i>
                                        <span>ajouter une Seance de cous</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('sessions.index') }}">
                                        <i class="fas fa-list"></i>
                                        <span>Liste des Seances</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a data-bs-toggle="collapse" href="#charts">
                            <i class="fas fa-user-graduate"></i>
                            <p>Eleves</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse" id="charts">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a href="{{ route('students.create') }}">
                                        <i class="fas fa-plus"></i>
                                        <span>Ajouter un eleve</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('students.index') }}">
                                        <i class="fas fa-users"></i>
                                        <span>Liste des eleves</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>



                    <li class="nav-item">
                        <a href="widgets.html">
                            <i class="fas fa-chart-line"></i>
                            <p>Statistiques</p>
                            <span class="badge badge-success">4</span>
                        </a>
                    </li>
                @endif
                <li class="nav-item">
                    <a href="../../documentation/index.html">
                        <i class="fas fa-file-alt"></i>
                        <p>Documentation</p>
                        <span class="badge badge-secondary">1</span>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</div>

{{-- Modal pour afficher les classes et les matieres --}}
<div class="modal fade mt-20" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Nouvelle séance</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
            </div>

            <div class="modal-body">
                @if ($classes->isNotEmpty() && $matieres->isNotEmpty())
                    <form method="GET" action="{{ route('sessions.create') }}">
                        {{-- Sélection de la classe --}}
                        <div class="mb-3">
                            <label for="classe_id" class="form-label">Choisir une classe</label>
                            <select class="form-select" name="classe_id" id="classe_id" required>
                                <option value="">-- Sélectionner une classe --</option>
                                @foreach ($classes as $classe)
                                    <option value="{{ $classe->id }}">
                                        {{ $classe->title }} - {{ $classe->speciality->title }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        {{-- Sélection de la matière --}}
                        <div class="mb-3">
                            <label for="matiere_id" class="form-label">Choisir une matière</label>
                            <select class="form-select" name="cour_id" id="cour_id" required>
                                <option value="">-- Sélectionner une matière --</option>
                                @foreach ($matieres as $matiere)
                                    <option value="{{ $matiere->id }}">{{ $matiere->title }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-success">Créer séance</button>
                        </div>
                    </form>
                @else
                    <ul class="list-group">
                        <li class="list-group-item">Aucune classe ou matière disponible.</li>
                    </ul>
                @endif
            </div>

        </div>
    </div>
</div>
