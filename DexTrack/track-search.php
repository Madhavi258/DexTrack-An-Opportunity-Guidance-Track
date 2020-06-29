<?php
session_start();
error_reporting(0);
include('include/config.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>DexTrack</title>
	<link rel = "icon" href ="assets/images/DXlogo.png" type = "image/x-icon"> 

	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
	<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
	<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
	<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
	<link href="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" media="screen">
	<link href="vendor/select2/select2.min.css" rel="stylesheet" media="screen">
	<link href="vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" media="screen">
	<link href="vendor/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" media="screen">
	<link rel="stylesheet" href="assets/css/styles.css">
	<link rel="stylesheet" href="assets/css/plugins.css">
	<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body style="background-color:#062854;">
<?php include('include/trackheader.php'); ?>
	<section id="page-title">
		<div class="row">
			<div class="col-sm-8">
				<h1 class="mainTitle" style="color:#FFFFFF;">DexTrack</h1>
			</div>

		</div>
	</section>

	<div class="col-md-12" style="margin-top:50px;">
		<form role="form" method="post" name="search">

			<div class="form-group" style="background-color:#062854;">
			<label style="color:#FFFFFF; font-size: 18px;">
			Search for Competition Guidance Track
</label>

				<input type="text" name="searchdata" id="searchdata" placeholder="Enter Competition Name" class="form-control" value="" required='true' style="color:#062854; background-color: #062854; border: none; border-bottom: 1.5px solid #FFFFFF; font-size: 16.5px;">
			</div>

			<button type="submit" name="search" id="submit" class="btn pull-right" style="font-size:17px; color:#FFFFFF; background-color:#062854; border-style: solid; border-radius:20px; border-width: 2px; border-color: #FFFFFF; padding:7px 18px;">
				Search
			</button>
		</form>


		<?php
		if (isset($_POST['search'])) {

			$sdata = $_POST['searchdata'];
		?>

		<br>
		<br>
		<br>
		
			<h4 align="center"  style="font-size: 17px; color: #fff;">Result for ' <?php echo $sdata;?> ' </h4>
			<br>
			<br>
			<table class="table" id="sample-table-1">
				<thead>
					<tr style="color:#FFFFFF; font-size: 18px;">
						<th class="center" style="font-size: 17px;"><font color="#fff">#</font></th>
						<th style="font-size: 17px;"><font color="#fff">Competition Name</font></th>
						<th style="font-size: 17px;"><font color="#fff">Skills Required</font></th>
						<th style="font-size: 17px;"><font color="#fff">Suggested Courses</font></th>
						<th style="font-size: 17px;"><font color="#fff">Approximate Duration of Competition</font></th>						
					</tr>
				</thead>
				<tbody>
					<?php

					$sql = mysqli_query($con, "select * from dextracks where competition_name like '%$sdata%'");
					$num = mysqli_num_rows($sql);
					if ($num > 0) {
						$cnt = 1;
						while ($row = mysqli_fetch_array($sql)) {
					?>
							<tr>
								<td class="center" style="font-size: 17px;"><font color="#fff"><?php echo $cnt; ?>.</font></td>
								<td style="font-size: 17px;"><font color="#fff"><?php echo $row['competition_name']; ?></font></td>
								<td style="font-size: 17px;"><font color="#fff"><?php echo $row['skills']; ?></font></td>
								<td style="font-size: 17px;"><font color="#fff"><?php echo $row['courses']; ?></font></td>
								<td style="font-size: 17px;"><font color="#fff"><?php echo $row['duration']; ?></font></td>
								
							</tr>
						<?php
							$cnt = $cnt + 1;
						}
					} else { ?>
						<tr>
							<td colspan="8" style="font-size: 17px;"><font color="#fff"> No record found against this search<font color="#fff"></td>

						</tr>

				<?php }
				} ?></tbody>
			</table>
	</div>
	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/modernizr/modernizr.js"></script>
	<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script src="vendor/switchery/switchery.min.js"></script>
	<script src="vendor/maskedinput/jquery.maskedinput.min.js"></script>
	<script src="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
	<script src="vendor/autosize/autosize.min.js"></script>
	<script src="vendor/selectFx/classie.js"></script>
	<script src="vendor/selectFx/selectFx.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
	<script src="vendor/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
	<script src="assets/js/main.js"></script>
	<script src="assets/js/form-elements.js"></script>
	<script>
		jQuery(document).ready(function() {
			Main.init();
			FormElements.init();
		});
	</script>
	
</body>

</html>