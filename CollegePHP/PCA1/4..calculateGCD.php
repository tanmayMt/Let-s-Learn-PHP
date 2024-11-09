<!DOCTYPE html>
<html>
<head>
<title>GCD Calculator</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="num1" placeholder="Enter first number">
        <input type="text" name="num2" placeholder="Enter second number">
        <input type="submit" value="Calculate GCD">
    </form>
    <?php

     $num1 = $_POST['num1'];
     $num2 = $_POST['num2'];

     $gcd = gcd($num1, $num2);
     echo "The GCD of $num1 and $num2 is: $gcd";
     function gcd($x, $y)
     {
        if ($y == 0)
            return $x;
        else
        return gcd($y, $x % $y);
     }
    ?>
</body>
</html>

