<?php
session_start();

if (!isset($_SESSION['user_name']))
{
  header("Location: ../index.php");
}

?>

<html>
<body>
Welcome <?php echo $_SESSION['user_name']; ?><br>

<form action="logout.inc.php" method="post">
	<button>Logout</button>

</body>
</html>


