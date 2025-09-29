  <nav class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom bg-dark ">
      <div class="container-fluid">
          <nav class="navbar navbar-header-left navbar-expand-lg navbar-form nav-search p-0 d-none d-lg-flex ">
              <div class="input-group">
                  <div class="input-group-prepend">
                      <button type="submit" class="btn btn-search pe-1">
                          <i class="fa fa-search search-icon"></i>
                      </button>
                  </div>
                  <input type="text" placeholder="Search ..." class="form-control" />
              </div>
          </nav>

          <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
              <li class="nav-item topbar-icon dropdown hidden-caret d-flex d-lg-none">
                  <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                      aria-expanded="false" aria-haspopup="true">
                      <i class="fa fa-search"></i>
                  </a>
                  <ul class="dropdown-menu dropdown-search animated fadeIn">
                      <form class="navbar-left navbar-form nav-search">
                          <div class="input-group">
                              <input type="text" placeholder="Search ..." class="form-control" />
                          </div>
                      </form>
                  </ul>
              </li>
              <li class="nav-item topbar-icon dropdown hidden-caret">
                  <a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button"
                      data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fa fa-envelope"></i>
                  </a>
                  <ul class="dropdown-menu messages-notif-box animated fadeIn" aria-labelledby="messageDropdown">

                      <li>
                          <a class="see-all" href="javascript:void(0);">See all messages<i
                                  class="fa fa-angle-right"></i>
                          </a>
                      </li>
                  </ul>
              </li>
              <li class="nav-item topbar-icon dropdown hidden-caret">
                  <a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button"
                      data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fa fa-bell"></i>
                      <span class="notification">4</span>
                  </a>
                  <ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown">


                      <li>
                          <a class="see-all" href="javascript:void(0);">See all notifications<i
                                  class="fa fa-angle-right"></i>
                          </a>
                      </li>
                  </ul>
              </li>


              <li class="nav-item topbar-user dropdown hidden-caret">
                  <a class="dropdown-toggle profile-pic text-white" data-bs-toggle="dropdown" href="#"
                      aria-expanded="false">
                      <div class="avatar-sm">
                          <i class="fas fa-user mt-3 " style="font-size: 20px"></i>

                      </div>
                      <span class="profile-username mt-2">
                          <span class="op-7">Hello,</span>
                          <span class="fw-bold"> {{ Auth::user()->lastname }}</span>
                      </span>
                  </a>
                  <ul class="dropdown-menu dropdown-user animated fadeIn">
                      <div class="dropdown-user-scroll scrollbar-outer">
                          <li>
                              <div class="user-box">
                                  <div class="avatar-lg">
                                      {{-- <img src="assets/img/loic.jpg"alt="image profile" class="avatar-img rounded" /> --}}
                                      <i class="fas fa-user "></i>
                                  </div>
                                  <div class="u-text">
                                      <h4> {{ Auth::user()->lastname }}</h4>
                                      <p class="text-muted"> {{ Auth::user()->email }}</p>
                                  </div>
                              </div>
                          </li>
                          <li>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item btn btn-info my-2" href="#">Mon profil</a>
                              <form action="{{ route('logout') }}" method="POST">
                                  @csrf
                                  <button type="submit"class="dropdown-item btn btn-danger">Logout</button>
                              </form>
                              {{-- <a class="dropdown-item btn btn-danger" href="{{ route('logout') }}">Logout</a> --}}
                          </li>
                      </div>
                  </ul>
              </li>
          </ul>
      </div>
  </nav>
