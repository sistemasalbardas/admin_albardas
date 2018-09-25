<?php 
	namespace MODELS;
	
	class purchasing 
	{
		public $email; 
		public $rfc; 
		public $array = array(); 
		public $con; 
		public $id; 
		public $name; 
		public $last_name; 
		public $phone; 
		public $address; 
		public $fixed_phone; 
		public $mobile_phone; 
		public $name_contact; 
		public $contact_phone; 
		public $comments; 

		public function __construct(){
			$this->con = new conexion();
		}

		public function set($atributo, $contenido){
			$this->$atributo = $contenido;
		}
		
		public function get($atributo){
			return $this->$atributo;
		}
		public function listar_suppliers()
		{
			$sql = "SELECT * FROM providers";
			$data = $this->con->consultaRetorno($sql);
			return $data;
		}

		public function save_supplier()
		{
			$sql = "INSERT INTO providers (id, name, rfc, address, fixed_phone, mobile_phone, email, name_contact, comments) VALUES 
				(
					null, 
					'{$this->name}',
					'{$this->rfc}',
					'{$this->address}',
					'{$this->fixed_phone}',
					'{$this->mobile_phone}',
					'{$this->email}',
					'{$this->name_contact}',
					'{$this->comments}'
				);";
			$this->con->consultaSimple($sql);
		}

		function supplier_id()
		{
			$sql = "SELECT * FROM providers WHERE id = '{$this->id}'";
			$data = $this->con->consultaRetorno($sql);
			$row = mysqli_fetch_assoc($data);
			return $row; 
		}

		public function delete_suplier()
		{
			$sql = "DELETE FROM providers WHERE id = '{$this->id}'";
			$this->con->consultaSimple($sql);
		}

		public function update_suplier()
		{
			///error_log(print_r($_POST,true));
			$sql = "UPDATE providers SET 
				name = '{$this->name}', 
				rfc = '{$this->rfc}', 
				address = '{$this->address}', 
				fixed_phone = '{$this->fixed_phone}',
				mobile_phone = '{$this->mobile_phone}',
				email = '{$this->email}',
				name_contact = '{$this->name_contact}',
				comments = '{$this->comments}' WHERE id = '{$this->id}'";
			$this->con->consultaSimple($sql);

		
		}


	}


	$purchasing = new purchasing();
 ?>