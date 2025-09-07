      <div class="sidebar" data-background-color="dark">
          <div class="sidebar-logo">
              <!-- Logo Header -->
              <div class="logo-header" data-background-color="dark">
                  <a href="index.html" class="logo">
                      <img src="assets/img/kaiadmin/logo.webp" alt="navbar brand" class="navbar-brand"
                          height="55"/>
                          
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
                          <a data-bs-toggle="collapse" href="#dashboard" class="collapsed" aria-expanded="false">
                              <i class="fas fa-home"></i>
                              <p>Dashboard</p>
                              <span class="caret"></span>
                          </a>
                         
                      </li>
                      <li class="nav-section">
                          <span class="sidebar-mini-icon">
                              <i class="fa fa-ellipsis-h"></i>
                          </span>
                          <h4 class="text-section">Accueil</h4>
                      </li>
                      <li class="nav-item">
                          <a data-bs-toggle="collapse" href="#submenu">
                              <i class="fas fa-bars"></i>
                              <p>Menu Levels</p>
                              <span class="caret"></span>
                          </a>
                          <div class="collapse" id="submenu">
                              <ul class="nav nav-collapse">
                                  <li>
                                      <a data-bs-toggle="collapse" href="#subnav1">
                                          <span class="sub-item">Gerer Les Classes</span>
                                          <span class="caret"></span>
                                      </a>
                                      <div class="collapse" id="subnav1">
                                          <ul class="nav nav-collapse subnav">
                                              <li>
                                                  <a href="{{ route('classes.create') }}">
                                                      <span class="sub-item">create_classe</span>
                                                  </a>
                                              </li>
                                              <li>
                                                  <a href="#">
                                                      <span class="sub-item">Level 2</span>
                                                  </a>
                                              </li>
                                          </ul>
                                      </div>
                                  </li>
                                  <li>
                                      <a data-bs-toggle="collapse" href="#subnav1">
                                          <span class="sub-item">Gerer Les Cours</span>
                                          <span class="caret"></span>
                                      </a>
                                      <div class="collapse" id="subnav1">
                                          <ul class="nav nav-collapse subnav">
                                              <li>
                                                  <a href="{{ route('cours.create') }}">
                                                      <span class="sub-item">create_cours</span>
                                                  </a>
                                              </li>
                                              <li>
                                                  <a href="#">
                                                      <span class="sub-item">Level 2</span>
                                                  </a>
                                              </li>
                                          </ul>
                                      </div>
                                  </li>

                                  <li>
                                      <a data-bs-toggle="collapse" href="#subnav1">
                                          <span class="sub-item">Gerer Les Sessions</span>
                                          <span class="caret"></span>
                                      </a>
                                      <div class="collapse" id="subnav1">
                                          <ul class="nav nav-collapse subnav">
                                              <li>
                                                  <a href="{{ route('sessions.create') }}">
                                                      <span class="sub-item">create_session</span>
                                                  </a>
                                              </li>
                                              <li>
                                                  <a href="#">
                                                      <span class="sub-item">Level 2</span>
                                                  </a>
                                              </li>
                                          </ul>
                                      </div>
                                  </li>


                                                      <li>
                                      <a data-bs-toggle="collapse" href="#subnav1">
                                          <span class="sub-item">Gerer Les Teachers</span>
                                          <span class="caret"></span>
                                      </a>
                                      <div class="collapse" id="subnav1">
                                          <ul class="nav nav-collapse subnav">
                                              <li>
                                                  <a href="{{ route('teashers.create') }}">
                                                      <span class="sub-item">create_teasher</span>
                                                  </a>
                                              </li>
                                              <li>
                                                  <a href="#">
                                                      <span class="sub-item">Level 2</span>
                                                  </a>
                                              </li>
                                          </ul>
                                      </div>
                                  </li>

                                       <li>
                                      <a data-bs-toggle="collapse" href="#subnav1">
                                          <span class="sub-item">Gerer Les departements</span>
                                          <span class="caret"></span>
                                      </a>
                                      <div class="collapse" id="subnav1">
                                          <ul class="nav nav-collapse subnav">
                                              <li>
                                                  <a href="{{ route('departements.create') }}">
                                                      <span class="sub-item">create_departement</span>
                                                  </a>
                                              </li>
                                              <li>
                                                  <a href="#">
                                                      <span class="sub-item">Level 2</span>
                                                  </a>
                                              </li>
                                          </ul>
                                      </div>
                                  </li>
                                  <li>
                                      <a data-bs-toggle="collapse" href="#subnav2">
                                          <span class="sub-item">Gerer Les Eleves</span>
                                          <span class="caret"></span>
                                      </a>
                                      <div class="collapse" id="subnav2">
                                          <ul class="nav nav-collapse subnav">
                                              <li>
                                                  <a href="{{ route('student.create') }}">
                                                      <span class="sub-item">crate student</span>
                                                  </a>
                                              </li>
                                          </ul>
                                      </div>
                                  </li>
                                  <li>
                                      <a href="#">
                                          <span class="sub-item">Level 1</span>
                                      </a>
                                  </li>
                              </ul>
                          </div>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
