<?php 
	require '../Modelo/Clase/Oficio.php';
	$oficio = new Oficio();
	$oficio->regis_ofirec($_POST['fecha_ofi'], $_POST['n_ofi'], $_POST['institucion'], $_POST['asunto']);
?>