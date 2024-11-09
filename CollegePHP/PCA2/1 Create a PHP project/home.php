<?php
// Start the session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
  // Redirect to the login page if the user is not logged in
  header('Location: index.php');
  exit;
}

// Get the user's username from the session
$username = $_SESSION['username'];

// Display the user's information
echo '<h1>Welcome, ' . $username . '</h1>';

// Display a menu with a link for logout
echo '<a href="logout.php">Logout</a>';
?>