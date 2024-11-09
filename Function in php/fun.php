<?php
 
// pass by value
function valGeek($num) {
    $num += 10;
    return $num;
}
 
// pass by reference
function refGeek(&$num) {
    $num += 10;
    return $num;
}
 
$n = 10;
$a=valGeek($n);
echo "The original value is still $n <br>";
 
$b=refGeek($n);
echo "The original value changes to $n";
 
?>
