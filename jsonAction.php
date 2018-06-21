<?php
include 'admin/database/db_tools.php';
include 'admin/connect.php';
// Set delay 1 second.
sleep(1);
$nextList = isset($_GET['nextList']) ? $_GET['nextList'] : '';

switch($nextList) {
	case 'room':
		$roomtype_id = isset($_GET['roomtypeid']) ? $_GET['roomtypeid'] : '';
        $rs = $db->conditions3("room_id,room_name,room_detail","room","room_roomtype_id = '$roomtype_id'","CONVERT(room_name USING TIS620) ASC")->execute();
		break;
	case 'showroom':
		$roomid = isset($_GET['roomid']) ? $_GET['roomid'] : '';
		$rs = $db->findByPK22('room','gallery','gallery_room_id','room_id','room_id',$roomid)->execute();
		break;
}
$data = array();
while($row = mysqli_fetch_assoc($rs)) {
	$data[] = $row;
}

// Print the JSON representation of a value
echo json_encode($data);
?>
