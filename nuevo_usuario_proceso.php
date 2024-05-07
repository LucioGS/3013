<?php 

	session_start();
	if(!isset($_SESSION["perfil"])){header('Location: salir.php');}
	if($_SESSION["perfil"] != 1){header('Location: salir.php');}
	
	include "modelos/bbdd/usuario.php"; 
	include "modelos/bbdd/perfil.php";
	
	echo $_POST["nombre"];
	echo "</br>";
	echo $_POST["apellidos"];
	echo "</br>";
	echo $_POST["telefono"];
	echo "</br>";
	echo $_POST["email"];
	echo "</br>";
	echo $_POST["direccion"];
	echo "</br>";
	echo $_POST["localidad"];
	echo "</br>";
	echo $_POST["user"];
	echo "</br>";
	echo $_POST["password"];
	echo "</br>";
	echo $_POST["perfil"];
	echo "</br>";

?>

