<?php
session_start();
error_reporting(0);
include("include/config.php");
if(isset($_POST['submit']))
{
$ret=mysqli_query($con,"SELECT * FROM admin WHERE email='".$_POST['username']."' and password='".$_POST['password']."'");
$num=mysqli_fetch_array($ret);
if($num>0)
{
$extra="add-track.php";
$_SESSION['login']=$_POST['username'];
$uip=$_SERVER['REMOTE_ADDR'];
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
else
{
$_SESSION['errmsg']="Invalid username or password";
$extra="index.php";
$host  = $_SERVER['HTTP_HOST'];
$uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>DexTrack | Admin Login</title>
		<link rel = "icon" href ="assets/images/DXlogo.png" type = "image/x-icon"> 

		
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
		<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
		<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />
	</head>
	<body class="login" style="background-color:#062854;">
		<div class="row">
			<div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
				<div class="logo margin-top-30">
				<h2 style="color:#FFFFFF; margin-top:120px"> DexTrack | Admin Login</h2>
				</div>

				<div class="box-login" style="margin-top:20px">
					<form class="form-login" method="post">
						<fieldset style="border: 1.5px solid #062854;">
							<legend style="color:#062854; font-size: 18px;">
								Sign in to your account
							</legend>
							<p style="color:#062854; font-size: 14px;">
								Please enter your email and password to log in<br />
								<span style="color:red;"><?php echo $_SESSION['errmsg']; ?><?php echo $_SESSION['errmsg']="";?></span>
							</p>
							<div class="form-group">
								<span class="input-icon">
									<input type="text" class="form-control" name="username" placeholder="Enter your Email Address" style="color:#062854; border:none; border-bottom: 1.5px solid #062854;">
									<i class="fa fa-user" style="color:#062854;"></i> </span>
							</div>
							<div class="form-group form-actions">
								<span class="input-icon">
									<input type="password" class="form-control password" name="password" placeholder="Enter your Password" style="color:#062854; border:none; border-bottom: 1.5px solid #062854;">
									<i class="fa fa-lock" style="color:#062854;"></i>
									 </span>
									
							</div>
							<div class="form-actions">
								
								<button type="submit" class="btn pull-right" name="submit" style="color:#FFFFFF; background-color:#062854; border-style: solid; border-width: 2px; border-color: #062854;">
									Login <i class="fa fa-arrow-circle-right" ></i>
								</button>
							</div>
							
						
						</fieldset>
					</form>

					
			
				</div>

			</div>
		</div>
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/modernizr/modernizr.js"></script>
		<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="vendor/switchery/switchery.min.js"></script>
		<script src="vendor/jquery-validation/jquery.validate.min.js"></script>
	
		<script src="assets/js/main.js"></script>

		<script src="assets/js/login.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				Login.init();
			});
		</script>
	
	</body>
	
</html>