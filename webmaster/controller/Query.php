<?php
class Query{
	var $data;
    var $cnn;
    
    function getConexion(){							/*Función que asigna todo a la conexión*/
		$conexion = new Conexion();	
		$link = $conexion->getConexion();
		$this->cnn=$link;
		return $this->cnn;
	}
    
    function Close(){									/*Función que cierra la conexión*/
		$this->cnn->close();        
	}
    
	function executeQuery($Transact_SQL) 				/*Función que ejecuta la transacción de sql*/
	{	
		$conexion= new Conexion();	
		$link = $conexion->getConexion();
		$this->data = $link->query($Transact_SQL);
		$link->close();
		$conexion->getClose();
		return $this->data;
	}	
	
    function fetchAll()									/*Función que trae todos los resultados por filas*/
    {
		$numRows=$this->data->num_rows;
		$rows=array();
		if($numRows>0){
			while($row = $this->data->fetch_array()) {
				$rows[]=$row;
			}
		} 
        return $rows; 
    }
}

?>