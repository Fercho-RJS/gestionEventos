<?php 
  $_SESSION['pg_actual'] = 'disertantes';
  $pg_actual =  $_SESSION['pg_actual'];
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Patrocinadores | E-Web.net</title>

  <link rel="stylesheet" href="/gestionEventos/node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="/gestionEventos/node_modules/bootstrap-icons/font/bootstrap-icons.min.css">
  <link rel="icon" href="/gestionEventos/public/img/favicon/icon.png" type="image/x-icon">

  <!--  Mantener al final  -->
  <link rel="stylesheet" href="/gestionEventos/css/custom-navbar.css">
  <link rel="stylesheet" href="/gestionEventos/css/custom-login.css">
</head>

<body>
  <header id="general-patrocinadores-header">
    <?php
      require_once '../../php/components/navbar.php';
    ?>
  </header>

  <section id="general-patrocinadores-body" class="">
    
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