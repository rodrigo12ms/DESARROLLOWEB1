<?php

require_once 'source/session.php';
require_once 'source/db_connect.php';

if(isset($_POST['login-btn'])) {

  $user = $_POST['user-name'];
  $password = $_POST['user-pass'];

 
    $SQLQuery = "SELECT * FROM users WHERE username = :username";
    $statement = $conn->prepare($SQLQuery);
    $statement->execute(array(':username' => $user));

    while($row = $statement->fetch()) {
      $id = $row['id'];
      $hashed_password = $row['password'];
      $username = $row['username'];

      if(password_verify($password, $hashed_password)) {
        $_SESSION['id'] = $id;
        $_SESSION['username'] = $username;
        header('location: index.php');
      }else {
        header('location: index.html');
      }
    }
  
  

}


?>