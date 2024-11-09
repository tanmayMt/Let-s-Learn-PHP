<!DOCTYPE html>
<html>
<head>
<title>Chess Board</title>
</head>
<body>
<table border="1">
<?php
for ($i = 0; $i < 8; $i++)
{
  for ($j = 0; $j < 8; $j++)
  {
    if ($i % 2 == $j % 2)
      echo "<td bgcolor=\"black\">";
    else 
      echo "<td bgcolor=\"white\">";
    echo "</td>";
  }
  echo "</tr>";
}
?>
</table>
</body>
</html>
