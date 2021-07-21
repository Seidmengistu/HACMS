<div class="row">
    <?php include('includes/config.php');
$status=1;
$sql="SELECT * from becomedonor where status=:status order by rand() limit 6";
$query=$dbh ->prepare($sql);
$query->bindParam(':status', $status, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);


if($query->rowCount() > 0) {
    foreach($results as $result) {
        ?><div class="col-lg-4 col-sm-6 portfolio-item"><div class="card h-100"><a href="#"><img class="card-img-top img-fluid"src="includes/images/blood-donor.jpg"alt=""></a><div class="card-block"><h4 class="card-title"><a href="#"><?php echo htmlentities($result->FullName);
        ?></a></h4><p class="card-text"><b>Gender: </b> <?php echo htmlentities($result->Gender);
        ?></p><p class="card-text"><b>Blood Group: </b> <?php echo htmlentities($result->BloodGroup);
        ?></p></div></div></div><?php
    }
}

?></div>