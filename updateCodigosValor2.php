<?php
	
	require 'conexion.php';
	
	$COD_PROPIO = $_POST['COD_PROPIO'];

	$NOMBRE=$_POST['NOMBRE'];  $TARIFA=$_POST['TARIFA']; $ESTRATO=$_POST['ESTRATO']; $CONTRIBUCION=$_POST['CONTRIBUCION']; 
	$COD_100=$_POST['COD_100']; $DES_100=$_POST['DES_100'];
	$COD_101=$_POST['COD_101']; $DES_101=$_POST['DES_101'];
	$COD_200=$_POST['COD_200']; $DES_200=$_POST['DES_200'];
	//$COD_102=$_POST['COD_102']; $DES_102=$_POST['DES_102'];
	$COD_103=$_POST['COD_103']; $DES_103=$_POST['DES_103'];
	$COD_400=$_POST['COD_400']; $DES_400=$_POST['DES_400'];
	$COD_110=$_POST['COD_110']; $DES_110=$_POST['DES_110'];
	$COD_300=$_POST['COD_300']; $DES_300=$_POST['DES_300'];
	$COD_104=$_POST['COD_104']; $DES_104=$_POST['DES_104'];
	$COD_105=$_POST['COD_105']; $DES_105=$_POST['DES_105'];
	$COD_106=$_POST['COD_106']; $DES_106=$_POST['DES_106'];
	$COD_107=$_POST['COD_107']; $DES_107=$_POST['DES_107'];
	$COD_108=$_POST['COD_108']; $DES_108=$_POST['DES_108'];
	

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
	
	$sql = "UPDATE tbl_valor_activa SET 

	NOMBRE='$NOMBRE',  CONTRIBUCION='$CONTRIBUCION',

	TARIFA='$TARIFA', ESTRATO='$ESTRATO',
	COD_100='$COD_100', DES_100='$DES_100',
	COD_101='$COD_101', DES_101='$DES_101',
	COD_200='$COD_200', DES_200='$DES_200',
	COD_103='$COD_103', DES_103='$DES_103',
	COD_400='$COD_400', DES_400='$DES_400',
	COD_110='$COD_110', DES_110='$DES_110', 
	COD_300='$COD_300', DES_300='$DES_300',
	COD_104='$COD_104', DES_104='$DES_104',
	COD_105='$COD_105', DES_105='$DES_105',
	COD_106='$COD_106', DES_106='$DES_106',
	COD_107='$COD_107', DES_107='$DES_107',
	COD_108='$COD_108', DES_108='$DES_108'	 WHERE COD_PROPIO = '$COD_PROPIO'";




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
					
					<a href="updateCodigosValor.php" class="btn btn-primary">Tabla Valor Activa</a>
					
				</div>
			</div>
		</div>
	</body>
</html>