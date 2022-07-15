<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item {{request()->is("/") ? "active" : ""}}">
        <a class="nav-link" href="/">
          <i class="ti-home menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>

      <li class="nav-item {{request()->is("/admin/users") ? "active" : ""}}">
        <a class="nav-link" href="/admin/users">
          <i class="ti-user menu-icon"></i>
          <span class="menu-title">Manage Users</span>
        </a>
      </li>

      <li class="nav-item {{request()->is("/admin/task") ? "active" : ""}}">
        <a class="nav-link" href="/admin/task">
          <i class="ti-view-grid menu-icon"></i>
          <span class="menu-title">Manage Task</span>
        </a>
      </li>

    </ul>
  </nav>