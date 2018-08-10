<?php 
	namespace MODELS;

	class requisitions 
	{
		
		public $con; 
		public $id; 
		public $name; 
		public $description; 
		public $requisitions; 
		public $category; 
		public $unit; 
		public $ingredient; 
		public $price; 
		public $coin; 
		public $status; 
		public $row; 

		public function __construct(){
			$this->con = new conexion();
		}

		public function set($atributo, $contenido){
			$this->$atributo = $contenido;
		}
		
		public function get($atributo){
			return $this->$atributo;
		}

		public function saveCategory(){
			$sql = "INSERT INTO categories (id,name,description) VALUES (null, '{$this->name}','{$this->description}')";
			$this->con->consultaSimple($sql);

	
		}

		public function list(){
			$sql = "SELECT * FROM categories";
			$data = $this->con->consultaRetorno($sql);
			return $data;
		}

		public function delete(){
			$sql = "DELETE FROM categories WHERE id = '{$this->id}'";
			$this->con->consultaSimple($sql);

		}

		public function saveSuplies(){
			$sql = "INSERT INTO supplies (id,category, unit, name, ingredient, price, coin,status) VALUES (null, '{$this->category}','{$this->unit}','{$this->name}','{$this->ingredient}','{$this->price}','{$this->coin}','{$this->status}')";
			$this->con->consultaSimple($sql);

		}

		public function listSuplies(){
			$sql = "SELECT * FROM supplies";
			$data = $this->con->consultaRetorno($sql);
			return $data;

		}

		public function selectSupplies(){
			$sql = "SELECT * FROM supplies WHERE id = '{$this->id}'";
			$data = $this->con->consultaRetorno($sql);
			$row = mysqli_fetch_array($data);
			return $row;
		}
		

		public function updateSuplies(){
			
			$sql = "UPDATE supplies SET category ='{$this->category}',
							unit ='{$this->unit}',
							name ='{$this->name}',
							ingredient ='{$this->ingredient}',
							price='{$this->price}',
							coin='{$this->coin}',
							status='{$this->status}' WHERE id={$this->id}";
			$this->con->consultaSimple($sql);
			
		}

		
		

	}



 ?>