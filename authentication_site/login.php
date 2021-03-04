<?php

	// get session variables
	session_start();
	$sess_uname = $_SESSION['Uname'];
	$sess_email = $_SESSION['email'];
	$sess_pwd = $_SESSION['pwd'];

	if(isset($_POST['submit'])) {
		// get login variables
		$email = htmlspecialchars($_POST['email']);
		$pwd = htmlspecialchars($_POST['pwd']);

		if($sess_uname == $email OR $sess_email == $email) {
			if($sess_pwd == $pwd) {
				header('Location: home.php');
			}
		} else {
			echo 'Incorrect details';
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
</head>
<body>
	<p>Fill in your details</p>
	<form method = 'POST' action="<?php echo $_SERVER['PHP_SELF'] ?>">
		<input type="text" name="email" placeholder="Enter Your email or username">
		<br>
		<br>
		<input type="password" name="pwd" placeholder="Enter Your Password">
		<br>
		<br>
		<input type="submit" name="submit" value="Submit">
		<br>
</form>
	<a href="index.php">Sign In</a>
</body>
</html>