<ul class="navbar-nav align-items-center d-none d-md-flex">
  <li class="nav-item dropdown">
    <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <div class="media align-items-center">
        <span class="avatar avatar-sm rounded-circle">
          <img alt="Image placeholder" src="{{ asset('img/theme/avatar.jpg') }}">
        </span>
        <div class="media-body ml-2 d-none d-lg-block">
          <span class="mb-0 text-sm  font-weight-bold">{{ auth()->user()->name }}</span>
        </div>
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
        <span>Configuración</span>
      </a>
      <a href="#" class="dropdown-item">
        <i class="ni ni-calendar-grid-58"></i>
        <span>Mis citas</span>
      </a>
      <a href="#" class="dropdown-item">
        <i class="ni ni-calendar-grid-58"></i>
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