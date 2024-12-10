<?php
require_once "includes/session_config.inc.php";
require_once "includes/signup_view.inc.php";
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/styles.css">
	<title>Sign Up</title>
</head>
<body>
	<h1>Sign Up</h1>

	<form action="includes/signup.inc.php" method="post">
		<!-- <label for="name">Name:</label><br>
		<input type="text" name="name"><br><br>
		<label for="email">Email:</label><br>
		<input type="text" name="email"><br><br>
		<label for="password">Password:</label><br>
		<input type="password" name="pwd"><br><br> -->
		<?php
		signup_inputs();
		?>

		<button type="submit">Sign Up</button>
	</form>

	<?php
	check_signup_errors();
	?>

</body>
</html>