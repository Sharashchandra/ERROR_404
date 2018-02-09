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
        <div class="container ta">
            <table id="table" class="table">
                <tbody>
                    <tr>
                        <th>Item Number</th>
                        <th>Item Name</th>
                        <th>Price</th>
                        <th></th>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Total</td>
                        <td>Rs 0/-</td>
                        <td><button type="submit" class="btn btn-primary btn-block"><a href="success.php" class="ca">Confirm Order</a></button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>    
