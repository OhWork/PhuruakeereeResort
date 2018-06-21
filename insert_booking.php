<?php  ob_start();?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
        <link rel="stylesheet" href="../CSS/bootstrap.css">
        <link rel="stylesheet" href="../CSS/main.css">
	</head>
<?php
    include 'admin/database/db_tools.php';
	include 'admin/connect.php';
if($_POST){
	$rs = $db->insert('reserve',array(
	'reserve_name' => $_POST['name'],
	'reserve_tel' => $_POST['phone'],
	'reserve_age' => $_POST['age'],
	'reserve_sex' => $_POST['sex'],
	'reseve_email' => $_POST['email'],
	'reseve_nation' => $_POST['nation'],
	'reseve_datestart' => $_POST['date_start'],
	'reserve_dateend' => $_POST['date_end'],
	'reserve_numadults' => $_POST['num_adults'],
	'reserve_numchildren' => $_POST['num_children'],
	'reserve_numinfants' => $_POST['num_infants'],
	'room_room_id' => $_POST['roomname']
	));
}
    	if($rs){
    	    echo "<div class='statusok'>เพิ่มสำเร็จ</div>";
    	     $link = "booking.php";
            header( "Refresh: 2; $link" );

        }
?>
</html>
<?php
ob_end_flush();
?>
