<?php 
	/**
	 * 
	 */
	require 'cnx.php';
	class Expediente
	{
		
		function __construct()
		{
			# code...
		}

		function regis_aent($fech, $nexpe, $anomb, $aape)
		{
			$db = new db();
			$db->_construct();
			$sql=("select numero_expediente from sir.auto_entrada where numero_expediente='$nexpe'");
			$query=pg_query($sql);
			$resultado= pg_fetch_array($query, 0, PGSQL_NUM);
			if ($resultado[0]==NULL) {
				$sql=("insert into sir.auto_entrada(fecha_auto_entrada, numero_expediente, acusado_nombre, acusado_apellido) values ('$fech', '$nexpe', '$anomb', '$aape')");
				$query=pg_query($sql);
				if ($query==FALSE) {
	 				echo "<script>alert('Error al cargar datos');</script>";
	 			}
	 			else{
	 				$sql=("select id from sir.auto_entrada where numero_expediente = '$nexpe'");
	 				$query=pg_query($sql);
	 				$resultado= pg_fetch_array($query, 0, PGSQL_NUM);
	 				$sql=("insert into sir.expediente(auto_entrada_id) values ('$resultado[0]')");
	 				$query=pg_query($sql);
	 				header ('Location:../Vista/admin/main.php');
	 			}
			}
			else{
				echo "<script>alert('Error al cargar datos, expediente ya registrado');</script>";
			}
			
		}

		function regis_boleta($fech, $nexpe, $nbole,$tbole, $nnomb, $nape, $nac, $cedula, $direc)
		{
			$db = new db();
			$db->_construct();
			$sql=("select numero_boleta from sir.boleta where numero_boleta = '$nbole'");
			$query = pg_query($sql);
			$resultado= pg_fetch_array($query, 0, PGSQL_NUM);
			if ($resultado[0]!=NULL) {
				echo "<script>alert('Error al cargar datos, esta boleta ya fue registrada');</script>";
			}
			else{
				$sql = ("select sir.expediente.id, numero_expediente from sir.expediente inner join sir.auto_entrada on auto_entrada_id = sir.auto_entrada.id where numero_expediente = '$nexpe'");
				$query = pg_query($sql);
				$resultado= pg_fetch_array($query, 0, PGSQL_NUM);
				if ($resultado[0]!=NULL) {
					$indexpe=$resultado[0];//indicador del expediente
					$sql = ("select nombre_notificado, apellido_notificado, nacionalidad_notificado, cedula, dirección_notificado from sir.notificado where nacionalidad_notificado='$nac' and cedula='$cedula'");
					$query = pg_query($sql);
					$resultado= pg_fetch_array($query, 0, PGSQL_NUM);
					if ($resultado[0]!=NULL) {
						echo "<script>alert('Error al cargar datos, este notificado ya fue registrado');</script>";//MODIFICAR ESTOOOOOOOOOOOOOO!!!!!!!!!!!!!!!!!!!
					}
					else{
						$sql = ("insert into sir.notificado (nombre_notificado, apellido_notificado, nacionalidad_notificado, cedula, dirección_notificado) values ('$nnomb', '$nape', '$nac', '$cedula', '$direc')");
						$query = pg_query($sql);
						if ($query == TRUE) {
							$sql = ("select id from sir.notificado where nacionalidad_notificado='$nac' and cedula='$cedula'");
							$query = pg_query($sql);
							$resultado= pg_fetch_array($query, 0, PGSQL_NUM);
							$indnoti=$resultado[0];
							$sql = ("insert into sir.boleta (tipo_boleta_id, notificado_id, numero_boleta, fecha_boleta, expediente_id) values ('$tbole', '$indnoti', '$nbole', '$fech', '$indexpe')");
							$query = pg_query($sql);
							header ('Location:../Vista/admin/main.php');			
						}
						else{
							echo "<script>alert('Error al cargar datos, imposible registrar en la base de datos');</script>";				
						}
					}
					
				}
				else{
					echo "<script>alert('Error al cargar datos, el expediente no a sido registrado');</script>";		
				}
			}
		}

		function regis_admin_prueba($fech, $tprueba, $rprueba)
		{
			$db = new db();
			$db->_construct();
			$sql = ("select fecha_admision_prueba, tipo_prueba, resumen_prueba from sir.admision_prueba inner join sir.prueba on sir.admision_prueba.id=sir.prueba.admision_prueba_id where fecha_admision_prueba='$fech' and tipo_prueba= '$tprueba' and resumen_prueba= '$rprueba'");
			$query = pg_query($sql);
			$resultado= pg_fetch_array($query, 0, PGSQL_NUM);
			if ($resultado[0]==NULL and $resultado[1]==NULL and $resultado[2]==NULL) {
				$sql = ("insert into sir.admision");//VERIFICAR CON LA COMUNIDAD
			}
		}

		function regis_apert_cierre($nexpe, $fech, $tauto, $resumen)
		{
			$db = new db();
			$db->_construct();
			$sql = ("select sir.expediente.id, numero_expediente from sir.expediente inner join sir.auto_entrada on auto_entrada_id = sir.auto_entrada.id where numero_expediente = '$nexpe'");
			$query = pg_query($sql);
			$resultado= pg_fetch_array($query, 0, PGSQL_NUM);
			if ($resultado[0]==NULL) {
				echo "<script>alert('Error al cargar datos, el expediente no a sido registrado');</script>";
			}
			else{
				$indexpe=$resultado[0];//indicador del expediente
				$sql = ("select fecha_auto, expediente_id from sir.auto_apertura_cierre where expediente_id = '$indexpe' and fecha_auto='$fech'");
				$query = pg_query($sql);
				$resultado= pg_fetch_array($query, 0, PGSQL_NUM);
				if ($resultado[0]!=NULL) {
					echo "<script>alert('Error al cargar datos, el auto ya se encuentra registrado');</script>";
				}
				else{
					$sql = ("insert into sir.auto_apertura_cierre (fecha_auto, tipo_auto, resumen_auto, expediente_id) values ('$fech', '$tauto', '$resumen', '$indexpe')");
					$query = pg_query($sql);
					if ($query==FALSE) {
						echo "<script>alert('Error al cargar datos');</script>";
					}
					else{
						header ('Location:../Vista/admin/main.php');
					}
				}
			}
		}

		function regis_remexp($nexpe, $fech, $resumen)
		{
			$db = new db();
			$db->_construct();
			$sql = ("select sir.expediente.id, numero_expediente from sir.expediente inner join sir.auto_entrada on auto_entrada_id = sir.auto_entrada.id where numero_expediente = '$nexpe'");
			$query = pg_query($sql);
			$resultado= pg_fetch_array($query, 0, PGSQL_NUM);
			if ($resultado[0]==NULL) {
				echo "<script>alert('Error al cargar datos, el expediente no a sido registrado');</script>";
			}
			else{
				$indexpe=$resultado[0];//indicador del expediente
				$sql = ("select expediente_id, resumen_remision, fecha from sir.remision_expediente where expediente_id = '$indexpe' and fecha = '$fech'");
				$query = pg_query($sql);
				$resultado= pg_fetch_array($query, 0, PGSQL_NUM);
				if ($resultado[0]==NULL) {
					$sql = ("insert into sir.remision_expediente (expediente_id, resumen_remision, fecha) values ('$indexpe', '$resumen', '$fech')");
					$query = pg_query($sql);
					if ($query==FALSE) {
						echo "<script>alert('Error al cargar datos');</script>";
					}
					else{
						header ('Location:../Vista/admin/main.php');	
					}
				}
				else{
					echo "<script>alert('Error al cargar datos, el expediente ya fue remitido');</script>";
				}
			}
		}
	}
?>