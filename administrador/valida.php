<?php
session_start();

$user = isset($_REQUEST['user'])?$_REQUEST['user']:'';
$pass = isset($_REQUEST['pass'])?$_REQUEST['pass']:'';

if ($user == "administrador@armachtextil.com" && $pass=="armach")
{
	$_SESSION["usuario"]= "admin";
	header("Location: misproductos.php");
}
else
{
	header("Location: index.php");
}


 ?>
