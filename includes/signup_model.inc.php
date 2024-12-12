<?php

declare(strict_types = 1);

function get_email(object $pdo, string $email)
{
    $query = "SELECT email FROM users WHERE email = :email;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":email", $email);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function create_user(object $pdo, string $name, string $email, string $pwd)
{
    $query = "INSERT INTO users (name, email, pwd) VALUES
        (?, ?, ?);";
    $stmt = $pdo->prepare($query);

    // password hashing (save for later)
    // $options = [
    //     'cost' => 12
    // ];
    // $hashedPwd = password_hash($pwd, PASSWORD_BCRYPT, $options);

    $stmt->execute([$name, $email, /*$hashedPwd*/$pwd]);

    $query = "SELECT user_id FROM users WHERE email = :email;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":email", $email);
    $stmt->execute();
    
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}