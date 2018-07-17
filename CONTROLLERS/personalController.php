<?php 
	namespace CONTROLLERS;
	
	use MODELS\personal as personal;

	class personalController
	{
		private $personal;
		private $inicio;
		private $fin;
		private $id;

		public function __construct(){
			$this->personal = new personal();
		}

		public function index(){
			if (isset($_GET['tab'])) {
				$this->personal->set("id", $_GET['tab']);
				$datos = $this->personal->listar();
				return $datos;
				return $datos1;
			}else{
				$this->personal->set("id", 1);
				$datos = $this->personal->listar();
				return $datos;
				return $datos1;
			}
		}

		public function indexCuadrillas(){
			$cuadrillas = $this->personal->listarCuadrillas();
			return $cuadrillas;
		}

		public function delete($id){
			if ($_GET) {
				$this->personal->set("id", $id);
				$row = $this->personal->deleteWork();

			}
		}



		public function saveWork(){
			if (!$_POST) {
			//error_log("no se arma");
				return false;
			}else{
			
				$this->personal->set("name", $_POST['name']);
				$this->personal->set("second_name", $_POST['second_name']);
				$this->personal->set("last_name", $_POST['last_name']);
				$this->personal->set("second_last_name", $_POST['second_last_name']);
				$this->personal->set("date_bird", $_POST['date_bird']);
				$this->personal->set("origin_place", $_POST['origin_place']);
				$this->personal->set("diaseases", $_POST['diaseases']);
				$this->personal->set("curp", $_POST['curp']);
				$this->personal->set("salary_day", $_POST['salary_day']);
				$this->personal->set("contract_time", $_POST['contract_time']);
				$this->personal->set("advance", $_POST['advance']);
				$this->personal->set("cuadrilla", $_POST['cuadrilla']);
				$this->personal->set("start_date", date('Y-m-j'));
				$this->personal->addWork();
				//error_log("si entro al controlador personal");
				header("Location: ".URL."personal/?tab=".$_POST['cuadrilla']);
			}
		}

		public function deleteWork($id){
			if (!$_GET) {
				//error_log("no se puede eliminar el usuario");
				return false;

			}else{

				$this->personal->set("id", $id);
				$this->personal->eraseWork();
				header("Location: ".URL."personal/");
			}
		} 

		public function editWork($id){
			if ($_POST) {
				//error_log(print_r($_POST,true));
				$this->personal->set("id", $_POST['id']);
				$this->personal->set("name", $_POST['name']);
				$this->personal->set("second_name", $_POST['second_name']);
				$this->personal->set("last_name", $_POST['last_name']);
				$this->personal->set("second_last_name", $_POST['second_last_name']);
				$this->personal->set("date_bird", $_POST['date_bird']);
				$this->personal->set("origin_place", $_POST['origin_place']);
				$this->personal->set("diaseases", $_POST['diaseases']);
				$this->personal->set("curp", $_POST['curp']);
				$this->personal->set("status", $_POST['status']);
				$this->personal->set("salary_day", $_POST['salary_day']);
				$this->personal->set("contract_time", $_POST['contract_time']);
				$this->personal->set("cuadrilla", $_POST['cuadrilla']);
				$this->personal->update();
				
			}else{
				$this->personal->set("id", $id);
				$row = $this->personal->selectWork();
				return $row;
			}
		} 

		public function curp(){
			if($_POST){
				//error_log("sii entro al controlador");
				$this->personal->set("id", $_POST['cuadrilla']);
				$this->personal->set("curp", $_POST['curp']);
				$datos = $this->personal->searchwork();

				if($datos['nrows'] == 1){
					$msg = "El trabajador con la curp ".$_POST['curp']." ya existe";
				}else{
					$msg = "El trabajador con la curp ".$_POST['curp']." no existe";
				}
				
				header("Location: ".URL."personal/saveWork/?curp=".$_POST['curp']."&msg=".$msg."&id=".$_POST['cuadrilla']."");
				
				return $datos;

			}else{
				
			}
		}

		public function viewWork($id){
			$this->personal->set("id", $id);
			$row = $this->personal->selectWork();
			return $row;
		}
		
		/*public function generateContract($id){
			$this->personal->set("id", $id);
			$row = $this->personal->selectWork();
			return $row;
		}*/

		public function paysheet(){
			if (isset($_GET['id'])) {
				$this->personal->set("id", $_GET['id']);
				$datos = $this->personal->listar();
				return $datos;
			}else{
				$this->personal->set("id", 1);
				$datos = $this->personal->listar();
				return $datos;
			}
		}

		public function savePayshet(){
			//error_log("controlador payshet");
			error_log(print_r($_POST,true));
			
			$this->personal->set("id_work", $_POST['id_work']); 
			$this->personal->set("date", $_POST['date']);
			$i = 1;
			while ($i <= $_POST['nDays']) {
				$this->personal->set("assistence", $_POST['assistence_'.$i.'']);
				$this->personal->set("time_e", $_POST['time_'.$i.'']);
				$this->personal->set("place", $_POST['place_'.$i.'']);
				$this->personal->set("date", $_POST['date_'.$i.'']);
				$this->personal->set("price", $_POST['price_'.$i.'']);
				$this->personal->save();
				$i++;
			} 
			
			

		}

		public function contract(){
			$this->personal->set("id", $_GET['tab']);
			$data = $this->index();	
			return $data;
		}

		
	
		//**FUNCIONES DE CUADRILLAS **//
		///AQUI ME QUEDE 05/05/2018 TERMINAR EL TEMA DE LAS CUARILLAS

		public function saveGroup(){
			if (!$_POST) {
				
				return false;

			}else{
				$this->personal->set("name", $_POST['name']);
				$this->personal->set("liable", $_POST['liable']);
				$this->personal->set("nPeople", $_POST['nPeople']);
				$this->personal->set("coments", $_POST['coments']);
				$this->personal->set("phone", $_POST['phone']);
				$this->personal->addCuadrilla();
			}
		}

		
		//FUNCIONES PARA GENERAR NOMINA
		public function prePayshet(){
			return false;
		}

		public function seePayshet(){
			if ($_POST){
				$this->personal->set("id", $_POST['cuadrilla']);
				$this->personal->set("startDate", $_POST['startDate']);
				$this->personal->set("endDate", $_POST['endDate']);
				$data = $this->personal->prePayshet();
				return $data;
			}
		}
		
	}

	$personal = new personalController;

 ?>	

