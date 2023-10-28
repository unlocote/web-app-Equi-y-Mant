<?php 

	session_start();
	require_once "conexion.php";

	$conexion=conexion();


	$usuario=$_POST['usuario'];
	$pass=($_POST['password']);
	//$pass=md5($_POST['password']);

		$_SESSION['usuario11'] = $_POST['usuario'];



		$sql2="SELECT * from usuarios2 where usuario='$usuario' and password='$pass'";
		//$sql3="SELECT nombre from usuarios where usuario='$usuario' and password='$pass'";


		$result=mysqli_query($conexion,$sql2);
		$row2 = mysqli_fetch_assoc($result);


		if (mysqli_num_rows($result) > 0){
			$_SESSION['user']=$usuario;
			$_SESSION['nom']=$usuario;
			$_SESSION['nom3']=$row2['nombre'];


			echo 1;
			
		}else{
			echo 0;
		} 


 ?>