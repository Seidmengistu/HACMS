<?php
session_start();

include('../../includes/config.php');
if(!isset($_SESSION['logged_in'])) {
    header('location:../../login.php');
}  
else{
if(isset($_REQUEST['eid']))
	{
$eid=intval($_GET['eid']);
$status=0;
$sql = "UPDATE attendance SET status=:status WHERE  id=:eid";
$query = $dbh->prepare($sql);
$query -> bindParam(':status',$status, PDO::PARAM_STR);
$query-> bindParam(':eid',$eid, PDO::PARAM_STR);
$query -> execute();


header("Location:attendanceapp.php");
}

if(isset($_REQUEST['del']))
	{
$did=intval($_GET['del']);
$sql = "delete from attendance WHERE  id=:did";
$query = $dbh->prepare($sql);
$query-> bindParam(':did',$did, PDO::PARAM_STR);
$query -> execute();

header("Location:attendanceapp.php");

}

}

 ?>