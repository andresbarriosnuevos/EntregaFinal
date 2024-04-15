<!--Barra de navegación -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php"><img src="./images/logo1.png" class="img-fluid img-logo" alt="Logo de la empresa" ></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
              <a class="nav-link" href="servicios.php">Nuestros Servicios</a>
              <a class="nav-link" href="registro.php">Contáctanos</a>
              <a class="nav-link" href="iniciarSesion.php">Iniciar Sesión</a>
            </div>
          </div>
        </div>
    </nav>

<!--Sesion Activa-->

    <div style="text-align: right;">
      <?php if (isset($_SESSION['usuario_id'])): ?>
          <?php echo " Usuario: {$usuario} | "; ?> <a href='logout.php'>Cerrar sesión</a>
      <?php else: ?>
          <a href="iniciarSesion.php">Iniciar sesión</a>
      <?php endif; ?>
    </div>