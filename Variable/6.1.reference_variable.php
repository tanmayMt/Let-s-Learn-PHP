<?php
  echo "<H1><U>Reference variables($$) in PHP</U><H2></BR>";

  $c="India";
  $$c="New Delhi";  //$India="New Delhi"
  echo "Capital of ".$c." is ".$$c."</BR>";
  echo "Capital of ".$c." is ".$India;
?>