<?php
	require 'conexion.php';
	
	$COD_PROPIO = $_GET['COD_PROPIO'];
	
	$sql = "SELECT * FROM tbl_facturacion3 WHERE  COD_PROPIO= '$COD_PROPIO'";
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
			
			<form class="form-horizontal" method="POST" action="updateReemFac3.php" autocomplete="off">

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
					<label for="telefono" class="col-sm-2 control-label">PERIODO FAC</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="PERIODO_FAC" name="PERIODO_FAC" placeholder="PERIODO_FAC" value="<?php echo $row['PERIODO_FAC']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">IPP</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="IPP" name="IPP" placeholder="IPP" value="<?php echo $row['IPP']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">FECHA EXP</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="FECHA_EXP" name="FECHA_EXP" placeholder="FECHA_EXP" value="<?php echo $row['FECHA_EXP']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">FECHA VEN</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="FECHA_VEN" name="FECHA_VEN" placeholder="FECHA_VEN" value="<?php echo $row['FECHA_VEN']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">FECHA LIM</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="FECHA_LIM" name="FECHA_LIM" placeholder="FECHA_LIM" value="<?php echo $row['FECHA_LIM']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">NIVEL TENSION</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="NIVEL" name="NIVEL" placeholder="NIVEL" value="<?php echo $row['NIVEL']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">ESTRATO</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="ESTRATO" name="ESTRATO" placeholder="ESTRATO" value="<?php echo $row['ESTRATO']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">TARIFA</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="TARIFA" name="TARIFA" placeholder="TARIFA" value="<?php echo $row['TARIFA']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">G</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="G" name="G" placeholder="G" value="<?php echo $row['G']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">T</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="T" name="T" placeholder="T" value="<?php echo $row['T']; ?>" >
					</div>
				</div>


				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">D</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="D" name="D" placeholder="D" value="<?php echo $row['D']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">Cv</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Cv" name="Cv" placeholder="Cv" value="<?php echo $row['Cv']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">PR</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="PR" name="PR" placeholder="PR" value="<?php echo $row['PR']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">R</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="R" name="R" placeholder="R" value="<?php echo $row['R']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">Cuv</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Cuv" name="Cuv" placeholder="Cuv" value="<?php echo $row['Cuv']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">Cuf</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Cuf" name="Cuf" placeholder="Cuf" value="<?php echo $row['Cuf']; ?>" >
					</div>
				</div>




				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">CU</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="CU" name="CU" placeholder="CU" value="<?php echo $row['CU']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">DT1_DT3</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="DT1_DT3" name="DT1_DT3" placeholder="DT1_DT3" value="<?php echo $row['DT1_DT3']; ?>" >
					</div>
				</div>


				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">LECTURA ANTERIOR</label>
					<div class="col-sm-10">
						<input  class="form-control" id="LEC_ANT" name="LEC_ANT" placeholder="LEC_ANT" value="<?php echo $row['LEC_ANT']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">LECTURA ACTUAL</label>
					<div class="col-sm-10">
						<input  class="form-control" id="LEC_ACT" name="LEC_ACT" placeholder="LEC_ACT" value="<?php echo $row['LEC_ACT']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">MES1</label>
					<div class="col-sm-10">
						<input  class="form-control" id="MES1" name="MES1" placeholder="MES1" value="<?php echo $row['MES1']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">MES2</label>
					<div class="col-sm-10">
						<input  class="form-control" id="MES2" name="MES2" placeholder="MES2" value="<?php echo $row['MES2']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">MES3</label>
					<div class="col-sm-10">
						<input  class="form-control" id="MES3" name="MES3" placeholder="MES3" value="<?php echo $row['MES3']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">MES4</label>
					<div class="col-sm-10">
						<input  class="form-control" id="MES4" name="MES4" placeholder="MES4" value="<?php echo $row['MES4']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">MES5</label>
					<div class="col-sm-10">
						<input  class="form-control" id="MES5" name="MES5" placeholder="MES5" value="<?php echo $row['MES5']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">MES6</label>
					<div class="col-sm-10">
						<input  class="form-control" id="MES6" name="MES6" placeholder="MES6" value="<?php echo $row['MES6']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">PROM</label>
					<div class="col-sm-10">
						<input  class="form-control" id="PROM" name="PROM" placeholder="PROM" value="<?php echo $row['PROM']; ?>" >
					</div>
				</div>


				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">CONSUMO ACTIVA</label>
					<div class="col-sm-10">
						<input  class="form-control" id="KWHMON" name="KWHMON" placeholder="KWHMON" value="<?php echo $row['KWHMON']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">COD_100</label>
					<div class="col-sm-10">
						<input  class="form-control" id="COD_100" name="COD_100" placeholder="COD_100" value="<?php echo $row['COD_100']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">DES_100</label>
					<div class="col-sm-10">
						<input  class="form-control" id="DES_100" name="DES_100" placeholder="DES_100" value="<?php echo $row['DES_100']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">VLR ACTIVA</label>
					<div class="col-sm-10">
						<input  class="form-control" id="TOT_ACTIVA" name="TOT_ACTIVA" placeholder="TOT_ACTIVA" value="<?php echo $row['TOT_ACTIVA']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">CONSUMO REACTIVA</label>
					<div class="col-sm-10">
						<input  class="form-control" id="KVARHMON" name="KVARHMON" placeholder="KVARHMON" value="<?php echo $row['KVARHMON']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">COD_101</label>
					<div class="col-sm-10">
						<input  class="form-control" id="COD_101" name="COD_101" placeholder="COD_101" value="<?php echo $row['COD_101']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">DES_101</label>
					<div class="col-sm-10">
						<input  class="form-control" id="DES_101" name="DES_101" placeholder="DES_101" value="<?php echo $row['DES_101']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">VLR REACTIVA</label>
					<div class="col-sm-10">
						<input  class="form-control" id="TOT_REACTIVA" name="TOT_REACTIVA" placeholder="TOT_REACTIVA" value="<?php echo $row['TOT_REACTIVA']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">COD_200</label>
					<div class="col-sm-10">
						<input  class="form-control" id="COD_200" name="COD_200" placeholder="COD_200" value="<?php echo $row['COD_200']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">DES_200</label>
					<div class="col-sm-10">
						<input  class="form-control" id="DES_200" name="DES_200" placeholder="DES_200" value="<?php echo $row['DES_200']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">ALUMBRADO PUBLICO</label>
					<div class="col-sm-10">
						<input  class="form-control" id="TOTAL_ALUMBRADO_PUBLICO" name="TOTAL_ALUMBRADO_PUBLICO" placeholder="TOTAL_ALUMBRADO_PUBLICO" value="<?php echo $row['TOTAL_ALUMBRADO_PUBLICO']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">COD_102</label>
					<div class="col-sm-10">
						<input  class="form-control" id="COD_102" name="COD_102" placeholder="COD_102" value="<?php echo $row['COD_102']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">DES_102</label>
					<div class="col-sm-10">
						<input  class="form-control" id="DES_102" name="DES_102" placeholder="DES_102" value="<?php echo $row['DES_102']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">FACTURAS ANTERIORES</label>
					<div class="col-sm-10">
						<input  class="form-control" id="FACTURAS_ANTERIORES" name="FACTURAS_ANTERIORES" placeholder="FACTURAS_ANTERIORES" value="<?php echo $row['FACTURAS_ANTERIORES']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">COD_103</label>
					<div class="col-sm-10">
						<input  class="form-control" id="COD_103" name="COD_103" placeholder="COD_103" value="<?php echo $row['COD_103']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">DES_103</label>
					<div class="col-sm-10">
						<input  class="form-control" id="DES_103" name="DES_103" placeholder="DES_103" value="<?php echo $row['DES_103']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">INTERESES FACTURAS ANTERIORES</label>
					<div class="col-sm-10">
						<input  class="form-control" id="INTERESES_FAC_ANT" name="INTERESES_FAC_ANT" placeholder="INTERESES_FAC_ANT" value="<?php echo $row['INTERESES_FAC_ANT']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">COD_500</label>
					<div class="col-sm-10">
						<input  class="form-control" id="COD_500" name="COD_500" placeholder="COD_500" value="<?php echo $row['COD_500']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">DES_500</label>
					<div class="col-sm-10">
						<input  class="form-control" id="DES_500" name="DES_500" placeholder="DES_500" value="<?php echo $row['DES_500']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">SOBRETASA</label>
					<div class="col-sm-10">
						<input  class="form-control" id="TOTAL_SOBRETASA" name="TOTAL_SOBRETASA" placeholder="TOTAL_SOBRETASA" value="<?php echo $row['TOTAL_SOBRETASA']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">COD_400</label>
					<div class="col-sm-10">
						<input  class="form-control" id="COD_400" name="COD_400" placeholder="COD_400" value="<?php echo $row['COD_400']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">DES_400</label>
					<div class="col-sm-10">
						<input  class="form-control" id="DES_400" name="DES_400" placeholder="DES_400" value="<?php echo $row['DES_400']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">SUBSIDIO</label>
					<div class="col-sm-10">
						<input  class="form-control" id="TOTAL_SUBSIDIO" name="TOTAL_SUBSIDIO" placeholder="TOTAL_SUBSIDIO" value="<?php echo $row['TOTAL_SUBSIDIO']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">COD_110</label>
					<div class="col-sm-10">
						<input  class="form-control" id="COD_110" name="COD_110" placeholder="COD_110" value="<?php echo $row['COD_110']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">DES_110</label>
					<div class="col-sm-10">
						<input  class="form-control" id="DES_110" name="DES_110" placeholder="DES_110" value="<?php echo $row['DES_110']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">DES TARIFA UNICENTRO</label>
					<div class="col-sm-10">
						<input  class="form-control" id="TOTAL_DESCUENTO_TUNI" name="TOTAL_DESCUENTO_TUNI" placeholder="TOTAL_DESCUENTO_TUNI" value="<?php echo $row['TOTAL_DESCUENTO_TUNI']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">COD_300</label>
					<div class="col-sm-10">
						<input  class="form-control" id="COD_300" name="COD_300" placeholder="COD_300" value="<?php echo $row['COD_300']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">DES_300</label>
					<div class="col-sm-10">
						<input  class="form-control" id="DES_300" name="DES_300" placeholder="DES_300" value="<?php echo $row['DES_300']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">CONTRIBUCION</label>
					<div class="col-sm-10">
						<input  class="form-control" id="TOTAL_CONTRIBUCION" name="TOTAL_CONTRIBUCION" placeholder="TOTAL_CONTRIBUCION" value="<?php echo $row['TOTAL_CONTRIBUCION']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">COD_104</label>
					<div class="col-sm-10">
						<input  class="form-control" id="COD_104" name="COD_104" placeholder="COD_104" value="<?php echo $row['COD_104']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">DES_104</label>
					<div class="col-sm-10">
						<input  class="form-control" id="DES_104" name="DES_104" placeholder="DES_104" value="<?php echo $row['DES_104']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">ALQUILER EQUIPOS</label>
					<div class="col-sm-10">
						<input  class="form-control" id="TOT_ALQ_EQUI" name="TOT_ALQ_EQUI" placeholder="TOT_ALQ_EQUI" value="<?php echo $row['TOT_ALQ_EQUI']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">COD_105</label>
					<div class="col-sm-10">
						<input  class="form-control" id="COD_105" name="COD_105" placeholder="COD_105" value="<?php echo $row['COD_105']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">DES_105</label>
					<div class="col-sm-10">
						<input  class="form-control" id="DES_105" name="DES_105" placeholder="DES_105" value="<?php echo $row['DES_105']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">COMUNICACION</label>
					<div class="col-sm-10">
						<input  class="form-control" id="TOT_COMUN" name="TOT_COMUN" placeholder="TOT_COMUN" value="<?php echo $row['TOT_COMUN']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">COD_106</label>
					<div class="col-sm-10">
						<input  class="form-control" id="COD_106" name="COD_106" placeholder="COD_106" value="<?php echo $row['COD_106']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">DES_106</label>
					<div class="col-sm-10">
						<input  class="form-control" id="DES_106" name="DES_106" placeholder="DES_106" value="<?php echo $row['DES_106']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">TOTAL 106</label>
					<div class="col-sm-10">
						<input  class="form-control" id="TOTAL_106" name="TOTAL_106" placeholder="TOTAL_106" value="<?php echo $row['TOTAL_106']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">COD_107</label>
					<div class="col-sm-10">
						<input  class="form-control" id="COD_107" name="COD_107" placeholder="COD_107" value="<?php echo $row['COD_107']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">DES_107</label>
					<div class="col-sm-10">
						<input  class="form-control" id="DES_107" name="DES_107" placeholder="DES_107" value="<?php echo $row['DES_107']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">ACUERDOS DE PAGO</label>
					<div class="col-sm-10">
						<input  class="form-control" id="TOT_AC_PAGO" name="TOT_AC_PAGO" placeholder="TOT_AC_PAGO" value="<?php echo $row['TOT_AC_PAGO']; ?>" >
					</div>
				</div>


				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">COD_108</label>
					<div class="col-sm-10">
						<input  class="form-control" id="COD_108" name="COD_108" placeholder="COD_108" value="<?php echo $row['COD_108']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">DES_108</label>
					<div class="col-sm-10">
						<input  class="form-control" id="DES_108" name="DES_108" placeholder="DES_108" value="<?php echo $row['DES_108']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">OTROS DESCUENTOS 108</label>
					<div class="col-sm-10">
						<input  class="form-control" id="TOT_OTROS1" name="TOT_OTROS1" placeholder="TOT_OTROS1" value="<?php echo $row['TOT_OTROS1']; ?>" >
					</div>
				</div>



				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">TOTAL FACTURA</label>
					<div class="col-sm-10">
						<input  class="form-control" id="TOTAL_FAC" name="TOTAL_FAC" placeholder="TOTAL_FAC" value="<?php echo $row['TOTAL_FAC']; ?>" >
					</div>
				</div>


				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">DIAS FACTURADOS</label>
					<div class="col-sm-10">
						<input  class="form-control" id="DIAS_FAC" name="DIAS_FAC" placeholder="DIAS_FAC" value="<?php echo $row['DIAS_FAC']; ?>" >
					</div>
				</div>


				<div class="form-group">
					<label for="codigobarras" class="col-sm-2 control-label">codigobarras</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="COD_BAR" name="COD_BAR" placeholder="COD_BAR" value="<?php echo $row['COD_BAR']; ?>" >
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
						<a href="tbl_reemplazos.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>