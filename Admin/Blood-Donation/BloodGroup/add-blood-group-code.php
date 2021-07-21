<?php
session_start();
include('../../../includes/config.php');
if(!isset($_SESSION['logged_in'])) {
    header('location:../../login.php');
}  
 
else{

if(isset($_POST['submit']))
{
    
$bloodgroup=$_POST['bloodgroup'];
$sql="INSERT INTO  bloodgroup(BloodGroup) VALUES(:bloodgroup)";
$query = $dbh->prepare($sql);
$query->bindParam(':bloodgroup',$bloodgroup,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();


    
if($lastInsertId>0)
{
    
    $_SESSION['status']="Blood Group Added";
    $_SESSION['status_code']="success";
     header('Location:add-blood-group.php');
}
else 
{
    $_SESSION['status']="Blood Group Not Added";
    $_SESSION['status_code']="danger";
     header('Location:add-blood-group.php');
}

}}
?>