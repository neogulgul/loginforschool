<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Welcome</title>
	<link rel="stylesheet" href="./style.css">
</head>
<body>
	<a id="back" href="./index.php">Go back</a>
	<?php
	$USERNAME = ":^)";
	$PASSWORD = "mycketbralösenord123";
	if ($_POST["username"] == $USERNAME && $_POST["password"] == $PASSWORD)
	{
		echo "<h1>Welcome $USERNAME!</h1>";
	}
	else
	{
		echo "<h1>Incorrect login :(</h1>";
	}
	?>
</body>
</html>

