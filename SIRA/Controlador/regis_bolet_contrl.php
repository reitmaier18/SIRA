<?php 
	require '../Modelo/Clase/Expediente.php';
	$exp=new Expediente();
	$exp->regis_boleta($_POST['fecha_boleta'], $_POST['numexpediente'], $_POST['numboleta'],$_POST['tboleta'], $_POST['nomnoti'], $_POST['apenoti'], $_POST['nac'], $_POST['cedula'], $_POST['direccion']);
?>