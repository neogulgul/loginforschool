<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link rel="stylesheet" href="./style.css">
</head>
<body>
	<div id="info">
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm-1-11v6h2v-6h-2zm0-4v2h2V7h-2z"/></svg>
		<p>
			Username: :^)
			<br>
			Password: mycketbralösenord123
		</p>
	</div>
	<h1>Login</h1>
	<form method="post" action="welcome.php">
		<label for="username">Username</label>
		<input name="username" type="text">
		<label for="password">Password</label>
		<input name="password" type="password">
		<input type="submit">
	</form>
</body>
</html>
