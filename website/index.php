<?php 

	// Message variables

	$msg = '';
	$msg_class = '';

	// check for submit
	if(filter_has_var(INPUT_POST, 'submit')){
		// Get the form data

		$name = htmlspecialchars($_POST['name']);
		$email = htmlspecialchars($_POST['email']);
		$message = htmlspecialchars($_POST['message']);

		// check the required fields
		if(!empty($name) and !empty($email) and !empty($message)){
			if(filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
				$msg = 'Please use a valid email';
				$msg_class = 'alert-danger';
			} else {
				// Passed
				$subject = 'Contact Request From ' . $name;
				$body = '<h2>Contact Request</h2>
					<h4>Name</h4><p>' . $name .'</p>
					<h4>Email</h4><p>' . $email .'</p>
					<h4>Message</h4><p>' . $message . '</p>
				';
			}
		} else {
			// failed
			$msg = 'Please fill in all fields';
			$msg_class = 'alert-danger';
		}
	}

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php">My Website</a>
			</div>
		</div>
	</nav>
	<div class="container">
		<?php if($msg != ''): ?>
			<di class="alert <?php echo $msg_class; ?>"><?php echo $msg; ?></di>
		<?php endif; ?>
		<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<div class="form-group">
				<label>Name</label>
				<input type="text" name="name" class="form-control" value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="text" name="email" class="form-control" value="<?php echo (isset($_POST['email']) ? $email : ''); ?>">
			</div>
			<div class="form-group">
				<label>Message</label>
				<textarea name="message" class="form-control"><?php echo (isset($_POST['message']) ? $message : ''); ?></textarea><br>
				<button type="submit" name="submit" class="btn btn-primary">Submit</button>
			</div>
		</form>
		<?php echo isset($body) ? $body : '' ?>
	</div>
</body>
</html>