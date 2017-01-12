<?php
include ('dbuser.php');
include ('connection.php');
$conn = Connection($dblocal,$dbuser,$dbpass,$dbn);
function Login($conn){
  $username = $conn->real_escape_string($_POST['user']);
  $password = $conn->real_escape_string($_POST['pass']);
  if (isset($_POST['submit'])) {
    if (empty($username&&$password)) {
      echo "Empty";
    }else{
      $query = "SELECT * FROM register";
      $result = mysqli_query($conn,$query);
      $user = mysqli_fetch_assoc($result);
      if ($_POST['user']==$user['username']) {
        header('Location: widget.php');
      }else{
        echo "Username or Password is invalid";
      }
    }
  }
}
Login($conn);
 ?>
