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
			if ($_POST) {
				$this->profile->set("id", $_POST['id']);
				$this->profile->set("name", $_POST['name']);
				$this->profile->set("last_name", $_POST['last_name']);
				$this->profile->set("email", $_POST['email']);
				$this->profile->set("phone", $_POST['phone']);
				$this->profile->update_user();
				
			}
		}
		
	}
	$profile = new profileController();
 ?>	