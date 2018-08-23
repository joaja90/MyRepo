<!DOCTYPE html>
<html lang="">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
	<link rel="stylesheet" href="">
</head>

<body>
	<form>

		<input type="text" name="num1" placeholder="Tal"><br>
		<input type="text" name="num2" placeholder="Tal">
		<select name="operator">
			<option>Vælg venligst</option>
			<option>Plus</option>
			<option>Minus</option>
			<option>Gange</option>
			<option>Divider</option>
		</select>
		<br>
		<button type="submit" name="submit" value="submit">Udregn</button>

	</form>

	<p>Resultat:</p>

	<?php 
	if (isset($_GET['submit'])) {
		$result1 = $_GET['num1'];
		$result2 = $_GET['num2']; 
		$operator = $_GET['operator'];
		switch ($operator) {
			case "Vælg venligst":
				echo "Vælg metode fra dropdown menuen";
				break; 
				case "Plus":
				echo $result1 + $result2;
				break; 
				case "Minus":
				echo $result1 - $result2;
				break; 
				case "Gange":
				echo $result1 * $result2;
				break; 
				case "Divider":
				echo $result1 / $result2;
				break; 
		}
	}
	?>



</body>

</html>
