<!-- Process Registration  -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user input and sanitize it
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $address = htmlspecialchars($_POST["address"]);
    $phone_number = htmlspecialchars($_POST["phone_number"]);
    $subject = htmlspecialchars($_POST["subject"]);
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    // Insert data into the database (use a database connection)
    // Create connection
    $conn = mysqli_connect("localhost","root","","tanmay");
    // Check connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO users (id, name, email,address,phone_number,subject,password)
                           VALUES ('John', 'john@)";

    if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

mysqli_close($conn);
    // Redirect to login page
    header("Location: login.php");
}
?>

**Step 6: Create Login Page (login.php)**

```html
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form method="POST" action="login_process.php">
        Email: <input type="email" name="email"><br>
        Password: <input type="password" name="password"><br>
        <input type="submit" value="Log In">
    </form>
</body>
</html>
