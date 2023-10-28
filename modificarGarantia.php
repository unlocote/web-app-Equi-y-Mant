<?php
	require 'conexion.php';
	
	$COD_PROPIO = $_GET['COD_PROPIO'];
	
	$sql = "SELECT * FROM tbl_instalacion WHERE  COD_PROPIO= '$COD_PROPIO'";
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
			
			<form class="form-horizontal" method="POST" action="updateInstalacion.php" autocomplete="off">

				<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">COD_PROPIO</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="COD_PROPIO" name="COD_PROPIO" placeholder="COD_PROPIO" value="<?php echo $row['COD_PROPIO']; ?>" required>
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
					<label for="telefono" class="col-sm-2 control-label">NIT</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="NIT" name="NIT" placeholder="NIT" value="<?php echo $row['NIT']; ?>" >
					</div>
				</div>
				
				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">DIRECCION</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="DIRECCION" name="DIRECCION" placeholder="DIRECCION" value="<?php echo $row['DIRECCION']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">MUNICIPIO</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="MUNICIPIO" name="MUNICIPIO" placeholder="MUNICIPIO" value="<?php echo $row['MUNICIPIO']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">MEDIDOR</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="MEDIDOR" name="MEDIDOR" placeholder="MEDIDOR" value="<?php echo $row['MEDIDOR']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">NUMERO</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="NUMERO" name="NUMERO" placeholder="NUMERO" value="<?php echo $row['NUMERO']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">CONSTANTE</label>
					<div class="col-sm-10">
						<input type="int" class="form-control" id="CONSTANTE" name="CONSTANTE" placeholder="CONSTANTE" value="<?php echo $row['CONSTANTE']; ?>" >
					</div>
				</div>

				
				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">NIVEL TENSION</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="NIVEL" name="NIVEL" placeholder="NIVEL" value="<?php echo $row['NIVEL']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">TARIFA</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="TARIFA" name="TARIFA" placeholder="TARIFA" value="<?php echo $row['TARIFA']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">ESTRATO</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="ESTRATO" name="ESTRATO" placeholder="ESTRATO" value="<?php echo $row['ESTRATO']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">CONTRIBUCION</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="CONTRIBUCION" name="CONTRIBUCION" placeholder="CONTRIBUCION" value="<?php echo $row['CONTRIBUCION']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">ORDEN_FAC</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="ORDEN_FAC" name="ORDEN_FAC" placeholder="ORDEN_FAC" value="<?php echo $row['ORDEN_FAC']; ?>" >
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
						<a href="index5.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>