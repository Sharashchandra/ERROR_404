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
            <div class="logo"><a href="home.php">E-Store</a></div>
            <div class="header-link"><a href="logout.php"><span class="glyphicon glyphicon-logout"></span>Logout</a></div>
            <div class="header-link"><a href="settings.php"><span class="glyphicon glyphicon-user"></span> Settings</a></div>
            <div class="header-link"><a href="cart.php" ><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></div>
        </div>
        <div class="pade">
        <div class="row">
                <div class="panel panel-primary col-xs-offset-1 col-md-4 col-sm-6 pan">
                    <div class="panel-heading">#1</div>
                        <div class="panel-body">
                            <img src="Images/oppoA37.jpg" class="var"/>
                            <p></p>
                            <button type="submit" class="btn btn-primary btn-block">Order now!</button>
                        </div>
                    </div>
            <div class="panel panel-primary col-md-4 col-sm-6  pan">
                    <div class="panel-heading">#2</div>
                        <div class="panel-body">
                            <img src="Images/G6-350.jpg" class="var"/>
                            <p></p>
                            <button type="submit" class="btn btn-primary btn-block">Order now!</button>
                        </div>
                    </div>
            <div class="panel panel-primary col-md-4 col-sm-6  pan">
                    <div class="panel-heading">#3</div>
                        <div class="panel-body">
                            <img src="Images/Mi.jpg" class="var"/>
                            <p></p>
                            <button type="submit" class="btn btn-primary btn-block">Order now!</button>
                        </div>
                </div>
        </div>
        <div class="row">
                <div class="panel panel-primary col-xs-offset-1 col-md-4 col-sm-6  pan">
                    <div class="panel-heading">#4</div>
                        <div class="panel-body">
                            <img src="Images/S7.png" class="var"/>
                            <p></p>
                            <button type="submit" class="btn btn-primary btn-block">Order now!</button>
                        </div>
                    </div>
            <div class="panel panel-primary col-md-4 col-sm-6  pan">
                    <div class="panel-heading">#5</div>
                        <div class="panel-body">
                            <img src="Images/iPhone7Plus.png" class="var"/>
                            <p></p>
                            <button type="submit" class="btn btn-primary btn-block">Order now!</button>
                        </div>
                    </div>
            <div class="panel panel-primary col-md-4 col-sm-6  pan">
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
			<p>Don't have an account?<a href="#">Register</a></p><br>
			</div>
                        <div class='col-xs-12'>
                            <form>
                                <div class="form-group">
                                    <input type="text" name="user" placeholder="Username" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="pass" placeholder="Password" class="form-control">
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
    </body>

