<?php
//se asignan las variables host, usuario, etc... Con los datos de la base de datos utilizada
$host="localhost";
$usuario="id21407613_raybitpool";
$pass="/Password1";
$nomdb="id21407613_calificaciones_alumnos";
//se asgina otra variable, y se insertan los datos anteriores a un intento de conexion a la base de datos(mysqli). Más adelante si los datos son correctos, "conexion"
//tiene un varol definido y funciona como variable, por tanto se inserta en el if
$conexion=new mysqli($host, $usuario, $pass, $nomdb);

if ($conexion){
    echo "Conexión realizada correctamente.";
}else{
    echo "Conexión fallida. Vuelva a intentarlo.";
}

//Se asignan variables conforme al metodo post del formulario HTML, con los resulatado introducidos por el visitante
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$alumno = $_POST['alumno'];
$curso = $_POST['curso'];
$mates = $_POST['mates'];
$mates2 = $_POST['mates2'];
$lengua = $_POST['lengua'];
$lengua2 = $_POST['lengua2'];
$tic =  $_POST['tic'];
$tic2 = $_POST['tic2']; 
$filo = $_POST['filo']; 
$filo2 = $_POST['filo2'];
$historia = $_POST['historia'];
$historia2 = $_POST['historia2'];
$observaciones = $_POST['observaciones'];
//Se hace otra variable que realiza la función de SQL de insertar datos en la base de datos "Calificaciones". El parentesis son las columnas de la base de datos
//Los values es lo que se inserta en la base de datos. El datacheck realiza las dos funciones "conexion" y "insertar". 
$insertar="INSERT INTO Calificaciones(nombre, apellido, email, alumno, curso, mates, mates2, lengua, lengua2, tic, tic2, filo, filo2, historia, historia2, observaciones) 
            VALUES('$nombre', '$apellido', '$email', '$alumno', '$curso', $mates, '$mates2', $lengua, '$lengua2', $tic, '$tic2', $filo, '$filo2', $historia, '$historia2', '$observaciones')";
$datacheck = mysqli_query($conexion, $insertar);
//Si el datacheck ha funcionado sin errores, se hace el if, si ha fallado algo hace el else
if($datacheck){
    echo "Calificaciones insertadas!";
}else{
    echo "Error. VUelva a intentar a insertar las calificaciones";
}
//Se cierra la conexiones realizada con la base de datos
mysqli_close($conexion);
?>