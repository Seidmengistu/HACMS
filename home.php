<?php
session_start();
if(isset($_SESSION['logged_in'])) {
    header('location:login.php');
} 
include('includes/config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>HACM||BBDMS</title>
    <link href="includes/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="includes/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
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

        .carousel-item.active,
        .carousel-item-next,
        .carousel-item-prev {
            display: block;
        }
    </style>
</head>

<body>
    <?php include('includes/header.php');?>
    <?php include('includes/slider.php');?>
    <div class="container">
        <h1 class="my-4">Welcome HACMS||BBDMS</h1>
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <h4 class="card-header">The Number of HIV/AIDS Postive In Ethiopia</h4>

                    <p class="card-text" style="padding-left:2%"> </p>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <h4 class="card-header" style="color:red">How Can HIV/AIDS Transmitted?</h4>
                    <ol style="list-style-type:number">
                        <li>Sexual Transmission.</li>
                        <li>Blood Transfusion.</li>
                        <li>The Shring of needles in health-care settings and drug injection.</li>
                        <li>Between Mother and infant during pregenancy,child birth and breast feeding.</li>
                    </ol>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <h4 class="card-header">The need for blood</h4>
                    <h1 style="font-family:new times roman;color:red">WHY SHOULD I DONATE BLOOD?</h1>
                    <p> Safe Blood Saves lives and improves health<br><strong>Blood transfusion is needed for:</strong>
                    </p>
                    <ul style="list-style-type:square">
                        <i>
                            <li>women with complication of pregenancy ,such as ectopic pregenancies and haemorrage
                                before,during of
                                after child birth.</li>
                        </i>
                        <i>
                            <li>People with severe trauma following man-made and natural disasters.</li>
                        </i>
                        <i>
                            <li>Childeren with severe anaemia often resulting from malaria or malnutration.</li>
                        </i>
                        <i>
                            <li>Many complex medical and surgical procedures and cancer patients.</li>
                        </i>
                        <i>
                            <li>It also needed for regular transfusion for People with conditions such as
                                <strong>thalassaemia,sickle cell disease.</strong></li>
                        </i>
                        <i>
                    </ul>
                </div>
            </div>
            <div class="col-lg-12 mb-12">
                <div class="card">
                    <h4 class="card-header">Who you could Help</h>
                        <p class="card-text" style="padding-left:2%">
                            Every day blood donors help patients of all ages:</p>
                        <ul style="list-style-type:square">
                            <li>Accident and burn victems</li>
                            <li>Heart surgery</li>
                            <li>Organ transplant patients and those battling cancer </li>
                        </ul>
                </div>
            </div>
        </div>
    </div>
    <h2>Some of the Doner</h2>
    <?php
    include("donor/some-donor.php");
    ?>
    <div class="row">
        <div class="col-lg-6">
            <h2>BLOOD GROUPS</h2>
            <p> blood group of any human being will mainly fall in any one of the following groups.</p>
            <ul>
                <li>A positive or A negative</li>
                <li>B positive or B negative</li>
                <li>O positive or O negative</li>
                <li>AB positive or AB negative.</li>
            </ul>
            <p>A healthy diet helps ensure a successful blood donation, and also makes you feel better! Check out
                the following recommended foods to eat prior to your donation.</p>
        </div>
        <div class="col-lg-6">
            <img class="img-fluid rounded" src="includes/images/blood-donor (1).jpg" alt="">
        </div>
    </div>
    <hr>
    <div class="row mb-4">
        <div class="col-md-8">
            <h4>UNIVERSAL DONORS AND RECIPIENTS</h4>
            <p>
                The most common blood type is O, followed by type A.

                Type O individuals are often called "universal donors" since their blood can be transfused into
                persons with any blood type. Those with type AB blood are called "universal recipients" because they
                can receive blood of any type.</p>
        </div>

    </div>

    </div>
    <?php include('includes/footer.php');?>
    <script src="includes/vendors/Chart.js/dist/Chart.min.js"></script>
    <script src="includes/vendor/jquery/jquery.min.js"></script>
    <script src="includes/vendor/tether/tether.min.js"></script>
    <script src="includes/vendor/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>