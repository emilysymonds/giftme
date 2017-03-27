
<div class="row hidden-print">
	<div class="col-md-12">
		<!-- BEGIN PAGE TITLE & BREADCRUMB-->
		<h3 class="page-title">
	<?php	echo $content[1]; ?> <small><?php	echo $content[2]; ?></small>
		</h3>
		<ul class="page-breadcrumb breadcrumb">
			<li>
				<i class="fa fa-home"></i>
				<a href="<?php echo WEB_ROOT;?>">
					Home
				</a>
				<i class="fa fa-angle-right"></i>
			</li>
	<?php 
		$x=1;
		foreach($breadcrumbs as $breadcrumb => $ahref){ ?>
			<li>
				<a href="<?php echo $ahref; ?>">
					<?php echo $breadcrumb; ?>
				</a>
				<?php if(sizeof($breadcrumbs) == $x+1) { ?>
					<i class="fa fa-angle-right"></i>
				<?php } ?>
			</li>
		<?php
			$x++;
		}
	  ?>
		</ul>
		<!-- END PAGE TITLE & BREADCRUMB-->
	</div>
</div>