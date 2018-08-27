<?php 
	require '../Modelo/Clase/Usuario.php';
	$inda=$_POST['nac'];
	$indb=$_POST['ced'];
	$nombre=$_POST['nombre'];
	$usuario=new Usuario();
	$usuario->update_dato_nombre($inda,$indb,$nombre);
?>