<?php
	$form = new form();
	$datahead = new textfield('data_head','head','form-control','','sss');
	$lbhead = new label('หัวข้อข้อมูล :');
	$datadetail = new textfield('data_detail','detail','form-control','','');
	$lbdetail = new label('รายละเอียดหัวข้อ :');
	$button = new buttonok('บันทึก','btnSubmit','btn btn-success col-md-12','');
	@$id = $_GET['id'];
	$rs = $db->findByPK('datawebsite','datawebsite_id',$id)->executeAssoc();
	$datahead->value = $rs['datawebsite_head'];
	echo $id;
	echo $form->open('form_reg','frmMain','','insert_editdata.php','');
?>
<?php
	if($id != ''){
?>
<div class="accordion mt-2" id="accordion">
	<div class="card">
		<div class="card-header" id="headingOne">
			<h5 class="mb-0">
				<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
				ส่วนจัดการข้อมูล
				</button>
			</h5>
		</div>
		<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
			<div class="card-body">
				<div class="col-md-2 float-left">
					<?php
					echo $lbhead;
					?>
				</div>
				<div class="col-md-10 float-right">
					<?php
					echo $datahead;
					?>
				</div>
			</div>
			<div class="card-body mt-3">
				<div class="col-md-2 float-left">
					<?php
					echo $lbdetail;
					?>
				</div>
				<div class="col-md-10 float-right">
					<textarea name="editor" id="editor" rows="10" cols="100">
					<?php
					echo $rs['datawebsite_detail'];
					?>
					</textarea>
				</div>
			</div>
		</div>
	</div>
	<div class="card">
		<div class="card-header" id="headingTwo">
			<h5 class="mb-0">
				<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
				ส่วนจัดการรูปภาพ
				</button>
			</h5>
		</div>
		<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
			<div class="card-body">
				<div class="file-loading">
					<input id="file-3" type="file" name="image[]" multiple>
				</div>
			</div>
		</div>
	</div>
	<input type="hidden" id="id" name="datawebsite_id" value="<?php echo $id;?>">
	<div class="col-md-12" style="margin-top:5px;">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<?php
				echo $button;
				?>
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>
   <script>
	 $("#file-3").fileinput({
        theme: 'fa',
        showCaption: false,
        browseClass: "btn btn-primary btn-lg",
        fileType: "any",
        previewFileIcon: "<i class='glyphicon glyphicon-king'></i>",
        overwriteInitial: true,
        initialPreviewAsData: true,
        <?php
	        if($rs){
        ?>
        initialPreview: [
			<?php
				$rs = $db->findByPK22('gallery','datawebsite','gallery_datawebsite_id','datawebsite_id','gallery_datawebsite_id',"'$id'")->execute();
				while ($showrs = mysqli_fetch_array($rs,MYSQLI_ASSOC)){
					$showimage = '../'.$showrs['gallery_path'].$showrs['gallery_name'];
					echo"'$showimage'"."\r\n";
				?>
				,
				<?php
				}
				?>
        ],
       initialPreviewConfig: [
	            <?php
		            $rs2 = $db->findByPK22('gallery','datawebsite','gallery_datawebsite_id','datawebsite_id','gallery_datawebsite_id',"'$id'")->execute();
		           while ($show = mysqli_fetch_array($rs2,MYSQLI_ASSOC)){
			           echo '{'.'key:'.$show['gallery_id'].'},'."\r\n";
					}
	            ?>
        ],
        deleteUrl:'delete_pic.php',
        uploadUrl:'insert_editimg.php',
        uploadExtraData:{id:$('#id').val()},
        <?php
	        }
        ?>
    });
    $('#file-3').on('fileuploaded', function(event, data, previewId, index) {
    	location.reload();
    });
    $("#file-3").on("filepredelete", function(jqXHR) {
        var abort = true;
        if (confirm("Are you sure you want to delete this image?")) {
            abort = false;
        }
        });
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
<?php
	}
	else{
		$rs =$db->findbyPK22('reserve','room','room_room_id','room_id','room_id',$_GET['reserve_id'])->executeAssoc();
	?>
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-4">
									<p>ชื่อห้องที่ต้องการจอง :</p>
								</div>
								<div class="col-md-8">
									<?php
									echo $rs['room_name'];
									?>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-4">
									<p>ชื่อผู้จอง :</p>
								</div>
								<div class="col-md-8">
									<?php
										echo $rs['reserve_name'];
									?>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-4">
									<p>เบอร์ติดต่อกลับ :</p>
								</div>
								<div class="col-md-8">
									<?php
										echo $rs['reserve_tel'];
									?>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-4">
									<p>emailติดต่อกลับ :</p>
								</div>
								<div class="col-md-4">
									<?php
										echo $rs['reseve_email'];
									?>
								</div>
							</div>
						</div>
						<div class='col-md-12'>
							<div class='row'>
								<div class='col-md-2'></div>
								<div class="btn-group col-md-8" data-toggle="buttons">
									<label class="btn btn-success col-md-6 active">
										<input type="radio" name="status_reserve" class="statusconfirm" value="Y" id="complete" autocomplete="off"  checked> อนุมัติการจอง
									</label>
									<label class="btn btn-danger col-md-6">
										<input type="radio" name="status_reserve" class="statusconfirm" value="N" id="nocomplete" autocomplete="off"> ไม่อนุมัติการจอง
									</label>
								</div>
								<div class='col-md-2'></div>
							</div>
						</div>
						<div class='col-md-12'>
							<div class='row'>
								<div class='col-md-4'></div>
								<div class='col-md-4'>
									<?php
										echo $button;
									?>
									<input type="hidden" id="id" name="reserve_id" value="<?php echo $_GET['reserve_id'];?>">
								</div>
								<div class='col-md-4'></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3"></div>
			</div>
		</div>
	<?php }
	echo $form->close();
?>
</div>