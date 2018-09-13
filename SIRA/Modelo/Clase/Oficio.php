<?php 
	require 'cnx.php';
	/**
	 * 
	 */
	class Oficio
	{
		
		function _construct()
		{
			# code...
		}

		function regis_ofirec($fech, $nofi, $institucion, $asunto)
		{
			/*var_dump($fech);
			var_dump($nofi);
			var_dump($institucion);
			var_dump($asunto);*/
			$db = new db();
			$db->_construct();
			$sql = ("select sir.institucion.nombre_institucion, fecha_oficio_recibido, numero_oficio_recibido, asunto_oficio_recibido from sir.oficio_recibido inner join sir.institucion on institucion_id=sir.institucion.id where sir.institucion.id = '$institucion' and numero_oficio_recibido = '$nofi'");
			$query = pg_query($sql);
			$resultado= pg_fetch_array($query, 0, PGSQL_NUM);
			if ($resultado[0]==NULL) {
				$sql = ("insert into sir.oficio_recibido (institucion_id, fecha_oficio_recibido, numero_oficio_recibido, asunto_oficio_recibido) values ('$institucion', '$fech', '$nofi', '$asunto')");
				$query = pg_query($sql);
				if ($query==TRUE) {
					header ('Location:../Vista/admin/main.php');
				}
				else{
					echo "<script>alert('Error al cargar datos, se perdio conección con la base de datos');</script>";
				}
			}
			else{
				echo "<script>alert('Error al cargar datos, oficio ya registrado');</script>";
			}
		}

		function regis_ofienv($fech, $nofi, $institucion, $asunto)
		{
			/*var_dump($fech);
			var_dump($nofi);
			var_dump($institucion);
			var_dump($asunto);*/
			$db = new db();
			$db->_construct();
			$sql = ("select sir.institucion.nombre_institucion, fecha_oficio_enviado, numero_oficio_enviado, asunto_oficio_enviado from sir.oficio_enviado inner join sir.institucion on institucion_id=sir.institucion.id where sir.institucion.id = '$institucion' and numero_oficio_enviado = '$nofi'");
			$query = pg_query($sql);
			$resultado= pg_fetch_array($query, 0, PGSQL_NUM);
			if ($resultado[0]==NULL) {
				$sql = ("insert into sir.oficio_enviado (institucion_id, fecha_oficio_enviado, numero_oficio_enviado, asunto_oficio_enviado) values ('$institucion', '$fech', '$nofi', '$asunto')");
				$query = pg_query($sql);
				if ($query==TRUE) {
					header ('Location:../Vista/admin/main.php');
				}
				else{
					echo "<script>alert('Error al cargar datos, se perdio conección con la base de datos');</script>";	
				}
			}
			else{
				echo "<script>alert('Error al cargar datos, oficio ya registrado');</script>";	
			}
		}
	}
?>