<!DOCTYPE html>
<html>
<head>
	<title>PHP Calculator</title>
</head>
<body>
	<form>
		<input type="text" name="cal" placeholder="Number 1">
		<input type="text" name="cal2" placeholder="Number 2">
		<select name="choose">
			<option>None</option>
			<option>+</option>
			<option>-</option>
			<option>&times;</option>
			<option>/</option>
		</select>
		<br><br>
		<input type="submit" name="submit" value="Calculate">
	</form>

	<p>The answer is = <?php 

		if(isset($_GET['submit'])) {
			$cal1 = $_GET['cal'];
			$cal2 = $_GET['cal2'];
			$choose = $_GET['choose'];

			switch($choose) {
				case "+":
					echo $cal1 + $cal2;
					break;
				case "-":
					echo $cal1 - $cal2;
					break;
				case "x":
					echo $cal1 * $cal2;
					break;
				case "/":
					echo $cal1 / $cal2;
					break;
				default:
					echo "Please select an operator...";
			}
		}

	 ?></p>
	
</body>
</html>