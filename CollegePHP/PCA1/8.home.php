<?php
// Check if the user is logged in
if (!isset($_SESSION['loggedin'])) {
    header("Location: index.php");
    exit;
}

// Get the user information
$username = $_SESSION['username'];

// Display the home page
echo "<h1>Welcome, $username</h1>";
?>