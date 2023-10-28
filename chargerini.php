<?php 

	//session_start();

	echo "Bienvenido: ";	
	//echo "Valor: ".$_SESSION['usuario11'];	
	/*$usuar=$_SESSION['usuario11'];
	echo $usuar;
	echo $_SESSION['nom3'];*/
	$archivo="japo";	

	//$fecha=$_SESSION[""];
	//$fecha='2019-06-23';
	//echo $fecha;
	//$fecha=$_POST['fecha'];
	//$nombre11 = ;

	require_once "conexion.php";
    //$conexion=conexion();

	//if (isset($_SESSION['user'])) {
	

?>
		
	<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>

	<?php require_once "scripts.php" ?>

	<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js">
	
//var2 = document.getElementsByTagName('#fecha').value;
//var22 = "holasss";

//document.write('var22').value;

//document.write(var22);
//document.getElementById("fecha").innerHTML = 5 + 6;
</script>

<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>

</head>


<body>
	
<form enctype="multipart/form-data"  method="POST" action="importarFeha.php">

<div align="left">Importar Archivo   </div>
<input type="file" name="archivo" id="archivo">


<input type="submit" id="archivo" name="import_data" class="" style="margin-left:20px; margin-top:20px;" value="cargar Archivo">


<p align="left" class="Estilo4">&nbsp;</p>
<p align="left" class="Estilo4">&nbsp;</p>
<p class="Estilo4">--------------------------------------------------------------------------------------------------------------------</p>
</form>


<form  method='post' action="" enctype="multipart/form-data" class="form ">
<div class="form-group">
Importar Archivo : <input type='file' name='sel_file' size='20' >
</div>
<div class="form-group">
<input name="Envio" type="hidden" id="Envio" value="1" />
<button type="submit"  name="Grabar" id="Enviar" value="Grabar"class="btn btn-lg btn-primary btn-block">CARGAR ARCHIVO</button>
</div>
</form>


<?php

mysqli_debug("d:t:o,/tmp/client.trace");


if(isset($_POST['Grabar']))
{
//Aquí es donde seleccionamos nuestro csv
$fname = $_FILES['sel_file']['name'];
echo "1. Cargando nombre del archivo: ".$fname.' <br>';
$chk_ext = explode(".",$fname);

if(strtolower(end($chk_ext)) == "csv")
{
//si es correcto, entonces damos permisos de lectura para subir
$filename = $_FILES['sel_file']['tmp_name'];
$nombre_final_archivo="cargado.csv";
if (move_uploaded_file($_FILES['sel_file']['tmp_name'],$nombre_final_archivo)){
//unlink('base.txt');
echo "Aviso: El archivo ha sido cargado correctamente.<br>";
// numero del error para mostrar el paso
$error_estado=2;
}else{
echo "Error: Ocurrió algún error al subir el fichero. No pudo guardarse. Intentelo de nuevo <br>";
}

echo '2. empezando cargue: '.$filename.' <br>';

$nombre_final_archivo = trim($nombre_final_archivo);

$sql2="SELECT * from datoshorariosaux1 where CODSIC='FRT02444'";

$sql1 = "LOAD DATA LOCAL INFILE 'E:\PAG ASC\CR2S070111.csv'
INTO TABLE pruebafinal.datoshorariosaux1
FIELDS TERMINATED BY ','
LINES TERMINATED BY '\r\n'";

//echo $sql1;

$db_host = 'localhost';
$db_user = 'unlocote';
$db_pass = '';
$database = 'pruebafinal';
$table = 'datoshorariosaux1';

$conexion3 = mysqli_connect($db_host, $db_user, $db_pass, $database);


$result=mysqli_query($conexion3,$sql2);
$row2 = mysqli_fetch_assoc($result);
echo $row2['HORA5'];

$result2=mysqli_query($conexion3,$sql1);
//echo $_SESSION['nom3'];
/*
//mysqli_query($conexion3,$sql1)or die(mysql_error());
if (mysqli_query($conexion3,$sql1)) {
	# code...echo
	echo "exito";
}
else { echo "no exito";} 

//$result2=mysqli_query($conexion3,$sql1);



}*/

if (!mysqli_connect($db_host, $db_user, $db_pass, $database))
die("No se pudo establecer conexión a la base de datos");
mysqli_query($conexion3,$sql1)or die("loco".mysqli_error());
echo '3. cargue completo <br>';
}
else
{
//si aparece esto es posible que el archivo no tenga el formato adecuado, inclusive cuando es cvs, revisarlo para //ver si esta separado por " , "
echo "Archivo invalido!";
}
}


