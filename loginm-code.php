<?php
session_start();
include('Admin/Blood-Donation/includes/config.php');

if(isset($_SESSION['logged_in'])) {
   header('location:../dashboard.php');
}  

if(isset($_POST['register']))
{

$fullname=$_POST['fullname'];
$id=$_POST['id'];

// print_r($email);
// print_r($password);
// print_r($role);
// die();
$sql ="SELECT fullname,id FROM member WHERE fullname=:fullname and id=:id ";
$query= $dbh -> prepare($sql);
$query-> bindParam(':fullname', $fullname, PDO::PARAM_STR);
$query-> bindParam(':id', $id, PDO::PARAM_STR);
$query-> execute();
$results = $query->fetchAll(PDO::FETCH_ASSOC);
//  print_r($results);
//  die();
 $exist = count($results);
 if($exist > 0)
{  
   
   header('Location:member-home-page.php');
}
else{
   $_SESSION['status']="Incorrect Fullname or Id";
    $_SESSION['status_code']="warning";
    header('Location:member-login.php');
}
}