<?php
session_start();

if(!isset($_SESSION['logged_in'])) {
    header('location:../../login.php');
}   
?>


</html>
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


	<link href="../../../includes/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="../../../includes/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="../../../includes/build/css/custom.min.css" rel="stylesheet">
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
					<?php include __DIR__."../../includes/menu-pro.php";?>
					<!-- /menu profile quick info -->
					<br />
					<!-- sidebar menu -->
					<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
						<div class="menu_section">
							<h3>General</h3>
							<ul class="nav side-menu">
								<li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="../dashboard.php">Main Board</a></li>
									</ul>
								</li>
								<li><a><i class="fa fa-edit"></i> Blood Groups <span
											class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="add-blood-group.php">ADD Blood Group</a></li>
										<li><a href="blood-group-list.php">See Blood Group</a></li>
									</ul>
								</li>
								<li><a><i class="fa fa-desktop"></i> Donor<span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="../Donor/add-donor.php">Add Donor</a></li>
										<li><a href="../Donor/donor-list">Donor List</a></li>
									</ul>
								</li>
								<li><a><i class="fa fa-desktop"></i> Contact-Us<span
											class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="../contact-us.php">Contact-US</a></li>


									</ul>
								</li>
						</div>
					</div>
					<!-- /sidebar menu -->
				</div>
			</div>
			<!-- top navigation -->
			<?php include __DIR__."../../includes/top-nav.php";?>
			<!-- page content -->
			<div class="right_col" style="background-image:url('../../../includes/images/blood-donor.jpg')" role="main"
				style="">
				<!-- top tiles -->
				<div class="row" style="display: inline-block;">
					<div class="tile_count">
					</div>
				</div>
				<!-- /top tiles -->



				<div class="content-wrapper">
					<div class="container-fluid">

						<div class="row">
							<div class="col-md-12">

								<h2 class="page-title">Add Blood Group </h2>

								<div class="row">
									<div class="col-md-10">
										<div class="panel panel-default">
											<div class="panel-heading">Form fields</div>
											<div class="panel-body">
												<form method="post" action="add-blood-group-code.php" class="form-horizontal">



													<div class="form-group">
														<label class="col-sm-4 control-label">Blood Group</label>
														<div class="col-sm-8">
															<input type="text" class="form-control" name="bloodgroup"
																id="bloodgroup" required>
														</div>
													</div>
													<div class="hr-dashed"></div>
													<div class="form-group">
														<div class="col-sm-8 col-sm-offset-4">

															<button class="btn btn-primary" name="submit"
																type="submit">Submit</button>
														</div>
													</div>

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
	</div>
	</div>
	<!-- /page content -->

	<!-- footer content -->
	<?php include __DIR__."../../includes/footer.php";?>
	<!-- /footer content -->
	</div>
	</div>
	<script src="../js/sweetalert.min.js"></script>
    <?php require_once('../notify.php');?>
	<!-- jQuery -->
	<script src="../../../includes/vendors/jquery/dist/jquery.min.js"></script>
	<script src="../../../includes/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
	<script src="../../includes/vendors/Flot/jquery.flot.stack.js"></script>
	<script src="../../../includes/build/js/custom.min.js"></script>
</body>

</html>