<?php  

  
$conn =  mysqli_connect("localhost","root","","tanmay");
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  
echo 'Connected successfully<br/>';  
  
$id=3;  
$firstname="Arohi";
$lastname="Sen";
$sql = "UPDATE MyGuests set firstname=\"$firstname\", lastname=\"$lastname\" where id=$id";  
if(mysqli_query($conn, $sql)){
 echo "Record of id $id is updated successfully ";
}
else
{  
echo "Could not update record: ". mysqli_error($conn);  
}
mysqli_close($conn);
?>