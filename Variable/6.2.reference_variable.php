<?php
  echo "<H1><U>Reference variables($$) in PHP</U></H1></BR>";
  echo "<H3>$(\$variable)</H3></BR>";

  $letter='L';
  $$letter='Lione';
  $$$letter='Lione is the King';
  echo "\$letter: ",$letter."</BR>";
  echo "$\$letter: ",$$letter."</BR>";
  echo "$\$\$letter: ",$$$letter."</BR></BR>";

  echo "\$l: ",$L."</BR>";
  echo "\$lione: ",$Lione."</BR>";
?>