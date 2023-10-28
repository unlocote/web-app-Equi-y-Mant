<?php
	
	require 'conexion.php';
	
	$COD_PROPIO = $_POST['COD_PROPIO'];

	$NO_FACTURA=$_POST['NO_FACTURA']; $NOMBRE=$_POST['NOMBRE']; $NIT=$_POST['NIT']; $DIRECCION=$_POST['DIRECCION']; $MUNICIPIO=$_POST['MUNICIPIO'];

	$MEDIDOR=$_POST['MEDIDOR']; $NUMERO=$_POST['NUMERO']; $CONSTANTE=$_POST['CONSTANTE']; $PERIODO_FAC=$_POST['PERIODO_FAC']; $IPP=$_POST['IPP']; $FECHA_EXP=$_POST['FECHA_EXP'];

	$FECHA_VEN=$_POST['FECHA_VEN']; $FECHA_LIM=$_POST['FECHA_LIM']; $NIVEL=$_POST['NIVEL']; $ESTRATO=$_POST['ESTRATO']; $TARIFA=$_POST['TARIFA']; $G=$_POST['G']; $T=$_POST['T']; $D=$_POST['D'];

	$Cv=$_POST['Cv']; $PR=$_POST['PR'];	$R=$_POST['R']; $Cuv=$_POST['Cuv']; $Cuf=$_POST['Cuf']; $CU=$_POST['CU']; $DT1_DT3=$_POST['DT1_DT3']; $LEC_ANT=$_POST['LEC_ANT']; $LEC_ACT=$_POST['LEC_ACT']; $MES1=$_POST['MES1']; $MES2=$_POST['MES2'];$MES3=$_POST['MES3'];$MES4=$_POST['MES4'];$MES5=$_POST['MES5'];$MES6=$_POST['MES6'];$PROM=$_POST['PROM']; $KWHMON=$_POST['KWHMON'];

	$COD_100=$_POST['COD_100'];

	$DES_100=$_POST['DES_100'];	$TOT_ACTIVA=$_POST['TOT_ACTIVA']; $KVARHMON=$_POST['KVARHMON'];	$COD_101=$_POST['COD_101']; $DES_101=$_POST['DES_101']; 

	$TOT_REACTIVA=$_POST['TOT_REACTIVA']; $COD_200=$_POST['COD_200']; $DES_200=$_POST['DES_200']; $TOTAL_ALUMBRADO_PUBLICO=$_POST['TOTAL_ALUMBRADO_PUBLICO'];

	$COD_102=$_POST['COD_102']; $DES_102=$_POST['DES_102']; $FACTURAS_ANTERIORES=$_POST['FACTURAS_ANTERIORES']; $COD_103=$_POST['COD_103']; $DES_103=$_POST['DES_103'];

	$INTERESES_FAC_ANT=$_POST['INTERESES_FAC_ANT'];	$COD_500=$_POST['COD_500']; $DES_500=$_POST['DES_500']; $TOTAL_SOBRETASA=$_POST['TOTAL_SOBRETASA']; 

	$COD_400=$_POST['COD_400']; $DES_400=$_POST['DES_400']; $TOTAL_SUBSIDIO=$_POST['TOTAL_SUBSIDIO']; $COD_110=$_POST['COD_110']; $DES_110=$_POST['DES_110']; 

	$TOTAL_DESCUENTO_TUNI=$_POST['TOTAL_DESCUENTO_TUNI']; $COD_300=$_POST['COD_300']; $DES_300=$_POST['DES_300']; $TOTAL_CONTRIBUCION=$_POST['TOTAL_CONTRIBUCION']; 

	$COD_104=$_POST['COD_104'];	$DES_104=$_POST['DES_104']; $TOT_ALQ_EQUI=$_POST['TOT_ALQ_EQUI']; $COD_105=$_POST['COD_105']; $DES_105=$_POST['DES_105'];

	$TOT_COMUN=$_POST['TOT_COMUN']; $COD_106=$_POST['COD_106']; $DES_106=$_POST['DES_106']; $TOTAL_106=$_POST['TOTAL_106']; $COD_107=$_POST['COD_107'];

	$DES_107=$_POST['DES_107']; $TOT_AC_PAGO=$_POST['TOT_AC_PAGO']; $COD_108=$_POST['COD_108']; $DES_108=$_POST['DES_108']; $TOT_OTROS1=$_POST['TOT_OTROS1'];

	$TOTAL_FAC=$_POST['TOTAL_FAC']; $DIAS_FAC=$_POST['DIAS_FAC']; $COD_BAR=$_POST['COD_BAR'];



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
	
	$sql = "UPDATE tbl_facturacion3 SET 

	NO_FACTURA='$NO_FACTURA', NOMBRE='$NOMBRE', NIT='$NIT', DIRECCION='$DIRECCION', MUNICIPIO='$MUNICIPIO', MEDIDOR='$MEDIDOR', NUMERO='$NUMERO', CONSTANTE='$CONSTANTE',

	PERIODO_FAC='$PERIODO_FAC', IPP='$IPP',FECHA_EXP='$FECHA_EXP', FECHA_VEN='$FECHA_VEN', FECHA_LIM='$FECHA_LIM', NIVEL='$NIVEL', ESTRATO='$ESTRATO', TARIFA='$TARIFA',G='$G', T='$T', D='$D', Cv='$Cv', PR='$PR', R='$R', Cuv='$Cuv', Cuf='$Cuf',

	CU='$CU', DT1_DT3='$DT1_DT3', LEC_ANT='$LEC_ANT', LEC_ACT='$LEC_ACT', MES1='$MES1', MES2='$MES2', MES3='$MES3', MES4='$MES4', MES5='$MES5', MES6='$MES6', PROM='$PROM',KWHMON='$KWHMON', COD_100='$COD_100', DES_100='$DES_100', TOT_ACTIVA=('$KWHMON'*'$CU'),

	KVARHMON='$KVARHMON',

	COD_101='$COD_101', DES_101='$DES_101', TOT_REACTIVA=('$KVARHMON'*'$D'), COD_200='$COD_200', DES_200='$DES_200', TOTAL_ALUMBRADO_PUBLICO='$TOTAL_ALUMBRADO_PUBLICO',

	COD_102='$COD_102', DES_102='$DES_102', FACTURAS_ANTERIORES='$FACTURAS_ANTERIORES', COD_103='$COD_103', DES_103='$DES_103', INTERESES_FAC_ANT='$INTERESES_FAC_ANT',

	COD_500='$COD_500', DES_500='$DES_500', TOTAL_SOBRETASA='$TOTAL_SOBRETASA', COD_400='$COD_400', DES_400='$DES_400', TOTAL_SUBSIDIO='$TOTAL_SUBSIDIO',
	/*TOTAL_SOBRETASA= IF('$COD_500'='500','$KWHMON'*4,0)*/

	COD_110='$COD_110',

	DES_110='$DES_110', TOTAL_DESCUENTO_TUNI=IF('$COD_110'='110','$KWHMON'*'$DT1_DT3',0), COD_300='$COD_300', DES_300='$DES_300',

	TOTAL_CONTRIBUCION=IF('$COD_300'='300',(TOT_ACTIVA+TOT_REACTIVA)*0.2,0), COD_104='$COD_104',

	DES_104='$DES_104', TOT_ALQ_EQUI='$TOT_ALQ_EQUI', COD_105='$COD_105', DES_105='$DES_105', TOT_COMUN='$TOT_COMUN', COD_106='$COD_106', DES_106='$DES_106',

	TOTAL_106='$TOTAL_106', COD_107='$COD_107', DES_107='$DES_107', TOT_AC_PAGO='$TOT_AC_PAGO', COD_108='$COD_108', DES_108='$DES_108', TOT_OTROS1='$TOT_OTROS1',

	TOTAL_FAC=IFNULL(TOT_ACTIVA,0)+IFNULL(TOT_REACTIVA,0)+IFNULL(TOTAL_ALUMBRADO_PUBLICO,0)+IFNULL(FACTURAS_ANTERIORES,0)+IFNULL(INTERESES_FAC_ANT,0)+IFNULL(TOTAL_SOBRETASA,0)+IFNULL(TOTAL_CONTRIBUCION,0)+IFNULL(TOT_ALQ_EQUI,0)+IFNULL(TOT_COMUN,0)+IFNULL(TOTAL_106,0)+IFNULL(TOT_AC_PAGO,0)-IFNULL(TOT_OTROS1,0)-IFNULL(TOTAL_SUBSIDIO,0)-IFNULL(TOTAL_DESCUENTO_TUNI,0),

	DIAS_FAC='$DIAS_FAC',

	COD_BAR=concat('41577099987267898020',lpad(NO_FACTURA,10,'0'),'~F13900',lpad(TOTAL_FAC,10,'0'),'~F196',date_format(FECHA_VEN,'%Y%m%d')) 

	WHERE COD_PROPIO = '$COD_PROPIO'";



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
					
					<a href="tbl_reemplazos.php" class="btn btn-primary">Tabla reemplazos</a>
					
				</div>
			</div>
		</div>
	</body>
</html>