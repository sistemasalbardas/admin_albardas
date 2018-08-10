<?php 
	date_default_timezone_set('America/Monterrey');
	define('DS', DIRECTORY_SEPARATOR);
	define('ROOT', realpath(dirname(__FILE__)) . DS);

	//LOCAL->
	define('URL', "http://192.168.50.110/admin_albardas/");
	//define('URL', "http://192.168/ADMIN/");

	define('URL_IMG', URL."VIEWS/resources/IMG/");
	define('URL_RES', URL."resources/");

	require_once "CONFIG/autoload.php";
	require_once "RESOURCES/MPDF/mpdf.php";
	require_once "VIEWS/template.php";

	CONFIG\autoload::run();
	CONFIG\enrutador::run(new CONFIG\request());
	/*EJEMPISOUVSOUSVUV*/
	/*EJEJEJEJE*/

?>

