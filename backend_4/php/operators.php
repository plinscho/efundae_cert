<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Opeators</title>
</head>
<body>
	<h1>Operators</h1>
	<h4><i>Oh sweet c operators...</i></h4>
	<a href="https://www.w3schools.com/php/php_operators.asp">W3 Referece</a>
	<br><br>
	<?php
		/*
			Yeah also the multiline comment is like in C.
			We have + - * / ** %
		*/

		$x = 10;
		$y = 2;
		$z = null;
		
		echo "z: {$z}<br><br>";

		// z is x multiplied itself y times
		$z = $x ** $y;
		
		echo "z: {$z}<br><br>";

		// If we make packs of y and have x people, z is how many are left unpacked
		$z = $x % $y;

		echo "z: {$z}<br><br>";
		
		$z++;

		echo "z: {$z}<br><br>";

		
	?>
	<button onClick="document.location='./arrays_1.php'">Click Me!</button>
</body>
</html>