<?php
  include ('dbuser.php');
  include ('connection.php');
  $conn = Connection($dblocal,$dbuser,$dbpass,$dbn);

  function Register($conn){
    $fullname = $conn->real_escape_string($_POST['fullname']);
    $username = $conn->real_escape_string($_POST['username']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']);

    if (empty($_POST['fullname']&&$_POST['username']&&$_POST['email']&&$_POST['password'])) {
      echo "Empty";
    }else{
      $query = "INSERT INTO register (fullname,username,email,password)
      VALUES('".$fullname."','".$username."','".$email."','".$password."')";
      $result = $conn->query($query);
      echo "Register Sucessfully";
    }
  }

  Register($conn);


?>
