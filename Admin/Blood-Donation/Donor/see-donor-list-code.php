<?php
session_start();

include('../../../includes/config.php');
if(!isset($_SESSION['logged_in'])) {
    header('location:../../login.php');
}   
else{
if(isset($_REQUEST['hidden']))
	{
$eid=intval($_GET['hidden']);
$status="0";
$sql = "UPDATE becomedonor SET Status=:status WHERE  id=:eid";
$query = $dbh->prepare($sql);
$query -> bindParam(':status',$status, PDO::PARAM_STR);
$query-> bindParam(':eid',$eid, PDO::PARAM_STR);
$query -> execute();

$_SESSION['status']="Donor List Become Hidden ";
$_SESSION['status_code']="success";
header('Location:see-donor-list.php'); 
}


if(isset($_REQUEST['public']))
	{
$aeid=intval($_GET['public']);
$status=1;

$sql = "UPDATE becomedonor SET Status=:status WHERE  id=:aeid";
$query = $dbh->prepare($sql);
$query -> bindParam(':status',$status, PDO::PARAM_STR);
$query-> bindParam(':aeid',$aeid, PDO::PARAM_STR);
$query -> execute();

$_SESSION['status']="Donor List Become Public ";
$_SESSION['status_code']="success";
header('Location:see-donor-list.php'); 
}
if(isset($_REQUEST['del']))
	{
$did=intval($_GET['del']);
$sql = "DELETE from becomedonor WHERE  id=:did";
$query = $dbh->prepare($sql);
$query-> bindParam(':did',$did, PDO::PARAM_STR);
$query -> execute();

$_SESSION['status']="Donor list Deleted ";
$_SESSION['status_code']="success";
header('Location:see-donor-list.php'); 
}

}?>