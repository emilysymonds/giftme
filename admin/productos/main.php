
<?php
$productos_on = @Producto::getAllProductosOn();
$productos_off = @Producto::getAllProductosOff();
?>
<div class="page-content-wrapper">
	<div class="page-content">
		<!-- BEGIN PAGE HEADER-->
		<?php require_once(INC_ROOT.'/includes/page-header.php');	 ?>
		<!-- END PAGE HEADER-->
		<div class="row">
			<div class="col-md-12">
					<!-- BEGIN TABLE PORTLET-->
					<div class="btn-group pull-right">
						<button id="btnAgregarGasto" class="btn green" onclick="window.location.href='index.php?action=nuevo'">
							<i class="fa fa-plus"></i> Producto 
						</button>
					</div>
					<div class="clearfix" style="padding-bottom: 5px"></div>
					<div class="portlet box blue">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-thumbs-o-up"></i>Online
							</div>
						</div>
						<div class="portlet-body">
							<table class="table table-bordered table-striped table-condensed flip-content display" id="tabla_online">
							<thead>
							<tr>
								<th>
									 Nombre
								</th>
								<th>
									 Descripción
								</th>
								<th>
									 Precio
								</th>
								<th>
									 Categorías
								</th>
								<th>
									 Cantidad
								</th>
								<th   width="10%;">
									 Imágenes
								</th>
								<th>
									 Acciones
								</th>
	
							</tr>
							</thead>
							<tbody>
							<?php if($productos_on): ?>
							<?php foreach($productos_on as $prod): ?>
							<?php $producto = new Producto($prod->id);?>
							
							<tr>
								<td>
									<?php echo $producto->data()->nombre ?>
								</td>
								<td>
									<?php echo nl2br($producto->data()->descripcion) ?>
								</td>
								<td>
									<?php echo $producto->data()->total ?>
								</td>
								<td>
									<?php $categorias=$producto->devolverCategoriasProducto();
										foreach($categorias as $c):
											$cat = new Categoria($c->categoria);
											echo $cat->data()->nombre;?><br><?php
										 endforeach;
									?>
								</td>
								<td>
									<?php echo $producto->data()->cantidad ?>
								</td>
								<td>
								<?php $arrayImagenes=$producto->getImagenes();
								foreach($arrayImagenes as $i):?>
									<!--<a href="<?php echo ROOT.PRODUCT_IMAGE_DIR?><?php echo $i->nombre_archivo?>" class="fancybox-button" data-rel="fancybox-button">-->
									<img class="img-responsive" src="<?php echo ROOT.PRODUCT_IMAGE_DIR?><?php echo $i->nombre_archivo?>" alt=""></a><br>
		
								<?php endforeach;
								 ?>
								</td>
								
								
								<td align="center">
								<a class = "btn btn-default" href='index.php?action=bajar&id=<?php echo $producto->data()->id ?>'><i title="Bajar a Offline" class="fa fa-thumbs-o-down"></i></a>
									<a class = "btn btn-default" href='index.php?action=modificar&id=<?php echo $producto->data()->id ?>'><i class="fa fa-edit"></i></a>
									<a class = "btn btn-default" href="javascript:deleteProductOn(<?php echo $producto->data()->id?>);"><i class="fa fa-trash-o"></i></a>

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
		<div class="row">
			<div class="col-md-12">
					<!-- BEGIN TABLE PORTLET-->
					<div class="portlet box blue">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-thumbs-o-down"></i>Offline
							</div>
						</div>
						<div class="portlet-body">
													
							<table class="table table-bordered table-striped table-condensed flip-content display" id="tabla_offline">
							<thead>
							<tr>
								<th>
									 Nombre
								</th>
								<th>
									 Descripción
								</th>
								<th>
									 Precio
								</th>
								<th>
									 Categorías
								</th>
								<th>
									 Cantidad
								</th>
								<th   width="10%;">
									 Imágenes
								</th>
								<th>
									 Acciones
								</th>
	
							</tr>
							</thead>
							<tbody>
							<?php if($productos_off): ?>
							<?php foreach($productos_off as $prod): ?>
							<?php $producto = new Producto($prod->id);?>
							
							<tr>
								<td>
									<?php echo $producto->data()->nombre ?>
								</td>
								<td>
									<?php echo nl2br($producto->data()->descripcion) ?>
								</td>
								<td>
									<?php echo $producto->data()->total ?>
								</td>
								<td>
									<?php $categorias=$producto->devolverCategoriasProducto();
										foreach($categorias as $c):
											$cat = new Categoria($c->categoria);
											echo $cat->data()->nombre;?><br><?php
										 endforeach;
									?>
								</td>
								<td>
									<?php echo $producto->data()->cantidad ?>
								</td>
								<td>
								<?php $arrayImagenes=$producto->getImagenes();
								foreach($arrayImagenes as $i):?>
									<!--<a href="<?php echo ROOT.PRODUCT_IMAGE_DIR?><?php echo $i->nombre_archivo?>" class="fancybox-button" data-rel="fancybox-button">-->
									<img class="img-responsive" src="<?php echo ROOT.PRODUCT_IMAGE_DIR?><?php echo $i->nombre_archivo?>" alt=""></a><br>
		
								<?php endforeach;
								 ?>
								</td>
								
								
								<td align="center">
								<a class = "btn btn-default" href='index.php?action=subir&id=<?php echo $producto->data()->id ?>'><i title="Subir a Online" class="fa fa-thumbs-o-up"></i></a>
									<a class = "btn btn-default" href='index.php?action=modificar&id=<?php echo $producto->data()->id ?>'><i class="fa fa-edit"></i></a>
									<a class = "btn btn-default" href="javascript:deleteProductOn(<?php echo $producto->data()->id?>);"><i class="fa fa-trash-o"></i></a>

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
</div>
