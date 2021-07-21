<?php
session_start();


if(isset($_POST['register']))
{
    $conn=mysqli_connect('localhost','root','','bbdms');
    $fullname=$_POST['fullname'];
    $id=$_POST['id'];
    $age=$_POST['age'];
    $adress=$_POST['address'];
    $dep=$_POST['dep'];
    // print_r($dep);
    // die();
    $file=addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
    $query="INSERT  INTO member (fullname,id,age,adress,dep,image) VALUES('$fullname','$id','$age','$adress','$dep','$file')";
    $query_run=mysqli_query($conn,$query);
 if($query_run)
    {       
        $_SESSION['status']="Member  Added ";
        $_SESSION['status_code']="success";
        header('Location:../announcement/create-announcement.php');
        
    }
    else
    {
        $_SESSION['status']="  Member Not Added ";
        $_SESSION['status_code']="error";
         header('Location:../announcement/create-announcement.php');  
    }
}
    
    