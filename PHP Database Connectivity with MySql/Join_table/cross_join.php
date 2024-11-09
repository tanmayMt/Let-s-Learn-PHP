<?php
  $conn=mysqli_connect("localhost","root","","tanmay");

  if($conn)
    echo "Connection Successfull";
  else
    die("Connection Unsuccessfull!!!");

  $sql="select * from WORKER A CROSS JOIN WORKER B";
  $result=mysqli_query($conn,$sql);

  if (mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result))
    {
      print_r($row);
      echo "<br>";
    }
  }
  mysqli_close($conn);

?>