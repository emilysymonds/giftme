<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>Admin - Gift Me</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>

<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="<?php echo WEB_ROOT;?>assets/img/apple-icon.png" rel="apple-touch-icon" />
<link href="<?php echo WEB_ROOT;?>assets/img/apple-touch-icon.png" rel="icon" sizes="196x196" >
<link href="<?php echo WEB_ROOT;?>assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo WEB_ROOT;?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo WEB_ROOT;?>assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
<link href="<?php echo WEB_ROOT;?>assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo WEB_ROOT;?>assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo WEB_ROOT;?>assets/plugins/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo WEB_ROOT;?>assets/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo WEB_ROOT;?>assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo WEB_ROOT;?>assets/plugins/bootstrap-datepicker/css/datepicker.css" rel="stylesheet" type="text/css" />
<link href="<?php echo WEB_ROOT;?>assets/plugins/select2/select2.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo WEB_ROOT;?>assets/plugins/select2/select2-metronic.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo WEB_ROOT;?>assets/plugins/data-tables/DT_bootstrap.css" rel="stylesheet"/>
<link href="<?php echo WEB_ROOT;?>assets/plugins/jquery-multi-select/css/multi-select.css" rel="stylesheet" type="text/css" />
<link href="<?php echo WEB_ROOT;?>assets/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo WEB_ROOT;?>assets/plugins/jstree/dist/themes/default/style.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo WEB_ROOT;?>assets/css/pages/invoice.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL PLUGIN STYLES -->
<!-- BEGIN THEME STYLES -->
<link href="<?php echo WEB_ROOT;?>assets/css/style-metronic.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo WEB_ROOT;?>assets/css/style.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo WEB_ROOT;?>assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo WEB_ROOT;?>assets/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo WEB_ROOT;?>assets/css/pages/tasks.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo WEB_ROOT;?>assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
<link href="<?php echo WEB_ROOT;?>assets/css/print.css" rel="stylesheet" type="text/css" media="print"/>
<link href="<?php echo WEB_ROOT;?>assets/css/custom.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo WEB_ROOT;?>assets/css/uploadifive.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo WEB_ROOT;?>assets/plugins/dropzone/css/dropzone.css" rel="stylesheet"/>

<?php
if(isset($css)){
	foreach($css as $c){
		echo '<link href="'.WEB_ROOT.'assets/'.$c.'" rel="stylesheet" type="text/css/>';
	}
}
?>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="<?php echo ROOT;?>images/favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed">
<!-- BEGIN HEADER -->
	<?php include(INC_ROOT.'/includes/header.php'); ?>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
	<?php include('sidebar.php'); //incluir el sidebar ?>
	<!-- END SIDEBAR -->
	<!-- BEGIN CONTENT -->
	 <?php
	    require_once(INC_ROOT.'/'.$content[0]);
	 ?>
	<!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="footer">
	<div class="footer-inner">
		 2015 &copy; Version 1.0.1
	</div>
	<div class="footer-tools">
		<span class="go-top">
			<i class="fa fa-angle-up"></i>
		</span>
	</div>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="assets/plugins/respond.min.js"></script>
<script src="assets/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src="<?php echo WEB_ROOT;?>assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
<script src="<?php echo WEB_ROOT;?>assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="<?php echo WEB_ROOT;?>assets/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
<script src="<?php echo WEB_ROOT;?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo WEB_ROOT;?>assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="<?php echo WEB_ROOT;?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="<?php echo WEB_ROOT;?>assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="<?php echo WEB_ROOT;?>assets/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="<?php echo WEB_ROOT;?>assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>



