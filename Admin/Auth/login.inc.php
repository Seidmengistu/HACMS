<?php
session_start();
include('../Blood-Donation/includes/config.php');

if(isset($_SESSION['logged_in'])) {
   header('location:../dashboard.php');
}  

if(isset($_POST['login']))
{
	
$email=$_POST['username'];
$password=$_POST['password'];
$role=$_POST['role'];
// print_r($email);
// print_r($password);
// print_r($role);
// die();
$sql ="SELECT UserName,Password,role FROM admin WHERE UserName=:email and Password=:password and role=:role";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> bindParam(':role', $role, PDO::PARAM_STR);
$query-> execute();
$results = $query->fetchAll(PDO::FETCH_ASSOC);
//  print_r($results);
//  die();
 $exist = count($results);
if($exist > 0 && $role=="blood")
{  
  
   header('Location:../Blood-Donation/dashboard.php');
   $_SESSION['logged_in'] = true;
   $_SESSION['role'] = 'blood';
  

}
else if($exist > 0 && $role=="hiv")
{
   $_SESSION['logged_in'] = true;
   header('Location:../HIV-AIDS/home1.php');
   $_SESSION['role'] = 'hiv';
    
}

 else if($role!="blood" ||$role!='hiv')
{
  
  $_SESSION['status']="Incorrect role";
  $_SESSION['status_code']="warning";
   header('Location:../login.php');

}

else 
{
$_SESSION['status']="Incorrect Username or Password";
$_SESSION['status_code']="warning";
 header('Location:../login.php');

}

}

?>