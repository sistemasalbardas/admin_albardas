<?php 
	namespace MODELS;
	
	class profile 
	{
		public $email; 
		public $pass; 
		public $array = array(); 
		public $con; 
		public $id; 
		public $name; 
		public $last_name; 
		public $phone; 

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

		public function update_user()
		{
			$sql = "UPDATE users SET name = '{$this->name}', last_name = '{$this->last_name}', email = '{$this->email}', phone = '{$this->phone}', last_name = '{$this->last_name}' WHERE id = '{$this->id}'";
			$this->con->consultaSimple($sql);
		}



	}


	$profile = new profile();
 ?>