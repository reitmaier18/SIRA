<?php 
	require '../Modelo/Clase/Usuario.php';
	$inda=$_POST['nac'];
	$indb=$_POST['cedula'];
	$perfil='';
	$usuario=new Usuario();
	$usuario->update_dato_perfil($inda,$indb,$perfil);
?>