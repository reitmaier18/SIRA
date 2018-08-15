<?php
	/**
	  * 
	  */
	require 'cnx.php';
	 class Usuario
	 {
	 	
	 	private $usuario;
	 	private $password;
	 	private $perfil;
	 	function _construct($nombre, $apellido, $cedula, $usuario, $contraseña)
	 	{
	 		# code...
	 	}

	 	function valid($user, $contraseña)
	 	{
	 		$db=new db();
	 		$db->_construct();
	 		$sql= ("select usuario, password, perfil from sir.seguridad inner join sir.usuario on usuario_id = id_usuario where usuario = '$user' and password = '$contraseña'");
	 		$query=pg_query($sql);
	 		$fila= pg_fetch_array($query, 0, PGSQL_NUM); 
	 			
	 		if ($fila[2]=='administrador' or $fila=='Administrador') {
	 			$this->usuario=$fila[0];
	 			$this->password=$fila[1];
	 			$this->perfil=$fila[2];
	 			header('Location:../Vista/main.php');
	 		}
	 		else {
	 			echo "<script>alert('Error de usuario y contraseña');</script>";
	 		}
	 		$db->_destruct();
	 	}

	 	function create($nombre, $apellido, $nac, $cedula, $perfil, $user, $contraseña)
	 	{
	 		$db=new db();
	 		$db->_construct();
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
	 			header ('Location:../Vista/main.php');
	 			$query=pg_query($sql);
	 			if ($query==FALSE) {
	 				echo "<script>alert('Error al cargar contraseña');</script>";
	 			}
	 		}
	 	}
	 } 
?>