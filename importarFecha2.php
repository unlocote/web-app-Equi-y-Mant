<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


<?php
//include_once("conexion.php");//include_once("../db_connect.php")

$con=mysqli_connect('localhost','root','23032003','ascfac');
    if(!$con){
        die("imposible conectarse: ".mysqli_error($con));
    }
    if (@mysqli_connect_errno()) {
        die("Connect failed: ".mysqli_connect_errno()." : ". mysqli_connect_error());
    }
    


if(isset($_POST['import_data'])){    
    // validate to check uploaded file is a valid csv file
    $file_mimes = array('text/x-comma-separated-values', 'text/comma-separated-values',
 'application/octet-stream', 'application/vnd.ms-excel', 
'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 
'application/vnd.msexcel', 'text/plain');
    if(!empty($_FILES['file']['name']) &&
 in_array($_FILES['file']['type'],$file_mimes)){
        if(is_uploaded_file($_FILES['file']['tmp_name'])){   
            $csv_file = fopen($_FILES['file']['tmp_name'], 'r');           
            //fgetcsv($csv_file);            
            // get data records from csv file
            //while(($emp_record = fgetcsv($csv_file)) !== FALSE){
                // Check if employee already exists with same email


while (($datos =fgetcsv($csv_file)) !== FALSE )//Leo linea por linea del archivo hasta un maximo de 1000 caracteres por linea leida usando coma(,) como delimitador
{
 $linea[]=array('periodo'=>$datos[0],'ano'=>$datos[1],'fechaExp'=>$datos[2],'fechaVen'=>$datos[3],'fechaLim'=>$datos[4],'DIAS_FAC'=>$datos[5],'IPP'=>$datos[6]);//Arreglo Bidimensional para guardar los datos de cada linea leida del archivo
}
    

            fclose($csv_file);

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




            $import_status = '?import_status=success';
        } else {
            $import_status = '?import_status=error';
        }
    } else {
        $import_status = '?import_status=invalid_file';
    }
}


//header("Location: indexFecha.php".$import_status);
?>

<div class="col-md-5">
<a href="indexFecha.php" class="btn btn-primary">VOLVER</a>
</div>