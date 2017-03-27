<?php
$producto = new Producto($id);
$categoriasArray=array();
$errors = null;
$datos=111;


if(Input::exists('post')){
	if(Token::check((Input::get('token')))){
		$validate = new Validate();
		$validation  = $validate->check($_POST, array(
			'nombre'=>array(
				'required' => true
			),
			'descripcion'=>array(
				'required' => true
			),
			'total'=>array(
				'required' => true
			),
			'cantidad'=>array(
				'required' => true
			)/*,
			'file1'=>array(
				'required' => true
			)*/
		));
		if($validation->passed()){
			$selectOption = $_POST['estadoProducto'];			
			try{
				$producto->update(array(
					'nombre'=> Input::get('nombre'),
					'descripcion'=> Input::get('descripcion'),
					'total'=> Input::get('total'),
					'cantidad'=> Input::get('cantidad'),
					'estado'=> $selectOption
				),$id);
							
				if(isset($_POST['categories'])){
					foreach ($_POST['categories'] as $k => $c)
					{
					       if ($c == 'on')
					       {   
						   	array_push($categoriasArray,$k);
					       } 
					}
				}
				
				//elimina las categorias que tenia
				$producto->eliminarRelacionProdCat();
				//agrega categorias al producto
				foreach($categoriasArray as $catP):
						$c=new Categoria($catP);
						$producto->insertarCategoria($c->data()->id);
				endforeach;
				
				//agrego imagenes al producto
				$target_dir = SRV_ROOT . PRODUCT_IMAGE_DIR;
				if(isset($_FILES["file1"]["name"])){
					$target_file = $target_dir . basename($_FILES["file1"]["name"]);
					$nombre="file1";
					$errors=subirImagen($nombre, $target_dir, $target_file, $id);
				}
				if(isset($_FILES["file2"]["name"])){
					$target_file = $target_dir . basename($_FILES["file2"]["name"]);
					$nombre="file2";
					$errors=subirImagen($nombre, $target_dir,$target_file, $id);
				}
				if(isset($_FILES["file3"]["name"])){
					$target_file = $target_dir . basename($_FILES["file3"]["name"]);
					$nombre="file3";
					$errors=subirImagen($nombre, $target_dir,$target_file, $id);
				}
				
				if(!$errors){
					Redirect::to('index.php');
				}
			}catch(Exception $e){
				$errors=$e->getMessage();
			}
		}else{
			$errors=$validation->errors();
		}
	}else{
		$errors="El token no coincide";
	}
}

function subirImagen($nombre, $target_dir, $target_file, $idProd){
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	// generate a random new file name to avoid name conflict
	$image = $_FILES[$nombre];
	$ext = substr(strrchr($image['name'], "."), 1); 
	$imagePath = md5(rand() * time()). ".$ext";
	$check = getimagesize($_FILES[$nombre]["tmp_name"]);
    if($check !== false) {
        $okey =  "El archivo es una imagen - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        $uploadOk = 0;
    }
    if (move_uploaded_file($_FILES[$nombre]["tmp_name"], $target_dir . $imagePath)) {
        $okey =  "El archivo ". basename( $_FILES[$nombre]["name"]). " fue subido.";
		$prod=new Producto($idProd);
		$datos=$imagePath;
		
		$imagen = new Imagen();

		$imagen->create(array(
					'nombre_archivo'=> $imagePath,
					'nombre_real'=> $imagePath,
					'producto'=> $idProd
				));
		
		
	}
	return $errors;

}

