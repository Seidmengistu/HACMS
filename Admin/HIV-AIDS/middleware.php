<?php

if(isset($_SESSION['role'])) {
    $role = $_SESSION['role'];
    
    if($role == 'blood') {
        header('Location:../login.php');
    }
    else {

        header('Location:Add-Members/add-member.php');
    }
}
?>