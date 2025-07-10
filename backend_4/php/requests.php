<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Requests</title>
</head>
<body>
	<h1>Requests</h1>
	<h4><i>And hot stuff</i></h4>

	<form name="one" action="requests.php" method="post">
		<label>username: </label>
		<input type="text" placeholder="username" name="name"><br>
		<label >password: </label>
		<input type="password" placeholder="password" name="password"><br><br>
		<input type="radio" name="card" value="Visa">Visa<br>
		<input type="radio" name="card" value="MasterCard">MasterCard<br>
		<input type="radio" name="card" value="PayPal">PayPal<br><br>
		<input type="submit" name="submit">
	</form>

	<form name="two" action="requests.php" method="post">
		<label>Mark your favourite food:</label><br>
		<input type="checkbox" name="foods[]" value="Fruits">Fruits<br>
		<input type="checkbox" name="foods[]" value="Sweets">Sweets<br>
		<input type="checkbox" name="foods[]" value="Rice">Rice<br>
		<input type="checkbox" name="foods[]" value="Meat">Meat<br>
		<input type="checkbox" name="foods[]" value="Fish">Fish<br>
		<input type="checkbox" name="foods[]" value="Greens">Greens<br>
		<input type="submit" name="foods_submit">
	</form>

	<br>
	<button onClick="document.location='./functions.php'">Click Me!</button>
	<br>

</body>
</html>

<?php
	// Issue with GET method is that the data is appended to URL:
	// https://localhost/website/requests.php?name=pepito&password=32144
	// It does not happen with POST

	// echo "{$_GET["name"]} <br>";
	// echo "{$_GET["password"]} <br>";

	// We can also protect the variables with 
	// isset() : Returns true if a variable is declared and not null
	// empty() : Returns true if a variable is not declared, false, null, ""

	if (empty($_POST["submit"])){
		echo "need a name<br>";
	} else {
		if (!empty($_POST["name"])){
			echo "Your name is: {$_POST["name"]}<br>";
		}
		if (!empty($_POST["password"])){
			echo "password is : {$_POST["password"]}<br>";
		}
		if (!empty($_POST["card"])){
			echo "Payment method is : {$_POST["card"]}<br>";
		}
	}

	// We can also do it with checkboxes (fruits form)
	if (isset($_POST["foods"])) {
		$fruits = $_POST["foods"];
		foreach($fruits as $fruit) {
			echo "$fruit"."<br>";
		}
	}
?>