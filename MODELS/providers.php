<?php 
	namespace MODELS;
	
	class users 
	{
		public $id;
		public $data;
		public $name;
		public $last_name;
		public $email;
		private $password;
		public $phone;
		public $ranch;
		public $department;
		public $template;
		public $id_user;
		public $status;
		public $read = 0;
		public $write = 0;
		public $edit = 0;
		public $delete = 0;
	
		
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
			$sql = "SELECT * FROM users";
			$data = $this->con->consultaRetorno($sql);
			return $data;
		} 
		public function validate_email($email)
		{
			$sql_validate = "SELECT * FROM users WHERE email = '$email'";
			$data = $this->con->consultaRetorno($sql_validate);
			$n_mail = mysqli_num_rows($data);
			return $n_mail;
		}
		public function save_user()
		{
			$n_mail = $this->validate_email($this->email);
			if ($n_mail == null) {
				$sql = "INSERT INTO users (id, name, last_name, email, pass, phone, ranch, department, status) VALUES (
					null,
					'{$this->name}',
					'{$this->last_name}',
					'{$this->email}',
					'{$this->password}',
					'{$this->phone}',
					'{$this->ranch}',
					'{$this->department}',
					'1'
				)";
				$this->con->consultaSimple($sql);
				header("Location: ".URL."users/");
			}else{
				header("Location: ".URL."users/add/?msg=Ya existe un registro con este correo");
			}

			
		}

		public function select_user()
		{
			$sql = "SELECT * FROM users WHERE id = '{$this->id}'";
			$data = $this->con->consultaRetorno($sql);
			$row = mysqli_fetch_assoc($data);
			return $row;
		}

		public function update_user()
		{
	
			$sql = "UPDATE users SET name = '{$this->name}',
						last_name = '{$this->last_name}',
						email = '{$this->email}', 
						phone = '{$this->phone}', 
						ranch = '{$this->ranch}', 
						department = '{$this->department}',
						status = '{$this->status}' WHERE id = {$this->id}";
			$this->con->consultaSimple($sql);
			header("Location: ".URL."users/");
			
		}
		public function add_permits()
		{
			$sql = "INSERT INTO permits (id, id_user, template, leer, escribir, editar, eliminar, status) VALUES (
				null,
				'{$this->id_user}',
				'{$this->template}',
				'{$this->read}',
				'{$this->write}',
				'{$this->edit}',
				'{$this->delete}',
				'{$this->status}')";
			$this->con->consultaSimple($sql);
			//header("Location: ".URL."users/");

		}

		public function update_permits(){
		
			$sql = "UPDATE permits SET	leer = '{$this->read}',
						escribir = '{$this->write}', 
						editar = '{$this->edit}', 
						eliminar = '{$this->delete}', 
						status = '{$this->status}'  WHERE id = {$this->id}";
			$this->con->consultaSimple($sql);
		}

		public function select_permits(){
			$sql = "SELECT * FROM permits WHERE id_user = '{$this->id}'";
			$data = $this->con->consultaRetorno($sql);
			return $data;
		}

		public function delete_user()
		{
			$sql = "DELETE FROM users WHERE id = '{$this->id}'";
			$this->con->consultaSimple($sql);
		}	
	}
 ?>