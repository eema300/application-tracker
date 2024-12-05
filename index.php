<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/styles.css">
	<title>Sign Up</title>
</head>
<body>
	<SignUp>
		<h1>Sign Up</h1>

		<form action="includes/formhandler.inc.php" method="post">
			<label for="first_name">Name:</label><br>
			<input type="text" name="first_name"><br><br>
			<!--<input type="text" id="first_name" name="first_name"><br><br>-->
			<label for="email">Email:</label><br>
			<input type="text" name="emailAddress"><br><br>
			<!-- <input type="text" id="email" name="email"><br><br> -->
			<label for="password">Password:</label><br>
			<input type="password" name="pwd"><br><br>
			<!-- <input type="password" id="password" name="password"><br><br> -->

			<button type="submit">Sign Up</button>
		</form>
	</SignUp>

</body>
</html>