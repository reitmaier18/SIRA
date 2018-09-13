<?php 
	require '../Modelo/Clase/Usuario.php';	 
	$usuario=new Usuario();
	$usuario->create($_POST['nom_user'], $_POST['ape_user'], $_POST['nac'], $_POST['cedula'], $_POST['perfil'], $_POST['usuario'], $_POST['contraseña']);
?>