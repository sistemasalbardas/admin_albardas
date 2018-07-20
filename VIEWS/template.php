<?php 
	namespace Views;
	session_start();
		
	$template = new template();
	class template{

	public function __construct(){
	ob_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 3.2//EN">
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2">	

	<title>ADMINISTRACION</title>
	<link rel="icon" 
      type="image/png" 
      href="<?= URL_IMG?>/favicon.ico" />
  	<link rel="stylesheet" href="<?= URL?>/VIEWS/resources/CSS/helpers.css">
  	<link rel="stylesheet" href="<?= URL?>/VIEWS/resources/CSS/bootstrap-select.min.css">
	<link rel="stylesheet" href="<?= URL?>/VIEWS/resources/CSS/main.css">
	<link rel="stylesheet" href="<?= URL?>/VIEWS/resources/CSS/jquery-ui.min.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:600" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">


</head>
<body>
<div class="spinner">
	  <div class="bounce1"></div>
	  <div class="bounce2"></div>
	  <div class="bounce3"></div>
	  <span class="block s12">
	  	Cargando..
	  </span>
</div>

<div class="bgLightBlack"></div>

<?php 
		
		if (isset($_SESSION['user'])){require "menu.php"; } 
	?>

	<?php
	}

	public function __destruct(){
	
	?>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<script src="<?= URL?>/VIEWS/resources/JS/scripts.js"></script>
	<script src="<?= URL?>/VIEWS/resources/JS/bootstrap-select.js"></script>
	<script src="<?= URL?>/VIEWS/resources/JS/ajax.js"></script>
	<script src="<?= URL?>/VIEWS/resources/JS/jquery-ui/jquery-ui.min.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="http://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
	<script src="http://cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"></script>

</body>
</html>

<?php
	ob_end_flush();
		}
	}
	
?>