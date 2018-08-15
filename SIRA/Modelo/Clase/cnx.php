<?php 
	/**
	 * Clase de conección con la base de datos del sira
	 */
	class db
	{
		private $usuario = 'sira';
	 	private $password = 'admin';
	
		function _construct()
		{
			$db = pg_connect("host=localhost dbname=sira user=$this->usuario password=$this->password") or die ('No se pudo conectar a la base de datos '.pg_last_error());
			if ($db==FALSE) {
				echo "Error de acceso a la base de datos";
			}
		}
		function _destruct()
		{
			$db = pg_close();
		}
	}

?>