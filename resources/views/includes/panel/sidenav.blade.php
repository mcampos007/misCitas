<ul class="nav align-items-center d-md-none">
  <li class="nav-item dropdown">
    <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="ni ni-bell-55"></i>
    </a>
    <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
      <a class="dropdown-item" href="#">Action</a>
      <a class="dropdown-item" href="#">Another action</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#">Something else here</a>
    </div>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <div class="media align-items-center">
        <span class="avatar avatar-sm rounded-circle">
          <img alt="{{ asset('Image placeholder') }}" src="{{ asset('img/theme/avatar.jpg') }}">
        </span>
      </div>
    </a>
    <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
      <div class=" dropdown-header noti-title">
        <h6 class="text-overflow m-0">Bienvenido!</h6>
      </div>
      <a href="#" class="dropdown-item">
        <i class="ni ni-single-02"></i>
        <span>Mi Perfil</span>
      </a>
      <a href="#" class="dropdown-item">
        <i class="ni ni-settings-gear-65"></i>
        <span>Configuracion</span>
      </a>
      <a href="#" class="dropdown-item">
        <i class="ni ni-calendar-grid-58"></i>
        <span>Mis citas</span>
      </a>
      <a href="" class="dropdown-item">
        <i class="ni ni-support-16"></i>
        <span>Ayuda</span>
      </a>
      <div class="dropdown-divider"></div>
      <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();document.getElementById('form-logout').submit();">
        <i class="ni ni-user-run"></i>
        <span>Cerrar Sesión</span>
      </a>
      <form action="{{ route('logout') }}" method="POST" style="display: none;" id="form-logout">
          @csrf
        </form>
    </div>
  </li>
</ul>