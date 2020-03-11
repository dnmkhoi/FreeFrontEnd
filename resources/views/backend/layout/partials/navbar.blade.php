<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
    <ul class="navbar-nav" style="padding-left:80%">
        <div class="dropdown">
        <button class="btn btn-light btn-sm  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}}
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="{{route('backend.dashboard')}}">Dashboard</a>
            <a class="dropdown-item" href="{{route('logout')}}">Sign Out</a>
        </div>
        </div>
    </ul>
  </nav>
