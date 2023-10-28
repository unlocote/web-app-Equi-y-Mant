<?php
//require 'login.php';

//session_start();
//echo $_SESSION["user"];
$roles_permitidos = ['Administrador','Usuario'];

//if (!isset($_SESSION["user"])) {
if (!array_key_exists('rol', $_SESSION) || !in_array($_SESSION['rol'], $roles_permitidos)) {
	header("Location: index.php");
}

?>