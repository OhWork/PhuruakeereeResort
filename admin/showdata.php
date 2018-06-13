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
		}	}
	else if($id == 3 ){
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
	else if($id == 4 ){
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
	else if($id == 5 ){
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
	else if($id == 6 ){
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
	else if($id == 7 ){
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
	else if($id == 8 ){
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
	else if($id == 9 ){
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
?>
