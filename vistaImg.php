<?php

$ID = $_GET['ID'];

if(!empty($_GET['COD_SIC'])){
    //Credenciales de conexion
    $Host = 'localhost';
    $Username = 'root';
    $Password = '23032003';
    $dbName = 'aschv';
    
    //Crear conexion mysql
    $db = new mysqli($Host, $Username, $Password, $dbName);
    
    //revisar conexion
    if($db->connect_error){
       die("Connection failed: " . $db->connect_error);
    }

    //$resultado = $mysqli->query($sql);
    
    //Extraer imagen de la BD mediante GET
    //$result = $db->query("SELECT IMAGES FROM img_asc01 WHERE COD_SIC= {$_GET['COD_SIC']} and ID= {$_GET['ID']} ");
    //$result = $db->query("SELECT IMAGES FROM img_asc01 WHERE COD_SIC= {$_GET['COD_SIC']} ");
    $result = $db->query("SELECT IMAGES FROM img_asc01 ");



    /*$result = $db->query("SELECT IMAGES FROM img_asc01 ");

    foreach ($result as $im2 ) {
        # code...
            header("Content-type: image/jpg");
            echo $im2; 

    while($row = $result->fetch_array(MYSQLI_ASSOC)){


            header("Content-type: image/jpg");        
            echo $row['im2'];

        }

    //}
    /*
    $row5 = $result->fetch_array(MYSQLI_ASSOC))

       foreach($row5 as $v){
                            header("Content-type: image/jpg"); 

                            echo $v ;
                        }  */   
    
    //if($result->num_rows > 0){
       /*                 

       while($row4 = $result->fetch_array(MYSQLI_ASSOC)) { 
        //$imgDatos = $result->fetch_assoc();

        //$imgDatos = $mysqli->query($result);

        //$seed = md5( microtime() );
        //echo <image src='vistaImg.php?COD_SIC=COD_SIC' . $seed . >;
        
        //Mostrar Imagen
        header("Content-type: image/jpg"); 


        echo $row4['IMAGES']; 
        //echo $imgDatos['COD_SIC']; 


    } */
    
    if($result->num_rows > 0){
        $imgDatos = $result->fetch_assoc();



         header("Content-type: image/jpg"); 


        echo $imgDatos['IMAGES'];
        $imgDatos->writeImages();

    }


     else{
        echo 'Imagen no existe...';
    }
    

/*
     while($imgDatos=mysql_fetch_array($result)){
            echo $imgDatos["IMAGES"];
}*/

}
?>