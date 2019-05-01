<!-- <?php
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
	<title>Contact Added: </title>
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
</head>
<body>
<div class="w3-card w3-margin w3-padding">
	<h2>Contact Profile</h2>
	<h3><?php echo $first_name; ?> <?php echo $last_name; ?></h3>
	<ul>
        <li>Phone: <?php echo $phone_number; ?></li>
		<li>Email: <?php echo $email; ?></li>
		<li>Type: <?php echo $type; ?></li>
	</ul>
</div>
</body>
</html> -->


<?php
	include_once './connection.php';
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$email = $_POST['email'];
	$type = $_POST['type'];
	$phone_number = $_POST['phone_number'];

$connection = new connection();
$con = $connection->get_connection();
//$result = $con->query("CREATE TABLE contacts_table(id INT NOT NULL AUTO_INCREMENT, firstname varchar(255), lastname varchar(255))");
// var_dump($result);


$sql = "INSERT INTO contacts_table(first_name, last_name, number, email, type) VALUES('$first_name','$last_name', '$phone_number',  '$email', '$type')";
if(mysqli_query($con, $sql)){
	echo 'success';
}
#$insert = $con->query("INSERT INTO contacts VALUES('', $first_name,$last_name)");


if($first_name == '' || $last_name == '' || $email == '' || $type == ''){
	header("Type: index.php?error=Please%20Fill%20In%20All%20Fields");
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact Added: </title>
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
</head>
<a href="http://localhost/final/index.php">Create Contact</a>
	<a href="http://localhost/final/delete_contact.php">Delete Contact</a>
	<a href="http://localhost/final/update_contact.php">Update Contact</a>
	<a href="http://localhost/final/get_contact.php">Get Contact</a>
	<a href="http://localhost/final/get_all_contacts.php">Get Contact</a>
<body>
<div class="w3-card w3-margin w3-padding">
	<h2>Contact Profile</h2>
	<h3><?php echo $first_name; ?> <?php echo $last_name; ?></h3>
	<ul>
        <li>Phone: <?php echo $phone_number; ?></li>
		<li>Email: <?php echo $email; ?></li>
		<li>Type: <?php echo $type; ?></li>
	</ul>
</div>
</body>
</html>