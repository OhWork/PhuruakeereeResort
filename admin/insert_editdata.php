<?
	include_once 'database/db_tools.php';
	include_once 'connect.php';
	@$id = $_POST['datawebsite_id'];
	if($id != "" && $_POST['editor'] != ""){
		$data['datawebsite_detail'] = $_POST['editor'];
		$rs = $db->update('datawebsite',$data,'datawebsite_id',$_POST['datawebsite_id']);
	}
	else{
		$data['reserve_status'] = $_POST['status_reserve'];
		$rs2 = $db->update('reserve',$data,'reserve_id',$_POST['reserve_id']);

	}
	if(@$rs || @$rs2){
		echo "เสร็จแล้วอ๊าห์";
		$link = "admin_index.php";
		header( "Refresh: 2; $link" );

	}
?>
