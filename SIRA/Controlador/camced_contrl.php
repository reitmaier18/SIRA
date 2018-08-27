<?php 
	require '../Modelo/Clase/Usuario.php';
	$inda=$_POST['naci'];
	$indb=$_POST['cedi'];
	$nac=$_POST['nac'];
	$cedula=$_POST['cedula'];
	$usuario=new Usuario();
	$usuario->update_dato_cedula($inda,$indb,$nac,$cedula);
?>