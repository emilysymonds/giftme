<?php
require_once '../core/init.php';

$pagetitle = 'Productos';
$description ='lista';
$breadcrumbs = array('Productos' =>  WEB_ROOT."productos/");
//checkUser();
if(Input::exists('get')){

$view = Input::get('action');
$id=Input::get('id');
$idImagen=Input::get('idImagen');
switch ($view) {
	case 'nuevo' :	
		$description ='nuevo ';
		$breadcrumbs = array('Productos' =>  WEB_ROOT."productos/",'Nuevo' =>  "");
		$content = array('productos/nuevo.php', $pagetitle, $description, $breadcrumbs) ;
		break;
	case 'online' :	
		$description ='nuevo ';
		$breadcrumbs = array('Productos' =>  WEB_ROOT."productos/",'Nuevo' =>  "");
		$content = array('productos/nuevo.php', $pagetitle, $description, $breadcrumbs) ;
		break;
	case 'offline' :	
		$description ='nuevo ';
		$breadcrumbs = array('Productos' =>  WEB_ROOT."productos/",'Nuevo' =>  "");
		$content = array('productos/nuevo.php', $pagetitle, $description, $breadcrumbs) ;
		break;

	case 'modificar' :
		$description ='Modificar ';
		$breadcrumbs = array('Productos' =>  WEB_ROOT."productos/",'Modificar' =>  "");
		$content = array('productos/modificar.php', $pagetitle, $description, $breadcrumbs) ;
		break;
	case 'subir' :
		$producto = new Producto($id);
		$producto->subirAOnline();
		Redirect::to('index.php');
		break;
	case 'bajar' :
		$producto = new Producto($id);
		$producto->bajarAOffline();
		Redirect::to('index.php');
		break;
	case 'eliminar' :
		$producto = new Producto($id);
		$producto->eliminarRelacionProdCat();
		$producto->eliminarImagenes();
		DB::getInstance()->delete('producto',array('id','=',$id));
		Redirect::to('index.php');
		break;
	case 'ver' :
		$description ='Detalle ';
		$breadcrumbs = array('Productos' =>  WEB_ROOT."productos/",'Detalle' =>  "");
		$content = array('productos/detalle.php', $pagetitle, $description, $breadcrumbs) ;
		break;
	case 'eliminarImagen' :
		$img = new Imagen($idImagen);
		$img->eliminarFisicamente();
		DB::getInstance()->delete('imagen',array('id','=',$idImagen));
		/*Redirect::to('index.php');*/
		Redirect::to('index.php?action=modificar&id='.$id);
		break;
	default :
		$content = array('productos/main.php', $pagetitle, $description, $breadcrumbs) ;
}
}else{
	$content = array('productos/main.php', $pagetitle, $description, $breadcrumbs) ;
}

$scripts = array('productos.js');
$init = array('Producto.init();');

require_once INC_ROOT.'/includes/template.php';
?>