<?
	include_once 'database/db_tools.php';
	include_once 'connect.php';
	$id = $_POST['id'];
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
			$target_file = $target_dir.basename($_FILES['image']['name'][0]);
			$img_new_name = generateRandomString(10).'.jpg';
			$path = '../img/pic/';
			$target_dir_save = '../img/pic/'.$img_new_name;
  		 	move_uploaded_file($_FILES['image']['tmp_name'][0], $target_dir_save);
if($id != "" && $_FILES['image']['name'] != ""){
		$rs = $db->insert('gallery',array(
			'gallery_name' => $img_new_name,
			'gallery_path'=>'img/',
			'gallery_datawebsite_id'=>$id,
		));
		echo json_encode(['uploaded' => $_FILES['image']['name'][0]]);
		}
?>
