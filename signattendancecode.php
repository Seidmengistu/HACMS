<?php
session_start();

$conn=mysqli_connect('localhost','root','','bbdms');
if(isset($_POST['submit']))
  {
$fullname=$_POST['fullname'];
$id=$_POST['id'];
$dep=$_POST['dep'];
$date=$_POST['date'];
$status=0;
    $query="INSERT  INTO attendance (fullname,id,dep,date,status) VALUES('$fullname','$id','$dep','$date','$status')";
    $query_run=mysqli_query($conn,$query);
 if($query_run)
    {       
        $_SESSION['status']="Attendance sign Request Send ";
        $_SESSION['status_code']="success";
        header('Location:signattendance.php');
    }
    else
    {
        $_SESSION['status']="   Not signed !Student with This ID send Request ";
        $_SESSION['status_code']="error";
         header('Location:signattendance.php');  
    }
    }





?>