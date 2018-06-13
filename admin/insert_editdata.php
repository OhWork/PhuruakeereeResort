<?
	include_once 'database/db_tools.php';
	include_once 'connect.php';
	$id = $_POST['id'];
	if($id != "" && $_POST['editor'] != ""){
		$data['datawebsite_detail'] = $_POST['editor'];
		$rs = $db->update('datawebsite',$data,'datawebsite_id',$_POST['id']);
	}
	if($rs){
		echo "เสร็จแล้วอ๊าห์";
		$link = "admin_index.php";
		header( "Refresh: 2; $link" );

	}
	else{
		echo "ไม่เสร็จ";
	}
?>
