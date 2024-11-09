
<?php
$text = "Hello World!";
$position = strpos($text, "dfdsWorld");
echo var_dump($position);
if ($position == false) {
    echo "The string 'World' was not found";
  
} else {
    echo "The string 'World' was found at position $position";
}
?>