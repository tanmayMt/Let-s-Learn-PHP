<?php
 $sname=$_POST['name']; echo "Student Name: $sname<br>";

 $name=$_FILES['fileup']['name']; echo "File Name: $name<br>";
 $type=$_FILES['fileup']['type']; echo "File Type: $type<br>";
 $size=$_FILES['fileup']['size']; echo "File Size: $size<br>";
 $temp_name=$_FILES['fileup']['tmp_name']; echo "File Tempuray Name: $name<br>";

 $extn=explode(".",$name);
 var_dump($extn);
 echo "File Extension: $extn[1]<br>";

 
  // Validate the file extension
 $allowedExtensions = ['jpg', 'png', 'gif', 'pdf'];
 if (!in_array($extn[1], $allowedExtensions)) {
     die('Invalid file extension.');
 }
 
 $dstn="./doc/".$name;
 if(move_uploaded_file($temp_name,$dstn))
   //Redirect the user to a thank-you page
   header("Location: thank-you.php");
 else
 {
   echo "<h3> File Upload Error!!</h3>";
   header("Location: error.php");
 }
?>