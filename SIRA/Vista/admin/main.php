<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<link rel="icon" type="image/png" href="../Imagenes/SIRA.png">
	<link rel="stylesheet" type="text/css" href="../CSS/est_vista_main.css">
	<script src="../js/man_main.js"></script>
	<title>SIRA</title>
</head>
<body>
	<header>
		<img src="../Imagenes/LOGOPAPELERIA.png">
		<h2 onclick="mostrarInicio();">Sistema Interno de Registro de Actas</h1>		
	</header>
	<nav>
		<ul>
			<li onclick="mostrarInicio();" class="Inicio"><a href="#">Inicio</a></li>
			<li class="Cerrar"><a href="../../index.php">Cerrar Seción</a></li>
		</ul>
	</nav>
	<aside>
		<div id="menu">
			<h3 align="center">Registro</h3>
			<ul>
				<li onclick="mostrarJuridico();" class="Juridico"><a href="#">Juridico</a>
					<ul id="Juridico">
						<hr>
						<li onclick="mostrar_aentrada();" class="aentrada"><a href="#">Auto de Entrada</a></li>
						<li onclick="mostrar_bnotificacion();" class="bnotificación"><a href="#">Boletas de Notificación</a></li>
						<li onclick="mostrar_apruebas();" class="apruebas"><a href="#">Admisión de Pruebas</a></li>
						<li onclick="mostrar_aaperturacierre();" class="aaperturacierre"><a href="#">Auto de Apertura y Cierre</a></li>
						<li onclick="mostrar_remision();" class="rexpediente"><a href="#">Remisión del Expediente</a></li>
						<li onclick="mostrar_nsecretarial();" class="nsecretarial"><a href="#">Nota Secretarial</a></li>
						<hr>	
					</ul>
				</li>
				<li onclick="mostrarAdministrativo();" class="Administrativo"><a href="#">Administrativo</a>
					<ul id="Administrativo">
						<hr>
						<li onclick="mostrar_memrec();" class="memrec"><a href="#">Memo recibido</a></li>
						<li onclick="mostrar_memenv();" class="memenv"><a href="#">Memo enviado</a></li>
						<li onclick="mostrar_oficrec();" class="ofirec"><a href="#">Oficio recibido</a></li>
						<li onclick="mostrar_oficenv();" class="ofienv"><a href="#">Oficio enviado</a></li>
						
					</ul>
				</li>
			</ul>
			<h3 align="center">Consulta</h3>
			<ul>
				<li onclick="mostrarExpediente();" class="Expediente"><a href="#">Expediente</a></li>
				<li onclick="mostrar_estadisticas();" class="Estadisticas"><a href="#">Estadisticas</a></li>
			</ul>	
			<h3 align="center">Herramientas</h3>
			<ul>
				<li onclick="mostrarHerramienta();"  class="Herramienta"><a href="#">Gestión de Usuario</a>
					<ul id="Herramienta">
						<hr>
						<li onclick="mostrar_crear_usuario();" class="adduser"><a href="#">Creación de Usuario</a></li>
						<li onclick="mostrar_actualizacion_usuario();" class="updateuser"><a href="#">Actualización de Usuario</a></li>
						<li onclick="mostrar_eliminar_usuario();" class="deleteuser"><a href="#">Cerrar cuenta de Usuario</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</aside>
	<section>
		<div id="inicio"><h2>Inicio</h2>
			<br>
			<p align="justify">El objetivo de este software es el permitir realizar todos los registros que se llevan a cabo por el libro de actas de un Juzgado de Sustanciación de este país, a fin de permitirle a este órgano judicial una herramienta capaz de automatizar el desarrollo de sus funciones de manera que menguen los tiempos de respuesta de esta institución al publico en general</p><br>
		</div>

		<div id="Auto_entrada"><h2>Auto de Entrada</h2>
			<form action="#">
				<div align="center">
					<br>
					<table>
						<tr>
							<td>
								Fecha de entrada <br> <input type="date" name="fecha_entrada"><br><br><br>			
							</td>
							<td>
								&nbsp&nbsp&nbsp&nbspN° de Expediente <br> &nbsp&nbsp&nbsp&nbsp<input type="text" name="numexpediente" size="20"><br><br><br>	
							</td>
						</tr>
						<tr>
							<td>
								Nombre del Acusado <br> <input type="text" name="nomacu" size="20"><br><br><br>
							</td>
							<td>
								&nbsp&nbsp&nbsp&nbspApellido del Acusado <br> &nbsp&nbsp&nbsp&nbsp<input type="text" name="apeacu" size="20"><br><br><br>
							</td>
						</tr>
					</table>
					<center><input type="submit" value="Guardar">&nbsp<input type="reset" value="Cancelar"></center><br>
				</div>
			</form>
		</div>

		<div id="Boletas"><h2>Boletas de Notificación</h2>
			<form action="#">
				<div align="justify">
					<br>
					<center><table align="center">
						<tr>
							<td>
								Fecha de boleta <br><input type="date" name="fecha_boleta"><br><br><br>			
							</td>
							<td>
								&nbsp&nbsp&nbsp&nbspN° de Expediente <br> &nbsp&nbsp&nbsp&nbsp<input type="text" name="numexpediente" size="20"><br><br><br>
							</td>
						</tr>
						<tr>
							<td>
								N° de Boleta <br><input type="text" name="numboleta" size="20"><br><br><br>
							</td>
							<td>
								&nbsp&nbsp&nbsp&nbspTipo de Boleta <br> &nbsp&nbsp&nbsp&nbsp<label>
												<select name="tboleta">
													<option>Seleccione</option>
													<option value="1">Notificación</option>
													<option value="2">Acusación</option>
												</select>
											</label><br><br><br>
							</td>	
						</tr>
						<tr>
							<td>
								Nombre del Notificado <br><input type="text" name="nomnoti" size="20"><br><br><br>			
							</td>
							<td>
								&nbsp&nbsp&nbsp&nbspApellido del Notificado <br> &nbsp&nbsp&nbsp&nbsp<input type="text" name="apenoti" size="20"><br><br><br>
							</td>
						</tr>
						<tr>
							<td>
								<label>
									<select class="" name="nac">
                        				<option value="V-">V</option>
                        				<option value="E-">E</option>
                    				</select>
                    			</label>
                    			<input type="text" name="cedula" id="cedula" placeholder="C.I del Notificado" size="14"><br><br><br>
                			</td>
						</tr>
					</table></center>
					<center>
                    	<textarea name="direccion" id="direccion" rows="2" cols="100" placeholder="Dirección del notificado"></textarea>
                    </center><br><br>
					<center><input type="submit" value="Guardar">&nbsp<input type="reset" value="Cancelar"></center><br>
				</div>
			</form>
		</div>

		<div id="Pruebas"><h2>Admisión de Pruebas</h2>
			<form action="#">
				<div align="center">
					<br>
					<table>
						<tr>
							<td>
								Fecha de prueba <br> <input type="date" name="fecha_prueba"><br><br><br>			
							</td>
							<td>
								&nbsp&nbsp&nbsp&nbspN° de Expediente <br> &nbsp&nbsp&nbsp&nbsp<input type="text" name="numexpediente" size="20"><br><br><br>	
							</td>
						</tr>
					</table>
					Tipo de prueba <br> <input type="text" name="tipoPrueba" size="20"><br><br><br>
					<center>
                    	<textarea name="resumenPrueba" id="resumenPrueba" rows="2" cols="100" placeholder="Descripción de la prueba"></textarea>
                    </center><br><br>
					<center><input type="submit" value="Guardar">&nbsp<input type="reset" value="Cancelar"></center><br>
				</div>
			</form>
		</div>

		<div id="Apertura"><h2>Auto de Apertura y Cierre</h2>
			<form action="#">
				<div align="center">
					<br>
					<table>
						<tr>
							<td>
								Fecha del auto <br> <input type="date" name="fecha_auto"><br><br><br>			
							</td>
							<td>
								&nbsp&nbsp&nbsp&nbspN° de Expediente <br> &nbsp&nbsp&nbsp&nbsp<input type="text" name="numexpediente" size="20"><br><br><br>	
							</td>
						</tr>
					</table>
					Tipo de auto <br> <label>
									<select name="tauto">
										<option>Selecione</option>
										<option value="Apertura">Apertura</option>
										<option value="Cierre">Cierre</option>
									</select>
								</label><br><br><br>
					<center>
                    	<textarea name="resumenauto" id="resumenAuto" rows="2" cols="100" placeholder="Resumen del auto"></textarea>
                    </center><br><br>
					<center><input type="submit" value="Guardar">&nbsp<input type="reset" value="Cancelar"></center><br>
				</div>
			</form>
		</div>

		<div id="Remision"><h2>Remisión del Expediente</h2>
			<form action="#">
				<div align="center">
					<br>
					<table>
						<tr>
							<td>
								Fecha del auto <br> <input type="date" name="fecha_auto"><br><br><br>			
							</td>
							<td>
								&nbsp&nbsp&nbsp&nbspN° de Expediente <br> &nbsp&nbsp&nbsp&nbsp<input type="text" name="numexpediente" size="20"><br><br><br>	
							</td>
						</tr>
					</table>
					<center>
                    	<textarea name="resumenRemision" id="resumenRemision" rows="2" cols="100" placeholder="Resumen de la Remision"></textarea>
                    </center><br><br>
					<center><input type="submit" value="Guardar">&nbsp<input type="reset" value="Cancelar"></center><br>
				</div>
			</form>
		</div>

		<div id="Nsecretarial"><h2>Nota Secretarial</h2>
			<form action="#">
				<div align="center">
					<br>
					<table>
						<tr>
							<td>
								Numero de nota <br> <input type="text" name="n_nota" size="20"><br><br><br>
							</td>
							<td>
								&nbsp&nbsp&nbsp&nbspAsunto <br> &nbsp&nbsp&nbsp&nbsp <input type="text" name="asunto_nota" size="20"><br><br><br>	
							</td>
						</tr>
					</table>
					<center>
                    	<textarea name="resumenNota" id="resumenNota" rows="2" cols="100" placeholder="Resumen de la Nota Secretarial"></textarea>
                    </center><br><br>
					<center><input type="submit" value="Guardar">&nbsp<input type="reset" value="Cancelar"></center><br>
				</div>
			</form>
		</div>

		<div id="Memo_recibido"><h2>Memo Recibido</h2>
			<form action="#">
				<div align="center">
					<br>
					<table>
						<tr>
							<td>
								Fecha de Memo <br><input type="date" name="fecha_mem"><br><br><br>
							</td>
							<td>
								&nbsp&nbsp&nbsp&nbsp Numero de Memo <br> &nbsp&nbsp&nbsp&nbsp<input type="text" name="n_memo" size="20"><br><br><br>
							</td>
						</tr>
						<tr>
							<td>
								Emitido por: <br><input type="text" name="dependencia"><br><br><br>
							</td>
							<td>
								&nbsp&nbsp&nbsp&nbsp Asunto <br> &nbsp&nbsp&nbsp&nbsp <input type="text" name="asunto"><br><br><br>	
							</td>
						</tr>
					</table>
					<center>
						<input type="submit" value="Guardar">&nbsp<input type="reset" value="Cancelar"><br><br>	
					</center>
				</div>
			</form>
		</div>

		<div id="Memo_enviado"><h2>Memo Enviado</h2>
			<form action="#">
				<div align="center">
					<br>
					<table>
						<tr>
							<td>
								Fecha de Memo <br><input type="date" name="fecha_mem"><br><br><br>
							</td>
							<td>
								&nbsp&nbsp&nbsp&nbsp Numero de Memo <br> &nbsp&nbsp&nbsp&nbsp<input type="text" name="n_memo" size="20"><br><br><br>
							</td>
						</tr>
						<tr>
							<td>
								Recibido por: <br><input type="text" name="dependencia"><br><br><br>
							</td>
							<td>
								&nbsp&nbsp&nbsp&nbsp Asunto <br> &nbsp&nbsp&nbsp&nbsp <input type="text" name="asunto"><br><br><br>	
							</td>
						</tr>
					</table>
					<center>
						<input type="submit" value="Guardar">&nbsp<input type="reset" value="Cancelar"><br><br>	
					</center>
				</div>
			</form>
		</div>

		<div id="Oficio_recibido"><h2>Oficio Recibido</h2>
			<form action="#">
				<div align="center">
					<br>
					<table>
						<tr>
							<td>
								Fecha de Oficio <br><input type="date" name="fecha_ofi"><br><br><br>
							</td>
							<td>
								&nbsp&nbsp&nbsp&nbsp Numero de Oficio <br> &nbsp&nbsp&nbsp&nbsp<input type="text" name="n_ofi" size="20"><br><br><br>
							</td>
						</tr>
						<tr>
							<td>
								Emitido por: <br><input type="text" name="Institución"><br><br><br>
							</td>
							<td>
								&nbsp&nbsp&nbsp&nbsp Asunto <br> &nbsp&nbsp&nbsp&nbsp <input type="text" name="asunto"><br><br><br>	
							</td>
						</tr>
					</table>
					<center>
						<input type="submit" value="Guardar">&nbsp<input type="reset" value="Cancelar"><br><br>	
					</center>
				</div>
			</form>
		</div>

		<div id="Oficio_enviado"><h2>Oficio Enviado</h2>
			<form action="#">
				<div align="center">
					<br>
					<table>
						<tr>
							<td>
								Fecha de Oficio <br><input type="date" name="fecha_ofi"><br><br><br>
							</td>
							<td>
								&nbsp&nbsp&nbsp&nbsp Numero de Oficio <br> &nbsp&nbsp&nbsp&nbsp<input type="text" name="n_ofi" size="20"><br><br><br>
							</td>
						</tr>
						<tr>
							<td>
								Recibido por: <br><input type="text" name="institución"><br><br><br>
							</td>
							<td>
								&nbsp&nbsp&nbsp&nbsp Asunto <br> &nbsp&nbsp&nbsp&nbsp <input type="text" name="asunto"><br><br><br>	
							</td>
						</tr>
					</table>
					<center>
						<input type="submit" value="Guardar">&nbsp<input type="reset" value="Cancelar"><br><br>	
					</center>
				</div>
			</form>
		</div>

		<div id="Expediente"><h2>Expediente</h2>
			<p align="justify">El elemento es de prueba</p>
		</div>

		<div id="Estadisticas"><h2>Estadisticas</h2>
			<p align="justify">El elemento es de prueba</p>
		</div>

		<div id="creacion_usuario"><h2>Creación de usuario</h2>
			<form action="../../Controlador/createuser_contrl.php" method="post">
				<div align="center">
					<br>
					<table>
						<tr>
							<td>
								Nombre del Funcionario<br><input type="text" name="nom_user"><br><br><br>
							</td>
							<td>
								&nbsp&nbsp&nbsp&nbsp Apellido del Funcionario<br> &nbsp&nbsp&nbsp&nbsp<input type="text" name="ape_user"><br><br><br>
							</td>
						</tr>
						<tr>
							<td>
								Cédula de Identidad<br>
								<label>
									<select name="nac">
										<option value="V-">V</option>
										<option value="E-">E</option>
									</select>
								</label><input type="text" name="cedula" placeholder="00000000" size="14"><br><br><br>
							</td>
							<td>
								&nbsp&nbsp&nbsp&nbsp Usuario<br> &nbsp&nbsp&nbsp&nbsp <input type="text" name="usuario"><br><br><br>	
							</td>
						</tr>
						<tr>
							<td>
								Contraseña<br><input type="password" name="contraseña"><br><br><br>
							</td>
							<td>
								&nbsp&nbsp&nbsp&nbsp perfil<br> &nbsp&nbsp&nbsp&nbsp 
								<label>
									<select name="perfil">
										<option value="Auxiliar">Auxiliar</option>
										<option value="Secretario">Secretario</option>
										<option value="Juez">Juez</option>
										<option value="Administrador">Administrador</option>
									</select>
								</label><br><br><br>
							</td>
						</tr>
					</table>
					<center>
						<input type="submit" value="Guardar">&nbsp<input type="reset" value="Cancelar"><br><br>	
					</center>
				</div>
			</form>
		</div>
		<div id="actualizacion_usuario"><h2>Actualización de Usuario</h2>
			<form name="update" method="post" action="guser/update.php">
				<br>
				Cédula de Identidad<br>
					<label>
						<select name="nac">
							<option value="V-">V</option>
							<option value="E-">E</option>
						</select></label><input type="text" name="cedula" placeholder="00000000" size="14"><input type="submit" value="consultar"> 
						<br><br><br>
			</form>
		</div>
		<div id="eliminar_usuario"><h2>Cerrar cuenta de Usuario</h2>
			<form name="deleteuser" method="post" action="../../Controlador/deleteuser_contrl.php">
				<br>
				Cédula de Identidad<br>
					<label>
						<select name="nac">
							<option value="V-">V</option>
							<option value="E-">E</option>
						</select></label><input type="text" name="cedula" placeholder="00000000" size="14"><input type="submit" value="eliminar"> 
						<br><br><br>
			</form>
		</div>			
	</section>
	
</body>
</html>