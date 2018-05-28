<?php
	$form = new form('1','2');
	$datadetail = new textfield('data_detail','detail','form-control','','');
	$lbdetail = new label('รายละเอียดหัวข้อ :');
	$button = new buttonok('บันทึก','btnSubmit','btn btn-success col-md-12','');
	$id = $_GET['id'];
	$rs = $db->findByPK('datawebsite','datawebsite_id',$id)->executeAssoc();

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
  <input type="hidden" id="id" value="<?php echo $id;?>">
  <?php
		echo $button;
    ?>
   <script>
	 $("#file-3").fileinput({
        theme: 'fa',
        showUpload: false,
        showCaption: false,
        browseClass: "btn btn-primary btn-lg",
        fileType: "any",
        previewFileIcon: "<i class='glyphicon glyphicon-king'></i>",
        overwriteInitial: false,
        initialPreviewAsData: true,
        initialPreview: [
			$.ajax({
            url: "check_image.php",
            data: {data_id : $('#id').val()},
            type: "POST",
            success: function(data) {
	            console.log(data);
            }
        })

        ],
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
