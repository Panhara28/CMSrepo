<?php
  include ('dbuser.php');
  include ('connection.php');
  $conn = Connection($dblocal,$dbuser,$dbpass,$dbn);

  function addWidget($conn){
    $widget = $conn->real_escape_string($_POST['widget']);
    if (empty($widget)) {
      echo "Empty";
    }else{
      $query = "INSERT INTO addwidget (lable) VALUES('".$widget."')";
      $result = $conn->query($query);
      echo "Successfully";
    }
  }
  addWidget($conn);

?>
