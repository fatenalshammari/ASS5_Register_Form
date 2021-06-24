<!DOCTYPE html>
<html>
<!-- FATEN ALSHAMMARI-->
  <head>
    <meta charset="utf-8">
    <title>Register Page</title>

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
     integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-success">
            <div class="panel-heading">
              <h2>Register Form</h2>
            </div>
            <div class="panel-body">
            <form  action="index.php" method="post">
              <label for="emailreg">Email:</label>
              <input class="form-control" type="email" id="email" name="email" placeholder="Enter your email" required>
              <br>
              <label for="registeruser">Username:</label>
              <input class="form-control" type="text" id="username" name="username" placeholder="Enter your Username" required>
              <br>
              <label for="registerpass">Password:</label>
              <input class="form-control" type="password" id="password" name="password" placeholder="Enter your password" required>
              <br>
              <input type="submit" name="submit-btn" value="Submit" class="btn btn-success btn-black">
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>

  </body>
  <?php

  if(isset($_POST['submit-btn']))
{
    $email =$_POST['email'];
    $username =$_POST['username'];
    $password =$_POST['password'];

    $file= fopen('JSON.txt' , 'a');

    fwrite($file, "Email :");
    fwrite($file, $email ."\n");
    fwrite($file, "Username :");
    fwrite($file, $username ."\n");
    fwrite($file, "Password :");
    fwrite($file, $password ."\n");
    fclose($file);
    

}
  ?>
</html>
