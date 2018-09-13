<?php 
	require '../Modelo/Clase/Oficio.php';
	$oficio = new Oficio();
	$oficio->regis_ofienv($_POST['fecha_ofi'], $_POST['n_ofi'], $_POST['institucion'], $_POST['asunto']);
?>