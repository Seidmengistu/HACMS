<?php
session_start();
$conn=mysqli_connect('localhost','root','','bbdms');
if(isset($_POST['update'])){
    $BloodGroup=$_POST['BloodGroup'];

    $query="UPDATE bloodgroup SET BloodGroup='$BloodGroup' WHERE BloodGroup='$BloodGroup'";
    
    $query_run= mysqli_query($conn,$query);
if($query_run){
        $_SESSION['status']="Blood Group updated ";
        $_SESSION['status_code']="success";
        header('Location:blood-group-list.php');    
}else
{
        $_SESSION['status']="Bloof Group not updated ";
        $_SESSION['status_code']="error";
        header('Location:Location:blood-group-list.php');
} }

if(isset($_POST['delete']))
{
    
    $idd=$_POST['delete_id'];
    
   
   
    $query="DELETE FROM bloodgroup WHERE id='$idd' ";
    $query_run=mysqli_query($conn,$query);

    if($query_run)
    {
        $_SESSION['status']="Blood Group Deleted ";
        $_SESSION['status_code']="error";
        header('Location:blood-group-list.php');

    }
    else
    {
        // print_r($_REQUEST);
        $_SESSION['status']="Your Data is not Deleted ";
        $_SESSION['status_code']="warning";
     
        header('Location:dashboard.php');

    }

}

?>