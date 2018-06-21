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
	<?php
	 $form = new form();
	 $name = new textfield('name','','form-control','','');
	 $lbname = new label('Customer name');
	 $age = new textfield('age','','form-control','','');
	 $lbage = new label('Age');
	 $sex = new textfield('sex','','form-control','','');
	 $lbsex = new label('Sex');
	 $nation = new textfield('nation','','form-control','','');
	 $lbnation = new label('Customer nation');
	 $phone = new textfield('phone','','form-control','','');
	 $lbphone = new label('Customer phone*');
	 $email = new textfield('email','','form-control','','');
	 $lbemail = new label('Customer Email*');
	 $button = new buttonok('บันทึก','btnSubmit','btn btn-success col-md-12','');
	?>
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
							?>

							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="border-radius:6px;background-color:#ffffff;margin-top:5px;">
								<div class="row">
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
											<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
												<div class="row">
													<?php
														echo $form->open('form_reg','frmMain','','insert_booking.php','');
													?>
													<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top: 16px;">
														<div class="col-md-12">
															<div class="row">
																<div class="col-md-2">
																<?php
																	echo $lbname;
																?>
																</div>
																<div class="col-md-4">
																<?php
																	echo $name;
																?>
																</div>
																<div class="col-md-2">
																<?php
																	echo $lbphone;
																?>
																</div>
																<div class="col-md-4">
																<?php
																	echo $phone;
																?>
																</div>
															</div>
														</div>
														<div class="col-md-12">
															<div class="row">
																<div class="col-md-1">
																<?php
																	echo $lbage;
																?>
																</div>
																<div class="col-md-2">
																<?php
																	echo $age;
																?>
																</div>
																<div class="col-md-1">
																<?php
																	echo $lbsex;
																?>
																</div>
																<div class="col-md-2">
																<?php
																	echo $sex;
																?>
																</div>
																<div class="col-md-2">
																<?php
																	echo $lbemail;
																?>
																</div>
																<div class="col-md-4">
																<?php
																	echo $email;
																?>
																</div>
															</div>
														</div>
														<div class="col-md-12">
															<div class="row">
																<div class="col-md-2">
																<?php
																	echo $lbnation;
																?>
																</div>
																<div class="col-md-4">
																<?php
																	echo $nation;
																?>
																</div>
															</div>
														</div>
														<div class="col-md-12">
															<div class="row">
																<input type="hidden" name="roomtype" value="<?php echo $_POST['roomtype']?>">
																<input type="hidden" name="roomname" value="<?php echo $_POST['roomname']?>">
																<input type="hidden" name="date_start" value="<?php echo $_POST['date_start']?>">
																<input type="hidden" name="date_end" value="<?php echo $_POST['date_end']?>">
																<input type="hidden" name="num_adults" value="<?php echo $_POST['num_adults']?>">
																<input type="hidden" name="num_children" value="<?php echo $_POST['num_children']?>">
																<input type="hidden" name="num_infants" value="<?php echo $_POST['num_infants']?>">
															</div>
														</div>
														<div class="col-md-5">
															<?php
																echo $button;
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
