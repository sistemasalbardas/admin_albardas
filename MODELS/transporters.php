<?php 
	namespace MODELS;

	class transporters 
	{
		public $id; 
		public $con; 
		public $id_costumer; 
		public $pass; 
		public $array = array(); 
		public $name; 
		public $address; 
		public $rfc; 
		public $phone; 
		public $caat; 
		public $alpha; 
		public $iccmx; 
		public $type; 
		public $temperature; 
		public $placa; 
		public $brand; 
		public $color; 
		public $placa_2; 
		public $model; 
		public $num_econ; 


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
			$sql = "SELECT * FROM transporters";
			$data = $this->con->consultaRetorno($sql);
			return $data;
		}
		public function add(){
			$sql = "INSERT INTO transporters (id, name, rfc, address, phone, caat, alpha, iccmx, us_dot) VALUES (null, '{$this->name}', '{$this->rfc}', '{$this->address}', '{$this->phone}', '{$this->caat}', '{$this->alpha}','{$this->iccmx}','{$this->us_dot}')";
			$this->con->consultaSimple($sql);

		}
		
		public function delete(){
			$sql = "DELETE FROM transporters WHERE id = {$this->id}";
			$this->con->consultaSimple($sql);

		}
		public function selectTransport(){
			$sql = "SELECT * FROM transporters WHERE id = {$this->id}";
			$data = $this->con->consultaRetorno($sql);
			$row = mysqli_fetch_assoc($data);
			return $row;
		}

		public function update(){
			$sql = "UPDATE transporters SET name ='{$this->name}',
							rfc ='{$this->rfc}',
							address ='{$this->address}',
							phone ='{$this->phone}',
							caat='{$this->caat}',
							alpha='{$this->alpha}',
							iccmx='{$this->iccmx}',
							us_dot='{$this->us_dot}' WHERE id={$this->id}";
							
			$this->con->consultaSimple($sql);
		}

		//FUNCIONES DE DRIVERS
		public function listDrivers(){
			$sql = "SELECT * FROM drivers WHERE id_transporters = '{$this->id}'";
			$data = $this->con->consultaRetorno($sql);
			return $data;
		}

		public function add_driver(){
			$sql = "INSERT INTO drivers (id, id_transporters, name, last_name, num_lic, address, phone) VALUES 
			(null, '{$this->id}','{$this->name}','{$this->last_name}','{$this->num_lic}','{$this->address}','{$this->phone}')";
			$this->con->consultaSimple($sql);
		}

		public function delete_driver()
		{
			$sql = "DELETE FROM drivers WHERE id = {$this->id}";
			$this->con->consultaSimple($sql);
		}
		public function select_driver(){
			$sql = "SELECT * FROM drivers WHERE id = {$this->id}";
			$data = $this->con->consultaRetorno($sql);
			$row = mysqli_fetch_assoc($data);
			return $row;
		}
		public function update_driver(){
			$sql = "UPDATE drivers SET name ='{$this->name}',
							last_name ='{$this->last_name}',
							num_lic ='{$this->num_lic}',
							address ='{$this->address}',
							phone='{$this->phone}' WHERE id={$this->id}";
							
			$this->con->consultaSimple($sql);
		}

		//FUNCIONES DE cajas
		public function list_boxes(){
			$sql = "SELECT * FROM boxes WHERE id_transporters = '{$this->id}'";
			$data = $this->con->consultaRetorno($sql);
			return $data;
		}
		public function add_box(){
			$sql = "INSERT INTO boxes (id, id_transporters, type, temperature,grades, placa, num_econ) VALUES 
			(null, '{$this->id}','{$this->type}','{$this->temperature}','{$this->grades}','{$this->placa}','{$this->num_econ}')";
			$this->con->consultaSimple($sql);
		}

		public function delete_box(){
			$sql = "DELETE FROM boxes WHERE id = {$this->id}";
			$this->con->consultaSimple($sql);
		}

		public function select_box(){
			$sql = "SELECT * FROM boxes WHERE id = '{$this->id}'";
			$data = $this->con->consultaRetorno($sql);
			$row = mysqli_fetch_assoc($data); 
			return $row;
		}

		public function update_box(){
			$sql = "UPDATE boxes SET type ='{$this->type}',
							temperature ='{$this->temperature}',
							grades ='{$this->grades}',
							placa ='{$this->placa}',
							num_econ ='{$this->num_econ}' WHERE id ={$this->id}";			
			$this->con->consultaSimple($sql);
		}

		//FUNCIONES PARA TRAILERS
		public function list_trucks(){
			$sql = "SELECT * FROM trucks WHERE id_transporters = '{$this->id}'";
			$data = $this->con->consultaRetorno($sql);
			return $data;
		}

		public function add_truck(){
			
			$sql = "INSERT INTO trucks (id, id_transporters, brand, model, color, num_econ, placa, placa_2) VALUES 
			(null, '{$this->id}','{$this->brand}','{$this->model}','{$this->color}','{$this->num_econ}','{$this->placa}','{$this->placa_2}')";
			$this->con->consultaSimple($sql);
		}

		public function delete_truck(){
			$sql = "DELETE FROM trucks WHERE id = {$this->id}";
			$this->con->consultaSimple($sql);
		}

		public function edit_truck(){
			$sql = "UPDATE trucks SET brand ='{$this->brand}',
							model ='{$this->model}',
							color ='{$this->color}',
							num_econ ='{$this->num_econ}',
							placa ='{$this->placa}',
							placa_2 ='{$this->placa_2}' WHERE id ={$this->id}";
			$this->con->consultaSimple($sql);

		}
		public function select_truck(){
			$sql = "SELECT * FROM trucks WHERE id = '{$this->id}'";
			$data = $this->con->consultaRetorno($sql);	
			$row = mysqli_fetch_assoc($data); 
			return $row;
		}
		
	}


	//$login = new login();
 ?>