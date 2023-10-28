<?php

//$mysqli = new mysqli('localhost','unlocote','','personal');


$mysqli = new mysqli('localhost','root','23032003','pinv3');




$con=mysqli_connect('localhost','root','23032003','pinv3');
    if(!$con){
        die("imposible conectarse: ".mysqli_error($con));
    }
    if (@mysqli_connect_errno()) {
        die("Connect failed: ".mysqli_connect_errno()." : ". mysqli_connect_error());
    }





?>