<?php
  //Single quote string
  $name="Avik";
  $s1='Hi $name';
  echo "s1: $s1 <br>";



  $s="Anish";

  //Heredoc syntax
  $str1=<<<HOT
  My name is $s<br>
  I am 21 year old.<br>
  "Tommorm will be better than today"--'Modi'<br>
  This string is created by heredoc syntax<br><br>
  HOT; //end of the string

  echo "\$str1(Heredoc): $str1";
  


  $str2=<<<'NOT'
  My name is $s<br>
  I am 21 year old.<br>
  "Tommorm will be better than today"--'Modi'<br>
  This string is created by heredoc syntax<br><br>
  NOT; //end of the string

  echo "\$str2(Nowdoc): $str2";
   


  echo "<br>";
  $a1=[21,34,54,76];
  $s=implode(",",$a1);
  echo "s: ",$s,"<br>";
  echo gettype($s),"<br>";
  echo gettype($a1),"<br>";
  echo gettype(323),"<br>";
?>