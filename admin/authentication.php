<?php
session_start();
include('config/dbconn.php');

if(!isset($_SESSION['auth'])){

   
    header('location: login.php');
    exit(0);
}
