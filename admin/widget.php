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
        <ul class="menu">
          <li><a href="#">Dashboard</a></li>
          <li><a href="widget.php">Widget</a></li>
          <li><a href="#">Setting</a></li>
          <li><a href="../index.php">Mainpage</a></li>
        </ul>
      </nav>
    </div>
  </div>

  <div class="row">
    <div class="large-12 columns">
      <h3 class="ctr-header">Add Widget</h3>
    </div>
  </div>

  <div class="row align-center">
    <div class="large-3 columns">
      <form id="form" action="function.php" method="post">
          <label id="result"></label>
          <input type="text" placeholder="Widget" name="widget">
          <button class="button" id="submit">Add</button>
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
