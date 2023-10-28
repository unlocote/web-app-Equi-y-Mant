<?php
	
	require 'conexion.php';
 
	$ID = $_GET['ID'];
	$COD_ACT = $_GET['COD_ACT'];
	$COD_SIC = $_GET['COD_SIC'];
	
	$sql = "DELETE FROM img_asc01 WHERE ID = '$ID'";
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
				<h3>REGISTRO ELIMINADO</h3>
				<?php } else { ?>
				<h3>ERROR AL ELIMINAR</h3>
				<?php } ?>
				
				<a href="modificarHv1.php?COD_ACT=<?php  echo $COD_ACT; ?>" class="btn btn-primary">Regresar</a>


				
				</div>
			</div>
		</div>
	</body>
</html>