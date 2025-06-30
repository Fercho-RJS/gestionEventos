<?php
require_once 'session_vars_test.php';

$user_state = $_SESSION['user_logged'];
$user_role = $_SESSION['user_role'];

if ($user_role == 'default' && $user_state) {
?>
  <!-- Vista de usuario default -->
  <li class="nav-item">
    <a class="nav-link" href="#">Mi Perfil</a>
  </li>
<?php } else if ($user_role == 'admin' && $user_state) {
?>
  <!-- Vista de administrador -->
  <li class="nav-item">
    <a class="nav-link disabled" aria-disabled="true">Administrador</a>
  </li>
<?php
}
?>

<!-- Habilita el logout btn -->
<?php
if ($user_state) {
?>
  <li class="nav-item">
    <a id="logout-btn" class="nav-link btn btn-danger rounded-1" href="#"><i class="bi bi-door-open-fill"></i></a>
  </li>
<?php
}
?>