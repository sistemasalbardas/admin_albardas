<?php 
	namespace MODELS;
	
	class profile 
	{
		public $email; 
		public $pass; 
		public $array = array(); 
		public $con; 
		public $id; 

		public function __construct(){
			$this->con = new conexion();
		}

		public function set($atributo, $contenido){
			$this->$atributo = $contenido;
		}
		
		public function get($atributo){
			return $this->$atributo;
		}
		public function user_id()
		{
			$sql= "SELECT * FROM users WHERE id = '{$this->id}'";
			$data = $this->con->consultaRetorno($sql);
			$row = mysqli_fetch_assoc($data);
			return $row; 
		}



	}


	$profile = new profile();
 ?>