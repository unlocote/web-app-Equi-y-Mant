<?php
	require 'conexion.php';
	
	$COD_PROPIO = $_GET['COD_PROPIO'];
	
	$sql = "SELECT * FROM tbl_facturacion2 WHERE  COD_PROPIO= '$COD_PROPIO'";
	$resultado = $mysqli->query($sql);
	$row = $resultado->fetch_array(MYSQLI_ASSOC);
	
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
				<h3 style="text-align:center">MODIFICAR REGISTRO</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="updateReemFac.php" autocomplete="off">

				<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">FACTURA</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="NO_FACTURA" name="NO_FACTURA" placeholder="NO_FACTURA" value="<?php echo $row['NO_FACTURA']; ?>" required>
					</div>
				</div>

				<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">Nombre</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="NOMBRE" name="NOMBRE" placeholder="Nombre" value="<?php echo $row['NOMBRE']; ?>" required>
					</div>
				</div>
				
				<input type="hidden" id="COD_PROPIO" name="COD_PROPIO" value="<?php echo $row['COD_PROPIO']; ?>" />
				
				<div class="form-group">
					<label for="email" class="col-sm-2 control-label">CODIGO</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="COD_PROPIO" name="COD_PROPIO" placeholder="COD_PROPIO" value="<?php echo $row['COD_PROPIO']; ?>"  required>
					</div>
				</div>
				
				
				<!--	
				<div class="form-group">
					<label for="hijos" class="col-sm-2 control-label">¿Tiene Hijos?</label>
					
					<div class="col-sm-10">
						<label class="radio-inline">
							<input type="radio" id="hijos" name="hijos" value="1" <?php //if($row['hijos']=='1') echo 'checked'; ?>> SI
						</label>
						
						<label class="radio-inline">
							<input type="radio" id="hijos" name="hijos" value="0" <?php //if($row['hijos']=='0') echo 'checked'; ?>> NO
						</label>
					</div>
				</div>
				
				<div class="form-group">
					<label for="intereses" class="col-sm-2 control-label">INTERESES</label>
					
					<div class="col-sm-10">
						<label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Libros" <?php //if(strpos($row['intereses'], "Libros")!== false) echo 'checked'; ?>> Libros
						</label>
						
						<label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Musica" <?php //if(strpos($row['intereses'], "Musica")!== false) echo 'checked'; ?>> Musica
						</label>
						
						<label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Deportes" <?php //if(strpos($row['intereses'], "Deportes")!== false) echo 'checked'; ?>> Deportes
						</label>
						
						<label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Otros" <?php //if(strpos($row['intereses'], "Otros")!== false) echo 'checked'; ?>> Otros
						</label>
					</div>
				</div>-->
				
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="index.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-primary">Agregar A la Tabla de reemplazos</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>