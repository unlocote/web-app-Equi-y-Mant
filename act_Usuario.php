<?php
	


require 'conexion.php';

require 'config/validate_session.php';
require 'config/validate_roles.php';
//include 'session_paragraph.php';

//$con=conexion();

	
$rol_id=$_POST['rol_id'];
$Nom_Us=$_POST['Nom_Us'];
$Dir_Us=$_POST['Dir_Us'];
$FechaUsIni=$_POST['FechaUsIni'];
$correo=$_POST['correo'];
$estatus=$_POST['estatus'];
$password=$_POST['password'];
$telefono=$_POST['telefono'];
$nombreEmp=$_POST['nombreEmp'];
$nitEmp=$_POST['nitEmp'];

	/*$nombre = $_POST['nombre']];
	$email = $_POST['email'];
	$telefono = $_POST['telefono'];
	//$codigobarras = $_POST['codigobarras'];
	$estado_civil = $_POST['estado_civil'];
	$hijos = isset($_POST['hijos']) ? $_POST['hijos'] : 0;
	$intereses = isset($_POST['intereses']) ? $_POST['intereses'] : null;
	
	$arrayIntereses = null;
	
	$num_array = count($intereses);
	$contador = 0;

	/*
	if($num_array>0){
		foreach ($intereses as $key => $value) {
			if ($contador != $num_array-1)
			$arrayIntereses .= $value.' ';
			else
			$arrayIntereses .= $value;
			$contador++;
		}
	}*/

	$ban=1;

    $sql2="SELECT correo from usuario where correo='$correo' ";



		//$result=$mysqli->query($sql2);
		//$row2 = mysqli_fetch_assoc($result);

		$result=$con->query($sql2);
		//$row = mysqli_fetch_assoc();




		if ($result->num_rows> 0){
			//$_SESSION['user']=$usuario;
			//$_SESSION['nom']=$usuario;
			//$_SESSION['nom3']=$row2['nombre'];


			$ban=0;


	$resultado = "";
			
		}else{
			$ban=1;

		} 

    if ($ban==1) {
    	# code...
    
	
	$sql = "INSERT INTO usuario (rol_id,Nom_Us,Dir_Us,FechaUsIni,correo,estatus,password,telefono,nombreEmp,nitEmp) values ('$rol_id','$Nom_Us','$Dir_Us','$FechaUsIni','$correo','$estatus','$password','$telefono','$nombreEmp','$nitEmp')";

	
	

	$resultado = $mysqli->query($sql);

	}	

	/*"NIT","COD_SIC","COD_PROPIO","FECHA_CONEXION","NOMBRE","DIRECCION","TELEFONO","FAX","NIU","DEPARTAMENTO","MUNICIPIO","UBICACION","TIPO_CONEXION","CONEXION_RED","CODIGO_CONEXION","GRUPO","NIVEL","NIVEL_REFERIDO","ESTRATO","SECTOR","SECTOR_AL","TIPO_USUARIO","TIPO_LECTURA","TIPO_FACTURA","MERCADO","MEDIDOR","NUMERO","CONSTANTE","CAPACIDAD","TIPO_MEDIDA","TIPO_TARIFA","CONTRIBUCION","SECTOR_SUPER","ORDEN_FAC","ORDEN","TARIFA"*/

	

	

	


	
?>
 
<html lang="es">
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<div class="row" style="text-align:center">
					<?php if($resultado) { ?>
						<h3>REGISTRO EXITOSO</h3>
						<?php } else { ?>
						<h3>USUARIO YA REGISTRADO</h3>
					<?php
		///			if (!$mysqli->query()) {
    //printf("Errormessage: %s\n", $mysqli->error);
//}

					 } ?>
					
					<a href="for_Usuario.php" class="btn btn-primary">Registro Usuario</a>
					<a href="indexAdmin.php" class="btn btn-primary">Inicio</a>
					
				</div>
			</div>
		</div>
	</body>
</html>