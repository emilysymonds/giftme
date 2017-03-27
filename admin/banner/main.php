<?php
$banners = DB::getInstance()->get('banner',array('1','=','1'))->results();
?>
<div class="page-content-wrapper">
	<div class="page-content">
		<!-- BEGIN PAGE HEADER-->
		<?php require_once(INC_ROOT.'/includes/page-header.php');	 ?>
		<!-- END PAGE HEADER-->
		<div class="row">
			<div class="col-md-12">
					<!-- BEGIN TABLE PORTLET-->
					<div class="portlet box blue">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-folder-open"></i>Banners
							</div>
						</div>
						<div class="portlet-body">
							<div class="table-toolbar">
								<div class="btn-group ">
								</div>
								<div class="btn-group pull-right">
									<button id="btnAgregarGasto" class="btn green" onclick="window.location.href='index.php?action=nuevo'">
										<i class="fa fa-plus"></i> Banner 
									</button>
									<br><br>
								</div>
							</div>
							
							<table class="table table-bordered table-striped table-condensed flip-content display" id="tabla_banner">
							<thead>
							<tr>
								<th>
									 Nombre
								</th>
								<th>
									 Imagen
								</th>
								<th>
									 Categoría
								</th>
								<th>
									 Acciones
								</th>
	
							</tr>
							</thead>
							<tbody>
							<?php if($banners): ?>
							<?php foreach($banners as $b): ?>
							<?php $banner = new Banner($b->id);?>
							
							<tr>
								<td>
									<?php echo $banner->data()->nombre 
										 
									?>
								</td>
								
								<td width="30%">
								<?php 
								$arrayImagenes=$banner->getImagenes();
								foreach($arrayImagenes as $i):?>
									<img class="img-responsive" src="<?php echo ROOT.BANNER_IMAGE_DIR?><?php echo $i->nombre_archivo?>" alt=""></a><br>
		
								<?php endforeach;
								 ?>								

								</td>
								
								<td>
									<?php 
									$cat = new Categoria($banner->data()->categoria);
									
									if($banner->data()->categoria == 0){
										echo "Todas";
									}else{
										echo $cat->data()->nombre;
									}?>
								</td>
																
								<td align="center">
									<!--<button type='button' class = "btn btn-default" onclick ="eliminarBanner(<?php echo $banner->data()->id ?>)" id ="eliminarBanner"><i class="fa fa-trash-o"></i>-->
									
									<a class = "btn btn-default" href="javascript:eliminarBannerActual(<?php echo $banner->data()->id ?>)"><i class="fa fa-trash-o"></i></a>

								</td>
								
							</tr>	
							<?php endforeach; ?>
							<?php endif; ?>
							</tbody>
							</table>
					</div>
				</div>
		</div>
		
	</div>
</div>