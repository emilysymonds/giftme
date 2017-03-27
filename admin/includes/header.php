<?php 
$user = new User();
?>
<div class="header navbar navbar-fixed-top">
	<!-- BEGIN TOP NAVIGATION BAR -->
	<div class="header-inner">
		<!-- BEGIN LOGO -->
		<!-- END LOGO -->
		<!-- BEGIN RESPONSIVE MENU TOGGLER -->
		<a href="javascript:;" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<img src="<?php echo WEB_ROOT; ?>assets/img/menu-toggler.png" alt=""/>
		</a>
		<!-- END RESPONSIVE MENU TOGGLER -->
		<!-- BEGIN TOP NAVIGATION MENU -->
		<div class="hor-menu">
			<a href="<?php echo WEB_ROOT;?>"><img style="padding-left: 5px;padding-top: 5px" src="<?php echo WEB_ROOT;?>assets/img/logo.png"></a>
		</div>
		</div>
		<!-- END TOP NAVIGATION MENU -->

		<!-- BEGIN TOP NAVIGATION MENU -->
		<ul class="nav navbar-nav pull-right">
			<li class="dropdown user">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<i class="fa fa-user"> </i>
					<span class="username">
						 <?php echo escape($user->data()->name); ?>
					</span>
					<i class="fa fa-angle-down"></i>
				</a>
				<ul class="dropdown-menu">
					<li>
						<a href="#">
							<i class="fa fa-user"></i> Mi Cuenta
						</a>
					</li>
					<li class="divider">
					</li>
					<li>
						<a href="javascript:;" id="trigger_fullscreen">
							<i class="fa fa-arrows"></i> Pantalla entera
						</a>
					</li>
					<li>
						<a href="<?php echo WEB_ROOT; ?>configuracion/">
							<i class="fa fa-cog"></i> Configuraci&oacute;n
						</a>
					</li>
					<li>
						<a href="<?php echo WEB_ROOT; ?>logout.php">
							<i class="fa fa-key"></i> Cerrar Sesi&oacute;n
						</a>
					</li>
				</ul>
			</li>
			<!-- END EMPRESA DROPDOWN -->
		</ul>
		<!-- END TOP NAVIGATION MENU -->
		
	</div>
	<!-- END TOP NAVIGATION BAR -->
</div>