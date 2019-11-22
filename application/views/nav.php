  <link rel="stylesheet" href="<?php echo CSS; ?>/nav-style.css">
  <nav class="navbar navbar-dark" style="background-color:#16253d;">
    <!-- Brand -->
    <div class="btn-links">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>Enlaces
    </div>

    <h5 class="navbar-brand">Sistema de Soportes (<?php echo $_SESSION['usuario'];?>)</h5>

    <form class="form-inline" action="">
      <input class="form-control mr-sm-1" type="text" placeholder="Search">
      <button class="btn btn-success" type="submit">Search</button>
    </form>

    <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="my-nav-list">
      <li class="my-nav-item">
        <a class="my-nav-link" href="solicitud">Solicitud</a>
      </li>
      <li class="my-nav-item">
        <a class="my-nav-link" href="mis_soportes">Mis Soportes</a>
      </li>
      <li class="my-nav-item logout">
        <a class="my-nav-link" href="login_controller" onclick="">Cerrar sesión</a>
      </li>
    </ul>
  </div>

  </nav>
</div>
