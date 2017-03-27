<?php

$categoria = new Categoria($id);
$errors = null;
if(Input::exists('post')){
	if(Token::check((Input::get('token')))){
		$validate = new Validate();
		$validation  = $validate->check($_POST, array(
			'nombre'=>array(
				'required' => true
			)
		));
		if($validation->passed()){
			try{
				$categoria->update(array(
					'nombre'=> Input::get('nombre')
				),$id);
				Redirect::to('index.php');
			}catch(Exception $e){
				$errors=$e->getMessage();
			}
		}else{
			$errors=$validation->errors();
		}
	}else{
		
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
											<i class="fa fa-reorder"></i>Categoría nuevo
										</div>
									</div>
									<div class="portlet-body form">
										<!-- BEGIN FORM-->
										<form action="" id="form_categoria" method="post" class="horizontal-form">
											<div class="form-body">
											<div class="alert alert-danger display-hide">
												<button class="close" data-close="alert"></button>
												Hay errores. Por favor verifique.
											</div>
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
		<input type="text" id="nombre" name="nombre" class="form-control" placeholder="Ingrese nombre de categoria" value="<?php echo $categoria->data()->nombre; ?>" tabindex="2">
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