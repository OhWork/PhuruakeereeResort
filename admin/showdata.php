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
			  <h1 class="display-5 "><?php echo $showdata['datawebsite_head'] ?></h1>
			  <h4 class="display-5 "><?php echo $showdata['datawebsite_detail'] ?></h4>
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
			  <h1 class="display-5 "><?php echo $showdata['datawebsite_head'] ?></h1>
			  <h4 class="display-5 "><?php echo $showdata['datawebsite_detail'] ?></h4>

			  <a class="btn btn-primary btn-lg float-right" href="admin_index.php?url=edit_data.php&id=<?php echo $showdata['datawebsite_id'];?>" role="button">แก้ไข</a>
			</div>
		<?php
		}	}
	else if($id == 3 ){
	?>
	<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
	  <li class="nav-item">
	    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#dataonter" role="tab" aria-controls="dataonter" aria-selected="true">ข้อมูลทั่วไป</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#dataroom" role="tab" aria-controls="dataroom" aria-selected="false">ข้อมูลห้องพัก</a>
	  </li>
	</ul>
		<?php
		$rs =$db->findbyPK('datawebsite','datatype_datatype_id',$id)->execute();
		foreach($rs as $showdata){ ?>
		<div class="tab-content" id="pills-tabContent">
			<div class="tab-pane fade show active" id="dataonter">
				<h2>เครื่องอำนวยความสะดวก</h2>
				<div class="jumbotron mt-2">
				  <h1 class="display-5 "><?php echo $showdata['datawebsite_head'] ?></h1>
				  <h4 class="display-5 "><?php echo $showdata['datawebsite_detail'] ?></h4>
				  <a class="btn btn-primary btn-lg float-right" href="admin_index.php?url=edit_data.php&id=<?php echo $showdata['datawebsite_id'];?>" role="button">แก้ไข</a>
				</div>
	  <?php
		}
	  ?>
			</div>
			<div class="tab-pane fade" id="dataroom" role="tabpanel" aria-labelledby="pills-profile-tab">
				<h2>ห้องพัก</h2>
				<?php
					$rs2 =$db->findAll('room')->execute();

					foreach($rs2 as $showroom){
				?>
				<div class="jumbotron mt-2">
				  <h1 class="display-5 "><?php echo $showroom['room_name'] ?></h1>
				  <h4 class="display-5 "><?php echo $showroom['room_detail'] ?></h4>
				  <a class="btn btn-primary btn-lg float-right" href="admin_index.php?url=edit_data.php&id=<?php echo $showroom['room_id'];?>" role="button">แก้ไข</a>
				</div>
				<?php
				 }
				?>
			</div>
		</div>
		<?php
	}
	else if($id == 4 ){
	?>
		<h2><?php print_r($rshead['datatype_name']);?></h2>
		<?php
		$rs =$db->findbyPK('datawebsite','datatype_datatype_id',$id)->execute();
		foreach($rs as $showdata){ ?>
			<div class="jumbotron mt-2">
			  <h1 class="display-5 "><?php echo $showdata['datawebsite_head'] ?></h1>
			  <h4 class="display-5 "><?php echo $showdata['datawebsite_detail'] ?></h4>
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
			  <h1 class="display-5 "><?php echo $showdata['datawebsite_head'] ?></h1>
			  <h4 class="display-5 "><?php echo $showdata['datawebsite_detail'] ?></h4>
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
			 <h1 class="display-5 "><?php echo $showdata['datawebsite_head'] ?></h1>
			  <h4 class="display-5 "><?php echo $showdata['datawebsite_detail'] ?></h4>
			  <a class="btn btn-primary btn-lg float-right" href="admin_index.php?url=edit_data.php&id=<?php echo $showdata['datawebsite_id'];?>" role="button">แก้ไข</a>
			</div>
		<?php
		}
	}
	else if($id == 7 ){
		//  booking page
	?>
		<h2><?php print_r($rshead['datatype_name']);?></h2>
		<?php
		$rs =$db->findbyPK2('reserve','room','room_room_id','room_id')->execute();
		foreach($rs as $showdata){ ?>
			<div class="jumbotron mt-2">
			  <h1 class="display-5 "><?php echo $showdata['reserve_name'] ?></h1>
			  <h4 class="display-5 "><?php echo $showdata['room_name'] ?></h4>
			  <h4 class="display-5 ">วันที่เริ่มต้นจอง<?php echo $showdata['reseve_datestart'] ?></h4>
			  <h4 class="display-5 ">วันที่สิ้นสุด<?php echo $showdata['reserve_dateend'] ?></h4>
			  <a class="btn btn-primary btn-lg float-right" href="admin_index.php?url=edit_data.php&reserve_id=<?php echo $showdata['reserve_id'];?>" role="button">แก้ไข</a>
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
			 <h1 class="display-5 "><?php echo $showdata['datawebsite_head'] ?></h1>
			  <h4 class="display-5 "><?php echo $showdata['datawebsite_detail'] ?></h4>
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
			  <h1 class="display-5 "><?php echo $showdata['datawebsite_head'] ?></h1>
			  <h4 class="display-5 "><?php echo $showdata['datawebsite_detail'] ?></h4>
			  <a class="btn btn-primary btn-lg float-right" href="admin_index.php?url=edit_data.php&id=<?php echo $showdata['datawebsite_id'];?>" role="button">แก้ไข</a>
			</div>
		<?php
		}
	}
?>
