
<?php
/*require_once("admin/library/funciones_db.php");*/




function categoriasRegalos($active){
	//$categorias = obtenerCategorias();
	$todas="";
	/*foreach($categorias as $x){
		$todas=$todas . $x['cat_nombre']." ";
	}*/
	
	echo "<ul id='filters' class='clearfix'>";
				if($active==1){
					echo "<li><a href='regalos.php'>
						<span class='filter' data-filter='bebés cumpleaños aniversario ocasiones spa novias getwell thankyou'>Todos</span></a>
					</li>
					<li>
						<span class='filter active' data-filter='bebés'>Bebés</span>
					</li>
					<li><a href='regalos.php?id=2'>
						<span class='filter' data-filter='cumpleaños'>Cumpleaños</span>
						</a>
					</li>
					<li><a href='regalos.php?id=3'>
						<span class='filter' data-filter='aniversario'>Aniversario</span></a>
					</li>
					<li><a href='regalos.php?id=4'>
						<span class='filter' data-filter='ocasiones'>Ocasiones</span></a>
					</li>
					<li><a href='regalos.php?id=5'>
						<span class='filter' data-filter='spa'>Spa</span></a>
					</li>
					<li><a href='regalos.php?id=6'>
						<span class='filter' data-filter='novias'>Novias</span></a>
					</li>
					<li><a href='regalos.php?id=7'>
						<span class='filter' data-filter='getwell'>Get well</span></a>
					</li>
					<li><a href='regalos.php?id=8'>
						<span class='filter' data-filter='thankyou'>Thank you</span></a>
					</li>	";
				}else if($active == 2){
									
					echo "<li><a href='regalos.php'>
						<span class='filter' data-filter='bebés cumpleaños aniversario ocasiones spa novias getwell thankyou'>Todos</span></a>
					</li>
					<li><a href='regalos.php?id=1'>
						<span class='filter' data-filter='bebés'>Bebés</span></a>
					</li>
					<li>
						<span class='filter active' data-filter='cumpleaños'>Cumpleaños</span>
					</li>
					<li><a href='regalos.php?id=3'>
						<span class='filter' data-filter='aniversario '>Aniversario</span></a>
					</li>
					<li><a href='regalos.php?id=4'>
						<span class='filter' data-filter='ocasiones'>Ocasiones</span></a>
					</li>
					<li><a href='regalos.php?id=5'>
						<span class='filter' data-filter='spa'>Spa</span></a>
					</li>
					<li><a href='regalos.php?id=6'>
						<span class='filter' data-filter='novias'>Novias</span></a>
					</li>
					<li><a href='regalos.php?id=7'>
						<span class='filter' data-filter='getwell'>Get well</span></a>
					</li>
					<li><a href='regalos.php?id=8'>
						<span class='filter' data-filter='thankyou'>Thank you</span></a>
					</li>";	
					
				}else if($active == 3){
					echo "<li><a href='regalos.php'>
						<span class='filter' data-filter='bebés cumpleaños aniversario ocasiones spa novias getwell thankyou'>Todos</span></a>
					</li>
					<li><a href='regalos.php?id=1'>
						<span class='filter' data-filter='bebés'>Bebés</span></a>
					</li>
					<li><a href='regalos.php?id=2'>
						<span class='filter' data-filter='cumpleaños'>Cumpleaños</span></a>
					</li>
					<li>
						<span class='filter active' data-filter='aniversario '>Aniversario</span>
					</li>
					<li><a href='regalos.php?id=4'>
						<span class='filter' data-filter='ocasiones'>Ocasiones</span></a>
					</li>
					<li><a href='regalos.php?id=5'>
						<span class='filter' data-filter='spa'>Spa</span></a>
					</li>
					<li><a href='regalos.php?id=6'>
						<span class='filter' data-filter='novias'>Novias</span></a>
					</li>
					<li><a href='regalos.php?id=7'>
						<span class='filter' data-filter='getwell'>Get well</span></a>
					</li>
					<li><a href='regalos.php?id=8'>
						<span class='filter' data-filter='thankyou'>Thank you</span></a>
					</li>";	
					
				}else if($active == 4){
					echo "
					<li><a href='regalos.php'>
						<span class='filter' data-filter='bebés cumpleaños aniversario ocasiones spa novias getwell thankyou'>Todos</span></a>
					</li>
					<li><a href='regalos.php?id=1'>
						<span class='filter' data-filter='bebés'>Bebés</span></a>
					</li>
					<li><a href='regalos.php?id=2'>
						<span class='filter' data-filter='cumpleaños'>Cumpleaños</span></a>
					</li>
					<li><a href='regalos.php?id=3'>
						<span class='filter' data-filter='aniversario '>Aniversario</span></a>
					</li>
					<li>
						<span class='filter active' data-filter='ocasiones'>Ocasiones</span>
					</li>
					<li><a href='regalos.php?id=5'>
						<span class='filter' data-filter='spa'>Spa</span></a>
					</li>
					<li><a href='regalos.php?id=6'>
						<span class='filter' data-filter='novias'>Novias</span></a>
					</li>
					<li><a href='regalos.php?id=7'>
						<span class='filter' data-filter='getwell'>Get well</span></a>
					</li>
					<li><a href='regalos.php?id=8'>
						<span class='filter' data-filter='thankyou'>Thank you</span></a>
					</li>";	
					
				}else if($active == 5){
					echo "
					<li><a href='regalos.php'>
						<span class='filter' data-filter='bebés cumpleaños aniversario ocasiones spa novias getwell thankyou'>Todos</span></a>
					</li>
					<li><a href='regalos.php?id=1'>
						<span class='filter' data-filter='bebés'>Bebés</span></a>
					</li>
					<li><a href='regalos.php?id=2'>
						<span class='filter' data-filter='cumpleaños'>Cumpleaños</span></a>
					</li>
					<li><a href='regalos.php?id=3'>
						<span class='filter' data-filter='aniversario '>Aniversario</span></a>
					</li>
					<li><a href='regalos.php?id=4'>
						<span class='filter' data-filter='ocasiones'>Ocasiones</span></a>
					</li>
					<li>
						<span class='filter active' data-filter='spa'>Spa</span>
					</li>
					<li><a href='regalos.php?id=6'>
						<span class='filter' data-filter='novias'>Novias</span></a>
					</li>
					<li><a href='regalos.php?id=7'>
						<span class='filter' data-filter='getwell'>Get well</span></a>
					</li>
					<li><a href='regalos.php?id=8'>
						<span class='filter' data-filter='thankyou'>Thank you</span></a>
					</li>";	
					
				}else if($active == 6){
					echo "
					<li><a href='regalos.php'>
						<span class='filter' data-filter='bebés cumpleaños aniversario ocasiones spa novias getwell thankyou'>Todos</span></a>
					</li>
					<li><a href='regalos.php?id=1'>
						<span class='filter' data-filter='bebés'>Bebés</span></a>
					</li>
					<li><a href='regalos.php?id=2'>
						<span class='filter' data-filter='cumpleaños'>Cumpleaños</span></a>
					</li>
					<li><a href='regalos.php?id=3'>
						<span class='filter' data-filter='aniversario '>Aniversario</span></a>
					</li>
					<li><a href='regalos.php?id=4'>
						<span class='filter' data-filter='ocasiones'>Ocasiones</span></a>
					</li>
					<li><a href='regalos.php?id=5'>
						<span class='filter' data-filter='spa'>Spa</span></a>
					</li>
					<li>
						<span class='filter active' data-filter='novias'>Novias</span>
					</li>
					<li><a href='regalos.php?id=7'>
						<span class='filter' data-filter='getwell'>Get well</span></a>
					</li>
					<li><a href='regalos.php?id=8'>
						<span class='filter' data-filter='thankyou'>Thank you</span></a>
					</li>";
					
				}else if($active == 7){
					echo "
					<li><a href='regalos.php'>
						<span class='filter' data-filter='bebés cumpleaños aniversario ocasiones spa novias getwell thankyou'>Todos</span></a>
					</li>
					<li><a href='regalos.php?id=1'>
						<span class='filter' data-filter='bebés'>Bebés</span></a>
					</li>
					<li><a href='regalos.php?id=2'>
						<span class='filter' data-filter='cumpleaños'>Cumpleaños</span></a>
					</li>
					<li><a href='regalos.php?id=3'>
						<span class='filter' data-filter='aniversario '>Aniversario</span></a>
					</li>
					<li><a href='regalos.php?id=4'>
						<span class='filter' data-filter='ocasiones'>Ocasiones</span></a>
					</li>
					<li><a href='regalos.php?id=5'>
						<span class='filter' data-filter='spa'>Spa</span></a>
					</li>
					<li><a href='regalos.php?id=6'>
						<span class='filter' data-filter='novias'>Novias</span></a>
					</li>
					<li>
						<span class='filter active' data-filter='getwell'>Get well</span>
					</li>
					<li><a href='regalos.php?id=8'>
						<span class='filter' data-filter='thankyou'>Thank you</span></a>
					</li>";	
					
				}else if($active == 8){
					echo "
					<li><a href='regalos.php'>
						<span class='filter' data-filter='bebés cumpleaños aniversario ocasiones spa novias getwell thankyou'>Todos</span></a>
					</li>
					<li><a href='regalos.php?id=1'>
						<span class='filter' data-filter='bebés'>Bebés</span></a>
					</li>
					<li><a href='regalos.php?id=2'>
						<span class='filter' data-filter='cumpleaños'>Cumpleaños</span></a>
					</li>
					<li><a href='regalos.php?id=3'>
						<span class='filter' data-filter='aniversario '>Aniversario</span></a>
					</li>
					<li><a href='regalos.php?id=4'>
						<span class='filter' data-filter='ocasiones'>Ocasiones</span></a>
					</li>
					<li><a href='regalos.php?id=5'>
						<span class='filter' data-filter='spa'>Spa</span></a>
					</li>
					<li><a href='regalos.php?id=6'>
						<span class='filter' data-filter='novias'>Novias</span></a>
					</li>
					<li><a href='regalos.php?id=7'>
						<span class='filter' data-filter='getwell'>Get well</span></a>
					</li>
					<li>
						<span class='filter active' data-filter='thankyou'>Thank you</span>
					</li>";
					
				}
				else{
					echo "<li>
						<span class='filter active' data-filter='bebés cumpleaños aniversario ocasiones spa novias getwell thankyou'>Todos</span>
					</li>
					<li><a href='regalos.php?id=1'>
						<span class='filter' data-filter='bebés'>Bebés</span></a>
					</li>
					<li><a href='regalos.php?id=2'>
						<span class='filter' data-filter='cumpleaños'>Cumpleaños</span></a>
					</li>
					<li><a href='regalos.php?id=3'>
						<span class='filter' data-filter='aniversario '>Aniversario</span></a>
					</li>
					<li><a href='regalos.php?id=4'>
						<span class='filter' data-filter='ocasiones'>Ocasiones</span></a>
					</li>
					<li><a href='regalos.php?id=5'>
						<span class='filter' data-filter='spa'>Spa</span></a>
					</li>
					<li><a href='regalos.php?id=6'>
						<span class='filter' data-filter='novias'>Novias</span></a>
					</li>
					<li><a href='regalos.php?id=7'>
						<span class='filter' data-filter='getwell'>Get well</span></a>
					</li>
					<li>
						<span class='filter' data-filter='thankyou'>Thank you</span>
					</li>";
				}
											
		echo "</ul>";
		
	}

function productos(){
	$productos = obtenerProdsOn();
	foreach($productos as $x){
		$cats=devolverCatProds($x['prod_id']);
		$todas="";
		$cant=0;
		foreach($cats as $y){
			$todas=$todas.$y['cat_nombre']." ";
		}
		echo "<div class='portfolio "; echo $todas; echo "' data-cat='"; echo $todas; echo "'>
				<div class='portfolio-wrapper'>
					<a rel='group' data-toggle='modal' data-target='.bs-example-modal-md' href='#' class='b-link-stripe b-animate-go  thickbox'>
				     <img src='images/product/";echo $x['prod_foto1'];echo"' /></a>
					
					<div class='label'>
						<div class='label-text'>
							<span class='text-category'>";echo $x['prod_nombre'];echo"</span>
						</div>
						<div class='label-bg'></div>
					</div>
				</div>
									
		</div>";
	}
	
}

?>