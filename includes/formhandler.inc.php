<?php

session_start();

function input_not_empty($p, $c, $j, $s) {
    $vars = [$p, $c, $j, $s];
    foreach ($vars as $var) {
        if (empty($var)) {
            return false;
        }
    }
    return true;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $position = $_POST["position"];
    $company = $_POST["company"];
    $job_type = $_POST["job_type"];
    $submission_date = $_POST["submission_date"];
    $status = $_POST["status"];

    // set a default value for submission date if none inputted
    if (empty($submission_date)) {
        $submission_date = "1753-01-01T00:00";
    }

    if (input_not_empty($position, $company, $job_type, $status)) {
        // send to database
        try {
            require_once "dbh.inc.php";
    
            // define insert query
            $query = "INSERT INTO applications (position, company, job_type, submission_date, app_status, user_id)
                        VALUES (?, ?, ?, ?, ?, ?);";
    
            // send query to database
            $stmt = $pdo->prepare($query);
            $stmt->execute([$position, $company, $job_type, $submission_date, $status, $_SESSION['user_id']]);
    
            // close connection
            $pdo = null;
            $stmt = null;
    
            // return to applications page
            header("Location: ../my_applications.php");
            die();
        } catch (PDOException $e) {
            die("query failed: " . $e->getMessage());
    
        }
    }
}

else {
    header("Location: ../index.php");
}