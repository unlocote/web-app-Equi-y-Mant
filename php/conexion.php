<?php

//$mysqli = new mysqli('localhost','unlocote','','personal');
/*$mysqli = new mysqli('localhost','root','23032003','ascfac');

if ($mysqli->connect_error) {
	die('Error en la conexion' .$mysqli->connect_error);

	# code...
}

printf("Servidor informacion: %s\n", $mysqli->server_info);*/


function conexion(){

		return $conexion=mysqli_connect('localhost','root','23032003','ascfac');
		//or die("SIN conexion");

	}

?>