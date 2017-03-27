<?php
require_once('admin/core/init.php');
require_once('php/funciones.php');

if(Input::get('idProd')){
	$id=Input::get('idProd');
	$producto = new Producto($id);
}
?>
<!-- Include the Etalage files -->
	<link rel="stylesheet" href="css/etalage.css">
	<script src="js/jquery.etalage.min.js"></script>
	<script src="js/modal.js"></script>

<!-- Include the Etalage files -->
<script>
		jQuery(document).ready(function($){

			$('#etalage').etalage({
				thumb_image_width: 364,
				thumb_image_height: 256,
				
				show_hint: true,
				click_callback: function(image_anchor, instance_id){
					alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
				}
			});
			// This is for the dropdown list example:
			$('.dropdownlist').change(function(){
				etalage_show( $(this).find('option:selected').attr('class') );
			});

	});
</script>
<!----//details-product-slider--->	


<div class="containerModal">
	<!--<a href="#" class="btn" id="closewin">Cancel</a>-->

	 <button type="button" class="close" id="closewin" data-dismiss="modal" aria-hidden="true"><img src="images/close.png" title="cerrar" width="140%"/></button>    
		<div class="cont span_2_of_3">
			 <div class="labout span_1_of_a1">
				<!-- start product_slider -->
				    <ul id="etalage">
							
							<?php $arrayImagenes=$producto->getImagenes();
								foreach($arrayImagenes as $i):?>
									<li>
										<img class="etalage_thumb_image" src="images/product/<?php echo $i->nombre_archivo?> "/>
										<img class="etalage_source_image" src="images/product/<?php echo $i->nombre_archivo?> " />
									</li>		
								<?php endforeach;
								 ?>
							
							<li>
							
							</li>
							
					</ul>
					
					
			<!-- end product_slider -->
			</div>
			<div class="cont1 span_2_of_a1 pull-right">
				<h3 class="m_3"><?php echo $producto->data()->nombre;?></h3>
				
				<div class="price_single">
							  <!--<span class="reducedfrom">$66.00</span>-->
							  <span class="actual">$ <?php echo $producto->data()->total;?></span>
				</div>
				<!--<ul class="options list-unstyled">
					<h4 class="m_9">Select a Size</h4>
					<li><a href="#">6</a></li>
					<li><a href="#">7</a></li>
					<li><a href="#">8</a></li>
					<li><a href="#">9</a></li>
					<div class="clearfix"></div>
				</ul>-->
				
				<!--<ul class="add-to-links list-unstyled">
    			   <li><img src="images/wish.png" alt=""><a href="#">Add to wishlist</a></li>
    			</ul>-->
    			<p class="m_desc">Incluye:</p>
    			<p class="m_item">
    			<?php
				echo nl2br($producto->data()->descripcion);
				?>
				</p>
    			
                <!--<div class="social_single">	
				   <ul list-unstyled>	
					  <li class="fb"><a href="#"><span> </span></a></li>
					  <li class="tw"><a href="#"><span> </span></a></li>
					  <li class="g_plus"><a href="#"><span> </span></a></li>
					  <li class="rss"><a href="#"><span> </span></a></li>		
				   </ul>
			    </div>-->
			</div>
			<div class="clearfix"></div>
         </div>
</div>