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
  <input type="hidden" id="id" name="id" value="<?php echo $id;?>">
  <?php
		echo $button;

		$rs = $db->findByPK22('gallery','datawebsite','gallery_datawebsite_id','datawebsite_id','gallery_datawebsite_id',"'$id'")->execute();
/*
		while($show = mysqli_fetch_array($rs,MYSQLI_ASSOC)){
		print_r($show);
		}
*/
// 		echo count($show['gallery_id']);
		    ?>
   <script>
	 $("#file-3").fileinput({
        theme: 'fa',
        showUpload: false,
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
				while ($showrs = mysqli_fetch_array($rs,MYSQLI_ASSOC)){
					$showimage = $showrs['gallery_path'].$showrs['gallery_name'];
					echo"'../$showimage'"."\r\n";
				?>
				,
				<?php
				}
				?>
        ],
       initialPreviewConfig: [
	            <?php
		            for ($i=1; $i<=6; $i++){
					echo '{'.'key:'."$i".",".'},'."\r\n";
					}
	            ?>
        ]
        <?php
	        }
        ?>
    });
/*
    $('.kv-file-remove').on('click',function(){
		$.ajax({
	            url: "delete_pic.php",
	            data: {id : <?php echo $showid['gallery_id']; ?>},
	            type: "POST",
	            dataType: "json",
	            success: function(data) {
					console.log(data);
	            }
	    });
    })
*/
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
<?php
	echo $form->close();
?>
