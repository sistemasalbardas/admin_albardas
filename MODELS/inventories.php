<?php 
	namespace MODELS;

	class inventories 
	{
		public $id; 
		public $email; 
		public $pass; 
		public $array = array(); 
		public $con; 
		public $name; 
		public $ranch;
		public $description; 
		public $utility; 
		public $inventories;
		public $id_inventory;
		public $id_product;
		public $quantity;
		public $receiver;
		public $responsable;
		public $comments;
		public $name_product;
		public $exit;
		public $entry;
		public $prod;

		public function __construct(){
			$this->con = new conexion();
		}

		public function set($atributo, $contenido){
			$this->$atributo = $contenido;
		}
		
		public function get($atributo){
			return $this->$atributo;
		}

		public function add()
		{

			$sql = "INSERT INTO inventories (id, name, description, responsable, utility) VALUES (null, '{$this->name}','{$this->description}','{$this->responsable}','{$this->utility}')";
			$this->con->consultaSimple($sql);

		}

		public function delete(){
			$sql = "DELETE FROM inventories WHERE id = {$this->id}";
			$this->con->consultaSimple($sql);
		}

		public function list_inventory_ranch()
		{
			$sql = "SELECT * FROM inventories";
			$data = $this->con->consultaRetorno($sql);
			return $data;
		}

		public function list_inventories()
		{
			$sql = "SELECT * FROM inventories";
			$data = $this->con->consultaRetorno($sql);
			return $data;
		}
		
		public function list_products()
		{
			$sql = "SELECT * FROM products";
			$data = $this->con->consultaRetorno($sql);
			return $data;
		}

		public function list_inventory()
		{
		
			$sql = "SELECT * from inventory where id_inventory = '{$this->id_inventory}'";
			$data = $this->con->consultaRetorno($sql);
			return $data;
		}

		

		public function list_users()
		{
			$sql = "SELECT * FROM users";
			$data = $this->con->consultaRetorno($sql);
			return $data;
		}

		public function new_entry()
		{
			$sql = "SELECT * FROM inventory WHERE id_product = '{$this->id_product}'";
			$data = $this->con->consultaRetorno($sql);
			$nRows = mysqli_num_rows($data);

			if ($nRows == 0) {
				$sql_insert = "INSERT INTO inventory (id, id_inventory, id_product, name_product, quantity, concept, receiver, comments) VALUES (null,'{$this->id_inventory}','{$this->id_product}','{$this->name_product}','{$this->quantity}', '{$this->concept}','{$this->receiver}','{$this->comments}')";
				$this->con->consultaSimple($sql_insert);
				
			}else if($nRows == 1){
				$inventory = mysqli_fetch_assoc($data);
				$quantity = $inventory['quantity'] + $this->quantity;
					$sql_update = "UPDATE inventory SET quantity = '$quantity' WHERE id_product = {$this->id_product}";
				$this->con->consultaSimple($sql_update);

				

			}
		}
		public function output()
		{
			$products = $_SESSION['products'];
			$ranch = $_SESSION['user'][0]['ranch'];
			
			$sql = "SELECT * FROM inventory where id_inventory = '$ranch'";

			$datos = $this->con->consultaRetorno($sql);
			
			while ($row = mysqli_fetch_assoc($datos)) {
				
				foreach ($products as $key ) { 
					
					if ($key[0] == $row['id']) {

						$available = $row['quantity'] - $key[2];
						$id = $key[0];
						$sql_update = "UPDATE inventory set quantity = '$available' WHERE id = '$id'";
						$this->con->consultaSimple($sql_update);

					}
					
				}

			}
						
						
	 		

	
		}

		public function inventory_transfer()
		{

		
			$sql = "SELECT * from inventory where id_inventory = '{$this->exit}' AND id = '{$this->prod}'";
			$data = $this->con->consultaRetorno($sql);
			
			$row = mysqli_fetch_assoc($data);
			error_log(print_r($row,true));
			$quantity1 = $row['quantity'];
			$quantity2 = $this->quantity;

			$final_amount = $quantity1 - $quantity2;

			$sql_update = "UPDATE inventory SET quantity = '$final_amount' WHERE id = {$this->prod}";
			$this->con->consultaSimple($sql_update);



			$sql_entry = "SELECT * from inventory where id_inventory = '{$this->entry}' AND id_product = '{$this->id_product}'";
			$data = $this->con->consultaRetorno($sql_entry);
			$result = mysqli_num_rows($data);


			if ($result == 0) {
				$sql_insert = "INSERT INTO inventory (id, id_inventory, id_product, name_product, quantity, concept, receiver, comments) VALUES (null,'{$this->entry}','{$this->id_product}','{$this->name_product}','{$this->quantity}', 'transferencia','','')";
				$this->con->consultaSimple($sql_insert);
				
			}else if  ($result == 1){
				$row = mysqli_fetch_assoc($data);
				$quantity = (int)$row['quantity'];
				$quantity2 = (int)$this->quantity;
				$final_amount = $quantity + $quantity2;
				$sql_update_add = "UPDATE inventory SET quantity = '$final_amount' WHERE id_inventory = '{$this->entry}' AND id_product = '{$this->id_product}'";
				$this->con->consultaSimple($sql_update_add);
				
			}


			


			


		}

			

	}


	
 ?>