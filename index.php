<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/styles.css">
	<title>Sign In</title>
</head>
<body>
	<SignIn>
		<h1>Sign In</h1>

		<form action="includes/formhandler.php" method="post">
			<label for="username">Username:</label><br>
			<input type="text" id="username" name="username"><br><br>
			<label for="password">Password:</label><br>
			<input type="password" id="password" name="password"><br><br>

			<button type="submit">Sign In</button>
		</form>
	</SignIn>

</body>
</html>