?>
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
						<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- BEGIN PAGE HEADER-->
			<?php include(INC_ROOT.'/includes/page-header.php'); ?>
			<!-- END PAGE HEADER-->
			<div class="clearfix">
			</div>
			<div class="row">	
				<div class="col-md-12 ">
					<!-- BEGIN SAMPLE FORM PORTLET-->
					<div class="portlet box blue">
									<div class="portlet-title">
										<div class="caption">
											<i class="fa fa-reorder"></i>Modificar producto
										</div>
									</div>

									<div class="portlet-body form">
										<!-- BEGIN FORM-->
										<form action="" id="form_producto" method="post" enctype="multipart/form-data" class="horizontal-form">
											<div class="form-body">
											<?php if($errors){ ?>
											<div class="alert alert-danger display-show">
												<button class="close" data-close="alert"></button>
											<?php if(is_array($errors)){
													 foreach($errors as $error){
															echo $error,' ';
														}
													}else{
														echo $errors;
													}
												 ?>
											</div>
											<?php } ?>
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label class="control-label" for="nombre">Nombre</label>
		<input type="text" id="nombre" name="nombre" class="form-control" placeholder="Ingrese nombre de categoria" value="<?php echo $producto->data()->nombre; ?>" tabindex="2">
													</div>
													<div class="form-group">
														<label class="control-label" for="descripcion">Descripción</label>
														<textarea style="min-height:120px" name="descripcion" class="form-control" placeholder="Ingrese la descripción del producto" value="<?php echo $producto->data()->descripcion; ?>" tabindex="2"><?php echo $producto->data()->descripcion; ?></textarea>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label class="control-label" for="total">Precio</label>
														<input type="text" id="total" name="total" class="form-control" placeholder="Ingrese el precio del producto" value="<?php echo $producto->data()->total; ?>" tabindex="2">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label class="control-label" for="cantidad">Cantidad</label>
														<input type="text" id="cantidad" name="cantidad" class="form-control" placeholder="Ingrese la cantidad de productos" value="<?php echo $producto->data()->cantidad; ?>" tabindex="2">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label class="control-label" for="estado">Estado</label>
														<?php $estado = $producto->data()->estado; 
															if($estado=="on"){?>
																<select name="estadoProducto" class="form-control">
																  <option value="on" selected>Online</option>
																  <option value="off">Offline</option>
																</select>
															<?php } 
															if($estado=="off"){?>
																<select name="estadoProducto" class="form-control">
																  <option value="on" selected>Online</option>
																  <option value="off">Offline</option>
																</select>
															<?php } ?>
														

													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-6">
														<div class="form-group">
															<label class="control-label" for="total">Categorías</label>
															<?php 
															$categorias=@Categoria::obtenerTodas();
															foreach($categorias as $cate):
																$c = new Categoria($cate->id);
																$estaCheck=false;
																$catProducto=$producto->devolverCategoriasProducto();
																foreach($catProducto as $x):
																	if($cate->id==$x->categoria){
																		$estaCheck=true;
																	}
																endforeach;
																?>
																<br>
																<?php if($estaCheck){?>
																<input id="categorias" type="checkbox" checked name="categories[<?php echo $c->data()->id ?>]"  /><?php echo $c->data()->nombre; 
																}else{?>
																	
																<input id="categorias" type="checkbox" name="categories[<?php echo $c->data()->id ?>]"  /><?php echo $c->data()->nombre; 

																}
																?> 

																                 					
															<?php 
															endforeach;
															?>
															
															
														</div>
													</div>
													<div class="col-md-6" >
														<div class="form-group">
														<table>
														<?php 
															$arrayImagenes=$producto->getImagenes();
															$cant=0;
															$cantImagenes=sizeof($arrayImagenes);
															while($cant < 3){
															?>
															
															<tr>
																<?php 
																if(isset($arrayImagenes[$cant])){ 
																	$i=new Imagen($arrayImagenes[$cant]->id);
																?>
																	<td width="40%">	
																	<img  class="img-responsive" src="<?php echo ROOT.PRODUCT_IMAGE_DIR?><?php echo $i->data()->nombre_archivo ?>" alt=""></a><br>
																	</td>
																	<br>
																	<td width="40%">
																		<a href="javascript:deleteImage(<?php echo $i->data()->id ?>,<?php echo $producto->data()->id ?>);" class="btn default btn-sm">
																			<i class="fa fa-times"></i> Eliminar
																		</a>
																	</td>
																	<?php } else{?>
																		<td>
																			<label class="control-label" for="total">Ingrese imagen <?php echo $cant+1;?>:</label>
																			<input type="file" name="file<?php echo $cant+1 ?>" id="file<?php echo $cant+1 ?>" style="margin-left: 10%;"><br>
																		</td>
																		<?php }
																	?>
																
															<?php 
															$cant++;
															}
															 ?>
															 </table>
														</div>
														
													</div>
											</div>
										
											
											
											<div class="form-actions right">
												<button type="button" class="btn default" onclick="window.location.href='index.php'">Cancelar</button>
												<input type="hidden" name = "token" value="<?php echo Token::generate(); ?>"> 
												<button type="submit" class="btn blue"><i class="fa fa-check"></i> Guardar</button>
											</div>
										</form>
										<!-- END FORM-->
									</div>
								</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END CONTENT -->
</div>
<!-- END CONTAINER -->