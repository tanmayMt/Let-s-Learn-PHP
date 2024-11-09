<?php
  $s1="Hello World";
  //   012345678910
  echo "strpos(\$s1,\"World\"): ",strpos($s1,"World"),    "<br>";
  echo "strpos(\$s1,\"No\"): ",strpos($s1,"No"),          "<br>";

  var_dump(strpos($s1,"No"));
  $f=var_dump(strpos($s1,"No"));
  echo "<br>\$f: $f<br>";


  //trim
  //trim() function: This function allows us to remove whitespaces 
  // or strings from both sides of a string. 
  $s1="Hello World";
  echo trim($s1),"<br>";
  echo trim("Hello World!", "Hed!"),"<BR>";

  //explode()  String to array converter
  $s1="Raj Joy Sam Mahi";
  $a=explode(" ",$s1);
  var_dump($a);
  echo gettype($a)."<br>";

  //implode()   Array to string converter
  $new=implode($a);
  echo gettype($new),"<br>";
  echo "\$new: $new<br>";

  $new=implode(" ",$a);
  echo "\$new: $new<br>";

  //print(): It is used to write a formatted string.
  $name="Anish";
  $age=21;
  printf("<br>Myself %s.I am %d year old.<br>",$name,$age);


$num1 = 123456789;
$num2 = -123456789;
$char = 50; // The ASCII Character 50 is 2

// Note: The format value "%%" returns a percent sign
printf("%%b = %b <br>",$num1); // Binary number
printf("%%c = %c <br>",$char); // The ASCII Character
printf("%%d = %d <br>",$num1); // Signed decimal number
printf("%%d = %d <br>",$num2); // Signed decimal number
printf("%%e = %e <br>",$num1); // Scientific notation (lowercase)
printf("%%E = %E <br>",$num1); // Scientific notation (uppercase)
printf("%%u = %u <br>",$num1); // Unsigned decimal number (positive)
printf("%%u = %u <br>",$num2); // Unsigned decimal number (negative)
printf("%%f = %f <br>",$num1); // Floating-point number (local settings aware)
printf("%%F = %F <br>",$num1); // Floating-point number (not local settings aware)
printf("%%g = %g <br>",$num1); // Shorter of %e and %f
printf("%%G = %G <br>",$num1); // Shorter of %E and %f
printf("%%o = %o <br>",$num1); // Octal number
printf("%%s = %s <br>",$num1); // String
printf("%%x = %x <br>",$num1); // Hexadecimal number (lowercase)
printf("%%X = %X <br>",$num1); // Hexadecimal number (uppercase)
printf("%%+d = %+d <br>",$num1); // Sign specifier (positive)
printf("%%+d = %+d <br>",$num2); // Sign specifier (negative)

?>