<?php 
session_start();

ini_set('display_errors', 'On');
ob_start();
error_reporting(E_ALL);

$thisFile = str_replace('\\', '/', __FILE__);
$docRoot = $_SERVER['DOCUMENT_ROOT'];

$webRoot  = str_replace(array($docRoot, 'core/init.php'), '', $thisFile);
$srvRoot  = str_replace('admin/core/init.php', '', $thisFile);

$root = str_replace(array($docRoot, 'admin/core/init.php'), '', $thisFile);

define('WEB_ROOT', $webRoot);
define('SRV_ROOT', $srvRoot);
define('ROOT', $root);

define('PRODUCT_IMAGE_DIR',  'images/product/');
define('BANNER_IMAGE_DIR',  'images/slider/');



define('INC_ROOT', dirname(__DIR__));

$GLOBALS['config'] = array(
	'mysql' => array(
		'host' => 'localhost',
		'username' => 'root',
		'password' => 'root',
		'db' => 'giftme'
	),
	'remember' => array(
		'cookie_name' => 'hash',
		'cookie_expiry' => 604800
	),
	'session' => array(
		'session_name'=> 'user',
		'token_name' => 'token'
		
	)
);

spl_autoload_register(function($class){
		require_once( INC_ROOT. '/classes/'.$class.'.php');	
});

require_once INC_ROOT.'/functions/sanitize.php';

if(Cookie::exists(Config::get('remember/cookie_name')) && !Session::exists(Config::get('session/session_name'))){
	//echo "user asked to be remembered";
	$hash = Cookie::get(Config::get('remember/cookie_name'));
	$hashCheck = DB::getInstance()->get('users_session', array('hash','=',$hash));
	
	if($hashCheck->count()){
		$user = new User($hashCheck->first()->user_id);
		$user->login();
	}

}

?>