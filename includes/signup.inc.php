<?php

require_once "session_config.inc.php";

// Retrieving info from sign in page
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = /*htmlspecialchars(*/$_POST["email"]/*)*/;     // uncomment if info should be sanitized (probably don't need to
    $pwd = /*htmlspecialchars(*/$_POST["pwd"]/*)*/;         // worry about that)

    
    try {
        require_once "dbh.inc.php";
        require_once "signup_contr.inc.php";
        require_once "signup_model.inc.php";
        require_once "login_model.inc.php";

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

        // password hashing thing (save for later)
        // $query = "INSERT INTO users (name, email, pwd) VALUES
        // (?, ?, ?);";

        // $stmt = $pdo->prepare($query);

        // $options = [
        //     'cost' = 12
        // ];
        // $hashedPwd = password_hash($pwd, PASSWORD_BCRYPT, $options);

        // $stmt->execute([$name, $email, $hashedPwd]);

        // save session variables for card access later
        $result = create_user($pdo, $name, $email, $pwd);
        $_SESSION["user_id"] = $result["user_id"];
        $_SESSION["user_name"] = htmlspecialchars($name);


        //header("Location: ../index.php");
        header("Location: ../homepage.php");

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
