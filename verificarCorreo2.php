
<?php
//include('config.php');

//require 'conexion.php';

//require 'config/validate_session.php';
//require 'config/validate_roles.php';
//include 'session_paragraph.php';


$pass3 = $_POST["correo"];

echo 2;

//echo 2;



/*
//$pass3 = $_POST["correo"];
$correo2 = (string)$_POST["correo3"];
//$correo2 = "correo3";

echo $correo2;

echo "<br>",1; */
//var $correo;

//if (isset($_POST['correo'])) {
    //$correo = $_POST['correo'];
//};	


 // $correo = $_POST['correo'];
  //echo $correo;

 //$correo = $_POST["correo"];

 //echo $correo;

/*
$conexion=conexion();


	//echo 2;



    $correo = $_POST["correo"];
    $sql2="SELECT correo, id FROM usuario WHERE correo = '$correo'";

    //echo "1";
    /*
    $rs=$this->db->query($sql);
    if(rs->num_rows > 0){
      echo "1";
     }else{echo "0"; } 

     //$sql2="SELECT * from usuarios2 where usuario='$usuario' and password='$pass'";
		//$sql3="SELECT nombre from usuarios where usuario='$usuario' and password='$pass'";


		$result=mysqli_query($conexion,$sql2);
		$row2 = mysqli_fetch_assoc($result);


		if (mysqli_num_rows($result) > 0){
			//$_SESSION['user']=$usuario;
		//	$_SESSION['nom']=$usuario;
		//	$_SESSION['nom3']=$row2['nombre'];


			echo 1;
			
		}else{
			echo 0;
		} 

*/


/*


$correo    = $_REQUEST['correo'];

//Verificando si existe algun cliente en bd ya con dicha cedula asignada
//Preparamos un arreglo que es el que contendrá toda la información
$jsonData = array();
$selectQuery   = ("SELECT correo FROM usuario WHERE correo='".$correo."' ");
$query         = mysqli_query($con, $selectQuery);
$totalUsuario  = mysqli_num_rows($query);

  //Validamos que la consulta haya retornado información
  if( $totalUsuario <= 0 ){
    $jsonData['success'] = 0;
   // $jsonData['message'] = 'No existe Cédula ' .$cedula;
    $jsonData['message'] = '';
} else{
    //Si hay datos entonces retornas algo
    $jsonData['success'] = 1;
    $jsonData['message'] = '<p style="color:red;">El correo ya existe <strong>(' .$correo.')<strong></p>';
  }

//Mostrando mi respuesta en formato Json
header('Content-type: application/json; charset=utf-8');
echo json_encode( $jsonData ); */

?>