<?php
// Get the input from the POST request
$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$address = $_POST['address'];
$percentage = $_POST['percentage'];
$skill_sets = $_POST['skill_sets'];

// Create the CV
$cv = "<table>
<tr>
<th>Name</th>
<td>$name</td>
</tr>
<tr>
<th>Email</th>
<td>$email</td>
</tr>
<tr>
<th>Contact No.</th>
<td>$contact</td>
</tr>
<tr>
<th>Address</th>
<td>$address</td>
</tr>
<tr>
<th>Percentage of Marks</th>
<td>$percentage</td>
</tr>
<tr>
<th>Skill Sets</th>
<td>$skill_sets</td>
</tr>
</table>";

// Display the CV
echo $cv;
?>
