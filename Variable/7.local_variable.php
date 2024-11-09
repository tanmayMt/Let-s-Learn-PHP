<?php
  echo "<H1><U> Local variable in PHP </U></H1>";
  $n=10;
  function my_fun()
  {
    $n=20;
    echo "Inside my_fun(): \$n = $n</BR>";
  }
  my_fun();
  echo "Outside the function: \$n = $n</BR>";
?>