<?php
session_start();

// if(!isset($_SESSION['logged_in'])) {
//     header('location:../../login.php');
//     include ("../middleware.php");
// }   
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>HACMS</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="Admin/HIV-AIDS/include/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="Admin/HIV-AIDS/include/dist/css/adminlte.min.css">
    <!-- summernote -->
    <link rel="stylesheet" href="Admin/include/HIV-AIDS/plugins/summernote/summernote-bs4.css">
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


            <script type="text/JavaScript">
                function MM_jumpMenu(targ, selObj, restore) { //v3.0
                    eval(targ + ".location='" + selObj.options[selObj.selectedIndex].value + "'");
                    if (restore) selObj.selectedIndex = 0;
                }
            </script>

            <ul class="navbar-nav ml-auto">
            <a class="btn btn-danger" href="member-login.php">Logout</a>
        </nav>

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->


            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="Admin/HIV-AIDS/include/dist/img/user2-160x160.jpg" class="img-circle elevation-2"
                            alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Seid Mengistu</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item has-treeview menu-open">
                        <li class="nav-item has-treeview menu-open">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    Attendance
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="signattendance.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Sign Attendance</p>
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
                                    <span class="right badge badge-danger">new</span>
                                </p>
                            </a>

                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="member-home-page.php" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>New Announcements</p>
                                    </a>
                                </li>
                            </ul>

                            <li class="nav-item">
                            <a href="writemessage.php" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Write Message To Admin</p>
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
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 style="color:blue;font-family:new times roman"></h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">

                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-outline card-info">
                            <div class="card-header">
                                <h3 class="card-title">

                                    <small>Announcements</small>
                                </h3>
                                <!-- tools box -->
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse"
                                        data-toggle="tooltip" title="Collapse">
                                        <i class="fas fa-minus"></i></button>
                                    <button type="button" class="btn btn-tool btn-sm" data-card-widget="remove"
                                        data-toggle="tooltip" title="Remove">
                                        <i class="fas fa-times"></i></button>
                                </div>
                                <!-- /. tools -->
                            </div>

                            <form method="post" action="createcode.php">

                                <div class="form-group">
                                    <label class="col-sm-4 control-label">New Announcements From Admin</label>
                                    <div class="col-sm-8">

                                        <textarea disabled class="form-control" rows="5" cols="50" name="pgedetails"
                                            id="pgedetails" placeholder="Package Details" required>
										<?php 
                                             
                                             include('includes/config.php');
												$sql = "SELECT detail from announcement";
												$query = $dbh -> prepare($sql);

												$query->execute();
												$results=$query->fetchAll(PDO::FETCH_OBJ);
												// $cnt=1;
												if($query->rowCount() > 0)
												{
												foreach($results as $result)
												{		
												echo $result->detail;
												}}
												?>

										</textarea>
                                    </div>
                                </div>



                               
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.col-->
        </div>
        <!-- ./row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php
  include('Admin/include/footer.php');
  ?>
    <script src="Admin/includes/js/sweetalert.min.js"></script>
    <?php require_once('notify.php')?>

    <aside class="control-sidebar control-sidebar-dark">

    </aside>

    </div>
    <script src="Admin/HIV-AIDS/include/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="Admin/HIV-AIDS/include/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="Admin/HIV-AIDS/include/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="Admin/HIV-AIDS/include/dist/js/demo.js"></script>
    <!-- Summernote -->
    <script src="Admin/HIV-AIDS/include/plugins/summernote/summernote-bs4.min.js"></script>
    <script>
        $(function () {
            // Summernote
            $('.textarea').summernote()
        })
    </script>
</body>

</html>