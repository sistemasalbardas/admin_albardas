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
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

	<title>ADMINISTRACION</title>
	<link rel="icon" 
      type="image/png" 
      href="<?= URL_IMG?>/favicon.ico" />
  	<link rel="stylesheet" href="<?= URL?>/VIEWS/resources/CSS/helpers.css">
  	<link rel="stylesheet" href="<?= URL?>/VIEWS/resources/CSS/bootstrap-select.min.css">
	<link rel="stylesheet" href="<?= URL?>/VIEWS/resources/CSS/main.css">
	<link rel="stylesheet" href="<?= URL?>/VIEWS/resources/CSS/jquery-ui.min.css">
	<!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:600" rel="stylesheet"> -->
	<link href="https://fonts.googleapis.com/css?family=Rubik:300,400" rel="stylesheet">
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">
	<!-- nuevos link -->
	
	  <!-- Ionicons -->
	  <link rel="stylesheet" href="<?= URL?>/VIEWS/resources/bower_components/Ionicons/css/ionicons.min.css">
	  <!-- jvectormap -->
	  <link rel="stylesheet" href="<?= URL?>/VIEWS/resources/bower_components/jvectormap/jquery-jvectormap.css">
	  <!-- Theme style -->
	  <link rel="stylesheet" href="<?= URL?>/VIEWS/resources/bower_components/bootstrap-select/css/boostrap-select.min.css">
	  <link rel="stylesheet" href="<?= URL?>/VIEWS/dist/css/AdminLTE.min.css">
	  <link rel="stylesheet" href="<?= URL?>/VIEWS/resources/CSS/animate.css">
	  <link rel="stylesheet" href="<?= URL?>/VIEWS/dist/css/skins/_all-skins.min.css">
	  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <!-- <link href="https://unpkg.com/ionicons@4.2.4/dist/css/ionicons.min.css" rel="stylesheet"> -->
      <!-- Latest compiled and minified CSS -->
      <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
     <link rel="stylesheet" href="<?= URL?>/VIEWS/resources/bower_components/bootstrap/dist/css/bootstrap.min.css">
	  <!-- Font Awesome -->
	  <link rel="stylesheet" href="<?= URL?>/VIEWS/resources/CSS/all.min.css">
	


</head>
<body class="hold-transition skin-green sidebar-mini fixed">
	<div class="wrapper">
		<div class="spinner">
			  <div class="bounce1"></div>
			  <div class="bounce2"></div>
			  <div class="bounce3"></div>
			  <span class="block s12">
			  	Cargando..
			  </span>
		</div>
		<div class="bgLightBlack"></div>
<?php if (isset($_SESSION['user'])){require "menu.php"; } ?>
	


	          
	        
	            <!-- /.box-header -->
	        
	        	<!-- contenido dinamico con la funcion destruct -->
	<?php	}	public function __destruct(){?>
			

	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<script src="<?= URL?>/VIEWS/resources/JS/scripts.js"></script>
	<script src="<?= URL?>/VIEWS/resources/JS/bootstrap-select.js"></script>
	<script src="<?= URL?>/VIEWS/resources/JS/ajax.js"></script>
	<script src="<?= URL?>/VIEWS/resources/JS/jquery-ui/jquery-ui.min.js"></script>
	<script src="<?= URL?>/VIEWS/resources/bower_components/bootstrap-select/js/bootstrap-select.min.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="http://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
	<script src="http://cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"></script>

	<!-- nuevos scripts -->
	<!-- AdminLTE App -->
	<script src="<?= URL?>/VIEWS/dist/js/adminlte.min.js"></script>


</body>
</html>

<?php
	ob_end_flush();
		}
	}
	
?>