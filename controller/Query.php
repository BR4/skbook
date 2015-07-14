<?php
class Query{
	var $data;
    var $cnn;
    
    function getConexion(){							/*inicio de la funcion que  asigna toda a la conexión*/
		$conexion = new Conexion();	
		$link = $conexion->getConexion();
		$this->cnn=$link;
		return $this->cnn;
	}
    
    function Close(){									/*para cierra la conexión*/
		$this->cnn->close();        
	}
    
	function executeQuery($Transact_SQL) 				/*para la ejecuta la transacción de sql*/
	{	
		$conexion= new Conexion();	
		$link = $conexion->getConexion();
		$this->data = $link->query($Transact_SQL);
		$link->close();
		$conexion->getClose();
		return $this->data;
	}	
	
    function fetchAll()									/*trae a llamar todos los resultados por filas de la base de datos*/
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