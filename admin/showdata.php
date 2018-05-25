<?php
	$id = $_GET['id'];
	$rshead = $db->findByPK('datatype','datatype_id',$id)->executeAssoc();
	if($id == 1 ){
		?>
		<h2><?php print_r($rshead['datatype_name']);?></h2>
		<?php
		$rs =$db->findbyPK('datawebsite','datatype_datatype_id',$id)->execute();
		foreach($rs as $showdata){ ?>
			<div class="jumbotron mt-2">
			  <h1 class="display-5 "><?php echo $showdata['datawebsite_detail'] ?></h1>
			  <a class="btn btn-primary btn-lg float-right" href="admin_index.php?url=edit_data.php&id=<?php echo $showdata['datawebsite_id'];?>" role="button">แก้ไข</a>
			</div>
		<?php
		}
	}
	else if($id == 2 ){
	echo "Hello World 2";
	}
	else if($id == 3 ){
	echo "Hello World 3";
	}
	else if($id == 4 ){
	echo "Hello World 4";
	}
	else if($id == 5 ){
	echo "Hello World 5";
	}
	else if($id == 6 ){
	echo "Hello World 6";
	}
	else if($id == 7 ){
	echo "Hello World 7";
	}
	else if($id == 8 ){
	echo "Hello World 8";
	}
	else if($id == 9 ){
	echo "Hello World 9";
	}
?>
