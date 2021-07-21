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

                                    <small>Create Sign</small>
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

                            

                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Form For the Attendance</label>
                                    <div class="col-sm-8">

                                        <form action='signattendancecode.php' enctype="multipart/form-data"
                                            method='POST'>

                                            <div class="mb-3">
                                                <label class="form-label">Full Name</label>
                                                <input class="form-control" name='fullname' 
                                                    required>

                                            </div>

                                            <div class="mb-3">
                                                <label for="validationCustom05" class="form-label">ID
                                                    Number</label>
                                                <input type="text" class="form-control" name='id'
                                                    required>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">Select Department</label>
                                                <select name="dep">
                                                    <option value="CSE">CSE</option>
                                                    <option value="ECE">ECE </option>
                                                    <option value="PCE">PCE</option>
                                                    <option value="MEC">MEC</option>
                                                    <option value="MAEC">MAEC</option>
                                                    <option value="CE">CE</option>
                                                    <option value="CIE">CIE</option>
                                                    <option value="HE">HE</option>
                                                    <option value="AE">AE</option>
                                                    <option value="AAPPLIED">APPLIED</option>
                                                </select>

                                            </div>
                                            
                                            <div class="mb-3">
                                                <label class="form-label">Date</label>
                                                <input type='date' class="form-control" name='date' 
                                                    required>

                                            </div>
                                                <button type="submit" class="btn btn-primary"
                                                    name='submit'>Add</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>




                          
                        </div>
                    </div>
                </div>
                <!-- /.col-->
        </div>
        <!-- ./row -->
        </section>
        <!-- /.content -->
        <?php
  include('Admin/Blood-Donation/includes/footer.php');
  ?>
    </div>
    <!-- /.content-wrapper -->


    <aside class="control-sidebar control-sidebar-dark">

    </aside>

    </div>
    <script src="Admin/Blood-Donation/js/sweetalert.min.js"></script>
    <?php require_once('notify.php')?>
    <script src="Admin/HIV-AIDS/include/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="Admin/HIV-AIDS/include/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="Admin/HIV-AIDS/include/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="Admin/HIV-AIDS/include/dist/js/demo.js"></script>
    <!-- Summernote -->
    <script src="Admin/HIV-AIDS/include/plugins/summernote/summernote-bs4.min.js"></script>
   
</body>

</html>