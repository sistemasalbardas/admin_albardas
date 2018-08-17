<?php 
	namespace MODELS;
	class freights 
	{
		//FLETES
		public $con; 
		public $f_flete; 
		public $f_embark; 
		public $price; 
		public $currency; 
		public $date; 

		public function __construct(){
			$this->con = new conexion();
		}

		public function set($atributo, $contenido){
			$this->$atributo = $contenido;
		}
		
		public function get($atributo){
			return $this->$atributo;
		}

		public function list(){	
	
			$sql ="SELECT   *  FROM remisions INNER JOIN costumers 
			            ON remisions.id_costumer = costumers.id";
			$datos = $this->con->consultaRetorno($sql);
			return $datos;
		}

		public function select_freight()
		{
			
			$sql = "SELECT * FROM freights WHERE id = '{$this->id}'";
			$data = $this->con->consultaRetorno($sql);
			$row = mysqli_fetch_assoc($data);
			return $row;
		}

		public function info_status(){
			$sql ="SELECT  *  FROM remisions INNER JOIN transporters 
			            ON remisions.id_trasport = transporters.id where f_freight = '{$this->f_flete}'";
			$datos = $this->con->consultaRetorno($sql);
			$row = mysqli_fetch_assoc($datos);
			return $row;

		
			
		}

		public function update_freight()
		{
	
			$sql = "UPDATE freights SET 
						f_flete = '{$this->f_flete}',
						f_embark = '{$this->f_embark}',
						price = '{$this->price}', 
						currency = '{$this->currency}', 
						date = '{$this->date}' WHERE id = {$this->id}";
			$this->con->consultaSimple($sql);
			header("Location: ".URL."freights/");
			
		}
	


				
	}

 ?>