<?php 

	namespace MODELS;

	class cuadrillas 
	{
		//CUADRILLAS
		public function listarCuadrillas(){	
			$sql = "SELECT * FROM cuadrillas";
			$datos = $this->con->consultaRetorno($sql);
			return $datos;
		}

		public function addCuadrilla(){
			
			$sql = "INSERT INTO cuadrillas (id,name,nPeople,coments,liable, phone) VALUES 
			(null, 
				'{$this->name}',
				'{$this->nPeople}',
				'{$this->coments}',
				'{$this->liable}',
				'{$this->phone}'
			)";
			$this->con->consultaSimple($sql);
		}
				
	}

 ?>