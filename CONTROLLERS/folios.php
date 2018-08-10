<?php 

	function folio_carga($name_costumer, $cadena, $con)
	{
		
	    list($palabra1, $palabra2) = explode(' ', $cadena);
	  
		$year = date ("Y");
		$year1 = substr($year , -2 , 2);
		$sql = "SELECT * FROM costumers where id_costumer  = '".$name_costumer."'";
		//$sql = "SELECT * FROM costumers";
		$result = mysqli_query($con, $sql);
		$result_folio = mysqli_fetch_array($result);
		$result_folio['embark'];

	

	   	$folio_embarque = $result_folio['embark'];
   		$result_new = $folio_embarque + 1;
		

		//$update_folio = "UPDATE costumers SET embark = '$result_new' WHERE id_costumer  = '$name_costumer'"; 

   		//mysqli_query($con, $update_folio);
   		
		$resultado1 = substr($palabra1 , -0 , 1);
		$resultado2 = substr($palabra2, -0 , 1);
		$resultado3 = substr($palabra2, 1 , 1);
		$nString = strlen($result_new); 
		if ($resultado1 == $resultado2) {
			
			

			switch ($nString) {
				case 0:
					return $year1."-".$resultado1.$resultado3."-000".$result_new;
					break;

				case 1:
					return $year1."-".$resultado1.$resultado3."-000".$result_new;
					break;

				case 2:
					return $year1."-".$resultado1.$resultado3."-00".$result_new;
					break;
				
				case 3:
					return $year1."-".$resultado1.$resultado3."-0".$result_new;
					break;

				case 4:
					return $year1."-".$resultado1.$resultado3."-".$result_new;
					break;
			}

		}else{

			switch ($nString) {
				case 0:
					return $year1."-".$resultado1.$resultado2."-000".$result_new;
					break;

				case 1:
					return $year1."-".$resultado1.$resultado2."-000".$result_new;
					break;

				case 2:
					return $year1."-".$resultado1.$resultado2."-00".$result_new;
					break;
				
				case 3:
					return $year1."-".$resultado1.$resultado2."-0".$result_new;
					break;

				case 4:
					return $year1."-".$resultado1.$resultado2."-".$result_new;
					break;
		
			}
		}
		
		
		
	}
	
	//170171
	function folio_embarque($con)
	{
		
	  	$sql = "SELECT * FROM folios";
		$result = mysqli_query($con, $sql);
		$result_folio = mysqli_fetch_array($result);
		date_default_timezone_set("America/Mexico_City");
		$year = date ("Y");
		$year1 = substr($year , -2 , 2);
   		$folio_embarque = $result_folio['folio_embarque'];
   		$result_new = $folio_embarque + 1;
   		$update_folio = "UPDATE folios SET folio_embarque = '$result_new'";
   		//mysqli_query($con, $update_folio);
   		$nString = strlen($result_new); 

		switch ($nString) {
			case 0:
				return $year1."000".$result_new;
				break;

			case 1:
				return $year1."000".$result_new;
				break;

			case 2:
				return $year1."00".$result_new;
				break;
			
			case 3:
				return $year1."0".$result_new;
				break;

			case 4:
				return $year1.$result_new;
				break;
		}
	}

	//FOLIO DE EMVARQUE 	

	function folio_flete($con)
	{	
		
	   	$sql = "SELECT * FROM folios";
		$result = mysqli_query($con, $sql);
		$result_folio = mysqli_fetch_array($result);
		date_default_timezone_set("America/Mexico_City");
		$year = date ("Y");
		$year1 = substr($year , -2 , 2);
   		$folio_embarque = $result_folio['folio_flete'];
   		$result_new = $folio_embarque + 1;

   		$nString = strlen($result_new); 

		switch ($nString) {
			case 0:
				return $year1."000".$result_new;
				break;

			case 1:
				return $year1."000".$result_new;
				break;

			case 2:
				return $year1."00".$result_new;
				break;
			
			case 3:
				return $year1."0".$result_new;
				break;

			case 4:
				return $year1.$result_new;
				break;
		}
	} 

	?>