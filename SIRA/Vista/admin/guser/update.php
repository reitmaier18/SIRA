<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<link rel="icon" type="image/png" href="../../Imagenes/SIRA.png">
	<link rel="stylesheet" type="text/css" href="../../CSS/est_guser.css">
	<script src="../../js/guser.js"></script>
	<title>SIRA</title>
</head>
<body>
	<div id="modal_mod_user">
		<input type="radio" id="cerrar_updateuser" name="modal_mod_user"><label  onclick="cerrar_guser();" for="cerrar_updateuser">x</label>
		<div>

			<h2>Modificar usuario </h2>
			<center>
				<?php 
				require '../../../Modelo/Clase/Usuario.php';						
				$nac=$_POST['nac'];
				$ced=$_POST['cedula'];
				$usuario = new Usuario();
				$usuario->update($nac,$ced);
				?>				
			</center>
		</div>
	</div>
	<div id="modal_mod_nuser">
		<input type="radio" id="cerrar_mod_nuser"><label  onclick="cerrar_mod_nuser();" for="cerrar_mod_nuser">x</label>
		<div>
			<h2>Modificar nombre del funcionario</h2>
			<center>
				<form method="post" action="../../../Controlador/camnom_contrl.php">
					<?php
						echo "<input type='text' name='nac' id='indicator' value='$nac'>";
						echo "<input type='text' name='ced' id='indicator' value='$ced'>";				 
					?>
					<p>Ingresa el nombre a cambiar</p><br>
					<input type="text" name="nombre" placeholder="Nombre del funcionario"><br><br><br>
					<input type="submit" value="Cambiar">
				</form>
			</center>
		</div>
	</div>
	<div id="modal_mod_auser">
		<input type="radio" id="cerrar_mod_auser"><label  onclick="cerrar_mod_auser();" for="cerrar_mod_auser">x</label>
		<div>
			<h2>Modificar apellido del funcionario</h2>
			<center>
				<form method="post" action="../../../Controlador/camape_contrl.php">
					<?php
						echo "<input type='text' name='nac' id='indicator' value='$nac'>";
						echo "<input type='text' name='ced' id='indicator' value='$ced'>";				 
					?>
					<p>Ingresa el apellido a cambiar</p><br>
					<input type="text" name="apellido" placeholder="Apellido del funcionario"><br><br><br>
					<input type="submit" value="Cambiar">
				</form>
			</center>
		</div>
	</div>
	<div id="modal_mod_cuser">
		<input type="radio" id="cerrar_mod_cuser"><label  onclick="cerrar_mod_cuser();" for="cerrar_mod_cuser">x</label>
		<div>
			<h2>Modificar cedula del funcionario</h2>
			<center>
				<form method="post" action="../../../Controlador/camced_contrl.php">
					<?php
						echo "<input type='text' name='naci' id='indicator' value='$nac'>";
						echo "<input type='text' name='cedi' id='indicator' value='$ced'>";				 
					?>
					<p>Ingresa la cedula a cambiar</p><br>
					<label>
						<select name="nac">
							<option value="V-">V</option>
							<option value="E-">E</option>
						</select>
					</label><input type="text" name="cedula" placeholder="CI del funcionario" size="14"><br><br><br>
					<input type="submit" value="Cambiar">
				</form>
			</center>
		</div>
	</div>
	<div id="modal_mod_puser">
		<input type="radio" id="cerrar_mod_puser"><label  onclick="cerrar_mod_puser();" for="cerrar_mod_puser">x</label>
		<div>
			<h2>Modificar perfil del funcionario</h2>
			<center>
				<form method="post" action="../../../Controlador/camper_contrl.php">
					<?php
						echo "<input type='text' name='nac' id='indicator' value='$nac'>";
						echo "<input type='text' name='ced' id='indicator' value='$ced'>";				 
					?>
					<p>Ingresa el perfil a cambiar</p><br>
					<label>
						<select name="perfil">
							<option value="Auxiliar">Auxiliar</option>
							<option value="Secretario">Secretario</option>
							<option value="Juez">Juez</option>
							<option value="Administrador">Administrador</option>
						</select>
					</label><br><br><br>
					<input type="submit" value="Cambiar">
				</form>
			</center>
		</div>
	</div>
	<div id="modal_mod_uuser">
		<input type="radio" id="cerrar_mod_uuser"><label  onclick="cerrar_mod_uuser();" for="cerrar_mod_uuser">x</label>
		<div>
			<h2>Modificar usuario del funcionario</h2>
			<center>
				<form method="post" action="../../../Controlador/camusu_contrl.php">
					<?php
						echo "<input type='text' name='nac' id='indicator' value='$nac'>";
						echo "<input type='text' name='ced' id='indicator' value='$ced'>";				 
					?>
					<p>Ingresa el nombre de usuario a cambiar</p><br>
					<input type="text" name="nuser" placeholder="Nuevo usuario"><br><br><br>
					<input type="submit" value="Cambiar">
				</form>
			</center>
		</div>
	</div>
</body>
</html>