<header>
  {{--  Menu  --}}
  <nav class="navbar navbar-expand-lg navbar-dark bg-success ps-5 pe-5 mb-3 d-flex flex-column flex-md-row align-items-center  border-bottom shadow-sm">
    <div class="container-fluid d-flex">

      <a class="navbar-brand font-weight-bolder" href="/">Torneo Laravel <i class="fas fa-futbol"></i> </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="d-flex flex-row-reverse bd-highlight" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          {{--  Municipios  --}}
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Municipio
            </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/municipios/create">Agregar Municipio</a></li>
              <li><a class="dropdown-item" href="/municipios/show">Ver Municipios</a></li>
            </ul>
          </li>
          {{--  Equipos  --}}
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Equipos
            </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/equipos/create">Agregar Equipos</a></li>
              <li><a class="dropdown-item" href="/equipos/show">Ver Equipos</a></li>
            </ul>
          {{--  Jugadores  --}}
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Jugadores
            </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/jugadores/create">Agregar Jugadores</a></li>
              <li><a class="dropdown-item" href="/jugadores/show">Ver Jugadores</a></li>
            </ul>
          {{--  Posiciones  --}}
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Posiciones
            </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/posiciones/create">Agregar Posiciones</a></li>
              <li><a class="dropdown-item" href="/posiciones/show">Ver Posiciones</a></li>
            </ul>
          </li>
        </ul>
    </div>
    
</nav>
</header>

{{--  
  <header>
    <!-- Menu -->
    <nav class="navbar navbar-expand-lg navbar-light bg-primary ps-5 pe-5 mb-3 d-flex flex-column flex-md-row align-items-center  border-bottom shadow-sm">
    <div class="container-fluid d-flex">
      <a class="navbar-brand fs-4 fw-bold" href="">Torneo PDO ⚽</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class=" d-flex flex-row-reverse bd-highlight" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
       <!-- Municipios -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Municipios
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="../municipios/municipios_create.php">Agregar Municipio</a></li>
              <li><a class="dropdown-item" href="../municipios/municipios_index.php">Ver Municipios</a></li>
            </ul>
          </li>

          <!-- Equipos -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Equipo
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/equipos/create">Agregar Equipos</a></li>
              <li><a class="dropdown-item" href="../equipos/equipos_index.php">Ver Equipos</a></li>
            </ul>
          </li>

          <!-- Posiciones -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Posiciones
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="../posiciones/posiciones_create.php">Agregar Posiciones</a></li>
              <li><a class="dropdown-item" href="../posiciones/posiciones_index.php">Ver Posiciones</a></li>
            </ul>
          </li>

          <!-- Jugadores -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Jugadores
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/jugadores/create">Agregar Jugadores</a></li>
              <li><a class="dropdown-item" href="jugadores/show">Ver Jugadores</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
</nav>
</header>
  --}}
