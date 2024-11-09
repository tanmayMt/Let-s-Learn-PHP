<?php

// Check if the form was submitted
if (isset($_FILES['fileup'])) {

    // Get the uploaded file
    $file = $_FILES['fileup'];

    // Get the file extension
    $extension = pathinfo($file['name'], PATHINFO_EXTENSION);

    // Validate the file extension
    $allowedExtensions = ['jpg', 'png', 'gif', 'pdf'];
    if (!in_array($extension, $allowedExtensions)) {
        die('Invalid file extension.');
    }

    // Upload the file to the server
    $dstn="./doc/".$file['name'];
    if (move_uploaded_file($file['tmp_name'], $dstn))
         //Redirect the user to a thank-you page
        header("Location: thank-you.php");
   else
        header("Location: error.php");
}

?>