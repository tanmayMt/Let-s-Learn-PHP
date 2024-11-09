<?php
  function my_fun()
  {
    static $i = 0;
    $i++;
    echo "\$i = $i</BR>";
  }
  my_fun();
  my_fun();
  my_fun();
  
?>