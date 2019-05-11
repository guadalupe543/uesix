<?php
	
	$servidor = "localhost";
	$password = "";
	$usuario = "root";
	$basedatos = "umb";

	$conexion = mysqli_connect($servidor,$usuario,$password,$basedatos) or die("ERROR: no se puede acceder a la base de datos");

	mysqli_set_charset($conexion,'utf8'); 


	$nombre = $_POST['nombre'];
	$matricula = $_POST['matricula'];


	$sql2 = "SELECT * FROM alumnos WHERE alumno_matricula = $matricula";
	$response = mysqli_query($conexion, $sql2);
		
	if ($response->num_rows > 0) {

		echo "la matricula ".$matricula." ya exite";

	}else{

		$sql = "INSERT alumnos (alumno_matricula, alumno_nombre) VALUES ('$matricula','$nombre')";
		if(mysqli_query($conexion, $sql) === TRUE){

			echo "El alumno ".$nombre." con la matricula ".$matricula." se a registrado con exito :v";

		}else{

			echo "El alumno ".$nombre." con la matricula ".$matricula." no se pudo registrar conexion :´v";
			mysqli_error($conexion);

		}

	}
		


?>
