<?php
  $a=array("HI","BI","Tata");
  foreach ($a as $i)
  {
    echo "$i\t";
  }
  echo "<br>var_dump(\$a):  ",var_dump($a);
  echo "<br>print_r(\$a):  ",print_r($a),  "<br>";





  $student=array("Honi"=>1,"Boni"=>2,"Tata"=>3);
  foreach ($student as $age)
    echo "$age\t";
    echo "<br>";

    $student=array("HI"=>21,"BI"=>27,"Tata"=>23);
    foreach ($student as $name=>$age)
      echo "$age\t";

      echo "<br>";

      $student=array("HI"=>21,"BI"=>27,"Tata"=>23);
      foreach ($student as $name=>$age)
        echo "$name\t";
?>