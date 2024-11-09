<?php
  echo "<H1><U>__TRAIT__ magic Constant</U></H1></BR></BR>";

  trait created_trait
  {
    function jtp()
    {
      echo "Name of trait: ",__TRAIT__;
    }
  }
  class Company
  {
    use created_trait;
  }
  $a=new Company;
  $a->jtp();
?>