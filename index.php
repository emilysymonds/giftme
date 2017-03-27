<?php
require_once('admin/core/init.php');
$banners=@Banner::obtenerTodos();

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Gift Me | Home</title>
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/blue.css" rel="stylesheet" type="text/css" media="all" />
<!----font-Awesome----->
   	<link rel="stylesheet" href="fonts/css/font-awesome.min.css">
<!----font-Awesome----->
<!-- start plugins -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!--start slider -->
    <link rel="stylesheet" href="css/fwslider.css" media="all">
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/css3-mediaqueries.js"></script>
    <script src="js/fwslider.js"></script>
<!--end slider -->
<!-- must have -->
<link href="css/allinone_carousel.css" rel="stylesheet" type="text/css">
<script src="js/jquery-ui-1.8.16.custom.min.js" type="text/javascript"></script>
<script src="js/jquery.ui.touch-punch.min.js" type="text/javascript"></script>
<script src="js/allinone_carousel.js" type="text/javascript"></script>

  <link href="assets/css/style-responsive.css" rel="stylesheet" type="text/css">  

<!--[if IE]><script src="js/excanvas.compiled.js" type="text/javascript"></script><![endif]-->
<!-- must have -->
<!------------------pone colores al fondo -->
<script>
function run(interval, frames) {
    var int = 1;
    
    function func() {
        document.body.id = "b"+int;
        int++;
        if(int === frames) { int = 1; }
    }
    
    var swap = window.setInterval(func, interval);
}

//run(1000, 10); //milliseconds, frames
</script>
<!------------------->
	<script>
		jQuery(function() {

			jQuery('#allinone_carousel_charming').allinone_carousel({
				skin: 'charming',
				width: 990,
				height: 454,
				responsive:true,
				autoPlay: 3,
				resizeImages:true,
				autoHideBottomNav:false,
				showElementTitle:false,
				verticalAdjustment:50,
				showPreviewThumbs:false,
				//easing:'easeOutBounce',
				numberOfVisibleItems:5,
				nextPrevMarginTop:23,
				playMovieMarginTop:0,
				bottomNavMarginBottom:-10
			});		
		});
	</script>
<!-- Owl Carousel Assets -->
<link href="css/owl.carousel.css" rel="stylesheet">
<script src="js/owl.carousel.js"></script>
		<script>
			$(document).ready(function() {

				$("#owl-demo").owlCarousel({
					items : 4,
					lazyLoad : true,
					autoPlay : true,
					navigation : true,
					navigationText : ["", ""],
					rewindNav : false,
					scrollPerPage : false,
					pagination : false,
					paginationNumbers : false,
				});

			});
		</script>
		<!-- //Owl Carousel Assets -->
<!-- start circle -->
<script>
(function($){
	$.fn.percentPie = function(options){

		var settings = $.extend({
			width: 100,
			trackColor: "EEEEEE",
			barColor: "E2534B",
			barWeight: 30,
			startPercent: 0,
			endPercent: 1,
			fps: 60
		}, options);

		this.css({
			width: settings.width,
			height: settings.width
		});

		var	that = this,
			hoverPolice = false,
			canvasWidth = settings.width,
			canvasHeight = canvasWidth,
			id = $('canvas').length,
			canvasElement = $('<canvas id="'+ id +'" width="' + canvasWidth + '" height="' + canvasHeight + '"></canvas>'),
			canvas = canvasElement.get(0).getContext("2d"),
			centerX = canvasWidth/2,
			centerY = canvasHeight/2,
			radius = settings.width/2 - settings.barWeight/2;
			counterClockwise = false,
			fps = 1000 / settings.fps,
			update = .01;
			this.angle = settings.startPercent;

		this.drawArc = function(startAngle, percentFilled, color){
			var drawingArc = true;
			canvas.beginPath();
			canvas.arc(centerX, centerY, radius, (Math.PI/180)*(startAngle * 360 - 90), (Math.PI/180)*(percentFilled * 360 - 90), counterClockwise);
			canvas.strokeStyle = color;
			canvas.lineWidth = settings.barWeight;
			canvas.stroke();
			drawingArc = false;
		}

		this.fillChart = function(stop){
			var loop = setInterval(function(){
				hoverPolice = true;
				canvas.clearRect(0, 0, canvasWidth, canvasHeight);

				that.drawArc(0, 360, settings.trackColor);
				that.angle += update;
				that.drawArc(settings.startPercent, that.angle, settings.barColor);

				if(that.angle > stop){
					clearInterval(loop);
					hoverPolice = false;
				}
			}, fps);
		}

		this.mouseover(function(){
			if(hoverPolice == false){
				that.angle = settings.startPercent;
				that.fillChart(settings.endPercent);
			}
		});

		this.fillChart(settings.endPercent);
		this.append(canvasElement);
		return this;
	}
}(jQuery));

