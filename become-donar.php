<?php

session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Become A Donor</title>\
    <link href="includes/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="includes/vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <link href="includes/vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <link href="includes/build/css/custom.min.css" rel="stylesheet">
    <link href="includes/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="includes/css/modern-business.css" rel="stylesheet">
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
    <div class="container" style="background-image:url('includes/images/blood-donor.jpg')">
        <h1 style="color:blue" class="mt-4 mb-3 " class="">Register For Donate <small>Blood</small></h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="home.php">Home</a>
            </li>
            <li class="breadcrumb-item active">Donate Blood</li>
        </ol>
        <?php 
                include('Donor/becomeform.php');
            ?>
    </div>
    </div>
    </div>
    <?php include('includes/footer.php');?>
    <script src="includes/js/sweetalert.min.js"></script>
    <?php require_once('notify.php')?>
    <script src="includes/vendor/jquery/jquery.min.js"></script>
    <script src="includes/vendor/tether/tether.min.js"></script>
    <script src="includes/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>