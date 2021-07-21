<?php session_start();
include('../../../includes/config.php');
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
					<?php include('../includes/menu-pro.php');?>
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
										<li><a href="../BloodGroup/add-blood-group.php">ADD Blood Group</a></li>
										<li><a href="../BloodGroup/blood-group-list.php">See Blood Group</a></li>
									</ul>
								</li>
								<li><a><i class="fa fa-desktop"></i> Donor<span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="add-donor.php">Add Donor</a></li>
										<li><a href="see-donor-list.php">Donor List</a></li>
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
			<?php include('../includes/top-nav.php');?>
			<!-- page content -->
			<div class="right_col" style="background-image:url('../../includes/images/blood-donor.jpg')" role="main"
				style="">
				<!-- top tiles -->
				<div class="row" style="display: inline-block;">
					<div class="tile_count">
					</div>
				</div>
				<!-- /top tiles -->


				<div class="content-wrapper">
					<!-- Content Header (Page header) -->
					<section class="content-header">
						<div class="container-fluid">

						</div>
				</div><!-- /.container-fluid -->
				</section>

				<!-- Main content -->
				<section class="content">
					<div class="container-fluid">
						<div class="row">
							<!-- left column -->
							<div class="col-md-12">
								<!-- jquery validation -->
								<div class="card card-primary">
									<div class="card-header">
										<h3 style='color:blue;font-family:new times roman' class="card-title">Add donor
											<small>Information</small></h3>
									</div>
									<!-- /.card-header -->
									<!-- form start -->
									<form action="adddonorcode.php" method='POST'>
										<div class="card-body">
											<div class="form-group">
												<label class="col-sm-2 control-label">Full Name<span
														style="color:red">*</span></label>
												<div class="col-sm-4">
													<input type="text" name="fullname" class="form-control" required>
												</div>

												<label class="col-sm-2 control-label">Mobile No<span
														style="color:red">*</span></label>
												<div class="col-sm-4">
													<input type="text" name="mobileno"
														onKeyPress="return isNumberKey(event)" maxlength="10"
														class="form-control" required>
												</div>
											</div>
											<br><br>
											<div class="form-group">
												<label class="col-sm-2 control-label">Email id </label>
												<div class="col-sm-4">
													<input type="email" name="emailid" class="form-control">
												</div>

												<label class="col-sm-2 control-label">Age<span
														style="color:red">*</span></label>
												<div class="col-sm-4">
													<input type="text" name="age" class="form-control" required>
												</div>
											</div>
											<br><br>
											<div class="form-group">
												<label class="col-sm-2 control-label">Gender <span
														style="color:red">*</span></label>
												<div class="col-sm-4">
													<select name="gender" class="form-control" required>
														<option value="">Select</option>
														<option value="Male">Male</option>
														<option value="Female">Female</option>
													</select>
												</div>

												<label class="col-sm-2 control-label">Blood Group<span
														style="color:red">*</span></label>
												<div class="col-sm-4">


													<select name="bloodgroup" class="form-control" required>
														<option value="">Select</option>
														<?php $sql = "SELECT * from  bloodgroup ";
															$query = $dbh -> prepare($sql);
															$query->execute();
															$results=$query->fetchAll(PDO::FETCH_OBJ);
															$cnt=1;
															if($query->rowCount() > 0)
															{
															foreach($results as $result)
															{				?>
														<option value="<?php echo htmlentities($result->BloodGroup);?>">
															<?php echo htmlentities($result->BloodGroup);?></option>
														<?php }} ?>
													</select>

												</div>
											</div>

											<br><br>

											<div class="hr-dashed"></div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Address</label>
												<div class="col-sm-10">
													<textarea class="form-control" name="address"></textarea>
												</div>
											</div>
											<br><br><br><br>
											<div class="hr-dashed"></div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Message<span
														style="color:red">*</span></label>
												<div class="col-sm-10">
													<textarea class="form-control" name="message" required> </textarea>
												</div>
											</div>






											<button type="submit" name="submit" class="btn btn-primary">Submit</button>

										</div>
									</form>
								</div>
								<!-- /.card -->
							</div>
							<!--/.col (left) -->
							<!-- right column -->
							<div class="col-md-6">

							</div>
							<!--/.col (right) -->
						</div>
						<!-- /.row -->
					</div><!-- /.container-fluid -->
				</section>
				<!-- /.content -->
			</div>


		</div>
	</div>

	</div>
	</div>
	</div>
	</div>
	<!-- /page content -->

	<!-- footer content -->
	<?php include("../../includes/footer.php");?>
	<!-- /footer content -->
	</div>
	</div>
	<script src="../../js/sweetalert.min.js"></script>
    <?php require_once('../notify.php');?>
	<!-- jQuery -->
	<script src="../../../includes/vendors/jquery/dist/jquery.min.js"></script>
	<script src="../../../includes/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
	<script src="../../../includes/vendors/Flot/jquery.flot.stack.js"></script>
	<script src="../../../includes/build/js/custom.min.js"></script>
</body>

</html>