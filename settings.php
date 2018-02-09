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
            <div class="header-link"><a href="logout.php"><span class="glyphicon glyphicon-logout"></span>Logout</a></div>
            <div class="header-link"><a href="settings.php"><span class="glyphicon glyphicon-user"></span> Settings</a></div>
            <div class="header-link"><a href="cart.php" ><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></div>
        </div>
        <div class="container pa">
            <form class="fo" method="POST" action="update.php">
                <div class="col-xs-offset-4 col-xs-4">
                <h3>Change Password</h3>
                <div class="form-group">
                    <input type="password" placeholder="Old Password" name="password" class="form-control">
                </div>
                <div class="form-group">
                    <input type="password" placeholder="New Password" name="npassword" class="form-control">
                </div>
                <div class="form-group">
                    <input type="password" placeholder="Re-type Password" name="rpassword" class="form-control"><br>
                </div>.
                <button type="submit" class="btn btn-primary" onclick="">Change</button>
                </div>
            </form>
        </div>
    </body>    
