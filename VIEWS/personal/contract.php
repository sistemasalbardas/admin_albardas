<?php 
	if (!isset($_SESSION['user'])) {
		header("Location:".URL."login/");
	}

	$data = $personal->contract();
 ?>

 <!-- <div class="mainContainer"> -->
	<div class="clear"></div>
	<div class="containerPanel">
		<?php print_r($data); ?>
	</div>
<!-- </div> -->