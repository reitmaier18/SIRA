<?php 
	require '../Modelo/Clase/Usuario.php';
	$inda=$_POST['nac'];
	$indb=$_POST['ced'];
	$perfil=$_POST['perfil'];
	$usuario=new Usuario();
	$usuario->update_dato_perfil($inda,$indb,$perfil);
?>