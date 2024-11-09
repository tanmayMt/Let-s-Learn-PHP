<?php
  //Using MYSQLi object oriented procedure
//   $conn=new mysqli("localhost","root","");
//   if ($conn->connect_error)
//   {
//     die("connection failed: ".$conn->connect_error);
//   }
//   echo "Connected Successfully";
//   $conn->close();

  //Using MYSQLi procedural procedure
//   $conn=mysqli_connect("localhost","root","");
  
//   if (!$conn)   //mysqli_connect_error()
//   {
//     die("connection failed: ".$conn->mysqli_connect_error());
//   }
//   echo "Connected Successfully";
//   mysqli_close($conn);


  //Using PDO procedure   PDO means PHP Data Object
  $servername = "localhost";
  $username = "root";
  $password = "";
  try
  {
    $conn=new PDO("mysql:host=$servername;dbname=tanmay",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERMODE_EXCEPTION);
    echo "Connected Successfully";
  }
  catch (PDOException $e)
  {
    echo "Connected failed: ".$e->get_Message();
  }

 //Closing a connection
  // //Using MYSQLi object oriented procedure
  // $conn->close();

  // //Using MYSQLi procedural procedure
  // mysqli_close();

  // //Using PDO procedural procedure
  $conn=null;
?>