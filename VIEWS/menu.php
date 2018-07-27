 <header class="main-header">
    <!-- Logo -->
    <a href="<?= URL?>" class="logo">
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
    <section class="sidebar">

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
	        <li class="treeview">
  	          <a href="#">
                <i class="fas fa-copy icon"></i> <span>Remisiones</span>
  	            <span class="pull-right-container">
  	                <i class="fas fa-angle-left pull-right"></i>
  	            </span>
  	          </a>
  	          <ul class="treeview-menu">
  	            <li>
                  <a href="<?=URL?>referrals/">
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
				
	        <li class="treeview">
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
	        <li>
            <a href="<?=URL?>products/">
              <i class="far fa-circle icon"></i> <span>Productos</span>
            </a>
          </li>
    			<li>
            <a href="<?=URL?>freights/">
              <i class="far fa-circle icon"></i> <span>Fletes</span>
            </a>
          </li>
    			<li>
            <a href="<?=URL?>inventories/">
              <i class="far fa-circle icon"></i> <span>Inventarios</span>
            </a>
          </li>
    			<li>
            <a href="<?=URL?>costumers/">
              <i class="far fa-circle icon"></i> <span>Clientes</span>
            </a>
          </li>
    			<li>
            <a href="<?=URL?>transporters/">
              <i class="far fa-circle icon"></i> <span>Transportistas</span>
            </a>
          </li>
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


<!-- contenedor principal para todas las paginas -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Panel
        <small>de administracion</small>
      </h1>
    </section>
    <div class="clear"> </div>


