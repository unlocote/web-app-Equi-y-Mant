<?php
require '..\conexion.php';

//print_r($con);

$email = $_POST['email'];
$password = $_POST['password'];
$_SESSION['user']; 

//echo $con;
//printf("Servidor informacion: %s\n", $conexion3);

$query = "SELECT u.id, u.correo, u.password, u.estatus, r.nombre as rol FROM  usuario u left join roles r on u.rol_id = r.id WHERE  correo = '$email' and password = '$password' and estatus = 2";
$result = $con->query($query);
$row = $result->fetch_assoc();
//print_r($result); 


if ($result->num_rows > 0) {
	session_start();
	$_SESSION['user'] = $email;
	$_SESSION['rol'] = $row['rol']; 
	header("Location: ../indexAdmin.php");
	
}else{
	header("Location: ../index.php");		
}

?>