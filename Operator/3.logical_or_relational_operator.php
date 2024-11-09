<?php
  $a=20;
  $b=30;
  echo "\$a=$a<br>\$b=$b<br><br>";



  if ($a=="20" && $b==30)
  {
    echo ("\$a==20 && \$b==30: "."success<br>");
  }

  if ($a==50 && $b==30)
  {
    echo ("\$a==50 && \$b==30: "."sucdcess<br>");
  } //flase

  if ($a==50 || $b==30)
  {
    echo ("\$a==50 || \$b==30: "."success<br>");
  } //true

  if ($a==50 or $b==30)
  {
    echo ("\$a==50 or \$b==30: "."success<br>");
  }
  
  if ($a!=90)
  {
    echo ("\$a!=90: "."success<br>");
  }
?>