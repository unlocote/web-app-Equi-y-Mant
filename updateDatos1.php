<?php 
	//include 'fpdf/fpdf.php';

	ini_set( 'memory_limit', '512M' );
	//include 'plantilla.php';
	

	require 'conexion.php';
	//require 'diag.php';
	header('Content-Type: text/html; charset=UTF-8');
	//iconv('UTF-8', 'windows-1252',html_entity_decode($pdf));
	
	//$data = 'barras';
	//require "Redondear.php";
	$where="";
	$ban=1;

	//$v1=$_SESSION['variable'];
	
	//$query = "SELECT factura, nombre, codigo, nit, direccion, municipio, fecha, lectant, lectact, valor, codigobarras FROM facturacion";
	//$query = "SELECT * FROM facturacion2 $where LIMIT 3000 ";
	$query = "SELECT * FROM tbl_instalacion where ORDEN<10";//94716
	//$query = "SELECT * FROM facturacion3 ";
	//$query4 = "SELECT * FROM facturacion3 where LIMIT 3000";
	$resultado5 = $mysqli->query($query);
	//$resultado4 = $mysqli->query($query4);
	
	//$resultado2 = $mysqli->query($query2);
	
	
	//--------------------------------------------

	while($row = $resultado5->fetch_assoc())
	{  
			$var1=$row['NOMBRE'];
			//$var2=$row['COD_PROPIO'];
			 		
			$sql = "INSERT into facturacion4(COD_PROPIO) SELECT cliente='$var1' where id>1"; //where No_Factura=92723"; //where No_Factura=92722";

			$resultado = $mysqli->query($sql);
			//mysqli_query($conexion,"INSERT INTO facturacion4(cliente) values ('.$row['periodoFac'].")";	

	}//ob_end_clean();

?>