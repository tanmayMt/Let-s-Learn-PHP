<?php
  $a=array("HI"=>1,"BI"=>2,"Tata"=>3);
  foreach ($a as $i=>$j)
  {
    echo "$j\t";
  }

  echo "<br>";
  $a1=[21,34,54,76];
  echo(implode(",",$a1));
?>