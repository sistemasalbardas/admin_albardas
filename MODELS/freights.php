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
		public $f_freight; 
		public $concept; 
		public $amount; 
		public $coments; 
		public $name_invoice; 
		public $folio; 

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
	
			$sql = "SELECT * FROM remisions r INNER JOIN costumers c ON r.id_costumer = c.id INNER JOIN freights f ON f.f_flete = r.f_freight AND f.price > 0";
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


			$sql = "SELECT * FROM remisions r INNER JOIN costumers c ON r.id_costumer = c.id INNER JOIN freights f ON f.f_flete = r.f_freight AND f.price > 0 INNER JOIN transporters t ON r.id_trasport = t.id  WHERE r.f_freight = '{$this->f_flete}'";
			$data = $this->con->consultaRetorno($sql);
		
			return $data;
			
		}
		public function list_payments(){
			$sql = "SELECT * FROM freight_payment WHERE f_freight = '{$this->f_flete}'";
			$data = $this->con->consultaRetorno($sql);
			return $data;
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

		public function new_payment(){

			$sql = "INSERT INTO freight_payment (id, f_freight, date, concept, amount, comments) VALUES (
				null, 
				'{$this->f_freight}',
				'{$this->date}',
				'{$this->concept}',
				'{$this->amount}',
				'{$this->coments}'
			)";
			$this->con->consultaSimple($sql);

		}

		public function set_invoice(){
			$sql = "UPDATE freights SET 
					bills = '{$this->name_invoice}',
					n_bills = '{$this->n_bills}' WHERE f_flete = {$this->folio}";
			$this->con->consultaSimple($sql);
		}

		

	}

 ?>