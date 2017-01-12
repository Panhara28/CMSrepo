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
        <h3 class="ctr-register">Register</h3>
      </nav>
    </div>
  </div>

  <br>

  <div class="row align-center">
    <div class="large-3 columns">
      <form id="form" action="function.php" method="post">
          <label id="result"></label>
          <input type="text" placeholder="Fullname" name="fullname">
          <input type="text" placeholder="Username" name="username">
          <input type="email" placeholder="Email" name="email">
          <input type="password" placeholder="Password" name="password">
          <button class="button" id="submit">Register</button>
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
