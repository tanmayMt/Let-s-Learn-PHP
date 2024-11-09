<?php
 // Using MYSQLi procedural procedure
  $conn=mysqli_connect("localhost","root","","tanmay") or
    die("Connection Unsuccessfull");
  echo("Connection Successfull");
  
  mysqli_close($conn);
?>