<?php 
	require 'cnx.php';
	/**
	 * 
	 */
	class Memo
	{
		
		function _construct()
		{
			# code...
		}

		function regis_memrec($fech, $nmem, $dependencia, $asunto)
		{
			/*var_dump($fech);
			var_dump($nmem);
			var_dump($dependencia);
			var_dump($asunto);*/
			$db = new db();
			$db->_construct();
			$sql = ("select sir.dependencia.nombre_dependencia, fecha_memo_recibido, numero_memo_recibido, asunto_memo_recibido from sir.memo_recibido inner join sir.dependencia on dependencia_id=sir.dependencia.id where sir.dependencia.id= '$dependencia' and numero_memo_recibido='$nmem'");
			$query = pg_query($sql);
			$resultado= pg_fetch_array($query, 0, PGSQL_NUM);
			if ($resultado[0]==NULL) {
				$sql = ("insert into sir.memo_recibido (dependencia_id, numero_memo_recibido, fecha_memo_recibido, asunto_memo_recibido) values ( '$dependencia','$nmem', '$fech', '$asunto')");
				$query = pg_query($sql);
				if ($query==TRUE) {
					header ('Location:../Vista/admin/main.php');
				}
				else{
					echo "<script>alert('Error al cargar datos, se perdio conección con la base de datos');</script>";	
				}
			}
			else{
				echo "<script>alert('Error al cargar datos, memo ya registrado');</script>";
			}
		}

		function regis_memenv($fech, $nmem, $dependencia, $asunto)
		{
			$db = new db();
			$db->_construct();
			$sql = ("select sir.dependencia.nombre_dependencia, fecha_memo_enviado, numero_memo, asunto_memo_enviado from sir.memo_enviado inner join sir.dependencia on dependencia_id=sir.dependencia.id where sir.dependencia.id='$dependencia' and numero_memo='$nmem'");
			$query = pg_query($sql);
			$resultado= pg_fetch_array($query, 0, PGSQL_NUM);
			if ($resultado[0]==NULL) {
				$sql = ("insert into sir.memo_enviado (dependencia_id, numero_memo, fecha_memo_enviado, asunto_memo_enviado) values ('$dependencia', '$nmem', '$fech', '$asunto')");
				$query = pg_query($sql);
				if ($query==TRUE) {
					header ('Location:../Vista/admin/main.php');
				}
				else{
					echo "<script>alert('Error al cargar datos, se perdio conección con la base de datos');</script>";	
				}
			}
			else{
				echo "<script>alert('Error al cargar datos, memo ya registrado');</script>";	
			}
		}
	}
?>