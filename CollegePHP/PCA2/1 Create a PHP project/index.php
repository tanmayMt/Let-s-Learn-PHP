<?php
// Check if the user is logged in
if (isset($_SESSION['username'])) {
  // Redirect to the home page if the user is logged in
  header('Location: home.php');
  exit;
}
?>

<!-- Display the login form -->
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
</head>
<body>
  <h1>Login Page</h1>

  <form action="login.php" method="post">
    <label for="username">Username:</label>
    <input type="text" name="username" id="username"><br><br>

    <label for="password">Password:</label>
    <input type="password" name="password" id="password"><br><br>

    <input type="submit" value="Login">
  </form>
</body>
</html>
