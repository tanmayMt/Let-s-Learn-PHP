<?php
  namespace GeeksforGeeks;
  class Company 
  {
    public function gfg()
    {
      return __NAMESPACE__;
    }
  }

  $obj = new Company();
  echo $obj->gfg();
  echo __NAMESPACE__;
?>