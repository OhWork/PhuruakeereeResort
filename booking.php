<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="stylesheet" href="CSS/bootstrap.css">
        <link rel="stylesheet" href="CSS/bootstrap-datetimepicker-standalone.css">
        <link rel="stylesheet" href="CSS/bootstrap-datetimepicker.css">
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
		<script>
			$(function(){
	        	var defaultOption = '<option value=""> ------- เลือก ------ </option>';
	        	var loadingImage  = '<img src="img/loading-sm.gif" alt="loading" />';
	        	// Bind an event handler to the "change" JavaScript event, or trigger that event on an element.
	        	$('#selroomtype').change(function() {
	        		$("#selroom").html(defaultOption);
	        		// Perform an asynchronous HTTP (Ajax) request.
	        		$.ajax({
	        			// A string containing the URL to which the request is sent.
	        			url: "jsonAction.php",
	        			// Data to be sent to the server.
	        			data: ({nextList:'room', roomtypeid: $('#selroomtype').val() }),
	        			// The type of data that you're expecting back from the server.
	        			dataType: "json",
	        			// beforeSend is called before the request is sent
	        			beforeSend: function() {
	        				$("#waitroom").html(loadingImage);
	        			},
	        			// success is called if the request succeeds.
	        			success: function(json){
	        				$("#waitroom").html("");
	        				// Iterate over a jQuery object, executing a function for each matched element.
	        				$.each(json, function(index, value) {
	        					// Insert content, specified by the parameter, to the end of each element
	        					// in the set of matched elements.

	        					 $("#selroom").append('<option value="' + value.room_id +
	        											'">' + value.room_name + '</option>');
	        				});
	        			}
	        		});
	        	});
	        	$('#selroom').change(function() {
	        		// Perform an asynchronous HTTP (Ajax) request.
	        		$.ajax({
	        			// A string containing the URL to which the request is sent.
	        			url: "jsonAction.php",
	        			// Data to be sent to the server.
	        			data: ({nextList:'showroom', roomid: $('#selroom').val() }),
	        			// The type of data that you're expecting back from the server.
	        			dataType: "json",
	        			// beforeSend is called before the request is sent
	        			beforeSend: function() {
	        				$("#showroom").html(loadingImage);
	        			},
	        			// success is called if the request succeeds.
	        			success: function(json){
	        				$("#showroom").html("");
	        				// Iterate over a jQuery object, executing a function for each matched element.
	        				$.each(json, function(index, value) {
	        					// Insert content, specified by the parameter, to the end of each element
	        					// in the set of matched elements.

	        					 $("#showroom").append('<img src="' + value.gallery_path + value.gallery_name + '" width="100%">' + '<p>' + value.room_name + '</p>' + '<p>' + value.room_detail + '</p>');
	        					 $("#roomprice").val(value.room_price);
	        				});
	        			}
	        		});
	        	});
        	});
		</script>
	</head>
	<?php
		$form = new form();
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
										<?php
											echo $form->open('form_reg','frmMain','','booking2.php','');
										?>
											<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
												<div class="row">
													<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8" style="margin-top: 16px;">
														<div class="col-md-12">
															<div class="row">
																<div class="col-md-2">
																	<p>ประเภทห้อง: </p>
																</div>
																<div class="col-md-4">
																	<?php
                                                                      $rs = $db->findAll('roomtype')->execute();
																	?>
																	<select name="roomtype" class="form-control" id="selroomtype">
																		<option value=""> ------- เลือก ------ </option>
																	<?php
																	while($showdata = mysqli_fetch_array($rs,MYSQLI_ASSOC)){
																	?>
																		<option value="<?php echo $showdata['roomtype_id']?>"><?php echo $showdata['roomtype_name']?></option>
																	<?php
																	}
																	?>
																	</select>
																</div>
																<div class="col-md-2">
																	<p>ห้อง: </p>
																</div>
																<div class="col-md-4">
																	<select class="form-control col-12" name="roomname" id="selroom">
																				<option value=""> ------- เลือก ------ </option>
																				</select><span id="waitroom"></span>
																				</span>
																</div>
															</div>
														</div>
														<div class="col-md-12 mt-3">
															<div class="row">
																<div class="col-md-2">
																	<p>วันที่ต้องการจอง: </p>
																</div>
																<div class="col-md-4">
																	<div class='input-group date' id ="datetimepicker">
														                <input type='text' class="form-control datetimepicker" name="date_start" id='date' readonly/>
														                <span class="input-group-addon datetimepicker-addon">
																	    	<span class="glyphicon glyphicon-calendar"></span>
																		</span>
														            </div>
																</div>
																<div class="col-md-1">
																	<p> TO</p>
																</div>
																<div class="col-md-4">
																	<div class='input-group date' id ="datetimepicker2">
														                <input type='text' class="form-control datetimepicker" name="date_end" id='date2' readonly/>
														                <span class="input-group-addon datetimepicker-addon">
																	    	<span class="glyphicon glyphicon-calendar"></span>
																		</span>
														            </div>
																</div>
																<div class="col-md-1" id="showcal">
																	<p> calculation</p>
																</div>
															</div>
														</div>
														<div class="col-md-12 mt-3">
															<div class="row">
																<div class="col-md-3">
																	<p>Adults</p>
																	<select name="num_adults" class="form-control" id="num_adults">
																		<option value=""> ------- เลือก ------ </option>
																		<option value="1">1</option>
																		<option value="2">2</option>
																		<option value="3">3</option>
																	</select>
																</div>
																<div class="col-md-3">
																	<p>Children</p>
																	<select name="num_children" class="form-control" id="num_children">
																		<option value=""> ------- เลือก ------ </option>
																		<option value="1">1</option>
																		<option value="2">2</option>
																		<option value="3">3</option>
																	</select>
																</div>
																<div class="col-md-3">
																	<p>Infants</p>
																	<select name="num_infants" class="form-control" id="num_infants">
																		<option value=""> ------- เลือก ------ </option>
																		<option value="1">1</option>
																		<option value="2">2</option>
																		<option value="3">3</option>
																	</select>
																</div>
																<div class="col-md-3">
																	<p>****หมายเหตุ****</p>
																	<p>ห้องพักสามารถเพิ่มเตียงเสริมได้ 1 เตียงเท่านั้น</p>
																</div>
															</div>
														</div>
														<div class="col-md-12 mt-3">
															<div class="row">
																<div class="col-md-2"></div>
																<div class="col-md-4">
																	<button type="button" class="btn btn-primary form-control" id="checkprice">Check Price</button>
																</div>
																<div class="col-md-5">
																	<p>Room Price</p>
																	<input type="text" class="form-control" id="roomprice" readonly>
																	<p>Extral Person Price</p>
																	<input type="text" class="form-control" id="exprice" readonly>
																	<p>Total Price</p>
																	<input type="text" class="form-control" id="totalprice" readonly>
																</div>
															</div>
														</div>
														<div class="col-md-12 mt-3">
															<div class="row">
																<div class="col-md-2"></div>
																<div class="col-md-4">
																	<?php
																		echo $button;
																	?>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4" style="margin-top: 16px;" id="showroom">

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
	 $(function () {
        $('#datetimepicker').datetimepicker({
	        format:'YYYY-MM-DD',
	        useCurrent: false,
	        ignoreReadonly: true,
            sideBySide: true,
            allowInputToggle: true,
 	        locale:moment.locale('th'),
	        stepping: 30
        });
        $('#datetimepicker2').datetimepicker({
	        format:'YYYY-MM-DD',
            useCurrent: false,
            ignoreReadonly: true,
            sideBySide: true,
            allowInputToggle: true,
            locale:moment.locale('th'),
            stepping: 30
        });
        $("#datetimepicker").on("dp.change", function (e) {
            $('#datetimepicker2').data("DateTimePicker").minDate(e.date);
        });
        $("#datetimepicker2").on("dp.change", function (e) {
            $('#datetimepicker').data("DateTimePicker").maxDate(e.date);
        });
    });
    $('#checkprice').on('click' , function(){
		var adults = $('#num_adults').val();
		var children = $('#num_children').val();
		var infants = $('#num_infants').val();
		var expriceadults = 0;
		var expricechil = 0;
		if(adults > 1){
			for(var i =1; i<adults; i++ ){
				expriceadults += 1000;
			}
		}
		if(children >= 1){
				for(var i =0; i<children; i++ ){
				expricechil += 500;
				}
		}
		var sumex = (expriceadults + expricechil) ;
		$('#exprice').val(sumex);
		var priceroom = parseInt($('#roomprice').val());
		var totalprice = priceroom + sumex;
		$('#totalprice').val(totalprice);
	 });
	$('#datetimepicker2').on('dp.change',function(){
	var date = Date.parse($('#date').val());
	var date2 = Date.parse($('#date2').val());
	var countdate = (date2 - date) / (1000 * 60 * 60 * 24);
	 $("#showcal").html(countdate+' วัน');
	});
	$('#0ol').addClass('active');
	$('#0').addClass('active');
</script>
