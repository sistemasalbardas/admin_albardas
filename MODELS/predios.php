<?php 
	namespace MODELS;

	//use CONTROLLERS\predios as predios;

	class predios 
	{
		public $predios; 
		public $email; 
		public $pass; 
		public $array = array(); 
		public $con; 

		public function __construct(){
			$this->con = new conexion();
			//$this->predios = new predios();
		}

		public function set($atributo, $contenido){
			$this->$atributo = $contenido;
		}
		
		public function get($atributo){
			return $this->$atributo;
		}

	}

 ?>