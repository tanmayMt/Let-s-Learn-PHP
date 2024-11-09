<?php
  echo "<H1><U>Magic Constants in PHP</H1></U></BR>";

  //__LINE__
  echo "You are at line Number: ",__LINE__;

  //__FILE__
  echo "</BR>Executed File Name is : ",__FILE__;

  //__DIR__
  echo "</BR>Full directory path of executed file: ",__DIR__;
  /*The path returned by this magic constant is equivalent
   to dirname(__FILE__).
   */
  echo "</BR>dirname(__FILE__): ",dirname(__FILE__);

  //__FUNCTION__
  echo "</BR>";
  function display()
  {
    echo "Function name is: ",__FUNCTION__;
  }
  display();
  echo "</BR>Function name is: ",__FUNCTION__;

  //__CLASS__
  class A
  {
    function get_class()
    {
      echo "</BR>Name of the class:  ",__CLASS__;
    }
  }
  $obj1=new A();
  $obj1->get_class();

?>