$(document).ready(function() {

	$('.google').percentPie({
		width: 100,
		trackColor: "E2534B",
		barColor: "76C7C0",
		barWeight: 20,
		endPercent: .9,
		fps: 60
	});
  
  $('.moz').percentPie({
		width: 100,
		trackColor: "E2534B",
		barColor: "76C7C0",
		barWeight: 20,
		endPercent: .75,
		fps: 60
	});
  
  $('.safari').percentPie({
		width: 100,
		trackColor: "E2534B",
		barColor: "#76C7C0",
		barWeight: 20,
		endPercent: .5,
		fps: 60
	});
    
});
</script>

<link rel="icon" type="image/x-icon" href="images/favicon.ico" />
      
</head>
<body>

<div id="site_wrap">
<?php 
 		include('logocarrito.php');
 	?>
<div id="container_slider">
	<!--?php include('header.php') ?>
	
    <!-- LOGO -->
	<div class="container_logo">
		<div class="fondo_logo_comingsoon">
			<img src="images/fondologo.png" alt="" width="100%" align="none" />
		</div>
		<div class="logo_comingsoon" id="logoTim">
				<img src="images/logogif.gif" alt="" width="50%" align="none"  style="margin-left: 25%; margin-bottom: 20%; margin-top: 10%;"/></a>
		</div>
		
	</div>
	<!-- /LOGO -->
	
	<!-- TEXTO LOGO -->
    <div class="titulologo_c">
		<img src="images/logogiftme.png" alt="" width="100%" align="none"/> 
   
		<!<img style="background:url(images/fondologo.jpg)" src="images/logogif.gif" alt="" />
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

	
	<!-- FONDO -->
	<div class="fondo_blancoIndex">	
	</div>
	
	
	
	<!-- SLIDER -->
    <div id="fwslider" class="">
        <div class="slider_container">

        <?php 
        foreach($banners as $b):
				$ban = new Banner($b->id);
				?>
				<div class='slide' href='index.php'> 
                <a href="regalos.php?id=<?php echo $ban->data()->categoria;?>"><img src="images/slider/<?php echo $ban->getImagenes()[0]->nombre_archivo;?>" class="ss" width="100%"/>
                <!-- Texts container -->
	                <div class="slide_content">
	                    <div class="slide_content_wrap">
	                        <!-- Text title -->
							<!-- <h4 class="title">RISE AND SHINE!</h4>
	                        <!-- /Text title -->
	                        <!-- Text description -->
	                        <!--<p class="description">with the perfect breakfast surprise</p>
	                        <!-- /Text description -->
	                    </div>
	                </div>
                </a>
				</div>
			<?php endforeach;?>
      
        <div class="timers" style="visibility:hidden"></div>
        <div class="slidePrev"><span></span></div>
        <div class="slideNext"><span></span></div>
    </div>
	</div>
    <!--/SLIDER -->
    
	
	<div class="regala1_c">
		<img src="images/violeta.png" width="100%" align="none">
	</div>
	<div class="regala_c">
		<img src="images/REGALAEMOCIONES.png" width="100%" align="none">
	</div>
	<div class="regala2_c">
		<img src="images/violeta.png" width="70%" align="right">
	</div>
	
	<!-- SPAN de 4 -->
	<div class="span_of_4">
		<div class="row">
	    	<div class="row-same-height row-full-height">
		      <div class="col-xs-2 col-xs-height col-full-height"><div class="item"><div class="content">
				  	<div class="span4_of_list">
					<a href="regalos.php?id=3"><img src="images/baby.png" width="100%"/></a>
					<h3>Bebés</h3>
					</div>
			  </div></div></div>
		      <div class="col-xs-2 col-xs-height col-full-height"><div class="item"><div class="content">
				  <div class="span4_of_list">
					<a href="regalos.php?id=4"><img src="images/birthday.png" width="100%"/></a>
					<h3>Cumpleaños</h3>
						
				</div>

		      </div></div></div>
		      <div class="col-xs-2 col-xs-height col-full-height"><div class="item"><div class="content">
				  	<div class="span4_of_list">
					<a href="regalos.php?id=18"><img src="images/ocasiones.png" width="100%"/></a>
					<h3>Ocasiones</h3>
							
				</div>

		      </div></div></div>
		      <div class="col-xs-2 col-xs-height col-full-height"><div class="item"><div class="content">
				  	<div class="span4_of_list">
					<a href="regalos.php?id=5"><img src="images/love.png" width="100%"/></a>
					<h3>Aniversario</h3>
									
				</div>
				  	
		      </div></div></div>
	     </div>
		</div><div class="clearfix"></div>
	</div>
	<!-- / SPAN de 4 -->
	
	
	
</div>

<?php include('footer.php') ?> 
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




