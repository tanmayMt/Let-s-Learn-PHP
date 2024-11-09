<?php
  $s="adc";
  echo "$s<br>";
  $l=strlen($s);
  for ($i=0; $i < $l; $i++) { 
    $c=$s[$i];
    if ($c== 'a' || $c== 'e' || $c== 'i' || $c== 'o' || $c== 'u' ) {
        echo" $c is vowel<br>";
    }
    else
    {
        echo" $c is not vowel<br>";
    }
  }

?>