<?php
require_once "includes/session_config.inc.php";	// Creates a session for the user
require_once "includes/signup_view.inc.php";	// defines signup_inputs() and check_signup_errors()
require_once "includes/login_view.inc.php"; 	// defines check_login_errors()
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/styles.css">
	<title>Sign Up</title>
</head>
<body>
	<h2>Log In</h2>

	<form action="includes/login.inc.php" method="post">
		<label for="email">Email:</label><br>
		<input type="text" name="email"><br><br>
		<label for="password">Password:</label><br>
		<input type="password" name="pwd"><br><br>

		<button type="submit">Log In</button>
	</form>

	<?php
	check_login_errors();
	?>

	<h2>Sign Up</h2>

	<form action="includes/signup.inc.php" method="post">

		<?php
		signup_inputs();	
		?>

		<button type="submit">Sign Up</button>
	</form>

	<?php
	check_signup_errors();
	?>

</form>

</body>
</html>