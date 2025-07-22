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
      <?php if (isset($_GET['err']) && $_GET['err'] = "400"){ ?>
        <div class="alert alert-danger small mt-3 mb-2 text-center" role="alert">
          No has completado todos los campos solicitados
        </div>
      <?php } //end if ?>

      <form action="#" method="POST" id="form-registro">
        <div id="registro-body" class="mb-1">
          <div class="row">
            <div class="col-6">
              <div class="input-group input-group-sm mb-2 mt-2">
                <span class="input-group-text" id="basic-addon1">Nombre/s</span>
                <input id="inp-nombre" type="text" maxlength="255" class="form-control" placeholder="Ej. Juan">
              </div>
            </div>
            <div class="col-6">
              <div class="input-group input-group-sm mb-2 mt-2">
                <span class="input-group-text" id="basic-addon1">Apellido/s</span>
                <input id="inp-apellido" type="text" maxlength="255" class="form-control" placeholder="Ej. Ramirez">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-6">
              <div class="input-group input-group-sm mb-2 mt-2">
                <span class="input-group-text" id="basic-addon1">Correo Electrónico</span>
                <input id="inp-email" type="email" class="form-control" placeholder="Ej. alguien@example.com">
              </div>
            </div>
            <div class="col-6">
              <div class="input-group input-group-sm mb-2 mt-2">
                <span class="input-group-text" id="basic-addon1">Telefono</span>
                <input id="inp-telefono" type="text" maxlength="20" class="form-control" placeholder="...">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <div class="input-group input-group-sm mt-2 mb-2">
                <span class="input-group-text">Documento</span>
                <input id="inp-documento" type="text" maxlength="10" class="form-control">
                <select id="tipo-documento" class="input-group-text text-start">
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
                <span class="input-group-text">Domicilio</span>
                <input id="inp-domicilio" type="email" class="form-control" placeholder="...">
              </div>
            </div>
            <div class="col-4">
              <div class="input-group input-group-sm mb-2 mt-2">
                <span class="input-group-text">Altura</span>
                <input id="inp-domicilio-altura" type="email" class="form-control" placeholder="...">
              </div>
            </div>
            <div class="col-4">
              <div class="input-group input-group-sm mt-2">
                <span class="input-group-text">Provincia</span>
                <select id="inp-provincia" class="form-select form-control text-start">
                  <option selected disabled>Seleccionar</option>
                </select>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-6">
              <div class="input-group input-group-sm mb-2 mt-2">
                <span class="input-group-text" id="inp-contrasena">Clave</span>
                <input type="email" class="form-control" placeholder="...">
              </div>
            </div>
            <div class="col-6">
              <div class="input-group input-group-sm mb-2 mt-2">
                <span class="input-group-text" id="inp-val-contrasenia">Validar clave</span>
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
<script src="/gestionEventos/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="/gestionEventos/node_modules/jquery/dist/jquery.min.js"></script>
<script>
  $(document).ready(() => {
    // console.log('Funciona jquery');

    //Controla el tipo de documento, y cambia la longitud de carácteres.
    $('#tipo-documento').change(() => {
      switch ($('#tipo-documento').val()) {
        case '1':
          $('#inp-documento').attr('maxlength', 8);
          break;
        case '2':
          $('#inp-documento').attr('maxlength', 9);
          break;
        case '3':
          $('#inp-documento').attr('maxlength', 12);
          break;
      }
    });
  });
</script>

</html>