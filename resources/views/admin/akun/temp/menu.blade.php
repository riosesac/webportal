<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="{{url('/admin/develop/home')}}" class="brand-link">
    <img src="{{asset('logo.png')}}" alt="Koopsau 3 Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Koopsau 3</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item menu-open">
          <a href="{{url('/admin/develop/home')}}" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        <li class="nav-item">
        <a href="{{url('/admin/develop/register')}}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Account
              <span class="right badge badge-danger">Register</span>
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
              Upload
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
            <a href="{{url('/admin/develop/artikelku')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Artikel</p>
              </a>
            </li>
            <li class="nav-item">
            <a href="{{url('/admin/develop/fotoku')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Foto</p>
              </a>
            </li>
            <li class="nav-item">
            <a href="{{url('/admin/develop/videoku')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Video</p>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>