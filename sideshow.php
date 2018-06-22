<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-bottom:5px;">
	<div class="row">
		<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2"style="border-top-left-radius:6px;border-bottom-left-radius:6px;background-color:#ffffff;">LOGO</div>
		<div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10" style="border-top-right-radius:6px;border-bottom-right-radius:6px;background-color:#ffffff;">
			<div class="row">
				<div id="carouselExampleIndicators" class="carousel slide col-12" data-ride="carousel">
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
							<img class="d-block w-100" height="250" src="<?php echo $showimage;?>">
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
			</div>
		</div>
	</div>
</div>
