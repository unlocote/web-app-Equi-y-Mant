<?php
	
	require 'conexion.php';
	
	$COD_SIC = $_POST['COD_SIC'];

	$NOMBRE=$_POST['NOMBRE']; $DIRECCION=$_POST['DIRECCION']; $MARCA=$_POST['MARCA'];

	$MODELO=$_POST['MODELO']; $NUM_SERIE=$_POST['NUM_SERIE']; $CONEXION=$_POST['CONEXION']; $CLASE=$_POST['CLASE'];

	$CLASE_PT=$_POST['CLASE_PT']; $CLASE_CT=$_POST['CLASE_CT'];
	//$PASS_LEC=$_POST['PASS_LEC']; $PASS_CONF=$_POST['PASS_CONF'];
	

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
	
	$sql = "UPDATE medact_asc01 SET 

	NOMBRE='$NOMBRE',  DIRECCION='$DIRECCION', MARCA='$MARCA', MODELO='$MODELO', NUM_SERIE='$NUM_SERIE', CONEXION='$CONEXION', CLASE='$CLASE' WHERE COD_SIC = '$COD_SIC'";
	//,PASS_LEC='$PASS_LEC',	PASS_CONF='$PASS_CONF' 


	

	

	$sql2 = "UPDATE clasetptc_asc01 SET 

	CLASE_PT='$CLASE_PT', CLASE_CT='$CLASE_CT' WHERE COD_SIC = '$COD_SIC'";


	
	$resultado = $mysqli->query($sql);
	$resultado2 = $mysqli->query($sql2);
	
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
					<?php if($resultado && $resultado2) { ?>
						<h3>REGISTRO MODIFICADO</h3>
						<?php } else { ?>
						<h3>ERROR AL MODIFICAR</h3>
					<?php
					if (!$mysqli->query()) {
    printf("Errormessage: %s\n", $mysqli->error);
}

					 } ?>
					
					<a href="index5.php" class="btn btn-primary">Tabla instalacion</a>
					
				</div>
			</div>
		</div>
	</body>
</html>