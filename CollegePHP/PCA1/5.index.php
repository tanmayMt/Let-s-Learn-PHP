<!DOCTYPE html>
<html>
<head>
    <title>Prime Number Finder</title>
</head>
<body>
    <h2>Prime Number Finder</h2>
    <form action="5.find_primes.php" method="post">
        Select the start number:
        <select name="start">
            <?php
            for ($i = 1; $i <= 100; $i++) {
                echo "<option value=\"$i\">$i</option>";
            }
            ?>
        </select>
        <br>
        Select the end number:
        <select name="end">
            <?php
            for ($i = 1; $i <= 100; $i++) {
                echo "<option value=\"$i\">$i</option>";
            }
            ?>
        </select>
        <br>
        <input type="submit" value="Find Prime Numbers">
    </form>
</body>
</html>
