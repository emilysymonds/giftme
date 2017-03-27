<?php
$errors = null;

$datos=111;
			

if(Input::exists('post')){
	if(Token::check((Input::get('token')))){
		$validate = new Validate();
		$validation  = $validate->check($_POST, array(
			'nombre'=>array(
				'required' => true
			)
		));
		if($validation->passed()){
			$banner = new Banner();
			$categoria= $_POST['categorias'];
			/*if(isset($_POST['categories'])){
					foreach ($_POST['categories'] as $k => $c)
					{
					       if ($c == 'on')
					       {   
						   	$categoria=$k;
					       } 
					}
			}*/
				
			try{
				$banner->create(array(
					'nombre'=> Input::get('nombre'),
					'categoria'=> $categoria					
				));

				$idBan=@Banner::lastID();
				$b=new Banner($idBan);

				$idImagen=0;			
				//agrego imagen al banner
				$target_dir = SRV_ROOT . BANNER_IMAGE_DIR;
				if(isset($_FILES["file1"]["name"])){
					$target_file = $target_dir . basename($_FILES["file1"]["name"]);
					$nombre="file1";
					$errors=subirImagen($nombre, $target_dir, $target_file, 0);
					
				}
				
				if(!$errors){
					$idImagen=@Imagen::lastID();
					$img=new Imagen($idImagen);
					$b->insertarImagen($img->data()->id);
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
											<i class="fa fa-reorder"></i>Banner nuevo
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
														<input type="text" id="nombre" name="nombre" class="form-control" placeholder="Ingrese el nombre del banner" value="<?php echo escape(Input::get('nombre')); ?>" tabindex="2">
													</div>
													<div class="form-group">
															<label class="control-label" for="total">Seleccione imagen:</label>
															<br><br>
														    <input type="file" name="file1" id="file1">
														</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
																<label class="control-label" for="total">Link a categoría:</label><br>
															
																<label class="radio"><input id="categorias" type="radio" name="categorias" value="0" checked=""/> Todas </label>
																<?php 
																$categorias=@Categoria::obtenerTodas();
																foreach($categorias as $cate):
																	$c = new Categoria($cate->id);?>
																	
																	<label class="radio">
																	<input id="categorias" type="radio" name="categorias" value="<?php echo $c->data()->id ?>"/><?php echo "     ".$c->data()->nombre; ?> 
																	</label>                      					
																<?php endforeach;
																?>
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