
<?php 
    ///REMISIONES
    $p_remisions = $_SESSION['user'][0]['permits'][0];
    //PERSONAL
    $p_employes = $_SESSION['user'][0]['permits'][1];
    //REQUISICIONES
    $p_requisitions = $_SESSION['user'][0]['permits'][2];
    //PRODUCTOS
    $p_products = $_SESSION['user'][0]['permits'][3];
    //FLETES
    $p_freights = $_SESSION['user'][0]['permits'][4];
    //USUARIOS
    $p_users = $_SESSION['user'][0]['permits'][5];
    //CLIENTES
    $p_costumers = $_SESSION['user'][0]['permits'][6];
    //TRASPORTISTAS
    $p_trasports = $_SESSION['user'][0]['permits'][7];
 ?>  
 <header class="main-header">
    <!-- Logo -->
    <a href="<?= URL?>dashboard" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LB</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg nopad"><b>Las Albardas</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
       <i class="fas fa-bars"></i>

      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle shadow" data-toggle="dropdown">
              <i class="fas fa-user-circle"></i>
              <span class="hidden-xs"><?= $_SESSION['user'][0]['name']?></span>
            </a>
            <ul class="dropdown-menu animated flipInY">
              <!-- User image -->
              <li class="user-header u-color">
                <!-- <i class="fas fa-user-circle"></i>-->
                <div class="user-box">
                  <div class="u-img">
                    <img class="img-thumbnail" src="<?=URL_IMG?>profile-avatar.png">
                  </div>
                  <div class="u-text">
                    <div class="clear"></div>
                    <h4><?= $_SESSION['user'][0]['name']?></h4>  
                  
                   
          
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
   
                    <div class="clear"></div>
                    <p class="tiny s12"><?= $ranch."-" .$_SESSION['user'][0]['department'] ?></p>
                    <div class="clear"></div>
                    
                  </div>               
                </div>
              </li>
              <li class="divider" role="separator"></li>
              <li>
                <a href="<?=URL?>profile?id=<?=$_SESSION['user'][0]['id']?>">Perfil <i class="fas fa-user"></i></a>
              </li>
              <li class="divider" role="separator"></li>
              <li>
                <a href="<?=URL?>login/logout">Salir <i class="fas fa-power-off"></i></a>
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
    <section class="sidebar slimScrollDiv">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?= URL_IMG ?>/logo.jpg" class="img-circle" alt="User Image">
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
				
				default:
					$ranch = "ALBARDAS";
					break;
			}
		 ?>
          <a href="#"> <?= $ranch." - " .$_SESSION['user'][0]['department'] ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
	    <ul class="sidebar-menu" data-widget="tree">
 
       
          <?php if ($p_remisions[7] == 1) {?>
  	        <li class="treeview">
	          	<a href="#">
              		<i class="fas fa-copy icon"></i> <span>Remisiones</span>
		            <span class="pull-right-container">
		                <i class="fas fa-angle-left pull-right"></i>
		            </span>
	          	</a>
	          	<ul class="treeview-menu">
		            <li>
		                <a href="<?=URL?>referrals/" class="hidden">
		                  <i class="far fa-circle"></i> Nueva remision
		                </a>
	              	</li>
				    <li>
		                <a href="<?=URL?>referrals/control/">
		                  <i class="far fa-circle"></i> Control de remisiones
		                </a>
		            </li>
	          	</ul>
  	        </li>
          <?php } ?>


          <?php if ($p_employes[7] == 1) {?>
  	        <li class="treeview">
    	        <a href="#">
                  	<i class="fas fa-users icon"></i> <span>Personal</span>
    	            <span class="pull-right-container">
    	                <i class="fas fa-angle-left pull-right"></i>
    	            </span>
    	        </a>
		        <ul class="treeview-menu">
			        <li>
		                <a href="<?=URL?>personal/?tab=1">
		                  <i class="far fa-circle"></i> Personal
		                </a>
	              	</li>
		        </ul>
  	        </li>
          <?php } ?>

		 <?php if ($p_requisitions[7] == 1) {?>
  	        <li class="treeview hidden">

	  	        <a href="#">
	                <i class="fas fa-file icon"></i> <span>Requisiciones</span>
	  	            <span class="pull-right-container">
	  	                <i class="fas fa-angle-left pull-right"></i>
	  	            </span>
	  	        </a>
	  	        <ul class="treeview-menu">
	  		        <li>
		                <a href="<?=URL?>requisitions/">
		                    <i class="far fa-circle"></i> nueva requisicion
		                </a>
	                </li>
	  				<li>
		                <a href="<?=URL?>requisitions/control/">
		                    <i class="far fa-circle"></i> Control 
		                </a>
	                </li>
	  				<li>
		                <a href="<?=URL?>requisitions/config/">
		                    <i class="far fa-circle"></i> Configuracion 
		                </a>
	                </li>
	  	        </ul>
  	        </li>
         <?php } ?>
    	<li class="treeview">
          	<a href="#">
         	 	<i class="fas fa-copy icon"></i> <span>Compras</span>
	            <span class="pull-right-container">
	                <i class="fas fa-angle-left pull-right"></i>
	            </span>
          	</a>
          	<ul class="treeview-menu">
              <li>
		            <a href="<?=URL?>purchasing/purchase/">
		              <i class="far fa-circle"></i> Compras
		            </a>
	          	</li>
              <li>
		            <a href="<?=URL?>purchasing/supplies/">
		              <i class="far fa-circle"></i> Insumos
		            </a>
	          	</li>
              <li>
		            <a href="<?=URL?>purchasing/providers/">
		              <i class="far fa-circle"></i> Provedores
		            </a>
	          	</li>
          	</ul>
	    </li>
            <li>
              <a href="<?=URL?>wharehouse/">
                <i class="far fa-circle icon"></i> <span>Inventarios</span>
              </a>
            </li>
          <?php if ($p_products[7] == 1) {?>
  	        <li>
              <a href="<?=URL?>products/">
                <i class="far fa-circle icon"></i> <span>Productos</span>
              </a>
            </li>
          <?php } ?>
          

          <?php if ($p_freights[7] == 1) {?>
      		<li>
              <a href="<?=URL?>freights/">
                <i class="far fa-circle icon"></i> <span>Fletes</span>
              </a>
            </li>
          <?php } ?>

          <?php if ($p_users[7] == 1) {?>        
            <li>
              <a href="<?=URL?>users/">
                <i class="far fa-circle"></i> <span>Usuarios</span>
              </a>
            </li>
          <?php } ?>

          <?php if ($p_costumers[7] == 1) {?>
      			<li>
              <a href="<?=URL?>costumers/">
                <i class="far fa-circle icon"></i> <span>Clientes</span>
              </a>
            </li>
          <?php } ?>

          <?php if ($p_trasports[7] == 1) {?>
      			<li>
              <a href="<?=URL?>transporters/">
                <i class="far fa-circle icon"></i> <span>Transportistas</span>
              </a>
            </li>
          <?php } ?>
            

               
    			<li>
            <a href="<?=URL?>login/logout/">
              <i class="far fa-circle icon"></i> <span>Salir</span>
            </a>
          </li>
          
    	</ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>


<!-- contenedor pull-right-containercipal para todas las paginas -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Panel
        <small>de administracion</small>
      </h1>
    </section>
    <div class="clear"> </div>


