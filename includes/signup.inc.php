<?php

// Retrieving info from sign in page
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = /*htmlspecialchars(*/$_POST["email"]/*)*/;     // uncomment if info should be sanitized (probably don't need to
    $pwd = /*htmlspecialchars(*/$_POST["pwd"]/*)*/;         // worry about that)

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
        require_once "signup_contr.inc.php";
        require_once "signup_model.inc.php";

        // Error handling
        $errors = [];

        if (is_input_empty($name, $email, $pwd))
        {
            $errors["no_input"] = "EMPTY FIELD! Fill all fields please!";
        }

        if (is_email_taken($pdo, $email))
        {
            $errors["email_taken"] = "Email already taken. Please use another one or log in if you have an account";
        }

        require_once "session_config.inc.php";

        if ($errors)
        {
            $_SESSION["errors_signup"] = $errors;
            $signupData = [
                "name" => $name,
                "email" => $email
            ];
            $_SESSION["signup_data"] = $signupData;
            header("Location: ../index.php");
            die();
        }

        // $query = "INSERT INTO users (name, email, pwd) VALUES
        // (?, ?, ?);";

        // $stmt = $pdo->prepare($query);

        // $options = [
        //     'cost' = 12
        // ];
        // $hashedPwd = password_hash($pwd, PASSWORD_BCRYPT, $options);

        // $stmt->execute([$name, $email, $hashedPwd]);

        create_user($pdo, $name, $email, $pwd);

        //$_SESSION["user_name"] = $name;

        $pdo = null;
        $stmt = null;

        header("Location: ../index.php");
        //header("Location: homepage.inc.php");

        die();
    }
    catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
}
else {
	header("Location: ../index.php");
    die();
}
