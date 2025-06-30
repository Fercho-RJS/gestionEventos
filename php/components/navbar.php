<?php
  session_start();
  require_once 'session_vars_test.php';
?>

<head>
  <link rel="stylesheet" href="../../css/custom-navbar.css">
</head>

<nav class="navbar navbar-expand-lg bg-primary">
  <div class="container-fluid ">
    <a translate="false" class="navbar-brand" href="http://localhost/gest_events_system/index.php"><img src="http://localhost/gest_events_system/public/img/logos/full_white.png" alt="Logotipo de la web" height="40"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 d-flex end-100 gap-2 gap-xl-4 text-center">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Eventos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Disertantes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Patrocinadores</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Consultas</a>
        </li>
        <?php //Quita del navbar la opción si ya iniciaste sesión.
          if (!$_SESSION['user_logged']) { //Si no hay usuario logueado
          ?>
          <li class="nav-item">
            <a class="nav-link" id="tag-acceso" href="public/pages/pg_login.php"><i class="bi bi-box-arrow-in-right"></i></a>
          </li>
          <?php
          } else {
            ?>
            <!-- En caso de futuro uso. -->
            <?php
          }
        ?>
        <?php
          require_once 'perfiles.php';
        ?>

      </ul>
    </div>
  </div>
</nav>