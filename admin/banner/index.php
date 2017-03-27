<?php
require_once '../core/init.php';

$pagetitle = 'Banner';
$description ='Banners';
$breadcrumbs = array('Banner' =>  WEB_ROOT."banner/");
//checkUser();
if(Input::exists('get')){

$view = Input::get('action');
$id=Input::get('id');
switch ($view) {
	case 'nuevo' :	
		$description ='Nueva';
		$breadcrumbs = array('Banner' =>  WEB_ROOT."banner/",'Nueva' =>  "");
		$content = array('banner/nuevo.php', $pagetitle, $description, $breadcrumbs) ;
		break;
	case 'eliminar' :
		$banner = new Banner($id);
		$banner->eliminarImagen($banner->data()->id_imagen);
		DB::getInstance()->delete('banner',array('id','=',$id));
		Redirect::to('index.php');
		break;
	default :
		$content = array('banner/main.php', $pagetitle, $description, $breadcrumbs) ;
}
}else{
	$content = array('banner/main.php', $pagetitle, $description, $breadcrumbs) ;
}

$scripts = array('banner.js');
$init = array('Banner.init();');

require_once INC_ROOT.'/includes/template.php';
?>