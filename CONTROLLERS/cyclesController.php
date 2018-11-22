<?php
	namespace CONTROLLERS;
	
	use MODELS\cycles as cycles;

	class cyclesController{
		private $cycles;
		public $list_keys = array(); 
		
		public function __construct(){
			$this->cycles = new cycles();

		}
		
		public function index()
		{
		
			return false;
			
		}
	}
	$cycles = new cyclesController();
?>	