<!DOCTYPE html>
<html>
    <head> <!---- The page has a title Lifestyle Store--> 
        <title>Lifestyle Store</title> 
        <!---- External css file index.css placed in the folder css is linked--> 
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="index.css" type="text/css">
    </head>
    <body>
        <div class="navbar navbar-default navbar-fixed-top">
            
            <div class="logo"><a href="index.php">E-Store</a></div>
            <div class="header-link"><a href="contact.php"><span class="glyphicon glyphicon-phone"></span> Contact Us</a></div>
            <div class="header-link"><a href="about.php"><span class="glyphicon glyphicon-tasks"></span> About Us</a></div>
            <div class="header-link"><a href="#" data-toggle="modal" data-target="#login-modal"><span class="glyphicon glyphicon-log-in"></span> Login</a></div>
            <div class="header-link"><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></div>
        </div>
        <div class="content">
        <div class="banner">
            <div class="inner-banner-image">
                <div class="banner_content">
                    <h1>We sell Mobiles</h1>
                    <p>Flat 40% OFF on certain brands</p>
                    <a href="" class="button">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
        <div class="pad">
        <div class="row">
                <div class="panel panel-primary col-xs-offset-1 col-md-4 col-sm-6 pan">
                    <div class="panel-heading">#1</div>
                        <div class="panel-body">
                            <img src="Images/oppoA37.jpg" class="var"/>
                            <p></p>
                            <button type="submit" class="btn btn-primary btn-block">Order now!</button>
                        </div>
                    </div>
            <div class="panel panel-primary col-md-4 col-sm-6 pan">
                    <div class="panel-heading">#2</div>
                        <div class="panel-body">
                            <img src="Images/G6-350.jpg" class="var"/>
                            <p></p>
                            <button type="submit" class="btn btn-primary btn-block">Order now!</button>
                        </div>
                    </div>
            <div class="panel panel-primary col-md-4 col-sm-6 pan">
                    <div class="panel-heading">#3</div>
                        <div class="panel-body">
                            <img src="Images/Mi.jpg" class="var"/>
                            <p></p>
                            <button type="submit" class="btn btn-primary btn-block">Order now!</button>
                        </div>
                </div>
        </div>
        <div class="row">
                <div class="panel panel-primary col-xs-offset-1 col-md-4 col-sm-6 pan">
                    <div class="panel-heading">#4</div>
                        <div class="panel-body">
                            <img src="Images/S7.png" class="var"/>
                            <p></p>
                            <button type="submit" class="btn btn-primary btn-block">Order now!</button>
                        </div>
                    </div>
            <div class="panel panel-primary col-md-4 col-sm-6 pan">
                    <div class="panel-heading">#5</div>
                        <div class="panel-body">
                            <img src="Images/iPhone7Plus.png" class="var"/>
                            <p></p>
                            <button type="submit" class="btn btn-primary btn-block">Order now!</button>
                        </div>
                    </div>
            <div class="panel panel-primary col-md-4 col-sm-6 pan">
                    <div class="panel-heading">#6</div>
                        <div class="panel-body">
                            <img src="Images/nova-gold.jpg" class="var"/>
                            <p></p>
                            <button type="submit" class="btn btn-primary btn-block">Order now!</button>
                        </div>
                </div>
            </div>
         
        </div>  
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