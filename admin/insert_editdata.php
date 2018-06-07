<?
/*
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
// 	print_r($_FILES['image']['name']);
	$showidindb = $rs['MAX(gallery_id)'];
	if($a == $showidindb){
// 		กรณีที่อัพรูปมาเท่ากันกับในฐานข้อมูล สามารถอัพเดทไปได้เลยชิวๆไม่ติดอะไร
		for($i=0; $i<$a; $i++){
			$target_dir = '../img/temp/';
			$target_file = $target_dir.basename($_FILES['image']['name'][$i]);
			$img_new_name = generateRandomString(10);
			$path = '../img/pic/';
			$target_dir_save = '../img/pic/'.$img_new_name.'.jpg';
  		 	move_uploaded_file($_FILES['image']['tmp_name'][$i], $target_dir_save);
 		 	echo $i;

			$data['datawebsite_detail'] = $_POST['editor'];

			$rs = $db->update('datawebsite',$data,'datawebsite_id',$_POST['id']);

			$data2['gallery_name'] = $img_new_name;
			$data2['gallery_path'] = $path;
			$rs = $db->update('gallery',$data2,'gallery_id',$i);
		}
	}else if($a > $showidindb){
// 		กรณีที่อัพรูปมามากกว่าที่มีในฐานข้อมูล อัพเดทให้ครบกับในฐานข้อมูลจากการวน loop รอบแรก ให้ครบ แล้วเหลือเท่าไหร่ให้นำจำนวนมาวนลูปรอบที่ 2 แล้วทำการ insert
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
	else{
// 		กรณีที่อัพรูปมาน้อยกว่า ที่มีในฐานข้อมูล อันดับแรก อัพเดทให้หมด แล้วทำการ Delete ที่เหลือออกจาก ฐานข้อมูล
	}
*/

?>
