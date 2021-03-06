<?php
$con = mysqli_connect("localhost", "root", "", "store")or die($mysqli_error($con));
session_start();
if (isset($_SESSION['email'])) {
  header('location: products.php');
}

?>
<!DOCTYPE html>
<html>
    <head> <!---- The page has a title Lifestyle Store--> 
        <title>Farmer Store</title> 
        <!---- External css file index.css placed in the folder css is linked--> 
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $(".mainbody, .i").hide();
                $(".mainbody").fadeIn(1000);
                $(".i").fadeIn(3500);
            });
        </script>
        <link rel="stylesheet" href="style1.css" type="text/css">
    </head>
    <body>
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="logo"><a href="Index.php">Farmer Store</a></div>
            <div class="header-link"><a href="contact.php"><span class="glyphicon glyphicon-phone"></span> Contact Us</a></div>
            <div class="header-link"><a href="about.php"><span class="glyphicon glyphicon-tasks"></span> About Us</a></div>
        </div>
        <div class="mainbody">   
        <div class="content1 col-xs-5" >
        <div class="banner">
            <div class="inner-banner-image">
                <div class="banner_content">
                    <h3>For Farmers</h3>
                    <!---<p></p>-->
                    <a href="#" data-toggle="modal" data-target="#login-modal"class="button">Click here</a>
                </div>
            </div>
        </div>
        </div>
        <div class="content2 col-xs-5">
        <div class="banner">
            <div class="inner-banner-image">
                <div class="banner_content">
                    <h3>For Customers</h3>
                    <!---<p></p>-->
                    <a href="#" data-toggle="modal" data-target="#login-modal"class="button">Click here</a>
                </div>
            </div>
        </div>
        </div>
    </div>
        <img src="Images/testimonial.jpg" class="container-fluid i">
        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                    <div class="loginmodal-container">
			<h1 class="h1">Login</h1><br>
                        <div class="login-help">
                            <p>Don't have an account?<a href="signup.php">Register</a></p><br>
			</div>
                        <div class='col-xs-12'>
                            <form method="POST" action="login.php">
                                <div class="form-group">
                                    <input type="text" name="user" placeholder="Username" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" placeholder="Password" class="form-control" pattern="">
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="login" class="login loginmodal-submit" value="Login" class="form-control">
                                </div>
                            </form>
                             <div class="login-help">
				<a href="#">Forgot Password</a>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        <footer>
            <div class="container-fluid">
                <table>
                    <tbody>
                        <tr>
                            <th class="col-xs-offset-1 col-xs-5"><h4>Information</h4></th>
                            <th class="col-xs-offset-1 col-xs-5"><h4>My Account</h4></th>
                            <th class="col-xs-offset-1 col-xs-2"><h4>Contact Us</h4></th>
                        </tr>
                        <tr>
                            <td class="col-xs-offset-1 col-xs-3"><a href="about.php">About Us</a></td>
                            <td class="col-xs-offset-1 col-xs-3"><a href="#" data-toggle="modal" data-target="#login-modal">Login</a></td>
                            <td class="col-xs-offset-1 col-xs-3">Contact Us:+91-123-000000</td>
                        </tr>
                        <tr>
                            <td class="col-xs-offset-1 col-xs-3"><a href="contact.php">Contact Us</a></td>
                            <td class="col-xs-offset-1 col-xs-3"><a href="signup.php">Sign Up</a></td>
                            <td class="col-xs-offset-1 col-xs-3"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </footer>
    </body>
</html>    