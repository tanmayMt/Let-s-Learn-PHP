<?php
// Connect to the database
$conn = mysqli_connect("localhost", "root", "", "my_database");

// Check if the user is logged in
if (isset($_SESSION['loggedin'])) {
  header("Location: home.php");
  exit;
}

// Get the username and password from the form
$username = $_POST['username'];
$password = $_POST['password'];

// Check if the username and password are valid
$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
  // The user is logged in
  $_SESSION['loggedin'] = true;
  $_SESSION['username'] = $username;
  header("Location: home.php");
  exit;
}
else
{
  // The username and password are not valid
  echo "Invalid username or password.";
}

mysqli_close($conn);
?>
