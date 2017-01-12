<?php
  include ('dbuser.php');
  include ('connection.php');
  $conn = Connection($dblocal,$dbuser,$dbpass,$dbn);

  function DynamicNav($conn){
    $query = "SELECT * FROM addwidget";
    $result = mysqli_query($conn,$query);
    while($nav = mysqli_fetch_assoc($result)){
      echo "<li><a>".$nav['lable']."</a></li>";
    }
  }


?>
