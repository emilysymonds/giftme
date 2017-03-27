<?php
require_once("core/init.php");
$errors = '';
if(Input::exists()){
	if(Token::check(Input::get('token'))){
		
		$validate= new Validate();
		$validation = $validate->check ($_POST,array(
			'username' =>array('required'=>true),
			'password' =>array('required'=>true)
		));
		

		if($validation->passed()){
			

			$user = new User();
			$remember = (Input::get('remember') === 'on') ? true : false;
			
			$login = $user->login(Input::get('username'), Input::get('password'), $remember);
			if($login){
				Redirect ::to('index.php');
			}else{
				$errors = '<span>El usuario o contraseña no coinciden.</span>';
			}
		}else{
			$errors = $validation ->errors();
		}
	}
	
}
?>
<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>Login</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
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
<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="assets/plugins/select2/select2.css"/>
<link rel="stylesheet" type="text/css" href="assets/plugins/select2/select2-metronic.css"/>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME STYLES -->
<link href="<?php echo WEB_ROOT;?>assets/css/style-metronic.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo WEB_ROOT;?>assets/css/style.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo WEB_ROOT;?>assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo WEB_ROOT;?>assets/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo WEB_ROOT;?>assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
<link href="<?php echo WEB_ROOT;?>assets/css/pages/login.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo WEB_ROOT;?>assets/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- BEGIN BODY -->
<body class="login">
<!-- BEGIN LOGO -->
<div class="logo">
	&nbsp;
</div>
<!-- END LOGO -->
<!-- BEGIN LOGIN -->
<div class="content">
	<!-- BEGIN LOGIN FORM -->
	<form class="login-form" action="" method="post">
		<h3 class="form-title">Ingresa al sistema</h3>
		<div class="alert alert-danger display-hide">
			<button class="close" data-close="alert"></button>
			<span>
				 Ingresa usuario y contraseña.
			</span>
		</div>
	<?php if($errors){ ?>
		<div class="alert alert-danger display-show">
			<button class="close" data-close="alert"></button>
			<?php
			if(is_array($errors)){
			 foreach($errors as $error){
					echo $error,' ';
				}
				}else{
					echo $errors;
				}
			 ?>
		</div>
		<?php } ?>
		<div class="form-group">
			<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
			<label class="control-label visible-ie8 visible-ie9">Usuario</label>
			<div class="input-icon">
				<i class="fa fa-user"></i>
				<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Usuario" name="username"/>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Contraseña</label>
			<div class="input-icon">
				<i class="fa fa-lock"></i>
				<input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Contraseña" name="password"/>
			</div>
		</div>
		<input type="hidden" name="token" value="<?php echo Token::generate();?>">
		<div class="form-actions">
			<label class="checkbox">
			<input type="checkbox" name="remember" value="1"/> Recordarme </label>
			<button type="submit" class="btn green pull-right">
			Ingresar <i class="m-icon-swapright m-icon-white"></i>
			</button>
		</div>
		
	</form>
	<!-- END LOGIN FORM -->
	
</div>
<!-- END LOGIN -->
<!-- BEGIN COPYRIGHT -->
<div class="copyright">
	 2014 &copy; Version 1.0.1 
</div>
<!-- END COPYRIGHT -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
	<script src="assets/plugins/respond.min.js"></script>
	<script src="assets/plugins/excanvas.min.js"></script> 
	<![endif]-->
<script src="assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="<?php echo WEB_ROOT;?>assets/plugins/jquery-validation/dist/jquery.validate.min.js" type="text/javascript"></script>
<script type="text/javascript" src="assets/plugins/select2/select2.min.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo WEB_ROOT;?>assets/scripts/core/app.js" type="text/javascript"></script>
<script src="<?php echo WEB_ROOT;?>assets/scripts/custom/login.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
		jQuery(document).ready(function() {     
		  App.init();
		  Login.init();
		});
	</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>