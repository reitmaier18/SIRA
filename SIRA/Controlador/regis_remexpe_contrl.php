<?php 
	require '../Modelo/Clase/Expediente.php';
	$exp=new Expediente();
	$exp->regis_remexp($_POST['numexpediente'], $_POST['fecha_auto'], $_POST['resumenRemision']);
?>