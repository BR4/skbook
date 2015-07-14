<?php

class Conexion {

    public function getConexion () {									 	/*Nombre de la función que realiza la conexión*/
		$cnn = new mysqli('localhost','root','12345','skbookdatabase'); 	 	/*Contiene el servidor, el usuario, la onraseña y el nombre de la base de datos*/
		if ($cnn ->connect_error) { 
 				echo $Error="<script>alert('Existe un error en el archivo de cofiguracion de la base de datos.')</script>";	     			/*Si genera un error*/
			exit;
		}else {
			return $cnn;
		}
	}
	
	public function getClose(){	
	//	 $cnn->close;
	}
	
} 

?>
