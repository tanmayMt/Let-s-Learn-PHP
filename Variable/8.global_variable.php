<?php
  echo "<H1><U> Global variable in PHP </U></H1>";

  $n = 10; //global variable
  echo "\$n = ",$n,"</BR>";
  function display() 
  {
    echo "Inside display() function.</BR>";
    $n1=20;
    echo "\$n1 =",$n1,"</BR>";
    
    global $n;
    echo "\$n(Global variable) = ",$n,"</BR>";
    $n=400;
  }
  display();
  echo "Outside the display() function</BR>";
  echo "\$n = ",$n;

  echo "</BR>var_dump(\$GLOBALS) : ",var_dump($GLOBALS);
  echo "</BR>var_dump(\$GLOBALS['n']): ",var_dump($GLOBALS['n']);
?>