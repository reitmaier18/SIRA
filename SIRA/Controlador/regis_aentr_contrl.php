<?php 
	require '../Modelo/Clase/Expediente.php';
	$exp=new Expediente();
	$exp->regis_aent($_POST['fecha_entrada'], $_POST['numexpediente'], $_POST['nomacu'], $_POST['apeacu']);
?>