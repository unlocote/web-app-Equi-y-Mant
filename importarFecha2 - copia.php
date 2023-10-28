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
            while(($emp_record = fgetcsv($csv_file)) !== FALSE){
                // Check if employee already exists with same email
                $sql_query = "SELECT id, periodo, ano, fechaExp, fechaVen, fechaLim, DIAS_FAC, IPP, periodoFac FROM tbl_fecha
 WHERE periodo = '".$emp_record[1]."'";
                $resultset = mysqli_query($con, $sql_query) or
 die("database error:". mysqli_error($con));
				// if employee already exist then update details otherwise insert new record
                if(mysqli_num_rows($resultset)) {                     
					$sql_update = 
"UPDATE tbl_fecha set periodo = '".$emp_record[1]."', ano = '.$emp_record[2].', fechaExp='".$emp_record[3]."', fechaVen='".$emp_record[4]."', fechaLim='".$emp_record[5]."', DIAS_FAC='".$emp_record[6]."', IPP='".$emp_record[7]."' WHERE periodo = '".$emp_record[1]."'";
                    mysqli_query($con, $sql_update) or 
die("database error:". mysqli_error($con));
                } else{
					$mysql_insert = "INSERT INTO tbl_fecha (periodo, ano, fechaExp, fechaVen, fechaLim, DIAS_FAC, IPP )VALUES('".$emp_record[0]."', '".$emp_record[1]."', '".$emp_record[2]."', '".$emp_record[3]."', '".$emp_record[4]."', '".$emp_record[5]."', '".$emp_record[6]."')";
					mysqli_query($con, $mysql_insert) or 
die("database error:". mysqli_error($con));
                }
            }            
            fclose($csv_file);
            $import_status = '?import_status=success';
        } else {
            $import_status = '?import_status=error';
        }
    } else {
        $import_status = '?import_status=invalid_file';
    }
}
header("Location: indexFecha.php".$import_status);
?>