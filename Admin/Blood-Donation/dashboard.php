<?php
session_start();

if(!isset($_SESSION['logged_in'])) {
	include ("middleware.php");
    header('location:../login.php');
}  
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

	<title>BBDMS </title>


	<link href="../../includes/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="../../includes/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="../../includes/build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
	<div class="container body">
		<div class="main_container">
			<div class="col-md-3 left_col">
				<div class="left_col scroll-view">
					<div class="navbar nav_title" style="border: 0;">
						<a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>BBDMS||ADMIN</span></a>
					</div>
					<div class="clearfix"></div>
					<!-- menu profile quick info -->
					<div class="profile clearfix">
						<div class="profile_pic">
							<img src="images/img.jpg" alt="..." class="img-circle profile_img">
						</div>
						<div class="profile_info">
							<span>Welcome,</span>
							<h2>seid mengistu</h2>
						</div>
					</div>
					<!-- /menu profile quick info -->
					<br />
					<!-- sidebar menu -->
					<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
						<div class="menu_section">
							<h3>General</h3>
							<ul class="nav side-menu">
								<li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="dashboard.php">Main Board</a></li>
									</ul>
								</li>
								<li><a><i class="fa fa-edit"></i> Blood Groups <span
											class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="BloodGroup/add-blood-group.php">ADD Blood Group</a></li>
										<li><a href="BloodGroup/blood-group-list.php">See Blood Group</a></li>
									</ul>
								</li>
								<li><a><i class="fa fa-desktop"></i> Donor<span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="Donor/add-donor.php">Add Donor</a></li>
										<li><a href="Donor/see-donor-list.php">Donor List</a></li>
									</ul>
								</li>
								<li><a><i class="fa fa-desktop"></i> Contact-Us<span
											class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="contact-us.php">Contact-US</a></li>


									</ul>
								</li>
						</div>
					</div>
					<!-- /sidebar menu -->
				</div>
			</div>
			<!-- top navigation -->
			<div class="top_nav">
				<div class="nav_menu">
					<div class="nav toggle">
						<a id="menu_toggle"><i class="fa fa-bars"></i></a>
					</div>
					<nav class="nav navbar-nav">
						<ul class=" navbar-right">
							<li class="nav-item dropdown open" style="padding-left: 15px;">



								<a class="btn btn-danger" href="./logout.php"><i></i> Log Out</a>
				</div>
				</li>


				</ul>
				</li>
				</ul>
				</nav>
			</div>
		</div>
		<!-- page content -->
		<div class="right_col" style="background-image:url('../includes/images/blood-donor.jpg')" role="main" style="">
			<!-- top tiles -->
			<div class="row" style="display: inline-block;">
				<div class="tile_count">
				</div>
			</div>
			<!-- /top tiles -->
			<h3 style="color:blue;font-family:new times roman;text-align:center;font-size:55px">Blood Bank Donor
				Management System</h3>
			<ul style="background-color:pink">
				<li style="background-color:pink;color:green;font-family:new times roman;font-size:30px">A Single
					<strong>pint</strong>Can Save Three Lives A single <strong>Gesture</strong> Can Create A
					<strong>Million Smiles.</strong> </li>
				<li style="background-color:pink;color:green;font-family:new times roman;font-size:30px">Bring a
					<strong>Life</strong>Back To Power.Make Blood Donation Your <strong>Rresponsibility.</strong> </li>
				<li style="background-color:pink;color:green;font-family:new times roman;font-size:30px">Spare Only
					<strong>15 Minutes</strong>. and Save <strong>3 Lives.</strong> </li>
				<li style="background-color:pink;color:green;font-family:new times roman;font-size:30px">Any Body
					<strong>Can</strong> Give<strong> Blood.</strong> </li>
			</ul>


		</div>
	</div>
	</div>
	</div>
	<!-- /page content -->

	<!-- footer content -->
	<?php include("includes/footer.php");?>
	<!-- /footer content -->
	</div>
	</div>

	<!-- jQuery -->
	<script src="../../includes/vendors/jquery/dist/jquery.min.js"></script>
	<script src="../../includes/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
	<script src="../../includes/vendors/Flot/jquery.flot.stack.js"></script>
	<script src="../../includes/build/js/custom.min.js"></script>

</body>

</html>