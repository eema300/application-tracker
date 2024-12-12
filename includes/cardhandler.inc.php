<?php

require_once "session_config.inc.php";

try {
    require_once "dbh.inc.php";

    // define select query
    $query = "SELECT position, company, job_type, submission_date, app_status FROM applications WHERE user_id = :user_id;";

    // send query to database
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':user_id', $_SESSION['user_id'], PDO::PARAM_INT);
    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // close connection
    $pdo = null;
    $stmt = null;

    // indicate json data and output results
    header('Content-Type: application/json');
    echo json_encode($results);
    
} catch (PDOException $e) {
    echo json_encode(['error' => 'Query failed: ' . $e->getMessage()]);
}