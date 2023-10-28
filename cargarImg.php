<?php

$COD_SIC = $_POST['COD_SIC'];
$COD_ACT = $_POST['COD_ACT'];

//$COD_SIC2 = $_GET['COD_SIC'];






    //$sql = "SELECT * FROM medact_asc01 WHERE  COD_SIC2= '$COD_SIC2'";//ORDER BY No_Factura $where LIMIT 30
    //$resultado = $mysqli->query($sql);
    //$row = $resultado->fetch_array(MYSQLI_ASSOC); 

    //$sql = "SELECT * FROM medact_asc01 WHERE  COD_SIC= '$COD_SIC'";
      //  $resultado = $mysqli->query($sql);400
        //$row = $resultado->fetch_array(MYSQLI_ASSOC); 


//$sql = "SELECT * FROM tbl_facturacion2 $where LIMIT 3000";//ORDER BY No_Factura $where LIMIT 30
//  $resultado = $mysqli->query($sql);





if(isset($_POST["cargarImg"])){
    $revisar = getimagesize($_FILES["image"]["tmp_name"]);
    if($revisar !== false){
        $image = $_FILES['image']['tmp_name'];
        $imgContenido = addslashes(file_get_contents($image));
        
        //Credenciales Mysql
        $Host = 'localhost';
        $Username = 'root';
        $Password = '23032003';
        $dbName = 'aschv';
        
        //Crear conexion con la abse de datos
        $db = new mysqli($Host, $Username, $Password, $dbName);



        
        // Cerciorar la conexion
        if($db->connect_error){
            die("Connection failed: " . $db->connect_error);
        }
        
           

        
        //Insertar imagen en la base de datos
        $insertar = $db->query("INSERT into img_asc01 (COD_ACT, COD_SIC, IMAGES, CREACION) VALUES ('$COD_ACT','$COD_SIC','$imgContenido', now())");

        // COndicional para verificar la subida del fichero

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

        <?php   

        if($insertar){
            echo "Archivo Subido Correctamente.";

            //echo "<a href='modificarHv1.php=".$row['COD_SIC'];" class='btn btn-default'>Regresar</a>";

            //echo "<img width='500' height='500' alt='' src='data:image/jpeg; base64,".base64_encode($row4['IMAGES'])."'>";
            ?>

            <h3>Archivo Subido Correctamente</h3>    
              <!--    <a href="modificarHv1.php?COD_ACT=<?php  //echo $COD_ACT; ?>" data-toggle="modal" data-target="#confirm-delete"><span class="glyphicon glyphicon-trash"></span>regresa</a> -->

                  <a href="modificarHv1.php?COD_ACT=<?php  echo $COD_ACT; ?>" class="btn btn-primary">Regresar</a>
            <?php
                     

        }else{
            echo "Ha fallado la subida, reintente nuevamente.";
              ?>    
             <a href="modificarHv1.php?COD_ACT=<?php  echo $COD_ACT; ?>" class="btn btn-primary">Regresar</a>
            <?php
        } 
        // Sie el usuario no selecciona ninguna imagen
    }else{
        echo "Por favor seleccione imagen a subir.";
         ?>    
             <a href="modificarHv1.php?COD_ACT=<?php  echo $COD_ACT; ?>" class="btn btn-primary">Regresar</a>
            <?php
    }
}
?>

 
                </div>
            </div>
        </div>
</body>
</html>        

