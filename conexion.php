<?php
$host="localhost";
$usuario="id21407613_raybitpool";
$pass="/Password1";
$nomdb="id21407613_calificaciones_alumnos";

$conexion=new mysqli($host, $usuario, $pass, $nomdb);

if ($conexion){
    echo "Conexión realizada correctamente.";
}else{
    echo "Conexión fallida. Vuelva a intentarlo.";
}

$nombre = $_POST["nombre"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$alumno = $_POST["alumno"];
$curso = $_POST["curso"];
$mates = $_POST["mates"];
$mates2 = $_POST["mates2"];
$lengua = $_POST["lengua"];
$lengua2 = $_POST["lengua2"];
$tic =  $_POST["tic"];
$tic2 = $_POST["tic2"]; 
$filo = $_POST["filo"]; 
$filo2 = $_POST["filo2"];
$historia = $_POST["historia"];
$historia2 = $_POST["historia2"];
$comment = $_POST["comment"];

$insertar="INSERT INTO id21407613_calificaciones_alumnos.Calificaciones(nombre, lname, email, alumno, curso, mates, mates2, lengua, lengua2, tic, tic2, filo, filo2, historia, historia2, comment) 
    VALUES($nombre, $lname, $email, $alumno, $curso, $mates, $mates2, $lengua, $lengua2, $tic, $tic2, $filo, $filo2, $historia, $historia2, $comment)";

$datacheck = mysqli_query($conexion, $insertar);

if ($datacheck){
    echo "Calificaciones insertadas correctamente";
}else{
    echo"Error. Calificaciones no insertadas, vuelva a intentarlo";
}
mysqli_close($conexion);
?>