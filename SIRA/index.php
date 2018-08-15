<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<link rel="icon" type="image/png" href="Vista/Imagenes/SIRA.png">
	<link rel="stylesheet" type="text/css" href="Vista/CSS/est_pricipal.css">
	<title>SIRA</title>
</head>
<body>
	<header>
		<img src="Vista/Imagenes/LOGOPAPELERIA.png">
		<h2>Sistema Interno de Registro de Actas</h1>		
	</header>
	<center>
		<div id="validacion">
			<div><h3>Validación</h2></div>			
			<br><p>Ingrese usuario y contraseña para acceder al sistema</p><br>
			<form method="post" action="Controlador/valid_contrl.php">
				<input type="text" name="usuario" placeholder="Usuario"><br><br>
				<input type="password" name="contraseña" placeholder="Contraseña"><br><br>
				<input type="submit" value="Aceptar">
				<input type="reset" value="Cancelar">
			</form>
		</div>
	</center>

</body>
</html>