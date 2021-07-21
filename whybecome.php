<?php
session_start();

include('includes/config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <!-- Bootstrap core CSS -->
    <link href="includes/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="includes/css/modern-business.css" rel="stylesheet">

    <!-- Temporary navbar container fix -->
    <style>
        .navbar-toggler {
            z-index: 1;
        }

        @media (max-width: 576px) {
            nav>.container {
                width: 100%;
            }
        }
    </style>

</head>

<body>


    <?php include('includes/header.php');?>
    <!-- Page Content -->
    <div class="container">

        <h1 class="mt-4 mb-3">Why Become A donor </h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="home.php">Home</a>
            </li>
           
        </ol>

        <p>Blood is the most precious gift that anyone can give to another
            person <b>The Gift Of Life</b>A decision to donate your bllod can save a life,or even several if your blood
            is separated into its components
            <i>Red cells,platelets and plasma</i>whiich can be used individually for patientd with specific condition.
        </p>


    </div>
    </div>
    <!-- /.container -->


    <!-- Footer -->
    <?php include('includes/footer.php');?>

    <!-- Bootstrap core JavaScript -->
    <script src="includes/vendor/jquery/jquery.min.js"></script>
    <script src="includes/vendor/tether/tether.min.js"></script>
    <script src="includes/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>