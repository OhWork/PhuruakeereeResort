<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="stylesheet" href="../CSS/main.css">
        <link rel="stylesheet" href="../CSS/bootstrap.css">
        <link rel="stylesheet" href="../CSS/jquery-ui.css">
        <link rel="stylesheet" href="../CSS/jquery.dataTables.css">
        <link rel="stylesheet" href="../CSS/fileinput.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" media="all" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="../CSS/theme-fa.css">
        <?php

	session_start();
     include 'inc_js.php';
     include '../form/main_form.php';
     include '../form/gridview.php';
	 include_once 'database/db_tools.php';
     include_once 'connect.php';

        ?>
    </head>
    <body>
		<div class="wrapper">
			<div class="container">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<?php
				include_once 'admin_menu.php';
				?>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top:5px;">
				<?php
				include_once 'content.php';
				?>
				</div>
			</div>
		</div>
    </body>
</html>
