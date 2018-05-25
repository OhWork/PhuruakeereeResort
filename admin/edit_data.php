<?php
	$form = new form('1','2');
	$datadetail = new textfield('data_detail','detail','form-control','','');
	$lbdetail = new label('รายละเอียดหัวข้อ :');
	$id = $_GET['id'];
	$rs = $db->findByPK('datawebsite','datawebsite_id',$id)->executeAssoc();

	echo $form->open('form_reg','frmMain','','insert_shop.php','');
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
      <div class="card-body dropzone" id="dropzone">
	 	 <input name="file" type="file" multiple />
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Collapsible Group Item #3
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
</div>
 <script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
        var myDropzone = new Dropzone("div#dropzone", { url: "/file/post"});
</script>
