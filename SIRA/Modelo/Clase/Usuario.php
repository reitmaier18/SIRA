<?php
	/**
	  * 
	  */
	require 'cnx.php';
	class Usuario
	{
	 	private $nombre;
	 	private $apellido;
	 	private $nacionalidad;
	 	private $cedula;
	 	private $usuario;
	 	private $password;
	 	private $perfil;
	 	

	 	function valid($user, $contraseña)
	 	{
	 		$db=new db();
	 		$db->_construct();
	 		$sql= ("select usuario, password, perfil from sir.seguridad inner join sir.usuario on usuario_id = id_usuario where usuario = '$user' and password = '$contraseña'");
	 		$query=pg_query($sql);
	 		$fila= pg_fetch_array($query, 0, PGSQL_NUM); 
	 		
	 		switch ($fila[2]) {
	 			case 'Administrador':
	 				header('Location:../Vista/admin/main.php');
	 				break;
	 			case 'Auxiliar':
	 				header('Location:../Vista/auxi/main.php');
	 				break;
	 			default:
	 				echo "<script>alert('Error de usuario y contraseña');</script>";
	 				header('Location:../../index.php');
	 				break;
	 		}
	 		$db->_destruct();
	 	}

	 	function create($nombre, $apellido, $nac, $cedula, $perfil, $user, $contraseña)
	 	{
	 		$db=new db();
	 		$db->_construct();
	 		$sql=("select * from sir.usuario where nacionalidad='$nac' and cedula='$cedula'");
	 		$query=pg_query($sql);
	 		if ($query==FALSE) {
	 			$sql= ("insert into sir.usuario (nombre, apellido, nacionalidad, cedula, perfil, usuario) values ('$nombre', '$apellido', '$nac', $cedula, '$perfil', '$user')");
	 			$query=pg_query($sql);
	 			if ($query==FALSE) {
	 				echo "<script>alert('Error al cargar datos');</script>";
	 			}
	 			else{
	 				$sql=("select id_usuario from sir.usuario where usuario='$user'");
	 				$query=pg_query($sql);
	 				$fila= pg_fetch_array($query, 0, PGSQL_NUM);
	 				$sql=("insert into sir.seguridad (password,usuario_id) values ('$contraseña', '$fila[0]')");
	 				header ('Location:../Vista/admin/main.php');
	 				$query=pg_query($sql);
	 				if ($query==FALSE) {
	 					echo "<script>alert('Error al cargar contraseña');</script>";
	 				}
	 			}
	 			$db->_destruct();
	 		}
	 		else{
	 			echo "<script>alert('Error al cargar datos, usuario ya registrado');</script>";
	 		}
	 		
	 	}

	 	function update($nac,$ced)
	 	{
	 		$db=new db();
	 		$db->_construct();
	 		$sql=("select nombre, apellido, nacionalidad, cedula, perfil, usuario from sir.usuario where nacionalidad='$nac' and cedula='$ced'");
	 		$query=pg_query($sql);
	 		$fila= pg_fetch_array($query, 0, PGSQL_NUM);
	 		if ($fila!=NULL) {
	 			echo "<table border=1>";
	 			echo "<tr>";
	 			echo "<th>"."Nombre"."</th>";
	 			echo "<th>"."Apellido"."</th>";
	 			echo "<th>"."Cedula"."</th>";
	 			echo "<th>"."Perfil"."</th>";
	 			echo "<th>"."Usuario"."</th>";
	 			echo "</tr>";
	 			echo "<tr>";
	 			echo "<td id='nombre_usuario' onclick='mostrar_mod_nuser();'>".$fila[0]."</td>";
	 			echo "<td id='apellido_usuario' onclick='mostrar_mod_auser();'>".$fila[1]."</td>";
	 			echo "<td id='cedula_usuario' onclick='mostrar_mod_cuser();'>".$fila[2].$fila[3]."</td>";
	 			echo "<td id='perfil_usuario' onclick='mostrar_mod_puser();'>".$fila[4]."</td>";
	 			echo "<td id='usuario_usuario' onclick='mostrar_mod_uuser();'>".$fila[5]."</td>";
	 			echo "</tr>";
	 			echo "</table>";
	 			
	 			/*$this->nombre=$fila[0];
	 			$this->apellido=$fila[1];
	 			$this->nacionalidad=$fila[2];
	 			$this->cedula=$fila[3];
	 			$this->perfil=$fila[4];
	 			$this->usuario=$fila[5];*/
	 			$db->_destruct();
	 		}
	 		if ($fila==NULL) {
	 			echo "Error datos no encontrados!!";
	 		}
	 		
	 	}

	 	function update_dato_nombre($nac, $ced, $nombre)
	 	{
	 		$db=new db();
	 		$db->_construct();
	 		$sql="update sir.usuario set nombre='$nombre' where nacionalidad='$nac' and cedula='$ced'";
	 		$query=pg_query($sql);
	 		if ($query==TRUE) {
	 			header ('Location:../Vista/admin/main.php');
	 		}
	 		if ($query==FALSE) {
	 			echo "<script>alert('Error al cargar el cambio');</script>";
	 		}
	 		$db->_destruct();
	 	}

	 	function update_dato_apellido($nac, $ced, $apellido)
	 	{
	 		$db=new db();
	 		$db->_construct();
	 		$sql="update sir.usuario set apellido='$apellido' where nacionalidad='$nac' and cedula='$ced'";
	 		$query=pg_query($sql);
	 		if ($query==TRUE) {
	 			header ('Location:../Vista/admin/main.php');
	 		}
	 		if ($query==FALSE) {
	 			echo "<script>alert('Error al cargar el cambio');</script>";
	 		}
	 		$db->_destruct();
	 	}
	 	
	 	function update_dato_cedula($indicadora, $indicadorb, $nac, $cedula)
	 	{
	 		$db=new db();
	 		$db->_construct();
	 		$sql="update sir.usuario set nacionalidad='$nac', cedula='$cedula' where nacionalidad='$indicadora' and cedula='$indicadorb'";
	 		$query=pg_query($sql);
	 		if ($query==TRUE) {
	 			header ('Location:../Vista/admin/main.php');
	 		}
	 		if ($query==FALSE) {
	 			echo "<script>alert('Error al cargar el cambio');</script>";
	 		}
	 		$db->_destruct();	
	 	}

	 	function update_dato_perfil($nac, $ced, $perfil)
	 	{
	 		$db=new db();
	 		$db->_construct();
	 		$sql="update sir.usuario set perfil='$perfil' where nacionalidad='$nac' and cedula='$ced'";
	 		$query=pg_query($sql);
	 		if ($query==TRUE) {
	 			header ('Location:../Vista/admin/main.php');
	 		}
	 		if ($query==FALSE) {
	 			echo "<script>alert('Error al cargar el cambio');</script>";
	 		}
	 		$db->_destruct();
	 	}

	 	function update_dato_usuario($nac, $ced, $user)
	 	{
	 		$db=new db();
	 		$db->_construct();
	 		$sql="update sir.usuario set usuario='$user' where nacionalidad='$nac' and cedula='$ced'";
	 		$query=pg_query($sql);
	 		if ($query==TRUE) {
	 			header ('Location:../Vista/admin/main.php');
	 		}
	 		if ($query==FALSE) {
	 			echo "<script>alert('Error al cargar el cambio');</script>";
	 		}
	 		$db->_destruct();	
	 	}
	} 
?>