/*

 if ($_FILES['archivo']["error"] > 0)
  {
  echo "Error: " . $_FILES['archivo']['error'] . "<br>";
  }
else
  {
  echo "Nombre: " . $_FILES['archivo']['name'] . "<br>";
  $archi=$_FILES['archivo']['name'];
  echo $archi."<br>"."<br>";
  echo "Tipo: " . $_FILES['archivo']['type'] . "<br>";
  echo "Tamaño: " . ($_FILES["archivo"]["size"] / 1024) . " kB<br>";
  echo "Carpeta temporal: " . $_FILES['archivo']['tmp_name'];
  	}
  */  
    //$loco = "<script>document.write(/var22).value</script> ";
    //echo "string".$loco;
    //$fecha= $_GET['fecha'];
    //$fecha='2019-06-23';

///////    if (isset($_POST['fecha'])) {
  //  $archivo = $_POST['archivo'];

   //echo $archivo. ': ' .filesize($archivo). ' bytes';
   
   //if($filesize < 1){ // el archivo está vacío 
   //$error .= "- Archivo vacío.<br>"; 
   // }elseif($filesize > $maxlimit){ // el archivo supera el máximo 
  // $error .= "- Este archivo supera el máximo tamaño permitido.<br>"; 
//}  
    


?>
	
	<!-- funciona
	<span class="btn btn-primary" id="graficarNuevo1"><a href="../graficas/index.php">Graficar</a></span>-->
<!--
	<span class="btn btn-primary" id="graficarNuevo1">Graficar</span>

	 CAJA DE FECHA
	<input type="date" id="fecha"name="fecha" step="1" min="2018-01-01" max="2021-12-31" value="<?php // echo date("Y-m-d");echo $fecha;?>">
	
	<form class="" action="inicio.php" method="_POST">
    <label style="display:block; overflow:hidden;">Fecha de Consumo</label>
    <input type="date" id="fecha" name="fecha" step="1" min="2018-01-01" max="2021-12-31" value="<?php// echo date("2018-01-01");?>"> 
    <input type="date" id="fecha" name="fecha" step="1" min="2018-01-01" max="2021-12-31" value="<?php //echo $fecha55 ?>">
    <input type="text" id="fecha55" name="fecha55"  value="<?php //echo $fecha55 ?>">
    <input type="submit" id="insertar" name="insertar" class="" style="margin-left:20px; margin-top:20px;" value="Insertar Registro">
    </form>  -->

	<span class="btn btn-primary" id="graficarNuevo1">Graficar</span>

  <!-- <?php 
    
    //$loco = "<script>document.write(/var22).value</script> ";
    //echo "string".$loco;
    //$fecha= $_GET['fecha'];
    //$fecha='2019-06-23';

///////    if (isset($_POST['fecha'])) {
    //$archivo = $_POST['fecha'];

    //$id = isset($_GET['fecha']);
    //$id = isset($_GET['fecha'])?$_GET['fecha']:'';

//}
     //$_SESSION['fecha11'] = $id;
    //$_SESSION['fecha11'] = date('Y-m-d',strtotime('fecha'));
    //$_SESSION['fecha11'] = $_GET['#fecha'];

	//$fecha = $_SESSION['fecha11'];

    //echo $fecha;
   // echo $id;

    ?>-->

<br><br><br>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="jumbotron">
					<a href="php/salir2.php" class="btn btn-info">Salir del sistema</a>
					<h2>Entraste con exito</h2>
				</div>
			</div>
		</div>
	</div>

<div id="loadpage">	
contenido
</div>







<script type="text/javascript">
	$(document).ready(function(){
		$('#graficarNuevo1').click(function(){

		//=$.getElementsByTagName('fecha');
		//$('').load('obtFecha.php');

		//$('#loadpage').load('../graficas/index.php')
		//.load('../graficas/lineal2.php');
		//.load('../graficas/barras2.php');
		//window.location="indexgra.php";
		
//<?php 	
//	$sql="load data infile 'E:\PAG ASC\CR2S0701.txt' INTO TABLE datoshorariosaux1 FIELDS TERMINATED BY ' '
//	  LINES TERMINATED BY '\r\n'  (CODSIC,PRIORES,HORANT,HORA1,HORA2,HORA3,HORA4,HORA5,HORA6,
//  HORA7,HORA8,HORA9,HORA10,HORA11,HORA12,HORA13,HORA14,HORA15,HORA16,
 // HORA17,HORA18,HORA19,HORA20,HORA21,HORA22,HORA23,HORA24)";


// ?>

	//	var1 = document.getElementsByTagName('#fecha').value;

		
			//alertify.alert("holassasasd");

			//.load('index.php');
			//header("location:../index.php");
		

		//$('#cargaLineal').load('../graficas/lineal2.php');
		//$('#cargaBarras').load('../graficas/barras2.php');

		
		});
	});


</script> 	


</body>
</html>

<?php 

//}else{

//	header("location:../charger.php");
//}

 ?>
 <!--
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#graficarNuevo1').click(function(){

			//header("location:../graficas/index.php");
			.load('index.php');


		//$('#cargaLineal').load('lineal.php');
		//$('#cargaBarras').load('barras.php');
		});
	});
</script> 	
 -->