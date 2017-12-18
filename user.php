<?php
session_start();

include_once('connect.php');

if (empty($_SESSION['username'])) {

  header('location:login.php');
}

  if($_SESSION['role'] != 'user'){
    header('location:login.php');
  }
echo $_SESSION['role'];
?>

<html>
<head>
</head>
<body>
  <h1>ini user</h1>
  <a href="logout.php">log out</a>
</body>
</html>
