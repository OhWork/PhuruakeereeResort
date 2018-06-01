<?
	include_once 'database/db_tools.php';
	include_once 'connect.php';
	$id = $_POST['id'];
	$a =count($_FILES['image']['name']);

	$rs=$db->specifyfytable('MAX(gallery_id)','gallery','datawebsite','gallery_datawebsite_id = datawebsite_id','gallery_datawebsite_id',$id)->executeAssoc();
// 	print_r($rs['MAX(gallery_id)']);
	function generateRandomString($length = 10) {
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		return $randomString;
	}

	$target_dir = '../img/temp/';
	$target_file = $target_dir.basename($_FILES['image']['name']);
	$img_new_name = generateRandomString(10);
	$target_dir_save = '../img/'.$img_new_name.'.jpg';
	move_uploaded_file($_FILES['image']['name'], $target_dir_save);

	$showidindb = $rs['MAX(gallery_id)'];
/*
	if($a == $showidindb){
		//อัพเดทไปเลยดิ รอไร
		echo "เท่ากัน";
	}else{
		for($i=0; $i<$showidindb; $i++){
			echo "จากตัวแปร I";
			echo "<pre>";
			print_r($_FILES['image']['name'][$i]);
			echo "</pre>";

		}
		$j = $a-$i;
		for($k=0; $k<$j; $k++){
		echo "จากตัวแปร K";
		echo "<pre>";
		print_r($_FILES['image']['name'][$k]);
		echo "</pre>";

		}
	}
*/

?>
