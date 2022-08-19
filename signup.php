<?php include('server.php') ?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style2.css" />
    <title>Sign Up</title>
  </head>
  <body>
    <div class="container">
      <form class="form" id="form" action="/" method="post">
        <h1>Sign Up</h1>
        <div class="input-control">
          <?php include('error.php');?>
          <label for="username">Username</label>
          <input id="username" name="username" type="text" />
        </div>
        <div class="input-control">
        <?php include('error.php');?>
          <label for="email">Email</label>
          <input id="email" name="username" type="text" />
          <div class="error"></div>
        </div>

        <div class="input-control">
        <?php include('error.php');?>
          <label for="password">Password</label>
          <input id="password_1" name="password" type="password" />
        </div>

        <div class="input-control">
        <?php include('error.php');?>
          <label for="password">Password again</label>
          <input id="password_2" name="password" type="password" />
        </div>
        <button class="button" type="submit">Sign Up</button>
      </form>
    </div>
  </body>
</html>
