<body>
	
	<div class="navbar navbar-default" style="background-color: #FFFFFF; border-radius:0px">

		<ul class="nav navbar-right">
			
			<li class="dropdown current-user">
				<a href class="dropdown-toggle" data-toggle="dropdown" style="color: #062854; font-size:17px; font-weight:bold">
					<img src="assets/images/user.png"> <span class="username">

						<?php
						$email = $_SESSION['login'];
						$sql = mysqli_query($con, "select * from admin where email='$email' ");
						while ($row = mysqli_fetch_array($sql)) {

							echo $row['name'];
						}

						?>
						<i class="ti-angle-down" style="color: #062854; font-weight:bold"></i></span>
				</a>
				<ul class="dropdown-menu">



					<li>
						<a href="logout.php" style="color: #062854; font-size:17px;">
							Log Out
						</a>
					</li>
				</ul>
			</li>
			
		</ul>

	</div>

</body>