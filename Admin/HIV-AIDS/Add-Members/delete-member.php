<?php
SESSION_START();
 $conn=mysqli_connect('localhost','root','','bbdms');

 if(isset($_POST['update'])){
    $fullname=$_POST['fullname'];
    $id=$_POST['id'];
    $age=$_POST['age'];
    $adress=$_POST['adress'];
    $dep=$_POST['dep'];
    // print_r($id);
    // die();
    $query="UPDATE member SET fullname='$fullname',id='$id',age='$age',adress='$adress' ,dep='$dep' WHERE id='$id'";
    // print_r($_REQUEST);
    $query_run= mysqli_query($conn,$query);
if($query_run){
        $_SESSION['status']="Member Information updated ";
        $_SESSION['status_code']="success";
        header('Location:member-list.php');    
}else
{
    $_SESSION['status']="Member Information not updated ";
    $_SESSION['status_code']="danger";
    header('Location:member-list.php');  
} }


if(isset($_POST['delete']))
{
    
    $idd=$_POST['delete_id'];
   

    $query="DELETE FROM member WHERE id='$idd' ";
    $query_run=mysqli_query($conn,$query);

    if($query_run)
    {
        $_SESSION['status']="Your Data is Deleted ";
        $_SESSION['status_code']="error";
        header('Location:member-list.php');

    }
}

?>