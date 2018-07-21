<?php 
	namespace MODELS;
	class freights 
	{
		//FLETES
		public $con; 
		public function __construct(){
			$this->con = new conexion();
		}

		public function set($atributo, $contenido){
			$this->$atributo = $contenido;
		}
		
		public function get($atributo){
			return $this->$atributo;
		}

		public function list(){	
			$sql = "SELECT * FROM freights";
			$datos = $this->con->consultaRetorno($sql);
			return $datos;
		}

		public function costumers()
		{
			$sql = "SELECT * FROM costumers";
			$datos = $this->con->consultaRetorno($sql);
			return $datos;
		}
				
	}

 ?>