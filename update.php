<?php
$con = mysqli_connect("localhost", "root", "", "store") or die(mysqli_error($con));
session_start();
$password=mysqli_real_escape_string($con, md5($_POST['password']));
$npassword=mysqli_real_escape_string($con, md5($_POST['npassword']));
$rpassword=mysqli_real_escape_string($con, md5($_POST['rpassword']));
if($npassword!=$rpassword)
{
    echo "Both passwords do not match!!!!";
}
$user_registration_query = "UPDATE users SET password='$npassword' where password='$password';";
$user_registration_submit = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
$_SESSION['id'] = mysqli_insert_id($con);
require 'home.php'
?>
