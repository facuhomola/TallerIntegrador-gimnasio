<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <title>Sistema - Gimnasio</title>
</head>
<body>
    
<!--Cabecera-->
<?php 
    require('includes/header.php');
?>
<!--Fin cabecera-->

<section>
  <form class="form-register" action="bd/registra.php" method="post" name="form" id="form">
  <h4>Formulario Registro - Complete los campos solicitados</h4>
  <input class="controls" type="text" name="nombre" id="nombre" placeholder="Nombre y Apellido">
    <input class="controls" type="text" name="dni" id="dni" placeholder="Dni">
    <input class="controls" type="number" name="edad" id="edad" placeholder="Edad">
    Sexo
    <select name="sexo" id="sexo" class="controls">
      <option value="Masculino">Masculino</option>
      <option value="Femenino">Femenino</option>
    </select>
    <input type="text" class="controls" name="telefono" id="telefono" placeholder="Teléfono">
    Gimnasio que asiste
    <select name="gym" id="gym" class="controls">
      <option value="San Luis">San Luis</option>
      <option value="Villa Mercedes">Villa Mercedes</option>
    </select>
    Seleccione plan
    <select name="plan" id="plan" class="controls">
      <option value="4000">3 veces por semana ($4000)</option>
      <option value="2800">2 veces a la semana ($2800)</option>
      <option value="5500">Libre ($5500)</option>
    </select>
    Fecha de inscripción
    <input type="date" class="controls" name="fecha" id="fecha">
    <input class="botons" type="submit" value="Registrar">  
  </form>  
</section>
    

<!--Pie de pagina-->
<?php    
    require('includes/footer.php');
?>
<!--Fin pie de pagina-->

    <script src="js/bootstrap.min.js"></script>
</body>
</html>