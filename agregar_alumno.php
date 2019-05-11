<?php
include 'conexion.php';

 $alumno_matricula = $_POST["alumno_matricula"];
 $alumno_nombre = $_POST["alumno_nombre"];

$insertar = "INSERT INTO alumno ( alumno_matricula, alumno_nombre) VALUES ( '$alumno_matricula', '$alumno_nombre')";


$resultado= mysqli_query($conexion, $insertar) or die($insertar);


if ($resultado == 0) {
	echo '<script type="text/javascript">alert("Error al registrar"); window.location="index.php"; </script>';

}else{
	echo '<script type="text/javascript">alert("Usuario registrado con exito"); window.location="index.php"; </script>';
}
if ($resultado == "") {
	echo '<script type="text/javascript">alert("inserte datos"); window.location="index.php"; </script>';
}

/*if ($resultado == 1 ) {
 			echo '<script type="text/javascript">alert("Dato registrado!!!"); window.location="index.php"; </script>';
 				}
if ($resultado == 0) {
	echo '<script type="text/javascript">alert("No se registro"); window.location="index.php"; </script>';

}else{
	echo '<script type="text/javascript">alert("el dato  esta duplicado"); window.location="index.php"; </script>';
 }*/

?>