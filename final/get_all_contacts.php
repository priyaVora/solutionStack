<?php 
 echo 'Get All Contacts!';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Get A Contact</title>
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

</div>
</body>
</html>