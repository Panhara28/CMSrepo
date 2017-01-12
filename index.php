<?php include 'function.php'; ?>
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
          <?php DynamicNav($conn); ?>
        </ul>
      </nav>
    </div>
  </div>


  <script src="js/vendor/jquery.js"></script>
  <script src="js/vendor/foundation.min.js"></script>
  <script src="js/main.js" type="text/javascript"></script>
  <script>
    $(document).foundation();
  </script>
  </body>
</html>
