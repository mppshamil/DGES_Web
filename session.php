<?php
include('db_connect.php');
session_start();

$user_check = $_SESSION['login_user'];

$ses_sql = mysqli_query($conn,"select * from tbl_career_login where email = '$user_check' ");

$row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

echo "<script>console.log(' " . $user_check . "' );</script>";
    $email = $row['email'];



if(!isset($_SESSION['login_user'])){
    header("location:login.php");
    die();
    
}
?>