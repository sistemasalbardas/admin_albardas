<?php 
	namespace MODELS;

	use MODELS\cuadrillas as cuadrillas;

	class personal extends cuadrillas
	{
		public $id;
		public $name;
		public $con;
		public $value;
		public $row = array();
		public $datos = array();
		public $array = array();
		public $liable;
		public $nPeople;
		public $coments;
		
		//PARAMETROS DE addWork
		public $second_name;
		public $last_name;
		public $second_last_name;
		public $date_bird;
		public $origin_place;
		public $diaseases;
		public $curp;
		public $salary_day;
		public $contract_time;
		public $cuadrilla;
		public $start_date;
		public $advance;

		public $id_work;
		public $date;
		public $nDays;
		public $assistence;
		public $place;
		public $price;
		public $startDate;
		public $endDate;
		
		public function __construct(){
			$this->con = new conexion();
		}
		
		public function set($atributo, $contenido){
			$this->$atributo = $contenido;
		}

		public function get($atributo){
			return $this->$atributo;
		}

		public function formatDate($date){
			$date = strtotime($date);
			$year =  date("Y", $date);
			$month  = date("m", $date); 
			$day =  date("d", $date);
			
			$datefinish = $year."-".$month."-".$day;

			return $datefinish;
		}

		public function listar(){	
			$sql = "SELECT * FROM personal WHERE cuadrilla = '{$this->id}'";
			$datos = $this->con->consultaRetorno($sql);
			return $datos;
		}

		public function deleteWork(){
			$sql = "SELECT * FROM personal";
			$datos = $this->con->consultaRetorno($sql);
			return $datos;
		}


		public function addWork(){ 
			$sql = "INSERT INTO personal (id, name, second_name, last_name, second_last_name, date_bird, origin_place,diaseases, status, curp, salary_day, contract_time, advance, cuadrilla, start_date) VALUES (null,'{$this->name}','{$this->second_name}','{$this->last_name}','{$this->second_last_name}','{$this->date_bird}','{$this->origin_place}','{$this->diaseases}',1,'{$this->curp}','{$this->salary_day}','{$this->contract_time}','{$this->advance}','{$this->cuadrilla}','{$this->start_date}')";
			$this->con->consultaSimple($sql);
			error_log("si entro al modelo");
		}

		public function eraseWork(){
			$sql = "DELETE FROM personal WHERE id = '{$this->id}'";
			$this->con->consultaSimple($sql);
		} 

		public function selectWork(){
			$sql = "SELECT * FROM personal WHERE id = '{$this->id}'";
			$datos = $this->con->consultaRetorno($sql);
			$row = mysqli_fetch_assoc($datos);
			return $row;
		}

		public function update(){
			
			$sql = "UPDATE personal SET name ='{$this->name}',
							second_name ='{$this->second_name}',
							last_name ='{$this->last_name}',
							second_last_name ='{$this->second_last_name}',
							date_bird='{$this->date_bird}',
							origin_place='{$this->origin_place}',
							diaseases='{$this->diaseases}',
							status='{$this->status}',
							curp='{$this->curp}',
							salary_day='{$this->salary_day}',
							contract_time='{$this->contract_time}',
							cuadrilla='{$this->cuadrilla}' WHERE id={$this->id}";
			$this->con->consultaSimple($sql);
		}

		public function save(){
			$sql = "INSERT INTO assistance (id, id_work, datea, assis, time_e, place, price) VALUES 
					(null, '{$this->id_work}','{$this->date}','{$this->assistence}','{$this->time_e}','{$this->place}','{$this->price}')";

			$this->con->consultaSimple($sql);
		}

		public function searchwork(){
			//error_log("si entro al modelo");
			session_start();
			$sql = "SELECT * FROM personal WHERE curp = '{$this->curp}'";
			$datos = $this->con->consultaRetorno($sql);
			$row = mysqli_fetch_array($datos);
			$numfilas = $datos->num_rows;
			//	error_log("El número de elementos es ".$numfilas);
			
			$array = array("data" => array($row),
							"nrows" => $numfilas); 
			$_SESSION['data'] = $array;
			error_log(print_r($array,true));

			return $array;	
		}

		public function prePayshet(){
			$sql = "SELECT * from personal where cuadrilla = '{$this->id}'";
			$data = $this->con->consultaRetorno($sql);

			$s_date = $this->formatDate($this->startDate);
			$e_date = $this->formatDate($this->endDate);

			while ($row = mysqli_fetch_array($data)) {
				$id_work = $row['id'];

				$sql2 = "SELECT * FROM personal p INNER JOIN assistance a ON p.id = a.id_work WHERE p.id = '$id_work' and a.datea between '$s_date' and '$e_date'"; 

				$data2 = $this->con->consultaRetorno($sql2);
				array_push($this->array, $data2);
			}

			return $this->array;
		}

	} 


?>