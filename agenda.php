<?php


require 'conexion.php';

require 'config/validate_session.php';
require 'config/validate_roles.php';
//include 'session_paragraph.php';

//echo 1;


//$con=conexion();

echo 1;

      $user11 = $_POST['b'];


       
      if(!empty($user11)) {
            comprobar($user11);
      }
       
      function comprobar($b) {
            //$con = mysql_connect('localhost','root', 'root');
            //mysql_select_db('masajes', $con);

            $sql2="SELECT correo FROM usuario WHERE correo = '".$b."'";
       
            //$sql = mysql_query("SELECT * FROM usuarios WHERE correo = '".$b."'",$con);
             
            $contar = mysql_num_rows($sql2);
             
            if($contar == 0){
                  echo "<span style='font-weight:bold;color:green;'>Disponible.</span>";
            }else{
                  echo "<span style='font-weight:bold;color:red;'>El nombre de usuario ya existe.</span>";
            }
      }    
?>