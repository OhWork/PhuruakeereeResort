<?
	include_once 'database/db_tools.php';
	include_once 'connect.php';
	$id = $_POST['id'];
	$a =count($_FILES['image']['name']);

	$rs=$db->specifyfytable('MAX(gallery_id)','gallery','datawebsite','gallery_datawebsite_id = datawebsite_id','gallery_datawebsite_id',$id)->executeAssoc();
// 	print_r($rs['MAX(gallery_id)']);

	if($a == $rs['MAX(gallery_id)']){
		//อัพเดทไปเลยดิ รอไร
		echo "เท่ากัน";
		}
	}else{
		for
		echo "เกิน";
	}

?>
