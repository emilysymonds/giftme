<?php
require_once('admin/core/init.php');
require_once('php/funciones.php');

if(Input::get('id')){
	$cat = Input::get('id');
	$categoria = new Categoria($cat);
	$productos = $categoria->obtenerProductosCategoriaOn();
}else{
	$cat=0;
	$productos = @Producto::getAllProductosOn();
}

$categorias=@Categoria::obtenerTodas();
$nombresCategorias="";
foreach($categorias as $cate){
	$c = new Categoria($cate->id);
	$nombresCategorias=$nombresCategorias . $c->data()->nombre ." ";
}


?>
<!DOCTYPE HTML>
<html>
<head>
<title>Regalos</title>
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<link rel="icon" type="image/x-icon" href="images/favicon.ico" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/blue.css" rel="stylesheet" type="text/css" media="all" />
<!----font-Awesome----->
   	<link rel="stylesheet" href="fonts/css/font-awesome.min.css">
<!----font-Awesome----->
<!-- start plugins -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
  <link href="assets/css/style-responsive.css" rel="stylesheet" type="text/css">  

<script src="js/menu.js" type="text/javascript"></script>
		<script type="text/javascript" src="js/fliplightbox.min.js"></script>
		<script type="text/javascript">
			$('body').flipLightBox()
		</script>
		<script type="text/javascript" src="js/jquery.easing.min.js"></script>
		<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
		
		<?php if($cat==1){?>

		<!--<script type="text/javascript">
			$(function() {

				var filterList = {

					init : function() {

						// MixItUp plugin
						// http://mixitup.io
						$('#portfoliolist').mixitup({
							targetSelector : '.bebés',
							filterSelector : '.filter',
							effects : ['fade'],
							easing : 'snap',
							// call the hover effect
							onMixEnd : filterList.hoverEffect()
						});

					},

					hoverEffect : function() {

						// Simple parallax effect
						$('#portfoliolist .portfolio').hover(function() {
							$(this).find('.label').stop().animate({
								bottom : 0
							}, 200, 'easeOutQuad');
							$(this).find('img').stop().animate({
								top : -30
							}, 500, 'easeOutQuad');
						}, function() {
							$(this).find('.label').stop().animate({
								bottom : -40
							}, 200, 'easeInQuad');
							$(this).find('img').stop().animate({
								top : 0
							}, 300, 'easeOutQuad');
						});

					}
				};

				// Run the show!
				filterList.init();

			});
		</script>
		<?php } else if($cat==2){?>

		<script type="text/javascript">
			$(function() {

				var filterList = {

					init : function() {

						// MixItUp plugin
						// http://mixitup.io
						$('#portfoliolist').mixitup({
							targetSelector : '.cumpleaños',
							filterSelector : '.filter',
							effects : ['fade'],
							easing : 'snap',
							// call the hover effect
							onMixEnd : filterList.hoverEffect()
						});

					},

					hoverEffect : function() {

						// Simple parallax effect
						$('#portfoliolist .portfolio').hover(function() {
							$(this).find('.label').stop().animate({
								bottom : 0
							}, 200, 'easeOutQuad');
							$(this).find('img').stop().animate({
								top : -30
							}, 500, 'easeOutQuad');
						}, function() {
							$(this).find('.label').stop().animate({
								bottom : -40
							}, 200, 'easeInQuad');
							$(this).find('img').stop().animate({
								top : 0
							}, 300, 'easeOutQuad');
						});

					}
				};

				// Run the show!
				filterList.init();

			});
		</script>
		<?php } else if($cat==3){?>

		<script type="text/javascript">
			$(function() {

				var filterList = {

					init : function() {

						// MixItUp plugin
						// http://mixitup.io
						$('#portfoliolist').mixitup({
							targetSelector : '.Aniversario',
							filterSelector : '.filter',
							effects : ['fade'],
							easing : 'snap',
							// call the hover effect
							onMixEnd : filterList.hoverEffect()
						});

					},

					hoverEffect : function() {

						// Simple parallax effect
						$('#portfoliolist .portfolio').hover(function() {
							$(this).find('.label').stop().animate({
								bottom : 0
							}, 200, 'easeOutQuad');
							$(this).find('img').stop().animate({
								top : -30
							}, 500, 'easeOutQuad');
						}, function() {
							$(this).find('.label').stop().animate({
								bottom : -40
							}, 200, 'easeInQuad');
							$(this).find('img').stop().animate({
								top : 0
							}, 300, 'easeOutQuad');
						});

					}
				};

				// Run the show!
				filterList.init();

			});
		</script>
		<?php } else if($cat==4){?>

		<script type="text/javascript">
			$(function() {

				var filterList = {

					init : function() {

						// MixItUp plugin
						// http://mixitup.io
						$('#portfoliolist').mixitup({
							targetSelector : '.Ocasiones',
							filterSelector : '.filter',
							effects : ['fade'],
							easing : 'snap',
							// call the hover effect
							onMixEnd : filterList.hoverEffect()
						});

					},

					hoverEffect : function() {

						// Simple parallax effect
						$('#portfoliolist .portfolio').hover(function() {
							$(this).find('.label').stop().animate({
								bottom : 0
							}, 200, 'easeOutQuad');
							$(this).find('img').stop().animate({
								top : -30
							}, 500, 'easeOutQuad');
						}, function() {
							$(this).find('.label').stop().animate({
								bottom : -40
							}, 200, 'easeInQuad');
							$(this).find('img').stop().animate({
								top : 0
							}, 300, 'easeOutQuad');
						});

					}
				};

				// Run the show!
				filterList.init();

			});
		</script>
		<?php } else if($cat==5){?>

		<script type="text/javascript">
			$(function() {

				var filterList = {

					init : function() {

						// MixItUp plugin
						// http://mixitup.io
						$('#portfoliolist').mixitup({
							targetSelector : '.Spa',
							filterSelector : '.filter',
							effects : ['fade'],
							easing : 'snap',
							// call the hover effect
							onMixEnd : filterList.hoverEffect()
						});

					},

					hoverEffect : function() {

						// Simple parallax effect
						$('#portfoliolist .portfolio').hover(function() {
							$(this).find('.label').stop().animate({
								bottom : 0
							}, 200, 'easeOutQuad');
							$(this).find('img').stop().animate({
								top : -30
							}, 500, 'easeOutQuad');
						}, function() {
							$(this).find('.label').stop().animate({
								bottom : -40
							}, 200, 'easeInQuad');
							$(this).find('img').stop().animate({
								top : 0
							}, 300, 'easeOutQuad');
						});

					}
				};

				// Run the show!
				filterList.init();

			});
		</script>
		<?php } else if($cat==6){?>

		<script type="text/javascript">
			$(function() {

				var filterList = {

					init : function() {

						// MixItUp plugin
						// http://mixitup.io
						$('#portfoliolist').mixitup({
							targetSelector : '.Novias',
							filterSelector : '.filter',
							effects : ['fade'],
							easing : 'snap',
							// call the hover effect
							onMixEnd : filterList.hoverEffect()
						});

					},

					hoverEffect : function() {

						// Simple parallax effect
						$('#portfoliolist .portfolio').hover(function() {
							$(this).find('.label').stop().animate({
								bottom : 0
							}, 200, 'easeOutQuad');
							$(this).find('img').stop().animate({
								top : -30
							}, 500, 'easeOutQuad');
						}, function() {
							$(this).find('.label').stop().animate({
								bottom : -40
							}, 200, 'easeInQuad');
							$(this).find('img').stop().animate({
								top : 0
							}, 300, 'easeOutQuad');
						});

					}
				};

				// Run the show!
				filterList.init();

			});
		</script>
		
		<?php } else if($cat==7){?>

		<script type="text/javascript">
			$(function() {

				var filterList = {

					init : function() {

						// MixItUp plugin
						// http://mixitup.io
						$('#portfoliolist').mixitup({
							targetSelector : '.Getwell',
							filterSelector : '.filter',
							effects : ['fade'],
							easing : 'snap',
							// call the hover effect
							onMixEnd : filterList.hoverEffect()
						});

					},

					hoverEffect : function() {

						// Simple parallax effect
						$('#portfoliolist .portfolio').hover(function() {
							$(this).find('.label').stop().animate({
								bottom : 0
							}, 200, 'easeOutQuad');
							$(this).find('img').stop().animate({
								top : -30
							}, 500, 'easeOutQuad');
						}, function() {
							$(this).find('.label').stop().animate({
								bottom : -40
							}, 200, 'easeInQuad');
							$(this).find('img').stop().animate({
								top : 0
							}, 300, 'easeOutQuad');
						});

					}
				};

				// Run the show!
				filterList.init();

			});
		</script>
		<?php } else if($cat==8){?>

		<script type="text/javascript">
			$(function() {

				var filterList = {

					init : function() {

						// MixItUp plugin
						// http://mixitup.io
						$('#portfoliolist').mixitup({
							targetSelector : '.Thankyou',
							filterSelector : '.filter',
							effects : ['fade'],
							easing : 'snap',
							// call the hover effect
							onMixEnd : filterList.hoverEffect()
						});

					},

					hoverEffect : function() {

						// Simple parallax effect
						$('#portfoliolist .portfolio').hover(function() {
							$(this).find('.label').stop().animate({
								bottom : 0
							}, 200, 'easeOutQuad');
							$(this).find('img').stop().animate({
								top : -30
							}, 500, 'easeOutQuad');
						}, function() {
							$(this).find('.label').stop().animate({
								bottom : -40
							}, 200, 'easeInQuad');
							$(this).find('img').stop().animate({
								top : 0
							}, 300, 'easeOutQuad');
						});

					}
				};

				// Run the show!
				filterList.init();

			});
		</script>
		
		<?php } else {?>
		<script type="text/javascript">
			$(function() {

				var filterList = {

					init : function() {

						// MixItUp plugin
						// http://mixitup.io
						$('#portfoliolist').mixitup({
							targetSelector : '.portfolio',
							filterSelector : '.filter',
							effects : ['fade'],
							easing : 'snap',
							// call the hover effect
							onMixEnd : filterList.hoverEffect()
						});

					},

					hoverEffect : function() {

						// Simple parallax effect
						$('#portfoliolist .portfolio').hover(function() {
							$(this).find('.label').stop().animate({
								bottom : 0
							}, 200, 'easeOutQuad');
							$(this).find('img').stop().animate({
								top : -30
							}, 500, 'easeOutQuad');
						}, function() {
							$(this).find('.label').stop().animate({
								bottom : -40
							}, 200, 'easeInQuad');
							$(this).find('img').stop().animate({
								top : 0
							}, 300, 'easeOutQuad');
						});

					}
				};

				// Run the show!
				filterList.init();

			});
		</script>
		<?php }?>

	
		
