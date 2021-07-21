<?php
include('see-donor-list-code.php');
if(!isset($_SESSION['logged_in'])) {
    header('location:../../login.php');
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
	<link href="../../../includes/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
	<link href="../../../includes/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
	<link href="../../../includes/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css"
		rel="stylesheet">
	<link href="../../../includes/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
	<link href="../../../includes/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">


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
										<li><a href="dashboard.php">Main Board</a></li>
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
										<li><a href="donor-list">Donor List</a></li>
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
			<div class="right_col" style="background-image:url('../includes/images/blood-donor.jpg')" role="main"
				style="">
				<!-- top tiles -->
				<div class="row" style="display: inline-block;">
					<div class="tile_count">
					</div>
				</div>
				<!-- /top tiles -->




				<div class="col-md-12 col-sm-12 ">
					<div class="x_panel">
						<div class="x_title">
							<h2>Donor List <small></small></h2>
							<ul class="nav navbar-right panel_toolbox">
								<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
								</li>

								<li><a class="close-link"><i class="fa fa-close"></i></a>
								</li>
							</ul>
							<div class="clearfix"></div>
						</div>
						<div class="x_content">
							<div class="row">
								<div class="col-sm-12">
									<div class="card-box table-responsive">
										<div class="dt-buttons btn-group">
											<a class='btn btn-success'   tabindex="0"aria-controls="datatable-buttons" href="../download-records.php"><span>Download File</span></a></div>
										<table id="datatable-buttons" class="table table-striped table-bordered"
											style="width:100%">
											<thead>
												<tr>
													<th>#</th>
													<th>Name</th>
													<th>Mobile No</th>
													<th>Email</th>
													<th>Age</th>
													<th>Gender</th>
													<th>Blood Group</th>
													<th>address</th>
													<th>Message </th>
													<th>action </th>
													<th>action </th>
													<th>action </th>

												</tr>
											</thead>


											<?php $sql = "SELECT * from  becomedonor ";
										$query = $dbh -> prepare($sql);
										$query->execute();
										$results=$query->fetchAll(PDO::FETCH_OBJ);
										$cnt=1;
										if($query->rowCount() > 0)
										{
										foreach($results as $result)
{				?>
											<tr>
												<td><?php echo htmlentities($cnt);?></td>
												<td><?php echo htmlentities($result->FullName);?></td>
												<td><?php echo htmlentities($result->MobileNumber);?></td>
												<td><?php echo htmlentities($result->EmailId);?></td>
												<td><?php echo htmlentities($result->Gender);?></td>
												<td><?php echo htmlentities($result->Age);?></td>
												<td><?php echo htmlentities($result->BloodGroup);?></td>
												<td><?php echo htmlentities($result->Address);?></td>
												<td><?php echo htmlentities($result->Message);?></td>


												<td>
													<?php if($result->status==1)
										{?>
													<a class="btn btn-primary"
														href="see-donor-list.php?hidden=<?php echo htmlentities($result->id);?>"
														onclick="return confirm('Do you really want to hiidden this detail')">Hidden</a>
												<td>
													<?php } else {?>
												<td>
													<a class='btn btn-warning' style="color:blue"
														href="see-donor-list.php?public=<?php echo htmlentities($result->id);?>"
														onclick="return confirm('Do you really want to Public this detail')">Public</a>
												</td>

												<?php } ?></td>
												<td><a class="btn btn-danger"
														href="see-donor-list.php?del=<?php echo htmlentities($result->id);?>"
														onclick="return confirm('Do you really want to delete this record')">
														Delete</a>
												<td>
												<td>

											</tr>
											<?php $cnt=$cnt+1; }} ?>

											</tbody>
										</table>


									</div>
								</div>
							</div>
						</div>
						<!-- /page content -->
					</div>
				</div>
			</div>
		</div>
	</div><!-- footer content -->
	<?php include __DIR__."../../includes/footer.php";?>

	<script src="../js/sweetalert.min.js"></script>
    <?php require_once('../notify.php');?>
	<!-- /footer content -->
	<!-- jQuery -->
	<script src="../../../includes/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
	<script src="../../../includes/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
	<script src="../../../includes/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
	<script src="../../../includes/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
	<script src="../../../includes/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
	<script src="../../../includes/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
	<script src="../../../includes/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
	<script src="../../../includes/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
	<script src="../../../includes/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
	<script src="../../../includes/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
	<script src="../../../includes/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
	<script src="../../../includes/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
	<script src="../../../includes/vendors/jszip/dist/jszip.min.js"></script>
	<script src="../../../includes/vendors/pdfmake/build/pdfmake.min.js"></script>
	<script src="../../../includes/vendors/pdfmake/build/vfs_fonts.js"> </script> 
	<script	src="../../../includes/vendors/jquery/dist/jquery.min.js"></script>
	<script src="../../../includes/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
	<script src="../../../includes/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
	<script src="../../../includes/vendors/Flot/jquery.flot.stack.js"></script>
	<script src="../../../includes/build/js/custom.min.js"></script>









</body>

</html>