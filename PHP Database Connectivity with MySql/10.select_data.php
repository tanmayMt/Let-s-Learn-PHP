<?php

// Create connection
$conn = mysqli_connect("localhost","root","","tanmay");
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = mysqli_query($conn, $sql);

//If there are more than zero rows returned, the function fetch_assoc() puts all the 
//results into an associative array that we can loop through. The while() loop loops 
//through the result set and outputs the data from the id, firstname and lastname columns.

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result))
  {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
}
else
{
  echo "0 results";
}

mysqli_close($conn);
?>