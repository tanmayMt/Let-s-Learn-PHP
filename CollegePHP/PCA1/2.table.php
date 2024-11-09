<?php
 if (isset($_GET['number']))
 {
    $number = $_GET['number'];
    $i = 1;
    echo "<table border='1'>";
    while ($i <= 10) {
        echo "<tr>";
        echo "<td>$number*$i</td>";
        $mul=$number*$i;
        echo "<td>$mul</td>";
        echo "</tr>";
        $i++;
    }
    echo "</table>";
 }
?>
