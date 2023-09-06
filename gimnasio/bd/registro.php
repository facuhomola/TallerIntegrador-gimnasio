<?php

//include 'cn.php';

//almacenar valores
$nombre = $_POST['nombre'];
$dni = $_POST['dni']
$edad = $_POST['edad'];
$sexo = $_POST['sexo'];
$telefono = $_POST['telefono'];
$gym = $_POST['gym'];
$plan = $_POST['plan'];
$fecha = $_POST['fecha'];

echo "Datos ingresados: <br>";
echo "$nombre <br> $dni <br> $edad <br> $sexo <br> $telefono <br> $gym <br> $plan <br> $fecha <br>";

/*
//Consulta para insertar un nuevo usuario a la BD
$insertar = "INSERT INTO usuarios(nombre, dni, edad, sexo, telefono, gym, plan, fecha) VALUES('$nombre', '$dni', '$edad', '$sexo', '$telefono', '$gym', '$plan', '$fecha')";

//Ejecutar consulta
$consulta = mysqli_query($conexion, $insertar);
if (!$consulta) {
    die("Ocurrio un error en el registro!");
}else{
    echo "Se registro el nuevo usuario exitosamente <br>";
    echo "<a href=./../index.php type=button class=btn>Volver al Inicio</a> <br>";
    echo "<a href=./../alta.php type=button class=btn>Registrar nuevo usuario</a>";

}*/


?>