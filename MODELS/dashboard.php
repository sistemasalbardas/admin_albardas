<?php 
	namespace MODELS;


	class dashboard 
	{
		public $dashboard; 
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

		
	}

 ?>