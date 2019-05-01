<?php

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$type = $_POST['type'];
$phone_number = $_POST['phone_number'];

if($first_name == '' || $last_name == '' || $email == '' || $type == ''){
	header("Type: index.php?error=Please%20Fill%20In%20All%20Fields");
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact Deleted: </title>
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
</head>
<a href="http://localhost/final/index.php">Create Contact</a>
	<a href="http://localhost/final/delete_contact.php">Delete Contact</a>
	<a href="http://localhost/final/update_contact.php">Update Contact</a>
	<a href="http://localhost/final/get_contact.php">Get Contact</a>
	<a href="http://localhost/final/get_all_contacts.php">Get All Contacts</a>
<body>
<div class="w3-card w3-margin w3-padding">
	<h2>Deleted Contact's Profile</h2>
	<h3><?php echo $first_name; ?> <?php echo $last_name; ?></h3>
	<ul>
        <li>Phone: <?php echo $phone_number; ?></li>
		<li>Email: <?php echo $email; ?></li>
		<li>Type: <?php echo $type; ?></li>
	</ul>
</div>
</body>
</html>