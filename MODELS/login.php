<?php 
	namespace MODELS;

	use CONTROLLERS\encrypt as encrypt;

	class login 
	{
		public $encrypt; 
		public $email; 
		public $pass; 
		public $array = array(); 
		public $con; 

		public function __construct(){
			$this->con = new conexion();
			$this->encrypt = new encrypt();
		}

		public function set($atributo, $contenido){
			$this->$atributo = $contenido;
		}
		
		public function get($atributo){
			return $this->$atributo;
		}

		public function validate(){
					
			$sql = "SELECT * FROM users WHERE email = '{$this->email}' AND status = '1'";

			$datos = $this->con->consultaRetorno($sql);
			$row = mysqli_fetch_array($datos);
			$n_rows = mysqli_num_rows($datos);
			$pass_decrypted = $this->encrypt->openCypher('decrypt', $row['pass'] );

			$sql_permits = "SELECT * FROM permits WHERE id_user = ".$row['id']."";
			$permits = $this->con->consultaRetorno($sql_permits);
			$list_permits = [];

			while ($permis = mysqli_fetch_array($permits)) {
				$list_permits[] = array($permis['id'],
									$permis['id_user'],
									$permis['template'],
									$permis['leer'],
									$permis['escribir'],
									$permis['editar'],
									$permis['eliminar'],
									$permis['status']);
			}

		
			if ($n_rows == 1) {
				if ($pass_decrypted == $this->pass) {
	  				$array = array('id' => $row['id'],
									'name' => $row['name'],
									'email' => $row['email'],
									'phone' => $row['phone'],
									'ranch' => $row['ranch'],
									'department' => $row['department'],
									'permits' => $list_permits
								);
	  				$_SESSION['user'][] = $array;
	  				header("Location: ".URL."dashboard/");
				}else{
					header("Location: ".URL."login/?error=Las credenciales no coinciden con nuestros registros");
				}
			}else{
				header("Location: ".URL."login/?error=Las credenciales no coinciden con nuestros registros");
			}
		}
	}


	$login = new login();
 ?>