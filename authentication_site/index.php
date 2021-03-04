<?php
	
	// check for submit
	if(isset($_POST['submit'])){
		// start session
		session_start();
		// Get the form data
		$_SESSION['name'] = htmlspecialchars($_POST['name']);
		$_SESSION['email'] = htmlspecialchars($_POST['email']);
		$_SESSION['Uname'] = htmlspecialchars($_POST['Uname']);
		$_SESSION['pwd'] = htmlspecialchars($_POST['pwd']);

		// check the required fields
		if(!empty($_SESSION['name']) and !empty($_SESSION['Uname']) and !empty($_SESSION['email']) and !empty($_SESSION['pwd'])){
			if(filter_var($_SESSION['email'], FILTER_VALIDATE_EMAIL) === false) {
				echo 'Please use a valid email';
			} else {
				// Passed
				header('Location: home.php');
			}
		} else {
			// failed
			echo 'Please fill in all fields';
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Authentication Site</title>
</head>
<body>
	<h1>Welcome to an Authentication site demo</h1>
	<p>Please register below</p>
	
	<?php include 'inc/form.php' ?>

	<p>Already Registered, then LogIn to your dashboard</p>
	<a href="login.php">Login</a>
</body>
</html>