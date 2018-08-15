<?php
	require '../Modelo/Clase/Usuario.php';
	
	$user = $_POST['usuario'];
	$contr = $_POST['contraseña'];
	$usuario = new Usuario();
	$usuario->valid($user,$contr);
	
		
	
	
	
?>