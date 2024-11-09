<?php
  echo date('d-m-y h:i:s'),       '<br>';
  
  echo date('d-m-y',time()-60*60*24),      '<br>';
  echo time(),      '<br>';
  echo date('F-d-y h:i:s'), '<br>';

  $a=date('d-m-y h:i:s');
  $date1=date_parse($a);

  echo var_dump($date1);
  echo implode(',',$date1);
?>