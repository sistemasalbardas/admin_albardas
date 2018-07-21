 <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LB</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Las Albardas</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
       <i class="fas fa-bars"></i>

      </a>

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
	          <a href="#"><i class="fas fa-copy"></i> <span>Remisiones</span>
	            <span class="pull-right-container">
	                <i class="fas fa-angle-left pull-right"></i>
	              </span>
	          </a>
	          <ul class="treeview-menu">
	            <li><a href="<?=URL?>referrals/"><i class="far fa-circle"></i> Nueva remision</a></li>
        			<li><a href="<?=URL?>referrals/control/"><i class="far fa-circle"></i> Control de remisiones</a></li>
	          </ul>
	        </li>
	        <li class="treeview">
	          <a href="#"><i class="fas fa-users"></i> <span>Personal</span>
	            <span class="pull-right-container">
	                <i class="fas fa-angle-left pull-right"></i>
	              </span>
	          </a>
	          <ul class="treeview-menu">
		        <li><a href="<?=URL?>personal/?tab=1"><i class="far fa-circle"></i> Personal</a></li>
	          </ul>
	        </li>
				
	        <li class="treeview">
	          <a href="#"><i class="fas fa-file"></i> <span>Requisiciones</span>
	            <span class="pull-right-container">
	                <i class="fas fa-angle-left pull-right"></i>
	              </span>
	          </a>
	          <ul class="treeview-menu">
		        <li><a href="<?=URL?>requisitions/"><i class="far fa-circle"></i> nueva requisicion</a></li>
				<li><a href="<?=URL?>requisitions/control/"><i class="far fa-circle"></i> Control </a></li>
				<li><a href="<?=URL?>requisitions/config/"><i class="far fa-circle"></i> Configuracion </a></li>
	          </ul>
	        </li>
	        <li><a href="<?=URL?>products/"><i class="far fa-circle"></i> <span>Productos</span></a></li>
			<li><a href="<?=URL?>freights/"><i class="far fa-circle"></i> <span>Fletes</span></a></li>
			<li><a href="<?=URL?>inventories/"><i class="far fa-circle"></i> <span>Inventarios</span></a></li>
			<li><a href="<?=URL?>costumers/"><i class="far fa-circle"></i> <span>Clientes</span></a></li>
			<li><a href="<?=URL?>transporters/"><i class="far fa-circle"></i> <span>Transportistas</span></a></li>
			<li><a href="<?=URL?>login/logout/"><i class="far fa-circle"></i> <span>Salir</span></a></li>
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
        <small>Administrativo</small>
      </h1>
    </section>