<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="<?php echo WEB_ROOT;?>assets/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
<script src="<?php echo WEB_ROOT;?>assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
<script src="<?php echo WEB_ROOT;?>assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
<script src="<?php echo WEB_ROOT;?>assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
<script src="<?php echo WEB_ROOT;?>assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
<script src="<?php echo WEB_ROOT;?>assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
<script src="<?php echo WEB_ROOT;?>assets/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>
<script src="<?php echo WEB_ROOT;?>assets/plugins/flot/jquery.flot.min.js" type="text/javascript"></script>
<script src="<?php echo WEB_ROOT;?>assets/plugins/flot/jquery.flot.resize.min.js" type="text/javascript"></script>
<script src="<?php echo WEB_ROOT;?>assets/plugins/flot/jquery.flot.categories.min.js" type="text/javascript"></script>
<script src="<?php echo WEB_ROOT;?>assets/plugins/jquery.pulsate.min.js" type="text/javascript"></script>
<script src="<?php echo WEB_ROOT;?>assets/plugins/bootstrap-daterangepicker/moment.min.js" type="text/javascript"></script>
<script src="<?php echo WEB_ROOT;?>assets/plugins/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
<script src="<?php echo WEB_ROOT;?>assets/plugins/gritter/js/jquery.gritter.js" type="text/javascript"></script>
<!-- IMPORTANT! fullcalendar depends on jquery-ui-1.10.3.custom.min.js for drag & drop support -->
<script src="<?php echo WEB_ROOT;?>assets/plugins/fullcalendar/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
<script src="<?php echo WEB_ROOT;?>assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.js" type="text/javascript"></script>
<script src="<?php echo WEB_ROOT;?>assets/plugins/jquery.sparkline.min.js" type="text/javascript"></script>

<script src="<?php echo WEB_ROOT;?>assets/plugins/data-tables/jquery.dataTables.js" type="text/javascript"></script>
<script src="<?php echo WEB_ROOT;?>assets/plugins/data-tables/DT_bootstrap.js" type="text/javascript" ></script>
<script src="<?php echo WEB_ROOT;?>assets/plugins/select2/select2.min.js" type="text/javascript"></script>
<script src="<?php echo WEB_ROOT;?>assets/plugins/jquery-validation/dist/jquery.validate.min.js" type="text/javascript"></script>
<script src="<?php echo WEB_ROOT;?>assets/plugins/bootbox/bootbox.min.js" type="text/javascript"></script>
<script src="<?php echo WEB_ROOT;?>assets/plugins/bootstrap-select/bootstrap-select.min.js" type="text/javascript" ></script>
<script src="<?php echo WEB_ROOT;?>assets/plugins/jquery-multi-select/js/jquery.multi-select.js" type="text/javascript"></script>
<script src="<?php echo WEB_ROOT;?>assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js" type="text/javascript" ></script>
<script src="<?php echo WEB_ROOT;?>assets/plugins/data-tables/jquery.dataTables.js" type="text/javascript"></script>
<script src="<?php echo WEB_ROOT;?>assets/plugins/jquery-inputmask/jquery.inputmask.bundle.min.js" type="text/javascript"></script>


<script src="<?php echo WEB_ROOT; ?>productos/product.js" type="text/javascript" ></script>
<script src="<?php echo WEB_ROOT; ?>banner/banner.js" type="text/javascript" ></script>




<?php
if(isset($plugins)){
	foreach($plugins as $plugin){
		echo '<script src="'.WEB_ROOT.'assets/plugins/'.$plugin.'" type="text/javascript"></script>';
	}
}
?>

<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<!-- Gastos! -->
<script src="<?php echo WEB_ROOT;?>assets/scripts/custom/index.js" type="text/javascript"></script>
<script src="<?php echo WEB_ROOT;?>assets/scripts/custom/tasks.js" type="text/javascript"></script>
<script src="<?php echo WEB_ROOT;?>assets/scripts/custom/form-validation.js" type="text/javascript" ></script>
<script src="<?php echo WEB_ROOT;?>assets/scripts/custom/custom.js" type="text/javascript"></script>
<script src="<?php echo WEB_ROOT;?>assets/scripts/core/app.js" type="text/javascript"></script>
<script src="<?php echo WEB_ROOT;?>assets/scripts/core/datatable.js" type="text/javascript"></script>
<?php
if(isset($scripts)){
	foreach($scripts as $script){
		echo '<script src="'.WEB_ROOT.'assets/scripts/custom/'.$script.'" type="text/javascript"></script>';
	}
}
?>
<!-- /Gastos! -->
<!-- END PAGE LEVEL STYLES -->
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {    
   App.init(); // initlayout and core plugins
   Custom.init();
   <?php
	if(isset($init)){
		foreach($init as $i){
			echo $i;
		}
	}
	?>
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>