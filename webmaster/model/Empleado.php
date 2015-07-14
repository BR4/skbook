<?php
	class Empleado{
		private $id;
		private $idDepartamento;
		private $idTipoCobro;
		private $nombre; 
		private $apellidoPaterno;
		private	$apellidoMaterno;
		private	$puesto;
		private $numeroNomina;
		private $imss;
		private $rfc;
		private $razonSocial;
		private $Transact_SQL;
			
				public static function getAllDelete(){			/*Función para consultar los empleados eliminados*/
					$obj_Empleado = new Query();                /*Utiliza un objeto empleado, genera una nueva consulta*/
					$obj_Empleado->executeQuery('select * from viewEmpleadosEliminados'); /*Genera la consulta ejecuta el query pasado*/
					return $obj_Empleado->fetchAll();			/*Retorna el objeto creado de empleado y lo asigna a fetchAll para traer datos por fila*/
				}
				
				public static function getAll(){  				/*Función para consultar los empleados activos*/
					$obj_Empleado = new Query();				/*Utiliza un objeto empleado, genera una nueva consulta*/
					$obj_Empleado->executeQuery('select * from viewEmpleadosActivos');			/*Genera la consulta ejecuta el query pasado*/
					return $obj_Empleado->FetchAll();			/*Rertorna el objeto creado de empleado y lo asigna a fetchAll para traer datos por fila*/
				}
				
				public static function getDepartamentos(){  				/*Función para consultar los empleados activos*/
					$obj_Empleado = new Query();				/*Utiliza un objeto empleado, genera una nueva consulta*/
					$result=$obj_Empleado->executeQuery("select idDepartamento,nombre,estatus from departamento where estatus=1");			/*Genera la consulta ejecuta el query pasado*/
					$arreglo = array();
					while($row= $result->fetch_object()){
				    array_push($arreglo,array($row->idDepartamento,$row->nombre));
						}
					return $arreglo;			/*Rertorna el objeto creado de empleado y lo asigna a fetchAll para traer datos por fila*/
				}
				
				
				
				public function Empleado($nro=0){    			 /*Función para empleado por cada elemento de la fila*/
					if($nro!=0){
						$obj_Empleado = new Query();
						$result=$obj_Empleado->executeQuery("SELECT idEmpleado, idDepartamento, idTipoCobro, nombre, apellidoPaterno, apellidoMaterno, puesto,
						numeroNomina, imss, rfc, razonSocial FROM empleado WHERE idEmpleado = $nro");
						while($row= $result->fetch_object()){
						$this->id=$row->idEmpleado;
						$this->idDepartamento = utf8_encode($row->idDepartamento);
						$this->idTipoCobro = utf8_encode($row->idTipoCobro);
						$this->nombre = utf8_encode ($row->nombre);
						$this->apellidoPaterno = utf8_encode($row->apellidoPaterno);
						$this->apellidoMaterno = utf8_encode($row->apellidoMaterno);
						$this->puesto = utf8_encode($row->puesto);
						$this->numeroNomina = utf8_encode($row->numeroNomina);
						$this->imss = utf8_encode($row->imss);
						$this->rfc = utf8_encode($row->rfc);
						$this->razonSocial = utf8_encode($row->razonSocial);
						}
					}
				}
				
			
				function getCodigo() 			    { return $this->id;}
				function getIdDepartamento() 		{ return $this->idDepartamento;}
				function getIdTipoCobro() 		    { return $this->idTipoCobro;}
				function getNombre() 			    { return $this->nombre;}
				function getApellidoPaterno() 		{ return $this->apellidoPaterno;}
				function getApellidoMaterno()		{ return $this->apellidoMaterno;}
				function getPuesto()				{ return $this->puesto;}
				function getNumeroNomina()			{ return $this->numeroNomina;}
				function getImss()					{ return $this->imss;}
				function getRfc()					{ return $this->rfc;}
				function getRazonSocial()			{ return $this->razonSocial;}
	
				
				function setCodigo($val) 		    {  $this->id=$val;}
				function setIdDepartamento($val) 	{  $this->idDepartamento=$val;}
				function setIdTipoCobro($val) 	    {  $this->idTipoCobro=$val;}
				function setNombre($val)	 		{  $this->nombre=$val;}
				function setApellidoPaterno($val)	{  $this->apellidoPaterno=$val;}
				function setApellidoMaterno($val)   {  $this->apellidoMaterno=$val;}
				function setPuesto($val)			{  $this->puesto=$val;}
				function setNumeroNomina($val)      {  $this->numeroNomina=$val;}
				function setImss($val)              {  $this->imss=$val;}
				function setRfc($val)				{  $this->rfc=$val;}
				function setRazonSocial($val)		{  $this->razonSocial=$val;}
				
				public function Save(){
					$clave=$this->id;
						if(($this->id)>0){
						$this->Update();
					}else{
					$this->Insert();
						}
				}
				
				private function Update(){
					$objEmpleado = new Query();
					$cnn=$objEmpleado->getConexion();
						try{
							$Transact_SQL="UPDATE empleado SET ";
							$Transact_SQL.="idDepartamento='".trim(utf8_decode($this->idDepartamento))."'  ";
							$Transact_SQL.=",idTipoCobro='".trim(utf8_decode($this->idTipoCobro))."'  ";
							$Transact_SQL.=",nombre='".trim(utf8_decode($this->nombre))."'  ";
							$Transact_SQL.=",apellidoPaterno='".trim(utf8_decode($this->apellidoPaterno))."'  ";
							$Transact_SQL.=",apellidoMaterno='".trim(utf8_decode($this->apellidoMaterno))."'  ";
							$Transact_SQL.=",puesto='".trim(utf8_decode($this->puesto))."'  ";
							$Transact_SQL.=",numeroNomina='".trim(utf8_decode($this->numeroNomina))."'  ";
							$Transact_SQL.=",imss='".trim(utf8_decode($this->imss))."'  ";
							$Transact_SQL.=",rfc='".trim(utf8_decode($this->rfc))."'  ";
							$Transact_SQL.=",razonSocial='".trim(utf8_decode($this->razonSocial))."'  ";
							$Transact_SQL.=" WHERE idEmpleado = $this->id";
								$objEmpleado->executeQuery($Transact_SQL);
							}catch(Exception $e){
								$objEmpleado->Close();  
								$sentencia->close(); 
										return null; 
												}		
											}
					
				private function Insert(){
					$objEmpleado = new Query();
					$cnn=$objEmpleado->getConexion();
						try{
							$Transact_SQL = "call  sp_AgregarEmpleado(?,?,?,?,?,?,?,?,?,?)";	     /*Llama al procedimiento almacenado*/
							$sentencia=$cnn->prepare($Transact_SQL);
							$sentencia->bind_param("iissssssss",trim(utf8_decode($this->idDepartamento)),trim(utf8_decode($this->idTipoCobro)),trim(utf8_decode($this->nombre)),
							trim(utf8_decode($this->apellidoPaterno)),trim(utf8_decode($this->apellidoMaterno)),trim(utf8_decode($this->puesto)),
							trim(utf8_decode($this->numeroNomina)),trim(utf8_decode($this->imss)),trim(utf8_decode($this->rfc)),trim(utf8_decode($this->razonSocial)));
								if($sentencia->execute()){
									$objEmpleado->Close();
									$sentencia->close();
									return $true;
										}
								else{
									$objEmpleado->Close();
									$sentencia->close();
									return false;
									}
								}catch(Exception $e){
								$objEmpleado->Close();  
								$sentencia->close(); 
								return null; 
								}
									}
			
				public function Delete(){
					$objEmpleado=new Query();
					$Transact_SQL="UPDATE empleado SET estatus = 0 WHERE idEmpleado=$this->id;";
					$objEmpleado->executeQuery($Transact_SQL);
				}	
							
	
				public function Reactivar(){
					$objEmpleado=new Query();
					$Transact_SQL="UPDATE empleado SET estatus = 1 WHERE idEmpleado=$this->id;";
					$objEmpleado->executeQuery($Transact_SQL);
				}
				
				public function DeleteEmpleado(){
					$objEmpleado=new Query();
					$Transact_SQL="DELETE FROM empleado WHERE idEmpleado=$this->id;";
					$objEmpleado->executeQuery($Transact_SQL);
				}
			}
		
		/*echo 'Funciona perfecto :) soy la clase Empleado.php';*/

?>