<!-- start light_box -->
<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css" media="screen" />
<!--
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
-->
<script type="text/javascript" src="js/jquery.fancybox-1.2.1.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$("div.fancyDemo a").fancybox();
		});
	</script>

<!----details-product-slider--->
				<!-- Include the Etalage files -->
					<link rel="stylesheet" href="css/etalage.css">
					<script src="js/jquery.etalage.min.js"></script>
					<script src="js/modal.js"></script>

				<!-- Include the Etalage files -->
				<script>
						jQuery(document).ready(function($){
			
							$('#etalage').etalage({
								thumb_image_width: 364,
								thumb_image_height: 256,
								
								show_hint: true,
								click_callback: function(image_anchor, instance_id){
									alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
								}
							});
							// This is for the dropdown list example:
							$('.dropdownlist').change(function(){
								etalage_show( $(this).find('option:selected').attr('class') );
							});

					});
				</script>
				<!----//details-product-slider--->	
</head>
<body>

<div id="site_wrap">
<?php 
 		include('logocarrito.php');
 	?>
<div id="container_slider">
	<div class="tituloRegalos">
		<img src="images/regalos.png" alt="" width="100%" align="none"/> 	
	</div>
	
	<!-- SPAN MENU -->
    <div class="span_menu">
	    <div class="row">
	    	<div class="row-same-height row-full-height">
		      <div class="col-xs-1 col-xs-height col-full-height"><div class="item"><div class="content">
		      	<a href="index.php"><img src="images/menu1.png" width="60%" title="Home"/></a>	
			  </div></div></div>
		      <div class="col-xs-1 col-xs-height col-full-height"><div class="item"><div class="content">
			      <a href="about.php" ><img title="Quiénes somos" src="images/menu2.png" width="60%" /></a>
		      </div></div></div>
		      <div class="col-xs-1 col-xs-height col-full-height"><div class="item"><div class="content">
			      <a href="regalos.php" ><img title="Regalos" src="images/menu3.png" width="55%"/></a>
		      </div></div></div>
		      <div class="col-xs-1 col-xs-height col-full-height"><div class="item"><div class="content">
			     <a href="contact.php" ><img title="Contacto" src="images/menu4.png" width="60%"/></a>
		      </div></div></div>
	     </div>
		</div>
    </div>
    
     <div class="span_menu_fondos">
	    <div class="row">
	    	<div class="row-same-height row-full-height">
		      <div class="col-xs-1 col-xs-height col-full-height"><div class="item"><div class="content">
					<img src="images/fondomenu.png" width="100%"/>
			  </div></div></div>
		      <div class="col-xs-1 col-xs-height col-full-height"><div class="item"><div class="content">
					<img src="images/fondomenu.png" width="100%"/>
		      </div></div></div>
		      <div class="col-xs-1 col-xs-height col-full-height"><div class="item"><div class="content">
					<img src="images/fondomenu.png" width="100%"/>
		      </div></div></div>
		      <div class="col-xs-1 col-xs-height col-full-height"><div class="item"><div class="content">
					<img src="images/fondomenu.png" width="100%"/>
		      </div></div></div>
	     </div>
		</div>
    </div>
    <!-- /SPAN MENU -->
	<div class = "contentRegalos">
		<div class="fondo_blancoRegalos">
		
			<div class="portfolio_main">
						<ul id="filters" class="clearfix">
							<?php 
								
								/*
									foreach($categorias as $cat):
									$c = new Categoria($cat->id);
									echo $c->data()->nombre;
									
								endforeach;
								*/
								
								//categoriasRegalos($cat);
								echo "<ul id='filters' class='clearfix'>
									<li><a href='regalos.php?id=0'>";
									if($cat == 0){
										echo "<span class='filter active' data-filter='";echo $nombresCategorias; echo "'>Todos</span>";
									}else{
										echo "<span class='filter' data-filter='";echo $nombresCategorias; echo "'>Todos</span>";
									}
									echo "</li>";
									
									foreach($categorias as $cate):
										$c = new Categoria($cate->id);
										$idCat=$c->data()->id;
										echo "
										<li><a href='regalos.php?id=";echo $idCat;echo"  '>";
											if($cat == $c->data()->id){
												echo "<span class='filter active' data-filter='aniversario'>";echo $c->data()->nombre; echo "</span>";
											}else{
												echo "<span class='filter' data-filter='aniversario'>";echo $c->data()->nombre; echo "</span>";
											}
											echo "</a>
										</li>";
									endforeach;
									
								
							?>
							
						</ul>
						<div id="portfoliolist">	
							<?php 
								//productos();
								$cant=sizeof($productos);
								if($cant==0){
									?>
									<div class="textoGracias">
											Pronto tendremos productos en esta sección
									</div>	
									<?php
								} 
								
								foreach ($productos as $p):
									$producto = new Producto($p->id);
									$idProd=$producto->data()->id;
									$catProds = $producto->devolverCategoriasProducto();
									$nombresCatProd="";
									foreach($catProds as $catP):
										$c = new Categoria($catP->categoria);
										$nombresCatProd=$nombresCatProd . $c->data()->nombre ." ";
									endforeach;
									
									 ?>
									<div class="portfolio <?php echo $nombresCatProd; ?>" data-cat="">
										<div class="portfolio-wrapper">
											<a rel="group" data-toggle="modal" data-target=".bs-example-modal-md" href="product.php?idProd=<?php echo $idProd;?>" class="b-link-stripe b-animate-go  thickbox">
										     <img src="images/product/<?php echo $producto->getImagenes()[0]->nombre_archivo?>" /></a>
		
											<div class="label">
												<div class="label-text">
													<span class="text-category"><?php echo $producto->data()->nombre ?></span>
												</div>
												<div class="label-bg"></div>
											</div>
										</div>
									</div>
							
							<?php endforeach;
								?>
						</div>
			<div class="clearfix"></div>
			<!--<ul class="pagination">
			  <li><a href="#">Prev</a></li>
			  <li><a href="#">1</a></li>
			  <li><a href="#">2</a></li>
			  <li><a href="#">3</a></li>
			  <li class="cau_hide"><a href="#">4</a></li>
			  <li class="cau_hide"><a href="#">5</a></li>
			  <li class="cau_hide"><a href="#">6</a></li>
			  <li class="cau_hide"><a href="#">7</a></li>
			  <li><a href="#">Next</a></li>
			</ul>-->
		</div>
		
		</div>
			
					
				
