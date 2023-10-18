<?php
  include('/gimnasio/bd/cn.php');
  session_start();
  $user = $_SESSION['user'];
?>

<nav class="navbar navbar-expand-lg " style="background-color: #e3f2fd;">
  <div class="container-fluid">
    <a class="navbar-brand" href="/gimnasio/admin.php">GYM</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/gimnasio/admin.php">INICIO</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/gimnasio/alta.php">Registrar cliente</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/gimnasio/alta-empleado.php">Registrar empleado</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/gimnasio/bd/usuarios.php">Ver registros</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/gimnasio/bd/empleados.php">Ver registros empleados</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Usuario: <?php echo $user ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/gimnasio/logout.php">Cerrar Sessión</a>
        </li>
      </ul>
    </div>
  </div>
</nav>