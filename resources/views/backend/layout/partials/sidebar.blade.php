<aside class="main-sidebar sidebar-dark-info elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link brand-text">
      <img src="{{asset('img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"/>
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="{{route('backend.dashboard')}}" class="nav-link {{ (strpos(Route::currentRouteName(), 'backend.dashboard') === 0) ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
        </ul>
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="{{route('user.index')}}" class="nav-link {{ (strpos(Route::currentRouteName(), 'user.index') === 0) ? 'active' : '' }}">
                <i class="nav-icon fa fa-user-circle"></i>
                <p>
                  User
                </p>
              </a>
            </li>
        </ul>
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="{{route('avatar.index')}}" class="nav-link {{ (strpos(Route::currentRouteName(), 'avatar.index') === 0) ? 'active' : '' }}">
                <i class="nav-icon fas fa-palette"></i>
                <p>
                    Avatars
                </p>
              </a>
            </li>
        </ul>
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="{{route('categories.index')}}" class="nav-link {{ (strpos(Route::currentRouteName(), 'categories.index') === 0) ? 'active' : '' }}">
                <i class="nav-icon fa fa-list-alt"></i>
                <p>
                    Categories
                </p>
              </a>
            </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
