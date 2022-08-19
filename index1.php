<?php include("config.php")?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=0.1" />
    <title>pezeshk khodro</title>
  </head>
  <body>
    <nav id="navbar">
      <a href="#" class="brand">Pezeshk Khodro</a>
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="#down">About</a></li>
        <li><a href="#">Servises</a></li>
        <li><a href="top">Cantact</a></li>
      </ul>
      <div class="register">
        <ul>
          <li>
            <a class="signup" href="sign up/signup.html" target="_self"
              ><button>Signup</button></a
            >
          </li>
        </ul>
      </div>
      <div class="login">
        <ul>
          <li>
            <a href="login/login.html" target="_blank"
              ><button>Login</button></a
            >
          </li>
        </ul>
      </div>
    </nav>
    <img class="mySlides" src="img/img4.jpg" style="width: 100%" />
    
    <div class="footer">
      <div class="col-1">
        <h3>USEFUL LINKS</h3>
        <a href="#">services</a>
        <a href="#top">Contact</a>
        <a href="#">Shop</a>
        <a href="#">Blog</a>
      </div>
      <div class="col-2"></div>
      <h3>NEWS LETTER</h3>
      <form>
        <br />
      </form>
      <div class="col-3"></div>
      <h3>CONTACT</h3>
      <p><br /></p>
    </div>
    <div>
      <?php


// Attempt select query execution
$sql = "SELECT * FROM crud";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) >
      0){ echo '
      <table class="table table-bordered table-striped">
        '; echo "
        <thead>
          "; echo "
          <tr>
            "; echo "
            <th>#</th>
            "; echo "
            <th>Name</th>
            "; echo "
            <th>Address</th>
            "; echo "
            <th>Salary</th>
            "; echo "
            <th>Action</th>
            "; echo "
          </tr>
          "; echo "
        </thead>
        "; echo "
        <tbody>
          "; while($row = mysqli_fetch_array($result)){ echo "
          <tr>
            "; echo "
            <td>" . $row['id'] . "</td>
            "; echo "
            <td>" . $row['name'] . "</td>
            "; echo "
            <td>" . $row['address'] . "</td>
            "; echo "
            <td>" . $row['salary'] . "</td>
            "; echo "
            <td>
              "; echo '<a
                href="read.php?id='. $row['id'] .'"
                class="mr-3"
                title="View Record"
                data-toggle="tooltip"
                ><span class="fa fa-eye"></span></a
              >'; echo '<a
                href="update.php?id='. $row['id'] .'"
                class="mr-3"
                title="Update Record"
                data-toggle="tooltip"
                ><span class="fa fa-pencil"></span></a
              >'; echo '<a
                href="delete.php?id='. $row['id'] .'"
                title="Delete Record"
                data-toggle="tooltip"
                ><span class="fa fa-trash"></span></a
              >'; echo "
            </td>
            "; echo "
          </tr>
          "; } echo "
        </tbody>
        "; echo "
      </table>
      "; // Free result set mysqli_free_result($result); } else{ echo '
      <div class="alert alert-danger"><em>No records were found.</em></div>
      '; } } else{ echo "Oops! Something went wrong. Please try again later."; }
      // Close connection mysqli_close($link); ?>
    </div>
    <script src="app.js" type="text/javascript"></script>
  </body>
</html>
