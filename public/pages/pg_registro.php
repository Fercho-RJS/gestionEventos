<?php
$_SESSION['pg_actual'] = 'registro';
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
  <link rel="stylesheet" href="/gestionEventos/css/custom-registro.css">
</head>

<body>
  <header id="general-registro-header">
    <?php
    require_once '../../php/components/navbar.php';
    ?>
  </header>

  <section id="general-registro-body" class="pb-4">
    <div id="registro-container">
      <div id="registro-header" class="">
        <h4 class="text-white"><img src="/gestionEventos/public/img/logos/color.png" alt="Imagen del registro" class="w-auto"></h4>
      </div>
      <!-- En caso de errores al rellenar los datos -->
      <div class="alert alert-danger small mt-3 mb-2 text-center" role="alert">
        No has completado todos los campos solicitados
      </div>
      <form action="#" method="POST" id="form-registro">
        <div id="registro-body" class="mb-1">
          <div class="row">
            <div class="col-6">
              <div class="input-group input-group-sm mb-2 mt-2">
                <span class="input-group-text" id="basic-addon1">Nombre/s</span>
                <input type="text" maxlength="255" class="form-control" placeholder="Ej. Juan">
              </div>
            </div>
            <div class="col-6">
              <div class="input-group input-group-sm mb-2 mt-2">
                <span class="input-group-text" id="basic-addon1">Apellido/s</span>
                <input type="text" maxlength="255" class="form-control" placeholder="Ej. Ramirez">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-6">
              <div class="input-group input-group-sm mb-2 mt-2">
                <span class="input-group-text" id="basic-addon1">Correo Electrónico</span>
                <input type="email" class="form-control" placeholder="Ej. alguien@example.com">
              </div>
            </div>
            <div class="col-6">
              <div class="input-group input-group-sm mb-2 mt-2">
                <span class="input-group-text" id="basic-addon1">Telefono</span>
                <input type="text" maxlength="20" class="form-control" placeholder="...">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <div class="input-group input-group-sm mt-2 mb-2">
                <span class="input-group-text">Documento</span>
                <input type="text" maxlength="12" class="form-control">
                <select class="input-group-text text-start">
                  <option selected disabled>Tipo</option>
                  <option value="1">D.N.I.</option>
                  <option value="2">Pasaporte</option>
                  <option value="3">C.U.I.L / C.U.I.T.</option>
                </select>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-4">
              <div class="input-group input-group-sm mb-2 mt-2">
                <span class="input-group-text" id="basic-addon1">Domicilio</span>
                <input type="email" class="form-control" placeholder="...">
              </div>
            </div>
            <div class="col-4">
              <div class="input-group input-group-sm mb-2 mt-2">
                <span class="input-group-text" id="basic-addon1">Altura</span>
                <input type="email" class="form-control" placeholder="...">
              </div>
            </div>
            <div class="col-4">
              <div class="input-group input-group-sm mt-2">
                <span class="input-group-text">Provincia</span>
                <select class="form-select form-control text-start">
                  <option selected disabled>Seleccionar</option>
                </select>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-6">
              <div class="input-group input-group-sm mb-2 mt-2">
                <span class="input-group-text" id="basic-addon1">Clave</span>
                <input type="email" class="form-control" placeholder="...">
              </div>
            </div>
            <div class="col-6">
              <div class="input-group input-group-sm mb-2 mt-2">
                <span class="input-group-text" id="basic-addon1">Validar clave</span>
                <input type="email" class="form-control" placeholder="...">
              </div>
            </div>
          </div>


        </div>
        <div id="registro-foot">
          <button type="submit" class="btn btn-sm btn-primary">Registrarse</button>
        </div>
        <a id="HasAcc-tag" href="/gestionEventos/public/pages/pg_login.php" class="small d-flex mt-2 justify-content-center">Ya tengo una cuenta</a>
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