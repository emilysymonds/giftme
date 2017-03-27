<?php
require_once '../core/init.php';

$pagetitle = 'Categorías';
$description ='Lista de categorías';
$breadcrumbs = array('Categorias' =>  WEB_ROOT."categorias/");
//checkUser();
if(Input::exists('get')){

$view = Input::get('action');
$id=Input::get('id');
switch ($view) {
	case 'nuevo' :	
		$description ='Nueva';
		$breadcrumbs = array('Categorias' =>  WEB_ROOT."categorias/",'Nueva' =>  "");
		$content = array('categorias/nuevo.php', $pagetitle, $description, $breadcrumbs) ;
		break;

	case 'modificar' :
		$description ='Modificar ';
		$breadcrumbs = array('Categorias' =>  WEB_ROOT."categorias/",'Modificar' =>  "");
		$content = array('categorias/modificar.php', $pagetitle, $description, $breadcrumbs) ;
		break;
	case 'eliminar' :
		DB::getInstance()->delete('categoria',array('id','=',$id));
		DB::getInstance()->delete('prod_cat',array('categoria','=',$id));
		Redirect::to('index.php');
		break;
	case 'ver' :
		$description ='Detalle ';
		$breadcrumbs = array('Categorias' =>  WEB_ROOT."categorias/",'Detalle' =>  "");
		$content = array('categorias/detalle.php', $pagetitle, $description, $breadcrumbs) ;
		break;
	default :
		$content = array('categorias/main.php', $pagetitle, $description, $breadcrumbs) ;
}
}else{
	$content = array('categorias/main.php', $pagetitle, $description, $breadcrumbs) ;
}

$scripts = array('categorias.js');
$init = array('Categoria.init();');

require_once INC_ROOT.'/includes/template.php';
?>