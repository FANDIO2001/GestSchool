      <div class="sidebar" data-background-color="dark">
          <div class="sidebar-logo">
              <!-- Logo Header -->
              <div class="logo-header" data-background-color="dark">
                  <a href="index.html" class="logo">
                      <img src="assets/img/kaiadmin/logo_light.svg" alt="navbar brand" class="navbar-brand"
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
              <!-- End Logo Header -->
          </div>
          <div class="sidebar-wrapper scrollbar scrollbar-inner">
              <div class="sidebar-content">
                  <ul class="nav nav-secondary">
                      <li class="nav-item active">
                          <a href="{{ route('dashboard') }}">
                              <i class="fas fa-home"></i>
                              Dashboard
                          </a>

                      </li>

                      <hr>

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
                                          <i class="fas fa-eye"></i>
                                          <span class="">Liste des enseignants</span>
                                      </a>
                                  </li>

                                  <li>
                                      <a href="#">
                                          <i class="fas fa-trash"></i>
                                          <span>suivis des cours</span>
                                      </a>
                                  </li>

                              </ul>
                          </div>
                      </li>
                      <hr>


                      <li class="nav-item">
                          <a data-bs-toggle="collapse" href="#sidebarLayouts">
                              <i class="fas fa-users"></i>
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
                                          <i class="fas fa-eye"></i>
                                          <span class="">Liste des departements</span>
                                      </a>
                                  </li>
                              </ul>
                          </div>
                      </li>
                      <hr>
                      <li class="nav-item">
                          <a href="{{ route('specialities.create') }}">
                              <i class="fas fa-file"></i>
                              <p>Filiere/Specialite</p>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="../../documentation/index.html">
                              <i class="fas fa-school"></i>
                              <p>Classes</p>
                          </a>
                      </li>
                      <hr>
                      <li class="nav-section">
                          <span class="sidebar-mini-icon">
                              <i class="fa fa-ellipsis-h"></i>
                          </span>
                          <h4 class="text-section">Gestion Disciplinaire</h4>
                      </li>
                      <li class="nav-item">
                          <a data-bs-toggle="collapse" href="#forms">
                              <i class="fas fa-pen-square"></i>
                              <p>Gestion des heures</p>
                              <span class="caret"></span>
                          </a>
                          <div class="collapse" id="forms">
                              <ul class="nav nav-collapse">
                                  <li>
                                      <a href="forms/forms.html">
                                          <i class="fas fa-list"></i>
                                          <span>Comptabiliser les absences</span>
                                      </a>
                                  </li>
                                  <li>
                                      <a href="forms/forms.html">
                                          <i class="fas fa-list"></i>
                                          <span>Justifier les absences</span>
                                      </a>
                                  </li>
                                  <li>
                                      <a href="forms/forms.html">
                                          <i class="fas fa-list"></i>
                                          <span>tirer les fiche d'assiduite</span>
                                      </a>
                                  </li>
                              </ul>
                          </div>
                      </li>
                      <li class="nav-item">
                          <a data-bs-toggle="collapse" href="#tables">
                              <i class="fas fa-table"></i>
                              <p>Conseils de discipline</p>
                              <span class="caret"></span>
                          </a>
                          <div class="collapse" id="tables">
                              <ul class="nav nav-collapse">
                                  <li>
                                      <a href="tables/tables.html">
                                          <span class="sub-item">Creer un conseil de discipline</span>
                                      </a>
                                  </li>
                                  <li>
                                      <a href="tables/datatables.html">
                                          <span class="sub-item">Conseils de discipline en cours</span>
                                      </a>
                                  </li>
                              </ul>
                          </div>
                      </li>
                      <hr>
                      <li class="nav-section">
                          <span class="sidebar-mini-icon">
                              <i class="fa fa-ellipsis-h"></i>
                          </span>
                          <h4 class="text-section">Gestion Administrative</h4>
                      </li>
                      <li class="nav-item">
                          <a data-bs-toggle="collapse" href="#maps">
                              <i class="fas fa-map-marker-alt"></i>
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
                                          <i class="fas fa-eye"></i>
                                          <span>Liste des responsables</span>
                                      </a>
                                  </li>
                              </ul>
                          </div>
                      </li>
                      <li class="nav-item">
                          <a data-bs-toggle="collapse" href="#charts">
                              <i class="far fa-graduation"></i>
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
                                      <a href="charts/sparkline.html">
                                          <i class="fas fa-eye"></i>
                                          <span>Liste des eleves</span>
                                      </a>
                                  </li>
                              </ul>
                          </div>
                      </li>
                      <li class="nav-item">
                          <a href="widgets.html">
                              <i class="fas fa-chart-bar"></i>
                              <p>Statistiques</p>
                              <span class="badge badge-success">4</span>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="../../documentation/index.html">
                              <i class="fas fa-file"></i>
                              <p>Documentation</p>
                              <span class="badge badge-secondary">1</span>
                          </a>
                      </li>

                  </ul>
              </div>
          </div>
      </div>
