<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["first_name"];
    $emailAddress = /*htmlspecialchars(*/$_POST["emailAddress"]/*)*/;
    $pwd = /*htmlspecialchars(*/$_POST["pwd"]/*)*/;

	// if ($username == "ValidUser" && $pwd == "ValidPassword")
    // {
    //     echo "Hello " . htmlspecialchars($username);
    // }
    // else
    // {
    //     //exit();
    //     header("Location: ../index.php");
    // }
    try {
        require_once "dbh.inc.php";

        $query = "INSERT INTO users (first_name, email, pwd) VALUES
        (?, ?, ?);";

        $stmt = $pdo->prepare($query);

        $stmt->execute([$name, $emailAddress, $pwd]);

        $pdo = null;
        $stmt = null;

        header("Location: ../index.php");
        //header("Location: /homepage.inc.php")

        die();
    }
    catch(PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
}
else {
	header("Location: ../index.php");
}
