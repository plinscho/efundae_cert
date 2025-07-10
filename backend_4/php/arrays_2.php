<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>Arrays 2</h1>
	<h4><i>Because its too large</i></h4>

	<a href="https://www.php.net/manual/en/ref.array.php">php array functions</a>
	<?php

		function printSpace(){
			echo "<br><br>";
		}

		// Create a associative array:
		$capitals = array(
			"Spain" => "Madrid",
			"France" => "Paris",
			"Italy" => "Rome",
			"Germany" => "Berlin"
		);

		printSpace();
		
		$keys = array_keys($capitals);
		foreach($keys as $key){
			echo "{$key}, ";
		}
		printSpace();

		foreach($capitals as $key => $value) {
			echo "Key: {$key}" . " value: {$value} <br>";
		};

		printSpace();

		$capitals["Spain"] = "Barcelona";
		$capitals["Portugal"] = "Lisbon";

		foreach($capitals as $key => $value) {
			echo "Key: {$key}" . " value: {$value} <br>";
		};

	?>

	<button onClick="document.location='./arrays_3.php'">Click Me!</button>
</body>
</html>