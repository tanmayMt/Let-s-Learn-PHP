<?php
 // Using MYSQLi procedural procedure
  $conn=mysqli_connect("localhost","root","","tanmay"); //tanmay -> name of the database
  
  if (!$conn)   //mysqli_connect_error()
  {
    die("connection failed: ".$conn->mysqli_connect_error());
  }
  echo "Connected Successfully";
  mysqli_close($conn);
?>