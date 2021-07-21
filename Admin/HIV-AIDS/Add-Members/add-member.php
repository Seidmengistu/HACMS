<?hp

SESSION_START(); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>HACMS</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="../include/plugins/fontawesome-free/css/all.min.css">

    <!-- Theme style -->
    <!-- <link rel="stylesheet" href="../include/dist/css/adminlte.min.css"> -->
    <!-- <link rel="stylesheet" href="../include/dist/css/adminlte.css"> -->
    <!-- Google Font: Source Sans Pro -->

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
            <ul class="navbar-nav ml-auto">
            <a class="btn btn-danger" href="../../Blood-Donation/logout.php">Logout</a>
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
                        <img src="../include/dist/img/user2-160x160.jpg" class="img-circle elevation-2"
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
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Home
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../home1.php" class="nav-link active">
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
                                    <a href="add-member.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Members</p>
                                    </a>
                                </li>
                            </ul>

                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="member-list.php" class="nav-link ">
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
                                    <a href="../announcement/create-announcement.php" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Create Announcements</p>
                                    </a>
                                </li>
                            </ul>

                            <li class="nav-item">
                            <a href="../Statstics.php" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Staststics</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="../attendanceapp.php" class="nav-link ">
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
        <div class="content-wrapper" style="background-image:url('../include/image/banner.png')">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 style="color:green">Add Member</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a class="btn btn-info btn-sm" href="../home1.php">Home</a>
                                </li>

                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">


                            </div>
                            <!-- /.col-md-6 -->
                            <div class="col-lg-6">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                    data-target="#ad">
                                    Register Member
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="ad" aria-labelledby="exampleModalLabel" aria-hidden="true"
                                    tabindex="-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Add Member</h5>
                                                <button type="button" class="btn-close" data-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="modal-body"
                                                    style="background-image:url('../include/image/bg-01.jpg')">

                                                    <form action='add-member-code.php'
                                                        enctype="multipart/form-data" method='POST'>

                                                        <div class="mb-3">
                                                            <label class="form-label">Full Name</label>
                                                            <input class="form-control" name='fullname'
                                                                id="validationCustom05" required>

                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="validationCustom05" class="form-label">ID
                                                                Number</label>
                                                            <input type="text" class="form-control" name='id'
                                                                id="validationCustom05" required>
                                                        </div>



                                                        <div class="mb-3">
                                                            <label class="form-label">Age</label>
                                                            <input type="text" class="form-control" name='age'
                                                                id="validationCustom05" required>

                                                        </div>

                                                        <div class="mb-3">
                                                            <label class="form-label">Current Adress</label>
                                                            <input class="form-control" name='address'
                                                                id="validationCustom05" required>

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
                                                                <label class="form-label">Photo</label>
                                                                <input type="file" class="form-control" name='image'
                                                                    idate="image" id="validationCustom05" required>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary"
                                                                name='register'>Add</button>
                                                        </div>
                                                    </form>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.col-md-6 -->
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <?php
  include('../include/footer.php');
  ?>
    </div>
    <script src="../../../includes/js/sweetalert.min.js"></script>
    <?php require_once('../../../notify.php')?>
    <script src="../include/plugins/jquery/jquery.min.js"></script>
    <script src="../include/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="../include/popper.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../include/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- AdminLTE App -->
    <script src="../include/dist/js/adminlte.min.js"></script>

</body>

</html>