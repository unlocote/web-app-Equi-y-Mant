<?php
//require 'login.php';

session_start();
//echo $_SESSION["user"];
if (!isset($_SESSION["user"])) {
	header("Location: index.php");
}

?>