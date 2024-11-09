<?php

$array = ["one" => 1, "two" => 2, "three" => 3];

while ($element = each($array)) {
    echo $element['key'] . ' => ' . $element['value'] . '<br>';
}
?>