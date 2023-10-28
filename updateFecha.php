<?php
	
	require 'conexion.php';
	
	$id =$_POST['id'];
	$periodoFac = $_POST['periodoFac'];
	$ano = $_POST['ano'];
	$fechaExp = $_POST['fechaExp'];
	//$codigobarras = $_POST['codigobarras'];
	$fechaVen = $_POST['fechaVen'];
	$fechaLim = $_POST['fechaLim'];
	//$hijos = isset($_POST['hijos']) ? $_POST['hijos'] : 0;
	
	
	$sql = "UPDATE fechafac SET periodoFac='$periodoFac', ano='$ano', fechaExp='$fechaExp', fechaVen='$fechaVen', fechaLim='$fechaLim' WHERE id = '$id'";
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
					<?php } ?>
					
					<a href="fechaPeriodo.php" class="btn btn-primary">Regresar</a>
					
				</div>
			</div>
		</div>
	</body>
</html>