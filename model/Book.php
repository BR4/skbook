<?php
class Book{

    
   public static function getAllBook(){  				/*Función para consultar los empleados activos*/
					$obj_Book = new Query();				/*Utiliza un objeto empleado, genera una nueva consulta*/
					$obj_Book->executeQuery('select * from libro');			/*Genera la consulta ejecuta el query pasado*/
                    return $obj_Book->FetchAll();	
   }


}
?>