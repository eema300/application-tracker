<?php

session_start();

if (!isset($_SESSION['user_name']))
{
  header("Location: ../index.php");
  exit;
}

?>

<html>
<body>
Welcome <?php echo $_SESSION['user_name']; ?><br>

<form action="includes/logout.inc.php" method="post">
	<button>Logout</button>
</form>

<button id="go_to_apps">Go To My Applications</button>

<script type="module">
  import { my_applications } from "./functions.js";
  document.getElementById('go_to_apps').addEventListener('click', my_applications);
</script>
</body>
</html>


