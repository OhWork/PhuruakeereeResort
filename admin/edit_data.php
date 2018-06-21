<?php
	$form = new form();
	$datahead = new textfield('data_head','head','form-control','','sss');
	$lbhead = new label('หัวข้อข้อมูล :');
	$datadetail = new textfield('data_detail','detail','form-control','','');
	$lbdetail = new label('รายละเอียดหัวข้อ :');
	$button = new buttonok('บันทึก','btnSubmit','btn btn-success col-md-12','');
	$id = $_GET['id'];
	$rs = $db->findByPK('datawebsite','datawebsite_id',$id)->executeAssoc();
	$datahead->value = $rs['datawebsite_head'];
	echo $form->open('form_reg','frmMain','','insert_editdata.php','');
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
  <input type="hidden" id="id" name="id" value="<?php echo $id;?>">
  <?php
		echo $button;
		    ?>
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
	echo $form->close();
?>
