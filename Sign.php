<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://unpkg.com/scrollreveal"></script>
        <title>Sign in</title>
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

        <link rel="stylesheet" href="sty.css">
    </head>

    <body>


        <section id="header">  <a href="#">   <img src="scr2.jpg"  class="logo"  alt=""></a>     
        
            <div>
                <ul id = "navbar">
                    <li> <a href ="Indx.html">Home</a></li>
                    <li> <a href ="Reviws.html">Reviews</a></li>
                    <li> <a href ="cart.html">Checkout</a></li>
                    <li> <a class="active" href ="Sign.php">Sign in</a></li>
                </ul>
            </div>
        </section>
 

        <body>
            <div class="header">
                <h8>Sign in</h8>
            </div>
               
            <form method="post" action="Sign.php">
                <?php include('errors.php'); ?>
                <div class="input-group">
                    <label>Username:</label>
                    <input type="text" name="username" >
                </div>
                <div class="input-group">
                    <label>Password:</label>
                    <input type="password" name="password">
                </div>
                <div class="input-group">
                    <button type="submit" class="btn" name="login_user">Log in</button>
                </div>
                <p>
                    Create new account: <a href="register.php"> Sign up</a>
                </p>
            </form>



        <script src="cart.js"></script>
    </body>
</html>