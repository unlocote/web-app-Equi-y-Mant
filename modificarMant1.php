<?php
	require 'conexion.php';
	
	$COD_PROPIO = $_GET['COD_PROPIO'];
	
	$sql = "SELECT * FROM tbl_valor_activa WHERE  COD_PROPIO= '$COD_PROPIO'";
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
				<h3 style="text-align:center">MODIFICAR REGISTRO VALOR</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="updateCodigosValor2.php" autocomplete="off">

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
					<label for="telefono" class="col-sm-2 control-label">COD_100</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="COD_100" name="COD_100" placeholder="COD_100" value="<?php echo $row['COD_100']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">DES_100</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="DES_100" name="DES_100" placeholder="DES_100" value="<?php echo $row['DES_100']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">COD_101</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="COD_101" name="COD_101" placeholder="COD_101" value="<?php echo $row['COD_101']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">DES_101</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="DES_101" name="DES_101" placeholder="DES_101" value="<?php echo $row['DES_101']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">COD_200</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="COD_200" name="COD_200" placeholder="COD_200" value="<?php echo $row['COD_200']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">DES_200</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="DES_200" name="DES_200" placeholder="DES_200" value="<?php echo $row['DES_200']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">COD_103</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="COD_103" name="COD_103" placeholder="COD_103" value="<?php echo $row['COD_103']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">DES_103</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="DES_103" name="DES_103" placeholder="DES_103" value="<?php echo $row['DES_103']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">COD_400</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="COD_400" name="COD_400" placeholder="COD_400" value="<?php echo $row['COD_400']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">DES_400</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="DES_400" name="DES_400" placeholder="DES_400" value="<?php echo $row['DES_400']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">COD_110</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="COD_110" name="COD_110" placeholder="COD_110" value="<?php echo $row['COD_110']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">DES_110</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="DES_110" name="DES_110" placeholder="DES_110" value="<?php echo $row['DES_110']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">COD_300</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="COD_300" name="COD_300" placeholder="COD_300" value="<?php echo $row['COD_300']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">DES_300</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="DES_300" name="DES_300" placeholder="DES_300" value="<?php echo $row['DES_300']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">COD_104</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="COD_104" name="COD_104" placeholder="COD_104" value="<?php echo $row['COD_104']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">DES_104</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="DES_104" name="DES_104" placeholder="DES_104" value="<?php echo $row['DES_104']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">COD_105</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="COD_105" name="COD_105" placeholder="COD_105" value="<?php echo $row['COD_105']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">DES_105</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="DES_105" name="DES_105" placeholder="DES_105" value="<?php echo $row['DES_105']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">COD_106</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="COD_106" name="COD_106" placeholder="COD_106" value="<?php echo $row['COD_106']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">DES_106</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="DES_106" name="DES_106" placeholder="DES_106" value="<?php echo $row['DES_106']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">COD_107</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="COD_107" name="COD_107" placeholder="COD_107" value="<?php echo $row['COD_107']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">DES_107</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="DES_107" name="DES_107" placeholder="DES_107" value="<?php echo $row['DES_107']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">COD_108</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="COD_108" name="COD_108" placeholder="COD_108" value="<?php echo $row['COD_108']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">DES_108</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="DES_108" name="DES_108" placeholder="DES_108" value="<?php echo $row['DES_108']; ?>" >
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