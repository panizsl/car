<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  
    <title>login-Page</title>
    <link rel="stylesheet" href="Register-css.css">
    <!-- <link href="bootstrap/bootstrap.min.css" rel="stylesheet"> -->
    <!-- <link rel="stylesheet" href="ajax/font-awesome.min.css"> -->
	<link rel="stylesheet" href="font_awesone/all.css">

  </head>
    <body>
      <div class="colour"></div>
      <div class="colour2"></div>
      <div class="container">
      	<header>
      		<h1>
      				<img src="images/brand.png" alt="Antique Art" title="Antique Art">
      		</h1>
      	</header>
      	<h1 class="text-center"title="login">login</h1>
          <form  class="registration-form" method="post" action="login.php">
  		   <?php include('errors.php'); ?>
          <label>
            <span class="label-text">User Name</span>
            <input type="text" name="username">
          </label>
      		<label class="password">
      			<span class="label-text">Password</span>
      			<button class="toggle-visibility" title="toggle password visibility" tabindex="-1">
      				<span class="glyphicon glyphicon-eye-close">
					  <i class="fa fa-eye" aria-hidden="true"></i>
					  </span>
      			</button>
      			<input type="password" name="password">
      		</label>
      		<div class="text-center">
      			<button class="submit" type="submit" name="login_user">Sign Me Up</button>
      		</div>
          <div class="">
            <p>Do not have an account ? <a href="register.php" class="linkButton"> register</a></p>
          </div>
      	</form>
      </div>
  <script src="register.js" charset="utf-8"></script>

  </body>
</html>
