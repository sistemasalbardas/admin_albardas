<?php 
	namespace MODELS;
	
	class login 
	{
		public $email; 
		public $pass; 
		public $array = array(); 
		public $con; 

		public function __construct(){
			$this->con = new conexion();
		}

		public function set($atributo, $contenido){
			$this->$atributo = $contenido;
		}
		
		public function get($atributo){
			return $this->$atributo;
		}

		public function validate(){

			$sql = "SELECT * FROM users WHERE email = '{$this->email}' AND pass = '{$this->pass}'";
			$datos = $this->con->consultaRetorno($sql);
			$row = mysqli_fetch_array($datos);
  			$rowcount = mysqli_num_rows($datos);
  			if ($rowcount == 1) {
  				$array = array('id' => $row['id'],
								'name' => $row['name'],
								'email' => $row['email'],
								'phone' => $row['phone'],
								'ranch' => $row['ranch'],
								'department' => $row['department'],
								'img_profile' => $row['img_profile']);
  				
  				$_SESSION['user'][] = $array;
  				header("Location: ".URL."personal/");
  			
  			}else{

  				header("Location: ".URL."login/?error=usuario o correo incorractos");
  			}
			//error_log(print_r($row,true));	
		}

		public function save(){
			
			if (!$_POST) {
				$datos = $this->seccion->listar();
				return $datos;
			}else{
				$permitidos = array('image/jpeg','image/png','image/gif','image/jpg');
				$limite = 700;

				if (in_array($_FILES['imagen']['type'],$permitidos) && $_FILES['imagen']['size'] <= $limite * 1024) {
					$nombre = date("is").$_FILES['imagen']['name'];
					$ruta = "VIEWS".DS."TEMPLATES".DS."IMG".DS."avatars".DS.$nombre;
					move_uploaded_file($_FILES["imagen"]['tmp_name'],$ruta);

					$this->estudiante->set("nombre", $_POST['nombre']);
					$this->estudiante->set("edad", $_POST['edad']);
					$this->estudiante->set("promedio", $_POST['promedio']);
					$this->estudiante->set("imagen", $nombre);
					$this->estudiante->set("id_seccion", $_POST['seccion']);
					
					$this->estudiante->add();
					header("Location: ".URL."estudiantes");
				}else{
					print("no jhala");
				}
			
			}
		}

		
		

	}


	//$login = new login();
 ?>