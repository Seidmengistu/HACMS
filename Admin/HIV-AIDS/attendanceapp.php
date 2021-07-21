<?php
session_start();
include('../../includes/config.php');
if(!isset($_SESSION['logged_in'])) {
    header('location:../../login.php');
    include ("../middleware.php");
}   
?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>HACMS</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="include/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="include/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      
     
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
    <a class="btn btn-danger" href="../Blood-Donation/logout.php">Logout</a>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
   

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        <img src="include/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Seid Mengistu</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Home
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="home1.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Home</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Members
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="Add-Members/add-member.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Members</p>
                </a>
              </li>
            </ul>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="Add-Members/member-list.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Member List</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Announcements
                <i class="right fas fa-angle-left"></i>
                <span class="right badge badge-danger"></span>
              </p>
            </a>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="announcement/create-announcement.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Anouncements</p>
                </a>
              </li>
            </ul>

            <li class="nav-item">
                            <a href="Statstics.php" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Staststics</p>
                            </a>
                        </li>

            
                        <li class="nav-item">
                            <a href="attendanceapp.php" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Approve Attendance </p>
                            </a>
                        </li>



          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a class="btn btn-primary btn-sm" href="../home1.php">Home</a></li>
              
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <!-- Main content -->
    <section class="content" >
                <div class="container-fluid" >
                    <div class="row">
                        <div class="col-12">

                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title" style="color:green">Attendance List</h3>
                                </div>
                                <!-- /.card-header -->
            

                      

                                          
                                <div class="card-body"style="background-image:url('images/slide2.jpg')">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Full Name</th>
                                                <th>ID</th>
                                                <th>Department</th>
                                                <th>Date</th>
                                                <th>Delete</th>
                                                
                                                <th>Action</th>
                                               
                                                
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            
                                            $sql = "SELECT * from  attendance ";
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
											<td><?php echo htmlentities($result->fullname);?></td>
											<td><?php echo htmlentities($result->id);?></td>
											<td><?php echo htmlentities($result->dep);?></td>
											<td><?php echo htmlentities($result->date);?></td>

											<td>
											<?php if($result->status==1)
{
                                                ?> 
                                                    <a a class="btn btn-danger" href="attendanceappcode.php?del=<?php echo htmlentities($result->id);?>" onclick="return confirm('Do you really want to Delete')" >Delete</a>
                                                </td>
                                            <?php } else {?>

                                            <td><a class="btn btn-warning" href="attendanceappcode.php?eid=<?php echo htmlentities($result->id);?>" onclick="return confirm('Do you really want to read')" >Pending</a>
                                        
                                                <a a class="btn btn-info"  href="attendanceappcode.php?eid=<?php echo htmlentities($result->id);?>" onclick="return confirm('Do you really want to read')" >Read</a><td>
                                            </td>
                                            <?php } ?>
										</tr>
										<?php $cnt=$cnt+1; }} ?>
										
									</tbody>
								</table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
  



  <!-- Main Footer -->
  <?php
  include('include/footer.php');
  ?>
</div>
<script src="../includes/js/sweetalert.min.js"></script>
    <?php require_once('../../notify.php')?>

<script src="include/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="include/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="include/dist/js/adminlte.min.js"></script>
</body>
</html>
