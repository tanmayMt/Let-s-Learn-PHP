<?php
  echo "<H1><U>Variable Case Sensivity in PHP</U></H1>";

  $num = 10;
  $color = "Red";
  
  echo "Car is $color</BR>";
  echo "Boat is $COLOR</BR>";
  echo "House is $CoLor</BR>";
 /*
  Warning: Undefined variable $COLOR in E:\XAMPP\htdocs\My_PHP\3.variable_case_sensivity.php on line 8
  Boat is
  Warning: Undefined variable $CoLor in E:\XAMPP\htdocs\My_PHP\3.variable_case_sensivity.php on line 9
  House is
 */
?>