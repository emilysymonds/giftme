<?php
require_once('core/init.php');

$user = new User();
if(!$user->isLoggedIn())
{
	Redirect::to('login.php');
}

$pagetitle 	= 'Home';
$description ='Escritorio ';
$breadcrumbs = array( 'Home' =>  WEB_ROOT."main.php");
$content = array('main.php', $pagetitle, $description, $breadcrumbs) ;	
$scripts = array('general.js');
$init = array('General.init();');

require_once 'includes/template.php';
?>