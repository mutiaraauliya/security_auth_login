<?php
include("connect.php");
session_start();
$username=$_POST['username'];
$password=$_POST['password'];


    //Check username and password from database
    $sql="SELECT * FROM skd1 WHERE user ='$username' and password='$password'";
    $result=mysqli_query($connect,$sql);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);

    //If username and password exist in our database then create a session.
    //Otherwise echo error.

    if(mysqli_num_rows($result) == 1)
    {
      $_SESSION['username'] = $username ; // Initializing Session
      $_SESSION['role'] = $row['role'];
      header("location: ".$row['role'].".php"); // Redirecting To Other Page
    }else
    {
      $error = "Incorrect username or password.";

    }




 ?>
