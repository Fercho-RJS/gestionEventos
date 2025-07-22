<?php
$_SESSION['pg_actual'] = 'login';
$pg_actual =  $_SESSION['pg_actual'];
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iniciar sesión | E-Web.net</title>

  <link rel="stylesheet" href="/gestionEventos/node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="/gestionEventos/node_modules/bootstrap-icons/font/bootstrap-icons.min.css">
  <link rel="icon" href="/gestionEventos/public/img/favicon/icon.png" type="image/x-icon">

  <!--  Mantener al final  -->
  <link rel="stylesheet" href="/gestionEventos/css/custom-navbar.css">
  <link rel="stylesheet" href="/gestionEventos/css/custom-login.css">
</head>

<body>
  <header id="general-login-header">
    <?php
    require_once '../../php/components/navbar.php';
    ?>
  </header>

  <section id="general-login-body" class="pb-4">
    <div id="login-container">
      <div id="login-header" class="">
        <h4 class="text-white"><img src="/gestionEventos/public/img/logos/color.png" alt="Imagen del login" class="w-auto"></h4>
      </div>
      <!-- En caso de errores al rellenar los datos -->
      <?php if (isset($_GET['err']) && $_GET['err'] = "400"){ ?>
        <div class="alert alert-danger small mt-3 mb-2 text-center" role="alert">
          No has completado todos los campos solicitados
        </div>
      <?php } //end if ?>
      
      <form action="#" method="POST">
        <div id="login-body">
          <div class="input-group input-group-sm mb-2 mt-2">
            <span class="input-group-text" id="basic-addon1">E-mail</span>
            <input type="text" class="form-control" placeholder="Ej. alguien@example.com">
          </div>
          <div class="input-group input-group-sm mb-2 mt-2">
            <span class="input-group-text" id="basic-addon1">Contraseña</span>
            <input type="password" class="form-control" placeholder="...">
          </div>

        </div>
        <div id="login-foot">
          <button type="submit" class="btn btn-sm btn-primary">Acceder</button>
        </div>
        <a id="notHasAcc-tag" href="/gestionEventos/public/pages/pg_registro.php" class="small d-flex mt-2 justify-content-center">No tengo una cuenta</a>
      </form>
    </div>
  </section>

  <?php
  //__DIR__ es una función de PHP que te dá la ruta de acceso donde está ubicado el archivo.
  //Permite viajar entre carpetas más fácil.

  include __DIR__ . '/../../php/components/footer.php';
  ?>

</body>

<!--  Scripts  -->
<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

</html>