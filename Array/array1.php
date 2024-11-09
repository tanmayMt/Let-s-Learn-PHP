<?php
  $a=array("HI","BI","Tata");
  foreach ($a as $i)
  {
    echo "$i\t";
  }
  echo "<br>var_dump(\$a):  ",var_dump($a);
  echo "<br>print_r(\$a):  ",print_r($a),  "<br>";


  $a1=[21,34,54,76];
  echo implode(",",$a1);
  echo "<br>";


  $a1=[21,34,54,76];
  echo var_dump($a1);
  echo "<br>";


  $a=array("HI"=>1,"BI"=>2,"Tata"=>3);
  foreach ($a as $i=>$j)
    echo "$j\t";
?>