<!----start-model-box---->
<a data-toggle="modal" data-target=".bs-example-modal-md" href="#"> </a>
<div id="modalProducto" class="modal fade bs-example-modal-md light-box" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content light-box-info">

    </div>
  </div>
</div>
<!----start-model-box---->
		
		<!-- FOOTER -->
		<div id="container_footer_regalos">
<div class="whitestrip"></div>

<div class="footer_bg">
<div class="container">
	<div class="footer">
		<div class="row">
	    	<div class="row-same-height row-full-height">
		      <div class="col-xs-1 col-xs-height col-full-height"><div class="item"><div class="content">

				  <p>Seguinos en </p>
					<p>FACEBOOK o INSTAGRAM</p>
					
					<div class="f_logo">
						<div class="soc_icons">
							<ul class="list-unstyled text-center">
								<li><a href="https://www.facebook.com/giftme14"><i class="fa fa-facebook"></i></a></li>
								<li><a href="http://instagram.com/giftme14"><i class="fa fa-instagram"></i></a></li>
							
								
							</ul>
						</div>
					</div>
			  </div></div></div>
		      <div class="col-xs-1 col-xs-height col-full-height"><div class="item"><div class="content">
				  	<p>Llamanos</p>
					<p>y hacé tu pedido YA</p>
					<h5>&nbsp;</h5>
					<p>091 210012</p>

		      </div></div></div>
		         <div class="col-xs-1 col-xs-height col-full-height"><div class="item"><div class="content">
					<p>Escribinos a</p>
					
					<p style="font-size: 40px;"><a class="aMail" href="mailto:regalos@giftme.com.uy">regalos@giftme.com.uy</a></p>
<p>o por la sección de </> <p><b><a href="contact.php">CONTACTO</a></b></p>
		      </div></div></div>
	     </div>
		</div>
		
		<div class="clearfix"></div>
	</div>
</div>
</div>

<div class="whitestrip"></div>
<div class="footer1_bg"><!-- start footer1 -->
	<div class="container">
		<div class="footer1">
			<div class="copy pull_left">
				<p class="link"><span>&#169; 2015 by Gift Me &nbsp;</a></span></p>
			</div>
			
			<div class="clearfix"></div>
		</div>
	</div>
</div>
</div>
		<!-- /FOOTER -->


	</div>
	
	
	
</div>




</div>



<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-62651503-1', 'auto');
  ga('send', 'pageview');

</script>




</body>
</html>