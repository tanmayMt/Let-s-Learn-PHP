<?php
  echo "<H1><U>__METHOD__ magic constant in PHP</U></H1></BR>";

  class A
  {
    public function __construct()
    {
      echo __METHOD__,"</BR>";
    }
    public function my_method()
    {
      echo __METHOD__;
    }
  }
  $obj1 = new A();
  $obj1->my_method();
?>