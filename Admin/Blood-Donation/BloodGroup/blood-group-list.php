<?php
session_start();

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
										<li><a href="../Donor/see-donor-list.php">Donor List</a></li>
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



				<!-- Main content -->
				<section class="content">
					<div class="container-fluid">
						<div class="row">
							<div class="col-12">

								<div class="card">
									<div class="card-header">
										<h3 class="card-title" style="color:green">Available Blood Group Lists</h3>
									</div>
									<!-- /.card-header -->


									<?php 
                       $conn=mysqli_connect('localhost','root','','bbdms');
                         $query="SELECT* FROM bloodgroup ";
                        $query_run=mysqli_query($conn,$query);

                         ?>
									<div class="card-body" style="background-image:url('images/slide2.jpg')">
										<table id="example1" class="table table-bordered table-striped">
											<thead>
												<tr>
													<th>Name</th>
													<th>Edit</th>
													<th>Delete</th>

												</tr>
											</thead>
											<tbody>

												<?php 
                                        
                                        if(mysqli_num_rows($query_run)>0)
                                        {
                                             while($row = mysqli_fetch_assoc($query_run))
                                            {
                                        ?>


												<tr>
													<td><?php echo $row['BloodGroup'];?></td>

													<form action='updateblood.php' method="POST">
														<td><button type='submit' class='btn btn-success'
																name='edit'>Edit</button></td>
														<input type='hidden' name='id' value="<?php echo $row['id'];?>">
													</form>

													<form action="deleteblood.php" method='POST'>
														<td><input type='submit' class='btn btn-danger' value="Delete"
																name='delete'></td>
														<input type='hidden' name='delete_id'
															value="<?php echo $row['id'];?>">

													</form>
												</tr>
												<?php 
                                            }
                                        }
                                        else
                                        {
                                            echo 'NO Record Found';
                                        }
                                            ?>
											</tbody>

										</table>
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
		<script src="../../../includes/vendors/Flot/jquery.flot.stack.js"></script>
		<script src="../../../includes/build/js/custom.min.js"></script>

</body>

</html>