<?php
// Start the session
session_start();

// Connect to the database
$db = mysqli_connect("localhost","root","","tanmay");

// Check if the username and password are correct
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysqli_query($db, $sql);

if ($result->num_rows > 0) {
  // Store the user's username in the session
  $_SESSION['username'] = $username;

  // Redirect to the home page
  header('Location: home.php');
  exit;
} else {
  // Display an error message
  echo 'Invalid username or password';
}
?>
