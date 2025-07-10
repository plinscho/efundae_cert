<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Functions</title>
</head>
<body>
	<h1>Functions</h1>
	<h4><i>Core of a developer</i></h4>
	<button onClick="document.location='./strings.php'">Click Me!</button><br>

</body>
</html>

<?php
	function greet(string $name){
		echo "hey {$name}!<br>";
	}

	function add(float $a, float $b){
		return $a + $b;
	}

	function a(int $num) {
		return $num % 3;
	}

	greet(1);
	echo a(6) . "<br>";
	echo add("11", 3.3) . "<br>";
?>
