<?php
  echo "COOKIES['username']: ".$_COOKIE['username'];
  if(isset($_COOKIE['username'])) 
  {  
    echo "COOKIES['username']: ".$_COOKIE['username'];  
  }
  else 
  {  
    echo "Sorry, cookie is not found!";
  }  
?>