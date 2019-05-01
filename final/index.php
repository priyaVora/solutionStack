<!DOCTYPE html>
<html>
<head>
	<title>Add Contact</title>
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
</head>
<body>
<div class="w3-card w3-margin w3-padding">
	<?php if(isset($_GET['error'])): ?>
		<div class="w3-panel w3-red">
  			<p><?php echo $_GET['error']; ?></p>
		</div> 
	<?php endif; ?>
	<a href="http://localhost/final/index.php">Create Contact</a>
	<a href="http://localhost/final/delete_contact.php">Delete Contact</a>
	<a href="http://localhost/final/update_contact.php">Update Contact</a>
	<a href="http://localhost/final/get_contact.php">Get Contact</a>
	<a href="http://localhost/final/get_all_contacts.php">Get All Contacts</a>

	<h2>Register Form</h2>
	<form method="POST" action="register.php" class="w3-container">
	<label class="w3-label w3-text-blue">First Name</label>
	<input class="w3-input w3-border" name="first_name" type="text">
	<br>
	<label class="w3-label w3-text-blue">Last Name</label>
	<input class="w3-input w3-border" name="last_name" type="text">
	<br>
    <br>
	<label class="w3-label w3-text-blue">Phone Number</label>
	<input class="w3-input w3-border" name="phone_number" type="text">
	<br>
	<label class="w3-label w3-text-blue">Email</label>
	<input class="w3-input w3-border" name="email" type="text">
	<br>
	<label class="w3-label w3-text-blue">Contact Type</label>
	<select class="w3-input w3-border" name="type">
		<option value="Home">Home</option>
		<option value="Work">Work</option>
		<option value="Other">Other</option>
	</select>
	<br>
	<input class="w3-btn" type="submit" value="Submit">
	</form>
</div>
</body>
</html>