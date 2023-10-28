<?php 

	session_start();
	require_once "conexion.php";
	
	$var=0;

	$conexion=conexion();


		$usuario=$_POST['usuario'];
		$pass=($_POST['password']);
		
		//$captcha=$_POST['#g-recaptcha-response'];
		$captcha=$_POST['captcha'];
		
		$secret='6LcUL8oZAAAAAIKZ-MEtDijWKpo70RoHVJNjB7Ty';
	
		//$secret='6LcUL8oZAAAAAIKZ-MEtDijWKpo70RoHVJNjB7Ty';
		
		/*  if(!$captcha){
               
               echo $var=1;
           }*/
           
           $response= file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha"); 
           
           $arr = json_decode($response, TRUE);
           
           if($arr['success']){
               
               echo $var=0;
           }else{
               echo $var=1;
           }
           
		
		$_SESSION['usuario11'] = $_POST['usuario'];



		$sql="SELECT * from usuarios where usuario='$usuario' and password='$pass'";
		//$sql3="SELECT nombre from usuarios where usuario='$usuario' and password='$pass'";


		$result=mysqli_query($conexion,$sql);
		$row2 = mysqli_fetch_assoc($result);
		
	   


	     if (mysqli_num_rows($result) > 0){
			$_SESSION['user']=$usuario;
			$_SESSION['nom']=$usuario;
			$_SESSION['nom3']=$row2['nombre'];
           
          

		echo $var=$var+1;
			
		}else{
			echo $var=0;
		} 


 ?>
