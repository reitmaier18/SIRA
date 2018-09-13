<?php 
	require '../Modelo/Clase/Expediente.php';
	$exp=new Expediente();
	$exp->regis_apert_cierre($_POST['numexpediente'], $_POST['fecha_auto'], $_POST['tauto'], $_POST['resumenauto']);
?>