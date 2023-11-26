<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="sty.css">
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



  <div class="header">
  	<h8>Sign up</h8>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username:</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email:</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password:</label>
  	  <input type="password" name="password_1">
	</div>
	<div class="input-group">
  	  <label>Confirm password:</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Sign up</button>
  	</div>
  	<p>
  		Already have an account? <a href="Sign.php">Sign in</a>
  	</p>
  </form>
</body>
</html>