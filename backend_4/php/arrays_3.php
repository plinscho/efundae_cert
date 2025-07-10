<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
		<h1>Arrays 3</h1>
		<h4>Aplied to forms</h4>
		<form action="arrays_3.php" method="post">
			<label>Enter a country: </label>
			<input type="text" name="country"><br>
			<input type="submit"><br><br>

		</form>

		<button onClick="document.location='./requests.php'">Click Me!</button>
</body>
</html>

<?php
	// Code will be activated when the submit button is pressed
		$capitals = array(
			"Spain" => "Madrid",
			"France" => "Paris",
			"Italy" => "Rome",
			"Germany" => "Berlin",
			"Portugal" => "Lisbon"
		);

		$user_capital = $capitals[$_POST["country"]];
		echo "{$user_capital}";

?>