<?php 
	require '../Modelo/Clase/Usuario.php';
	$inda=$_POST['nac'];
	$indb=$_POST['ced'];
	$apellido=$_POST['apellido'];
	$usuario=new Usuario();
	$usuario->update_dato_apellido($inda,$indb,$apellido);
?>