<?php
$categorias = DB::getInstance()->get('categoria',array('1','=','1'))->results();
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
								<i class="fa fa-sitemap"></i>Categorias
							</div>
						</div>
						<div class="portlet-body">
							<div class="table-toolbar">
								<div class="btn-group ">
								</div>
								<div class="btn-group pull-right">
									<button id="btnAgregarGasto" class="btn green" onclick="window.location.href='index.php?action=nuevo'">
										<i class="fa fa-plus"></i> Categoría 
									</button>
								</div>
							</div>
							
							<table class="table table-bordered table-striped table-condensed flip-content display" id="tabla_categorias">
							<thead>
							<tr>
								<th>
									 Nombre
								</th>
								<th>
									 Cantidad de productos
								</th>
								<th>
									 Acciones
								</th>
	
							</tr>
							</thead>
							<tbody>
							<?php if($categorias): ?>
							<?php foreach($categorias as $cat): ?>
							<?php $categoria = new Categoria($cat->id);?>
							
							<tr>
								<td>
									<?php echo $categoria->data()->nombre ?>
								</td>
								<td width="30%">
									<?php 
									$cant1=sizeof($categoria->obtenerProductosCategoriaOn());
									$cant2=sizeof($categoria->obtenerProductosCategoriaOff());

									echo $cant1+$cant2;
									?>

								</td>
								<td align="center">
									<a class = "btn btn-default" href='index.php?action=modificar&id=<?php echo $categoria->data()->id ?>'><i class="fa fa-edit"></i></a>
									<button type='button' class = "btn btn-default" onclick ="eliminarCategoria(<?php echo $categoria->data()->id ?>)" id ="eliminarCategoria"><i class="fa fa-trash-o"></i>
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