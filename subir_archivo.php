<?php

require_once "php/conexion.php";

	$ruta = 'Upload/';														

	foreach ($_FILES as $key) {

		$nombre=$key["name"];
		$ruta_temporal=$key["tmp_name"];		
		
		$fecha=getdate();
		/*$nombre_v=$fecha["mday"]."-".$fecha["mon"]."-".$fecha["year"]."_".$fecha["hours"]."-".$fecha["minutes"]."-".$fecha["seconds"].".csv";	*/	
		$nombre_v="-".$fecha["mday"]."-".$fecha["mon"]."-".$fecha["year"].".csv";

		//$destino=$ruta.$nombre_v;
		$nombre1=$nombre.$nombre_v;
		$destino=$ruta.$nombre1;
		$explo=explode(".",$nombre);


		if($explo[1] != "CSV"){//CSV
			$alert=1;
			//print_r("Exitoso1");
		}else{

			if(move_uploaded_file($ruta_temporal, $destino)){
				$alert=2;
				//print_r("Exitoso2");
			}

		}

	}

	$x=0;
	$data=array();
	$fichero=fopen($destino, "r");

	while(($datos= fgetcsv($fichero,1000000)) != FALSE){

		$x++;
		if($x>0){

			//$data[]='('.$datos[0].',"'.$datos[1].'","'.$datos[2].'","'.$datos[3].'",'.$datos[4].')';

			//$data[]='("'.$datos[0].'","'.$datos[1].'","'.$datos[2].'","'.$datos[3].'","'.$datos[4].'","'.$datos[5].'")';


/*$data[]='("'.$datos[0].'","'.$datos[1].'","'.$datos[2].'",'.$datos[3].','.$datos[4].','.$datos[5].','.$datos[6].','.$datos[7].','.$datos[8].','.$datos[9].','.$datos[10].','.$datos[11].','.$datos[12].','.$datos[13].','.$datos[14].','.$datos[15].','.$datos[16].','.$datos[17].','.$datos[18].','.$datos[19].','.$datos[20].','.$datos[21].','.$datos[22].','.$datos[23].','.$datos[24].','.$datos[25].','.$datos[26].','.$datos[27].')';*/

$data[]='("'.$datos[0].'","'.$datos[1].'","'.$datos[2].'",'.$datos[3].','.$datos[4].','.$datos[5].','.$datos[6].','.$datos[7].','.$datos[8].','.$datos[9].','.$datos[10].','.$datos[11].','.$datos[12].','.$datos[13].','.$datos[14].','.$datos[15].','.$datos[16].','.$datos[17].','.$datos[18].','.$datos[19].','.$datos[20].','.$datos[21].','.$datos[22].','.$datos[23].','.$datos[24].','.$datos[25].','.$datos[26].','.$datos[27].','.$datos[28]=$datos[4]+$datos[5]+$datos[6]+$datos[7]+$datos[8]+$datos[9]+$datos[10]+$datos[11]+$datos[12]+$datos[13]+$datos[14]+$datos[15]+$datos[16]+$datos[17]+$datos[18]+$datos[19]+$datos[20]+$datos[21]+$datos[22]+$datos[23]+$datos[24]+$datos[25]+$datos[26]+$datos[27].')';

//,'.$datos[28]='20'.')';

		}

	}

	$inserta="insert ignore into datoshorarios values ". implode(",",$data);//insert ignore into importar4 values
	//$inserta="insert ignore into importar4 values ". implode(",",$data)."ON DUPLICATE KEY UPDATE  CODSIC = ".$data[0]."";	
	//, FECHA = values(FECHA)";

	$db_host = 'localhost';
    $db_user = 'ascing_ingenieria';
    $db_pass = 'ascingenieria2019';
    $database = 'ascing_pruebafinal';
    $table = 'datoshorarios';//importar4
    $conexion3 = mysqli_connect($db_host, $db_user, $db_pass, $database);
	
	
	$result=mysqli_query($conexion3,$inserta);

	fclose($fichero);
	
	print_r("<pre>");
		print_r($result);
	print_r("<pre>");
	


?>