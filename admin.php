<!DOCTYPE html>
<?php
session_start();

include_once('connect.php');

if (empty($_SESSION['username'])) {

  header('location:login.php');
}
else
  if($_SESSION['role'] != 'admin'){
    header('location:login.php');
  }
echo $_SESSION['role'];
?>

<html>
<head>
</head>
<body>
  <h1>ini admin</h1>
  <a href="logout.php">log out</a>
</body>
</html>
