<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="stylesheet" href="CSS/bootstrap.css">
        <link rel="stylesheet" href="CSS/jquery-ui.css">
        <link rel="stylesheet" href="CSS/main.css">
		<link rel="stylesheet" href="CSS/scss/_input-group.scss">
		<title></title>
		<?php
	     include_once 'inc_js.php';
	     include_once 'form/main_form.php';
	     include_once 'form/gridview.php';
		 include_once 'admin/database/db_tools.php';
	     include_once 'admin/connect.php';
		?>
	</head>
	<body>
		<div class="warpper">
			<div class="container">
				<div class="row">
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
						<div class="row">
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="border-radius:6px;background-color:#ffffff;margin-bottom:5px;">
								<div class="row">
									<?php
										include_once 'sideshow.php';
									?>
								</div>
							</div>
							<?php
										include_once 'menu.php';
										$rs =$db->findByPK22('datawebsite','datatype','datatype_datatype_id','datatype_id','datatype_id',3)->executeAssoc();
// 										$showimage = $rs['gallery_path'].$rs['gallery_name'];
								?>

							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="border-radius:6px;background-color:#ffffff;margin-top:5px;">
								<div class="row">
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
											<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
												<div class="row">
													<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top: 16px;">
														<div class="alert alert-light" role="alert">
														<?php
															echo $rs['datawebsite_head'];
														?>
														</div>
														<div class="alert alert-light" role="alert">
														<?php
															echo $rs['datawebsite_detail'];
														?>
														</div>
													</div>
												</div>
											</div>
									</div>
									<?php
										$rs2 =$db->findByPK2('gallery','room','gallery_room_id','room_id')->execute();
									?>
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
										<div class="row">
											<?php
												while($showroom = mysqli_fetch_array($rs2,MYSQLI_ASSOC)){
												$showimage = $showroom['gallery_path'].$showroom['gallery_name'];
											?>
											<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
												<div class="row">
													<img class="col-12" src="<?php echo $showimage;?>" width="100%" height="200">
													<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="text-align:right;">
														<p><a href="#">
															<?php
																echo $showroom['room_name'];
															?>
														</a></P>
													</div>
													<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="text-align:right;">
														<p>
															<?php
																echo $showroom['room_detail'];
															?>
														</P>
													</div>
												</div>
											</div>
											<?php
												}
											?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
<script>
	$('#0ol').addClass('active');
	$('#0').addClass('active');
</script>
