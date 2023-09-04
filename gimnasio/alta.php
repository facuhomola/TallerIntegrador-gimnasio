<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="css/formulario.css" type="text/css">
    <title>Sistema - Gimnasio</title>
</head>
<body>
    
<!--Cabecera-->
<?php 
    require('includes/header.php');
?>
<!--Fin cabecera-->

<section>
    <div class="row">
        <div class="col-12">
            <div class="container mt-2 mb-2 p-1">
                <h5>Formulario de registro - Completar los campos</h5>
                
                <div class="main">
      <div class="one">
        <div class="register">
          <form id="reg-form" action="registro.php" method="post">
            <div>
              <label for="name">Nombre completo</label>
              <input type="text" id="name" spellcheck="false" placeholder="Shridhar Deshmukh"/>
            </div>
            <div>
              <label for="email">Correo Electrónico</label>
              <input type="text" id="email" spellcheck="false" placeholder="shridhardeshmukh@xyz.com"/>
            </div>
            <div>
              <label for="username">Edad</label>
              <input type="number" id="edad" spellcheck="false" placeholder="edad" />
            </div>
            <div>
              <label>Sexo</label>
              <input type="text" id="sexo" />
            </div>
            <div>
              <label > Plan de entrenamiento </label>
              <select name="plan" id="plan">
                <option value="4500">3 veces por semana ($4500) </option>
                <option value="3000">2 veces por semana ($3000)</option>
                <option value="5500">Libre ($5500)</option>
              </select>
            </div>
            <div>
              <label></label>
              <input type="submit" value="Registrar usuario" id="create-account" class="button"/>
            </div>
          </form>


            </div>
        </div>
    </div>
</section>
    

<!--Pie de pagina-->
<?php    
    require('includes/footer.php');
?>
<!--Fin pie de pagina-->

    <script src="js/bootstrap.min.js"></script>
    <script src="js/formulario.js"></script>
</body>
</html>