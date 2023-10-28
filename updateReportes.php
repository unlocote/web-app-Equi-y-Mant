<?php
	
	require 'conexion.php';
	
	$COD_PROPIO = $_POST['COD_PROPIO'];

	$NOMBRE=$_POST['NOMBRE']; $NIT=$_POST['NIT']; $DIRECCION=$_POST['DIRECCION']; $MUNICIPIO=$_POST['MUNICIPIO'];

	$MEDIDOR=$_POST['MEDIDOR']; $NUMERO=$_POST['NUMERO']; $CONSTANTE=$_POST['CONSTANTE']; $NIVEL=$_POST['NIVEL']; $TARIFA=$_POST['TARIFA']; $ESTRATO=$_POST['ESTRATO']; $CONTRIBUCION=$_POST['CONTRIBUCION']; $ORDEN_FAC=$_POST['ORDEN_FAC'];
	

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
	
	$sql = "UPDATE tbl_instalacion SET 

	NOMBRE='$NOMBRE', NIT='$NIT', DIRECCION='$DIRECCION', MUNICIPIO='$MUNICIPIO', MEDIDOR='$MEDIDOR', NUMERO='$NUMERO', CONSTANTE='$CONSTANTE', CONTRIBUCION='$CONTRIBUCION',ORDEN_FAC='$ORDEN_FAC',

	NIVEL='$NIVEL', TARIFA='$TARIFA', ESTRATO='$ESTRATO' WHERE COD_PROPIO = '$COD_PROPIO'";



	$resultado = $mysqli->query($sql);
	
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