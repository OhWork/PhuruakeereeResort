<?php
	include_once 'database/db_tools.php';
	include_once 'connect.php';

	$key =$_POST['key'];
	$rs= $db->delete('gallery','gallery_id',$key);
	if($rs){
		$json_data = "ลบภาพสำเร็จ";
		$json= json_encode($json_data);
		echo $json;
	}
?>
