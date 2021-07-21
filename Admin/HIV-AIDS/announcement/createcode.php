<?php
session_start();


if(isset($_POST['submit']))
{

	
    $conn=mysqli_connect('localhost','root','','bbdms');
	$pagedetails=$_POST['pgedetails'];
    $query="UPDATE announcement SET detail='$pagedetails' WHERE id=1";
    $query_run= mysqli_query($conn,$query);
    $isnum=is_numeric($pagedetails);
    // print_r($isnum);
    // die();
   
                if($query_run && $isnum=="0" )
            {
                    $_SESSION['status']="Your Announcement is updated ";
                    $_SESSION['status_code']="success";
                    header('Location:create-announcement.php');    
            }
            else if($isnum=="1")
            {
                    $_SESSION['status']="Your announcement is not updated ";
                    $_SESSION['status_code']="error";
                    header('Location:create-announcement.php'); 
            } 
}

?>
