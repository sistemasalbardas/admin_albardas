<?php 
	namespace MODELS;
	
	class products 
	{
		public $id; 
		public $name; 
		public $type_pack; 
		public $array = array(); 
		public $quality; 
		public $size; 
		public $pack; 
		public $brand; 
		public $weight; 
		public $unit_measure; 

		public function __construct(){
			$this->con = new conexion();
		}

		public function set($atributo, $contenido){
			$this->$atributo = $contenido;
		}
		
		public function get($atributo){
			return $this->$atributo;
		}

		public function list()
		{
			$sql = "SELECT * FROM products";
			$data = $this->con->consultaRetorno($sql);
			return $data; 
		}

		public function erase(){
			$sql = "DELETE FROM products WHERE id = '{$this->id}'";
			$this->con->consultaSimple($sql);
		}

		public function save()
		{
			$sql = "INSERT INTO products (id, name, quality, size, pack, brand, weight, unit_measure) VALUES (null, '{$this->name}', '{$this->quality}','{$this->size}','{$this->pack}','{$this->brand}','{$this->weight}', '{$this->unit_measure}')";
			$this->con->consultaSimple($sql);
		}

		public function product_id()
		{
			$sql = "SELECT * FROM products WHERE id = '{$this->id}'";
			$data = $this->con->consultaRetorno($sql);
			$row = mysqli_fetch_assoc($data);
			return $row; 
		}

		public function update()
		{
			///error_log(print_r($_POST,true));
			$sql = "UPDATE products SET 
				name = '{$this->name}', 
				quality = '{$this->quality}', 
				size = '{$this->size}', 
				pack = '{$this->pack}',
				brand = '{$this->brand}',
				weight = '{$this->weight}',
				unit_measure = '{$this->unit_measure}' WHERE id = '{$this->id}'";
			$this->con->consultaSimple($sql);

		
		}

	}


	//$login = new login();
 ?>