<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	<?php
		$rs =$db->findbyPK('gallery','gallery_datawebsite_id',1)->execute();
	?>
	<ol class="carousel-indicators">
		<?php
			$i = 0;
			while($show = mysqli_fetch_array($rs,MYSQLI_ASSOC)){
		?>
				<li data-target="#carouselExampleIndicators" id ="<?php echo $i."ol";?>"data-slide-to="<?php echo $i;?>"></li>
		<?php
				$i++;
			}
		?>
	</ol>
	<div class="carousel-inner">
		<?php
			$j =0;
			foreach($rs as $showdata){
				$showimage = $showdata['gallery_path'].$showdata['gallery_name'];
		?>
		 		<div id="<?php echo $j;?>"class="carousel-item">
					<img class="d-block w-100" src="<?php echo $showimage;?>">
				</div>
		<?php
				$j++;
			}
		?>
	</div>
	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	 <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	 </a>
</div>
