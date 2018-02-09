<?php
$con= mysqli_connect("localhost", "root", "", "store") or die(mysqli_error($con));
session_start();
$errflag = false;
$user= mysqli_real_escape_string($con, $_POST['user']);
$password= mysqli_real_escape_string($con, md5($_POST['password']));
if($user == '') {
		$errmsg_arr[] = 'Username missing';
		$errflag = true;
	}
if($password == '') {
		$errmsg_arr[] = 'Password missing';
		$errflag = true;
	}     
                
$sql="SELECT * FROM users WHERE email='$user' AND password='$password';";
$result = mysqli_query($con, $sql)or die(mysqli_error($con)) ;
$count = mysqli_num_rows($result);
if($count == 1) {
         header("location: Home.php");
      }
else {
         $error = "Your Login Name or Password is invalid";
      }
      if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
                echo "Incorrect email or password";
		header("location: index.php");
		exit();   
      }