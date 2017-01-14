<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="styles/main.css">
  </head>
  <body>

  <div class="expanded row ctr-widget">
    <div class="large-12 columns no-padding">
      <nav class="menu-right">
        <h3 class="ctr-login">Login</h3>
      </nav>
    </div>
  </div>

  <br>

  <div class="row align-center">
    <div class="large-3 columns">
      <form method="post">
          <?php include 'login.php'; ?>
          <?php
            $url = $_SERVER['PHP_SELF']."/widget.php";
            echo "<a href='$url'>Click</a>"
           ?>
          <input type="text" placeholder="Username" name="user">
          <input type="password" placeholder="Password" name="pass">
          <input class="button" type="submit" name="submit" value="Submit">
      </form>
    </div>
  </div>

  <script src="js/vendor/jquery.js"></script>
  <script src="main.js"></script>
  <script src="js/vendor/foundation.min.js"></script>
  <script>
    $(document).foundation();
  </script>
  </body>
</html>
