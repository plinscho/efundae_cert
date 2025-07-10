
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Variables</title>
</head>
<body>
	<h1>Variables</h1>
	<h4>A variable can have a short name (like $x and $y) or a more descriptive name ($age, $carname, $total_volume).</h4>

	<p>
			A variable starts with the $ sign, followed by the name of the variable
		<br>A variable name must start with a letter or the underscore character
		<br>A variable name cannot start with a number
		<br>A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
		<br>Variable names are case-sensitive ($age and $AGE are two different variables)
	
	</p>
	<h3>CODE:</h3>
	<?php
		echo "Yay, welcome bud!<br>";

		$var = 'this is a string!';
		$is_on = true;
		$foo = 1;
		$quantity = 10;
		$price = 50;
		$total = null;

		print("var: {$var}<br>");
		print("in_on: {$is_on} and {$foo}<br>");
		print("price: \${$price}<br>");
		print("quantity: {$quantity} units <br>");
		$total = $price * $quantity;
		print("total: \${$total}<br>");


	?>
	<br><br>
	<button onClick="document.location='./operators.php'">Click Me!</button>
</body>
</html>