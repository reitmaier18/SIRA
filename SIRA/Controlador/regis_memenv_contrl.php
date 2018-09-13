<?php 
	require '../Modelo/Clase/Memo.php';
	$memo = new Memo();
	$memo->regis_memenv($_POST['fecha_mem'], $_POST['n_memo'], $_POST['dependencia'], $_POST['asunto']);
?>