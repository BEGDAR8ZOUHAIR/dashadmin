<?php
session_start();
if(isset($_POST['logout'])){
    unset($_SESSION['auth']);
    unset($_SESSION['auth_role']);
    unset($_SESSION['auth_user']);

    $_SESSION['message'] = "Logged out successfully";
    header('location: login.php');
}
if(!isset($_SESSION['auth'])){

    $_SESSION['message'] = "login to access Dashboard";
    header('location: login.php');
    exit(0);
}
