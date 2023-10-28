<?php
	# conectare la base de datos
    $con=mysqli_connect('localhost','root','23032003','ascfac');
    if(!$con){
        die("imposible conectarse: ".mysqli_error($con));
    }
    if (@mysqli_connect_errno()) {
        die("Connect failed: ".mysqli_connect_errno()." : ". mysqli_connect_error());
    }
    
	
	$tbl_fecha = fopen ("TBL_FECHA_2.csv" , "r" );//leo el archivo que contiene los datos del producto
while (($datos =fgetcsv($tbl_fecha,1000,",")) !== FALSE )//Leo linea por linea del archivo hasta un maximo de 1000 caracteres por linea leida usando coma(,) como delimitador
{
 $linea[]=array('periodo'=>$datos[0],'ano'=>$datos[1],'fechaExp'=>$datos[2],'fechaVen'=>$datos[3],'fechaLim'=>$datos[4],'DIAS_FAC'=>$datos[5],'IPP'=>$datos[6]);//Arreglo Bidimensional para guardar los datos de cada linea leida del archivo
}
fclose ($tbl_fecha);//Cierra el archivo
 
	$ingresado=0;//Variable que almacenara los insert exitosos
	$error=0;//Variable que almacenara los errores en almacenamiento
	$duplicado=0;//Variable que almacenara los registros duplicados
    foreach($linea as $indice=>$value) //Iteracion el array para extraer cada uno de los valores almacenados en cada items
	{
	$periodo=$value["periodo"];//Codigo del producto
	$ano=$value["ano"];//descripcion del producto
	$fechaExp=$value["fechaExp"];//fabricante del producto
	$fechaVen=$value["fechaVen"];//precio del producto
	$fechaLim=$value["fechaLim"];//
	$DIAS_FAC=$value["DIAS_FAC"];//
	$IPP=$value["IPP"];//
	
	$sql=mysqli_query($con,"select * from tbl_fecha where periodo='$periodo'");//Consulta a la tabla tbl_fecha
	$num=mysqli_num_rows($sql);//Cuenta el numero de registros devueltos por la consulta
	if ($num==0)//Si es == 0 inserto
	{
	if ($insert=mysqli_query($con,"insert into tbl_fecha (periodo, ano, fechaExp, fechaVen, fechaLim, DIAS_FAC, IPP) values('$periodo','$ano','$fechaExp','$fechaVen','$fechaLim','$DIAS_FAC','$IPP')"))
	{
	echo $msj='<font color=green>Dato <b>'.$periodo.'</b> Guardado</font><br/>';
	$ingresado+=1;
	}//fin del if que comprueba que se guarden los datos
	else//sino ingresa el producto
	{
	echo $msj='<font color=red>Dato <b>'.$periodo.' </b> NO Guardado '.mysqli_error().'</font><br/>';
	$error+=1;
	}
	}//fin de if que comprueba que no haya en registro duplicado
	else
	{
	$duplicado+=1;
	echo $duplicate='<font color=red>El periodo <b>'.$periodo.'</b> Esta duplicado<br></font>';
	}
	}
	echo "<font color=green>".number_format($ingresado,2)." tbl_fecha Almacenados con exito<br/>";
	echo "<font color=red>".number_format($duplicado,2)." tbl_fecha Duplicados<br/>";
	echo "<font color=red>".number_format($error,2)." Errores de almacenamiento<br/>";
	?>