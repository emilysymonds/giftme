<?php
if(Input::exists('get')){
$side=Input::get('side');
}else{
	$side=0;
}


 
// gets the current URI, remove the left / and then everything after the / on the right
$directory = explode('/',ltrim($_SERVER['REQUEST_URI'],'/'));

// loop through each directory, check against the known directories, and add class   
$directories = array("index.php", "categorias","productos", "banner",""); // set home as 'index', but can be changed based of the home uri
foreach ($directories as $folder){
	$active[$folder] = ($directory[1] == $folder)? "active":"noactive";
}



?>
	<div class="page-sidebar-wrapper">
		<div class="page-sidebar navbar-collapse collapse">
			<!-- add "navbar-no-scroll" class to disable the scrolling of the sidebar menu -->
			<!-- BEGIN SIDEBAR MENU -->
			<ul class="page-sidebar-menu" data-auto-scroll="true" data-slide-speed="200">
				<li class="sidebar-toggler-wrapper">
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
					<div class="sidebar-toggler hidden-phone">
					</div>
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
				</li>
				<br>
				<?php /*if($side==0){*/ ?>
				<?php
										

					if($active['']=="active"){
				?>
					<li class="start <?php echo $active[''] ?> ">
						<a href="<?php echo WEB_ROOT;?>index.php">
							<i class="fa fa-home"></i>
							<span class="title">
								Escritorio
							</span>
							<span class="selected">
							</span>
						</a>
					</li>
				 <?php }else{?>
					 <li class="start <?php echo $active['index.php'] ?> ">
						<a href="<?php echo WEB_ROOT;?>index.php">
							<i class="fa fa-home"></i>
							<span class="title">
								Escritorio
							</span>
							<span class="selected">
							</span>
						</a>
					</li>
					 
				 <?php } ?>
					 
				
				<li class="<?php echo $active['categorias']?>">
					<a href="<?php echo WEB_ROOT;?>categorias/index.php">
						<i class="fa fa-sitemap"></i>
						<span class="title">
							Categorías 
						</span>
					</a>
				</li>

				<li class="<?php echo $active['productos']?>">
					<a href="<?php echo WEB_ROOT;?>productos/index.php">
						<i class="fa fa-gift"></i>
						<span class="title">
							Productos
						</span>
					</a>
<!--
					<ul class="sub-menu" style="display: none;">
						<li class="tooltips" >
							
							<a href="<?php echo WEB_ROOT;?>productos/index.php?ver=online">
								<i class="fa fa-thumbs-o-up"></i>
								<span class="title">
									Online
								</span>
							</a>
						</li>
						<li class="tooltips" >
							
							<a href="<?php echo WEB_ROOT;?>productos/index.php?ver=online">
								<i class="fa fa-thumbs-o-down"></i>
								<span class="title">
									Offline
								</span>
							</a>
						</li>
					</ul>
-->
				</li>
				
				<!--<li class="last">
					<a href="<?php echo WEB_ROOT;?>pedidos/">
						<i class="fa fa-shopping-cart"></i>
						<span class="title">
							Pedidos
						</span>
					</a>
				</li>	-->
				<li class="<?php echo $active['banner']?>">
					<a href="<?php echo WEB_ROOT;?>banner/index.php">
						<i class="fa fa-folder-open"></i>
						<span class="title">
							Banners 
						</span>
					</a>
				</li>
				
				
			</ul>
		</div>
	</div>