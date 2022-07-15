<!-- partial:partials/_navbar.html -->
<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
      <a class="navbar-brand brand-logo mt-2" href="/admin"><h3 class="text-primary"><i class="ti-view-grid"></i> Kanby</h3></a>
      <a class="navbar-brand brand-logo-mini mt-2" href="/admin"><h3 class="text-primary"><i class="ti-view-grid"></i></h3></a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
      <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
        <span class="icon-menu"></span>
      </button>
      <ul class="navbar-nav mr-lg-2">
        <li class="nav-item nav-search d-none d-lg-block">
          <div class="input-group">
            <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
              <span class="input-group-text" id="search">
                <i class="icon-search"></i>
              </span>
            </div>
            <input type="text" class="form-control" id="navbar-search-input" placeholder="Cari sesuatu ..."
              aria-label="search" aria-describedby="search">
          </div>
        </li>
      </ul>
      <ul class="navbar-nav navbar-nav-right">
        <li class="nav-item nav-profile dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
            <h6 class="mr-3 mt-2">Halo, {{ Auth::user()->name }} <i class="ti-angle-down"></i> </h6>
          </a>
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
            <a class="dropdown-item">
              <i class="ti-settings text-primary"></i>
              Settings
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST">
              @csrf
              <button type="submit" class="dropdown-item">
                <i class="ti-power-off text-primary"></i>
                Logout
              </button>
            </form>
            
          </div>
        </li>
      </ul>
      <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
        data-toggle="offcanvas">
        <span class="icon-menu"></span>
      </button>
    </div>
  </nav>