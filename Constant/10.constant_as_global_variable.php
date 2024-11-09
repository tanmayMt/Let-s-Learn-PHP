<?php
  echo "<H1><U>Constant as Global variable</H1></U></BR>";
  define("AGE",18);
  function display()
  {
    echo "AGE: ",AGE;
  }
  display();
?>