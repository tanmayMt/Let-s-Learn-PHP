<!DOCTYPE html>
<html>
<head>
    <title>Prime Number Finder Result</title>
</head>
<body>
    <h2>Prime Number Finder Result</h2>

    <?php
    function isPrime($num) {
        if ($num <= 1) {
            return false;
        }
        for ($i = 2; $i <= sqrt($num); $i++) {
            if ($num % $i == 0) {
                return false;
            }
        }
        return true;
    }

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $start = $_POST["start"];
        $end = $_POST["end"];

        echo "Prime numbers between $start and $end: <br>";

        for ($i = $start; $i <= $end; $i++) {
            if (isPrime($i)) {
                echo "$i, ";
            }
        }
    }
    ?>
</body>
</html>
