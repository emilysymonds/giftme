<!DOCTYPE HTML>
<html>
<head>
<title>Quiénes Somos</title>
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/x-icon" href="images/favicon.ico" />

<meta charset="UTF-8">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/blue.css" rel="stylesheet" type="text/css" media="all" />
<!----font-Awesome----->
   	<link rel="stylesheet" href="fonts/css/font-awesome.min.css">
<!----font-Awesome----->
<!-- start plugins -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
  <link href="assets/css/style-responsive.css" rel="stylesheet" type="text/css">  

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
</head>
<body>
<div id="site_wrap">
<?php 
 		include('logocarrito.php');
 	?>
<div id="container_slider">
<?php //include('headerAbout.php') ?>
	<div class="tituloAbout">
		<img src="images/quienessomos.png" alt="" width="100%" align="none"/> 	
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
	<div class="fondo_blanco">
	
	</div>
	
	<div class="textoAbout">
			Somos dos hermanas muy parecidas y muy distintas a la vez.<br>
			&thinsp;&thinsp;&thinsp;&thinsp;&thinsp;La idea nace de la creatividad de ambas, nos gusta pensar cosas nuevas, crear, generar emociones, y la idea de regalar y sorprender en diferentes ocasiones nos pareció la mejor manera de poder combinar todo lo que nos gusta y volcar toda nuestra pasión y energía a este nuevo emprendimiento.<br>
			 
			&thinsp;&thinsp;&thinsp;&thinsp;&thinsp;La combinación de ambas personalidades le da el sello distintivo a Gift Me. Dedicadas, apasionadas, y creativas, ponemos toda nuestra pasión en lo que nos proponemos.<br>
			 
			&thinsp;&thinsp;&thinsp;&thinsp;&thinsp;Gift Me nos da la posibilidad de trabajar juntas, potenciando las similitudes  y complementándonos en lo diferente para generarle valor a la empresa. <br>
			 
			&thinsp;&thinsp;&thinsp;&thinsp;&thinsp;Trabajamos buscando siempre la originalidad y personalización  de cada cosa que hacemos. Creemos que la entrega de un regalo va mucho más allá del producto, lo que se regala es una emoción, un sentimiento, y ese es el espíritu que generamos en Gift Me.<br>
		</div>	
	


	
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