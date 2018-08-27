<?php 
	require '../Modelo/Clase/Usuario.php';
	$inda=$_POST['nac'];
	$indb=$_POST['ced'];
	$user=$_POST['nuser'];
	$usuario=new Usuario();
	$usuario->update_dato_usuario($inda,$indb,$user);
?>