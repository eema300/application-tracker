<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST["username"]);
    $password = htmlspecialchars($_POST["password"]);
	if ((!empty($username) || !empty($password)) && $username == "ValidUser" && $password == "ValidPassword")
    {
        echo "Hello " . $username;
    }
    else
    {
        //exit();
        header("Location: ../index.php");
    }
}
else {
	header("Location: ../index.php");
}
