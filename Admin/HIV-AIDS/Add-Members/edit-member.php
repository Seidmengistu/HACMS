<?php
session_start();

if(!isset($_SESSION['logged_in'])) {
    header('location:../../login.php');
    include ("../middleware.php");
}   
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
    <link rel="stylesheet" href="../include/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../include/dist/css/adminlte.min.css">
    <!-- summernote -->
    <link rel="stylesheet" href="../include/plugins/summernote/summernote-bs4.css">
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
                <a class="btn btn-danger" href="../../Blood-Donation/logout.php">Logout</a>
        </nav>

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
                                    <a href="../Add-Members/add-member.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Members</p>
                                    </a>
                                </li>
                            </ul>

                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../Add-Members/member-list.php" class="nav-link ">
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
                                    <a href="create-announcement.php" class="nav-link ">
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
                            <a href="../Statstics.php" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Staststics</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../attendanceapp.php" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Approve </p>
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
                            <ol class="breadcrumb float-sm-right">

                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Edit Members</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <a class="btn btn-success" href="member-list.php">back</a>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <?php
                                        $conn=mysqli_connect('localhost','root','','bbdms');
                                        if(isset($_POST['id']))
                                        {
                                        $idt=$_POST['id'];
                                        $query="SELECT* FROM member WHERE id='$idt'";
                                        $query_run=mysqli_query($conn,$query);


                                        foreach($query_run as $row)
                                        {
                                        ?>

                                    <form action='delete-member.php' method='POST'>

                                        <div class="mb-3">
                                            <label class="form-label">Full Name</label>
                                            <input class="form-control" value="<?php echo $row['fullname']?>"
                                                name='fullname'>

                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Id-Number</label>
                                            <input class="form-control" value="<?php echo $row['id']?>" name='id'>

                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Mark</label>
                                            <input vtype="text" class="form-control" value="<?php echo $row['age']?>"
                                                name='age'>

                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Address</label>
                                            <input class="form-control" name='adress'
                                                value="<?php echo $row['adress']?>">

                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Department</label>
                                            <input class="form-control" name='dep' value="<?php echo $row['dep']?>">

                                        </div>
                                        
                                        <a href='member-list.php' class='btn btn-danger'>Cancel</a>


                                        <button name='update' class='btn btn-primary'>Update</button>
                                    </form>
                                    <?php
 
                                    }
                                    }?>

                                </div>
                            </div>
                            
                            <div class="card card-primary card-outline">
                            </div>
                            
                        </div>
                        <div class="col-6">
                                            <?php
                                                if(isset($row)) {
                                                echo "<img src='data:image/jpeg;base64,".base64_encode($row['image'])."' height='350' width='350'/>";
                                                }
                                                
                                                ?>
                                        </div>
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
    </div>
    <!-- /.content-wrapper -->
    <?php
  include('../include/footer.php');
  ?>
    <script src="../../../includes/js/sweetalert.min.js"></script>
    <?php require_once('../../../notify.php')?>

    <aside class="control-sidebar control-sidebar-dark">

    </aside>

    </div>
    <script src="../include/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../include/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../include/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../include/dist/js/demo.js"></script>
    <!-- Summernote -->
    <script src="../include/plugins/summernote/summernote-bs4.min.js"></script>
    <script>
        $(function () {
            // Summernote
            $('.textarea').summernote()
        })
    </script>
</body>

</html>