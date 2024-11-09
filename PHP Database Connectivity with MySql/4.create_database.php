<?php
 // Using MYSQLi procedural procedure
  $conn=mysqli_connect("localhost","root","",);
  if(!$conn)
    die("Connection Unsuccessfull!!!");
  else
    echo("<h1>Connection Successfull</h1><br>");

  $create_db = "create database newDB";
  $delete_db="drop database newDB";

  if(mysqli_query($conn,$create_db))    //  if(mysqli_query($conn,$delete_db))
    echo "<h2>Database is created successfully<h2><br>";
  else
   echo "Error creating database: ".mysqli_error();
  
  mysqli_close($conn);
?>