<?php
	namespace CONTROLLERS;

	use MODELS\login as login;

	class loginController{

		private $login;

		public function __construct(){
			$this->login = new login();

		}
		public function logout(){
			session_destroy();
			header("Location:".URL."login/");
		}
		
		public function index()
		{
			
		}

		public function validateLogin(){
			
			if (!$_POST) {
				//$datos = $this->seccion->listar();
				return false;
				
			}else{
				$this->login->set("email", $_POST['email']);
				$this->login->set("pass", $_POST['pass']);
				$this->login->validate();
			}
		}


		
	}
	
	$login = new loginController();
 ?>	