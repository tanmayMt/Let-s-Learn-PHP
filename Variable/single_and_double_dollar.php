<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      $a ="abc";
      echo "\$a= $a<br>";
      $$a=200;  //$$a -> $abc
      echo '$$a= ',$$a;
      echo "<br>\$abc= $abc";

      
    ?>
</body>
</html>