<?php

session_start();
//Conectar a la base de datos
include('bd/cn.php');

$user = $_SESSION['user'];

$consulta = "SELECT * FROM usuarios where user='$user' ";
$resultado = mysqli_query($conexion, $consulta); 

$filas = mysqli_fetch_array($resultado);

if (!isset($user ) || $filas['id_cargo'] == 2 ) {
    header("location:index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <title>Sistema - Gimnasio - Administrador</title>
</head>
<body>
    
<!--Cabecera-->
<?php 
    require('includes/header.php');
?>
<!--Fin cabecera-->

<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-md-12 col-sm-12">
            <h1 class="display-4 text-center"> SISTEMA GYM SL-VM </h1>
        </div>
    </div>
</div>

<div class="container-lg">
    <div class="row">
        <div class="col-3 col-md-3 col-sm-12">
            <div class="card" style="width: 75%;">
                <img src="icons/registros.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <a href="bd/empleados.php" class="btn btn-primary">Ver Registros Empleados</a>
                </div>
            </div>
        </div>
        <div class="col-3 col-md-3 col-sm-12">
            <div class="card" style="width: 75%;">
                <img src="icons/registrar.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <a href="alta-empleado.php" class="btn btn-primary">Registrar Empleado</a>
                </div>
            </div>
        </div>
        <div class="col-3 col-md-3 col-sm-12">
            <div class="card" style="width: 75%;">
                <img src="icons/clientes.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <a href="bd/usuarios.php" class="btn btn-primary">Clientes Registrados</a>
                </div>
            </div>
        </div>
        <div class="col-3 col-md-3 col-sm-12">
            <div class="card" style="width: 75%;">
                <img src="icons/cliente.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <a href="alta.php" class="btn btn-primary">Registrar Cliente</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!--
<section class="container-fluid">
    <div class="row">
        <div class="col-12 col-md-12 col-sm-12">
            <div class="container p-1 mt-2 mb-2">
                <div id="carouselExampleIndicators" class="carousel slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/img-1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/img-2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/img-3.jpeg" class="d-block w-100" alt="...">
                </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            </div>
        </div>
    </div>
</section>
-->
    
<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-md-12 col-sm-12">
            <h3 class="mt-2 text-center">Días - horarios - planes</h3>
            <table class="table table-success table-striped">
                <tr>
                    <td><b>DÍA</b></td>
                    <td><b>HORA</b></td>
                    <td><b>PLAN</b></td>
                </tr>
                <tr>
                    <td>Lunes - Miercóles - Viernes</td>
                    <td>8:00 - 12:00</td>
                    <td>Plan turno mañana - $4500</td>
                </tr>
                <tr>
                    <td>Lunes - Miercóles - Viernes</td>
                    <td>8:00 - 22:00</td>
                    <td>Plan turno mañana/tarde - $6000</td>
                </tr>
                <tr>
                    <td>Martes - Jueves</td>
                    <td>8:00 - 12:00</td>
                    <td>Plan 2 turno mañana - $3000</td>
                </tr>
                <tr>
                    <td>Martes - Jueves</td>
                    <td>8:00 - 22:00</td>
                    <td>Plan 2 turno mañana/tarde - $3800</td>
                </tr>
                <tr>
                    <td>Todos los días</td>
                    <td>8:00 - 22:00</td>
                    <td>Plan libre - $6700</td>
                </tr>
            </table>
        </div>
    </div>
</div>

<!--Pie de pagina-->
<?php    
    require('includes/footer.php');
?>
<!--Fin pie de pagina-->

    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>