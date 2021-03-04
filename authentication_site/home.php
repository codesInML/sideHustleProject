<?php 

	session_start();
	$name = $_SESSION['name'];
	$uname = $_SESSION['Uname'];
	$email = $_SESSION['email'];

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
	<h1>Welcome <?php echo $name ?></h1>
	<p><?php echo $uname ?> has successfully registered with the email <?php echo $email ?></p>

	<a href="index.php">Log Out</a>
</body>
</html>