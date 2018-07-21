
<div class="menuTop block  ">
	<div class="row">
		<div class="col-lg-2 col-md-2 col-sm-3 col-xs-3 ">
			<div class="block h50 ">
				<div class="content middle text-center cWhite text-uppercase ">
					Agricola las albardas
			
				</div>
			</div>
		</div>
		<div class="col-lg-1 col-md-1  col-sm-1 col-xs-1 " >
			<div class="block h50 "  id="menuToggle">
				<div class="content middle text-center cWhite adjust"  onclick="menuToggle(this);">

<<<<<<< HEAD
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
        
          <!-- Notifications: style can be found in dropdown.less -->
       
          <!-- Tasks: style can be found in dropdown.less -->
         
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fas fa-user-circle"></i>
              <span class="hidden-xs"><?= $_SESSION['user'][0]['name']?></span>
            </a>
            <ul class="dropdown-menu animated flipInY">
              <!-- User image -->
              <li class="user-header">
                <i class="fas fa-user-circle"></i>

                <p>
                  <?= $_SESSION['user'][0]['name']?>
                  <small><?=$_SESSION['user'][0]['department']?></small>
                </p>
              </li>
              <!-- Menu Body -->
             
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="<?=URL?>login/logout" class="btn btn-default btn-flat">Salir <i class="fas fa-power-off"></i></a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          
        </ul>
      </div>
    </nav>
 </header>

<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?= URL_IMG ?>/rancho.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?= $_SESSION['user'][0]['name']?></p>
          <!-- Status -->
          <?php 	
			switch ($_SESSION['user'][0]['ranch']) {
				case '1':
					$ranch = "ALBARDAS";
					break;
				case '2':
					$ranch = "MAGDALENAS";
					break;
=======
					<i class="material-icons">
					menu
					</i>
				</div>
			</div>
			
		</div>
		<div class="col-lg-1 hidden-sm hidden-xs">
			<div class="block h50 ">
				<div class="content middle text-center cWhite adjust">
					<div class="avatar centerImg" style="background: url('<?= URL_IMG ?>/rancho.jpg');">
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-3 hidden-sm hidden-xs ">
			<div class="block h50 ">
				<div class="content middle text-left cWhite  s16">
					<?php 	
						switch ($_SESSION['user'][0]['ranch']) {
							case '1':
								$ranch = "ALBARDAS";
								break;
							case '2':
								$ranch = "MAGDALENAS";
								break;
							
							default:
								$ranch = "ALBARDAS";
								break;
						}
					 ?>
>>>>>>> admin_lte
				
					<?= $ranch." - " .$_SESSION['user'][0]['department'] ?>
					
				</div>
			</div>
		</div>

		<div class="col-lg-1 ol-md-1 ol-sm-1 col-xs-2 ">
			<div class="block h50 ">
				<div class="content middle text-center cWhite adjust">
					<div class="avatar centerImg" style="background: url('<?= URL_IMG ?>/avatar.png');">
						
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-5">
			<div class="block h50 ">
				<div class="content middle text-left cWhite  s16">
				
					Bienvenido: 
					<?= $_SESSION['user'][0]['name']?>
					
				</div>
			</div>
		</div>
	</div>
</div>
<nav id="cd-lateral-nav">
	<ul class="cd-navigation">
		

		<li class="item-has-children">
			<a href="#0">Remisiones</a>
			<ul class="sub-menu">
				<li><a href="<?=URL?>referrals/">Nueva remision</a></li>
				<li><a href="<?=URL?>referrals/control/">Control de remisiones</a></li>
		
			</ul>
		</li> <!-- item-has-children -->

		<li class="item-has-children hidden">
			<a href="#0">Personal</a>
			<ul class="sub-menu">
				<li><a href="<?=URL?>personal/?tab=1">Personal</a></li>
				
			</ul>
		</li>
		<li class="item-has-children hidden">
			<a href="#0">Requisiciones</a>
			<ul class="sub-menu">
				<li><a href="<?=URL?>requisitions/">nueva requisicion</a></li>
				<li><a href="<?=URL?>requisitions/control/">Control </a></li>
				<li><a href="<?=URL?>requisitions/config/">Configuracion </a></li>
		
			</ul>
		</li> <!-- item-has-children -->
		
	</ul> <!-- cd-navigation -->

	<ul class="cd-navigation cd-single-item-wrapper">
	
		<li><a href="<?=URL?>products/">Productos</a></li>
		<li><a href="<?=URL?>freights/">Fletes</a></li>
		<li><a href="<?=URL?>inventories/">Inventarios</a></li>
		<li><a href="<?=URL?>costumers/">Clientes</a></li>
		<li><a href="<?=URL?>transporters/">Transportistas</a></li>
		<li><a href="<?=URL?>login/logout/">Salir</a></li>
	</ul> <!-- cd-single-item-wrapper -->

	<ul class="cd-navigation cd-single-item-wrapper hidden">
		<li><a class="current" href="#0">Journal</a></li>
		<li><a href="#0">FAQ</a></li>
		<li><a href="#0">Terms &amp; Conditions</a></li>
		<li><a href="#0">Careers</a></li>
		<li><a href="#0">Students</a></li>
	</ul> <!-- cd-single-item-wrapper -->

	<div class="cd-navigation socials hidden">
		<a class="cd-twitter cd-img-replace" href="#0">Twitter</a>
		<a class="cd-github cd-img-replace" href="#0">Git Hub</a>
		<a class="cd-facebook cd-img-replace" href="#0">Facebook</a>
		<a class="cd-google cd-img-replace" href="#0">Google Plus</a>
	</div> <!-- socials -->
</nav>
