<?php
  echo "<H1><U>Reference variables($$) in PHP</U><H2></BR>";

  $c="India";
  $$c="New Delhi"; //$India="New Delhi"
  echo "\$c : $c</BR>";
  echo "$\$c : ",$$c,"</BR>";
  echo "$\$c : ",$India,"</BR>";
?>