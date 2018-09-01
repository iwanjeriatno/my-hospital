<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../view/dist/img/hospital-icon.png">

    <title>Login | Sistem Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="../view/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../view/dist/css/signin.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">

      <form class="form-signin" action="../controller/proses-login.php" method="post">
        <h2 class="form-signin-heading">Silahkan Login!</h2>
        <label for="inputUser" class="sr-only">Username</label>
        <input type="text" name="user" id="inputUser" class="form-control" placeholder="Username" required autofocus autocomplete="off">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="pass" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Login</button>
      </form>

    </div> <!-- /container -->


    <!-- jQuery first, then Bootstrap JS. -->
    <script src="../view/dist/js/jquery.min.js"></script>
    <script src="../view/dist/js/bootstrap.min.js"></script>
  </body>
</html>
