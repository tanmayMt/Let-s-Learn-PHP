<!DOCTYPE html>
<html>
<head>
    <title>Sorted Numbers</title>
</head>
<body>
    <h2>Sorted Numbers</h2>

    <?php
    function selectionSort($arr) {
        $n = count($arr);
        for ($i = 0; $i < $n - 1; $i++) {
            $minIndex = $i;
            for ($j = $i + 1; $j < $n; $j++) {
                if ($arr[$j] < $arr[$minIndex]) {
                    $minIndex = $j;
                }
            }
            if ($minIndex != $i) {
                $temp = $arr[$i];
                $arr[$i] = $arr[$minIndex];
                $arr[$minIndex] = $temp;
            }
        }
        return $arr;
    }

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $numbersInput = $_POST["numbers"];
        $numbers = explode(",", $numbersInput);
        
        $numbers = array_map("intval", array_map("trim", $numbers));
        $sortedNumbers = selectionSort($numbers);

        echo "Original numbers: " . implode(", ", $numbers) . "<br>";
        echo "Sorted numbers: " . implode(", ", $sortedNumbers);
    }
    ?>
</body>
</html>
