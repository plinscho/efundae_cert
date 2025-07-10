<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Data Types</title>
</head>
<body>
	<h1>Data Types</h1>
	<h4><i>but strings basically...</i></h4>

	<strong>PHP supports the following data types:</strong>
	<p>		
			String
		<br>Integer
		<br>Float (floating point numbers - also called double)
		<br>Boolean
		<br>Array
		<br>Object
		<br>NULL
		<br>Resource
	</p>

	<h3>Arrays</h3>
	<?php
		echo "We've seen how basic data types work and its also very basic.<br>Lets step a bit further in depth.<br>";
		echo "This is a visualization on how arrays work on PHP";
		echo "<br><br>";

		echo "<h4>Basic array</h4>";
		$arr_fruits = array("Apple", "Banana", "Cherry");
		echo "Running: var_dump(\$arr_fruits);";
		echo "<br><br>";
		var_dump($arr_fruits);
		echo "<br><br>";
		// add a new item in the array:+
		echo "<strong>Adding orange: <br><br></strong>";
		$arr_fruits[] = "Orange";
		var_dump($arr_fruits);
		echo "<p><strong>To add multiple items to an existing array, use the array_push() function.</strong></p>";
		array_push($arr_fruits, "Kiwi", "Pear", "Clementine");

		echo "<strong><p>added kiwi pear and clementine:</p></strong>";
		var_dump($arr_fruits);

		echo "<br><br>";
		echo "<h4>Associative array</h4>";
		$last = array_pop($arr_fruits);
		echo "last: {$last}";

		$arr_associative = array("brand" => "Toyota", "model" => "Celica", "year" => 1994);
		$arr_associative["price"] = 2500;

		echo "<strong><p>To add multiple items to an existing array, you can use the += operator.</p></strong>";
		echo "<i>\$cars += ['horse_power' => 175, 'mileage' => 180000];</i><br><br>var_dump(\$cars): <br>";
		$arr_associative += ["horse_power" => 175, "mileage" => 180000];
		var_dump($arr_associative);
		echo "<br><br>";

		echo "<strong>Usefull to make indexed key id</strong>";
		$user = [
			0 => "id",
			1 => "name",
			2 => ""
		]

	?>
	<br><br>
	<button onClick="document.location='./arrays_2.php'">Click Me!</button>
</body>
</html>