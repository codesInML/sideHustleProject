<form method = 'POST' action="<?php echo $_SERVER['PHP_SELF'] ?>">
		<input type="text" name="name" placeholder="Enter Your Name" value="<?php echo isset($_SESSION['name']) ? $_SESSION['name'] : '' ?>">
		<br>
		<br>
		<input type="text" name="Uname" placeholder="Enter Your UserName" value="<?php echo isset($_SESSION['Uname']) ? $_SESSION['Uname'] : '' ?>">
		<br>
		<br>
		<input type="text" name="email" placeholder="Enter Your email" value="<?php echo isset($_SESSION['email']) ? $_SESSION['email'] : '' ?>">
		<br>
		<br>
		<input type="password" name="pwd" placeholder="Enter Your Password">
		<br>
		<br>
		<input type="submit" name="submit" value="Submit">
		<br>
</form>