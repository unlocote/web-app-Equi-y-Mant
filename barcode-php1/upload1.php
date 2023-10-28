<?php
//require_once('class/BCGFontFile.php');
//require_once('class/BCGColor.php');
//header('Content-Type: image/png');
require '../conexion.php';

$v1 = $_GET['variable'];
$code->parse($v1);

 $insert = $db->query("INSERT into personas (codigobarras) VALUES ('barras/'$v1'.jpg')");
        if($insert){
            echo "File uploaded successfully.";
        }else{
            echo "File upload failed, please try again.";
        }
?>