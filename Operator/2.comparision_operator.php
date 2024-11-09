<?php
  $a1 = 30;
  $a2 = 30;

  $b1 = 21;
  $b2 = "21";
  $f1 = 4.6;
  
  $r = $a1 == $a1;
  echo "\$a1 != \$a1: ",var_dump($r),"<BR>";
  // the var_dump() function to display the value of the expression $a1 != $b1.
  
  $r = $b1 == $b2;
  echo "\$b1 == \$b2: ",var_dump($r),"<BR>";

  $r = $b1===$b2;
  echo "\$b1===\$b2: ",var_dump($r),"<BR";
?>