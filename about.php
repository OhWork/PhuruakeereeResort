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
											$rs2 =$db->findByPK33('gallery','datawebsite','datatype','gallery_datawebsite_id','datawebsite_id'
											,'datatype_datatype_id','datatype_id','datatype_id',2)->executeAssoc();
											$showimage = $rs2['gallery_path'].$rs2['gallery_name'];
								?>

							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="border-radius:6px;background-color:#ffffff;margin-top:5px;">
								<div class="row">
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
											<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
												<div class="row">
													<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top: 16px;">
														<img class="col-12" src="<?php echo $showimage;?>" width="50%" height="50%">
														<div class="alert alert-light" role="alert">
														<?php
															echo $rs2['datawebsite_detail'];
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
				</div>
			</div>
		</div>
	</body>
</html>
<script>
	$('#0ol').addClass('active');
	$('#0').addClass('active');
</script>
