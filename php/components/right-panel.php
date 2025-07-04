<div id="right-panel" class="col-3">
  <?php 
    
  ?>


  <?php 
    if ($_SESSION['user_logged'])
    { 
      switch ($_SESSION['user_role']){
        case 'admin': 
          ?>
          <div id="right-panel-header" class="mt-4 me-2 p-3">
            <div class="small alert alert-danger text-center" role="alert">
              Accediste como <b>Administrador</b>
            </div>
            <span href="#" id="btn-registrarse" class="btn w-100 border"><b class="me-1">@</b><?php echo $_SESSION['username']; ?></span>
            <p class="small mt-2 text-center">🙌 Te has inscripto a <b><?php echo $_SESSION['cantidadCursosInscripto']; ?></b> cursos</p>
          </div>
          <?php break;
        case 'default': 
          ?>
          <div id="right-panel-header" class="mt-4 me-2 p-3">
            <p class="small text-center"><b>¿Falta algún evento?</b><br>
            Accede a la sección <a href="#">Call for papers</a> y envianos tu respuesta.</p>
            <span href="#" id="btn-registrarse" class="btn w-100 border"><b class="me-1">@</b><?php echo $_SESSION['username']; ?></span>
            <p class="small mt-2 text-center">🙌 Te has inscripto a <b><?php echo $_SESSION['cantidadCursosInscripto']; ?></b> cursos</p>
          </div><?php
        ; break;?>
      <?php } ?>
    <?php } else
    { ?>
      <div id="right-panel-header" class="mt-4 me-2 p-3">
        <a href="/gestionEventos/public/pages/pg_registro.php" id="btn-registrarse" class="btn btn-primary">Registrarse ahora</a>
        <p class="small mt-2 text-center">¿Ya estas registrado? - <a href="./public/pages/pg_login.php">Acceder</a></p>
      </div>
    <?php }
    ?>

  <div id="right-panel-body" class="mt-2 me-2 p-3 small">
    Dolorem, eveniet molestiae, officiis deleniti ipsam itaque quos unde culpa beatae numquam.
    <br><br>
    <b>¡Ventajas de asistir!</b>
    <ul class="text-start">
      <li>Mejora tus conocimientos</li>
      <li>Beneficia tu sabiduría</li>
      <li>La verdad no sé que más poner</li>
      <li>¿Hacemos un asado el Domingo?</li>
    </ul>
  </div>
  <div id="right-panel-foot">
  
  </div>
</div>