<?php 
	namespace MODELS;

	class costumers 
	{
		public $id; 
		public $id_costumer; 
		public $pass; 
		public $array = array(); 
		public $name; 
		public $address; 
		public $rfc; 
		public $phone; 
		public $code; 

		public function __construct(){
			$this->con = new conexion();
		}

		public function set($atributo, $contenido){
			$this->$atributo = $contenido;
		}
		
		public function get($atributo){
			return $this->$atributo;
		}

		public function listar(){
			$sql = "SELECT * FROM costumers";
			$data = $this->con->consultaRetorno($sql);
			return $data;
		}
		public function delete(){
			$sql = "DELETE FROM costumers WHERE id = '{$this->id}'";
			$this->con->consultaSimple($sql);

		}

		public function selectCostumer(){
			$sql = "SELECT * FROM costumers WHERE id = '{$this->id}'";
			$data = $this->con->consultaRetorno($sql);
			$row = mysqli_fetch_assoc($data);
			return $row;
		}
		

		public function add(){
	

			$sql = "INSERT INTO costumers (id, name, address, phone, rfc, embark, code) VALUES (null, '{$this->name}', '{$this->address}', '{$this->phone}', '{$this->rfc}', '0', '{$this->code}')";
			$this->con->consultaSimple($sql);

		}

		public function update(){
			$sql = "UPDATE costumers SET name = '{$this->name}',
							address = '{$this->address}',
							phone = '{$this->phone}', 
							rfc = '{$this->rfc}' WHERE id = {$this->id}";
			$this->con->consultaSimple($sql);
		}



		///	FUNCIONES DE DIRECCIONES DE ENTRAGA 
		public function selectAddress(){
			$sql = "SELECT * FROM delivery_addresses WHERE id = '{$this->id}'";
			$data = $this->con->consultaRetorno($sql);
			$row  = mysqli_fetch_assoc($data);
			return $row;
		}

		public function add_address(){
			$sql = "INSERT INTO delivery_addresses (id, id_costumer, name, address, phone, city) VALUES (null, '{$this->id}', '{$this->name}', '{$this->address}', '{$this->phone}', '{$this->city}')";
			$this->con->consultaSimple($sql);
		}

		public function addresses_delevery(){
			$sql = "SELECT * FROM delivery_addresses WHERE id_costumer = {$this->id_costumer}";
			$data = $this->con->consultaRetorno($sql);
			return $data;
		}
		public function delete_addres(){
			$sql = "DELETE FROM delivery_addresses where id = '{$this->id}'";
			$this->con->consultaSimple($sql);
			

		}
		public function update_address(){
			$sql = "UPDATE delivery_addresses SET name = '{$this->name}',
							address = '{$this->address}',
							phone = '{$this->phone}',
							city = '{$this->city}' WHERE id = {$this->id}";
			$this->con->consultaSimple($sql);
		}

		
		

	}


	//$login = new login();
 ?>