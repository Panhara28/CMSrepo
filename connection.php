<?php
  function Connection($dblocalhost,$dbusername,$dbpassword,$dbname){
    $connection = mysqli_connect($dblocalhost,$dbusername,$dbpassword,$dbname);
    return $connection;
  }
?>
