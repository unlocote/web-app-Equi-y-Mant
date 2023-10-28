<?php
	require 'conexion.php';
	
	$id = $_GET['id'];
	
	$sql = "SELECT * FROM fechafac WHERE id = '$id'";
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
			
			<form class="form-horizontal" method="POST" action="updateFecha.php" autocomplete="off">

				<input type="hidden" id="id" name="id" value="<?php echo $row['id']; ?>" />

				<div class="form-group">
					<label for="periodoFac" class="col-sm-2 control-label">Periodo Facturado</label>
					<div class="col-sm-2">

					<!--<input type="text" class="form-control" id="periodoFac" name="periodoFac" placeholder="Año" value="<?php //echo $row['periodoFac']; ?>"  required>-->	
						<input list="periodoFac"  name="periodoFac"  placeholder="<?php echo $row['periodoFac']; ?>"   required> <!--value="<?php// echo $row['periodoFac']; ?>"-->
						<datalist id="periodoFac">
							<option value="ENERO">ENERO</option>
							<option value="FEBRERO">FEBRERO</option>
							<option value="MARZO">MARZO</option>
							<option value="ABRIL">ABRIL</option>
							<option value="MAYO">MAYO</option>
							<option value="JUNIO">JUNIO</option>
							<option value="JULIO">JULIO</option>
							<option value="AGOSTO">AGOSTO</option>
							<option value="SEPTIEMBRE">SEPTIEMBRE</option>
							<option value="OCTUBRE">OCTUBRE</option>
							<option value="NOVIEMBRE">NOVIEMBRE</option>
							<option value="DICIEMBRE">DICIEMBRE</option>
						</datalist>
					</div>
				</div>
								
				
				<div class="form-group">
					<label for="ano" class="col-sm-2 control-label">Año</label>
					

					<div class="col-sm-2">
						<input list="ano"  name="ano"  placeholder="<?php echo $row['ano']; ?>" required>
						<datalist id="ano">
							<option value="2020">2020</option>
							<option value="2021">2021</option>
							<option value="2022">2022</option>
							<option value="2023">2023</option>
							<option value="2024">2024</option>
						</datalist>
						
						
						<!--<input type="int" class="form-control" id="ano" name="ano" placeholder="Año" value="<?php //echo 	$row['ano']; ?>"  required>-->
						
					</div>
				</div>
				
				<div class="form-group">
					<label for="fechaExp" class="col-sm-2 control-label">Fecha Expedicion</label>
					<div class="col-sm-2">
						<input type="date" class="form-control" id="fechaExp" name="fechaExp" placeholder="fechaExp" value="<?php echo $row['fechaExp']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="fechaVen" class="col-sm-2 control-label">Fecha Vencimiento</label>
					<div class="col-sm-2">
						<input type="date" class="form-control" id="fechaVen" name="fechaVen" placeholder="fechaVen" value="<?php echo $row['fechaVen']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="fechaLim" class="col-sm-2 control-label">Fecha Limite</label>
					<div class="col-sm-2">
						<input type="date" class="form-control" id="fechaLim" name="fechaLim" placeholder="fechaLim" value="<?php echo $row['fechaLim']; ?>" >
					</div>
				</div>
				
				
				
				
				
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="index.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>