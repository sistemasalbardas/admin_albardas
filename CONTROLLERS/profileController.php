<?php

	namespace CONTROLLERS;

	use MODELS\profile as profile;

	class profileController{

		private $profile;

		public function __construct(){
			$this->profile = new profile();

		}
		
		public function index()
		{
			$this->profile->set("id", $_GET['id']);
			$row = $this->profile->user_id();
			return $row;
			
		}

		public function update()
		{
			
		}
		
	}
	
	$profile = new profileController();
 ?>	