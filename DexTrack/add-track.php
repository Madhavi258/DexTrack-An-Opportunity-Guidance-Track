<?php
session_start();
error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();

if (isset($_POST['submit'])) {
	$competition = $_POST['competition'];
	$skills = $_POST['skills'];
	$courses = $_POST['courses'];
	$duration = $_POST['duration'];
	$sql = mysqli_query($con, "insert into dextracks(competition_name, skills, courses, duration) values('$competition','$skills','$courses','$duration')");
	if ($sql) {
		echo "<script>alert('New DexTrack added Successfully');</script>";
		echo "<script>window.location.href ='add-track.php'</script>";
	}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Admin | Add DexTrack</title>
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

</head>

<body style="background-color:#062854;">
	<?php include('include/adminheader.php'); ?>

	<div id="app">

		<div class="app-content">

			<br>
			<br>


			<div class="wrap-content container" id="container">

				<section id="page-title">
					<div>
						<div class="col-sm-8">
							<h1 class="mainTitle" style="color:#FFFFFF;">Admin | Add New DexTrack</h1>
						</div>
						<ol class="breadcrumb">
							<li style="color:#FFFFFF;">
								<span>Admin</span>
								<span> / </span>
								<span>Add New DexTrack</span>
							</li>
						</ol>
					</div>
				</section>

				<div class="container-fluid container-fullw">
					<div class="row">
						<div class="col-md-12">

							<div class="row margin-top-30">
								<div class="col-lg-8 col-md-12">
									<div class="panel panel-white">
										<div class="panel-heading">
											<h5 class="panel-title" style="color:#062854; font-size: 18px;">Add New DexTrack</h5>
										</div>
										<div class="panel-body">

											<form role="form" name="dextrack" method="post">
												<div class="form-group">
													<label for="competition" style="color:#062854; font-size: 17px;">
														Name of Competition
													</label>
													<input type="text" name="competition" class="form-control" placeholder="  Enter Name of Competition" required="true" style="color:#062854; border: none; border-bottom: 1.5px solid #062854; font-size: 16.5px;">
												</div>


												<div class="form-group">
													<label for="skills" style="color:#062854; font-size: 17px; margin-top:30px;">
														Skills Required
													</label>
													<textarea name="skills" class="form-control" placeholder="Enter Required Skills" required="true" style="color:#062854; border: none; border-bottom: 1.5px solid #062854; font-size: 16.5px;"></textarea>
												</div>

												<div class="form-group">
													<label for="courses" style="color:#062854; font-size: 17px; margin-top:30px;">
														Suggested Courses
													</label>
													<textarea name="courses" class="form-control" placeholder="Enter Suggested Courses" required="true" style="color:#062854; border: none; border-bottom: 1.5px solid #062854; font-size: 16.5px;"></textarea>
												</div>
												<div class="form-group">
													<label for="duration" style="color:#062854; font-size: 17px; margin-top:30px;">
														Approx Duration of Competition
													</label>
													<input type="text" name="duration" class="form-control" placeholder="  Enter Approximate Duration of Competition" required="true" style="color:#062854; border: none; border-bottom: 1.5px solid #062854; font-size: 16.5px;">
												</div>





												<button type="submit" name="submit" id="submit" class="btn" style="color:#FFFFFF; background-color:#062854; border-style: solid; border-width: 2px; border-color: #062854; margin-top:20px">
													Submit
												</button>
											</form>
										</div>
									</div>
								</div>

							</div>
						</div>

					</div>
				</div>
			</div>
		</div>

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