<?php 
	namespace MODELS;

	//use CONTROLLERS\cycles as cycles;

	class cycles 
	{
		public $cycles; 
		public $email; 
		public $pass; 
		public $array = array(); 
		public $con; 

		public function __construct(){
			$this->con = new conexion();
			//$this->cycles = new cycles();
		}

		public function set($atributo, $contenido){
			$this->$atributo = $contenido;
		}
		
		public function get($atributo){
			return $this->$atributo;
		}

	}

 ?>