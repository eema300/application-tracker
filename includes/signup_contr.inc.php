<?php

declare(strict_types = 1);

require_once "signup_model.inc.php";

function is_input_empty($name, $email, $pwd)
{
    if (empty($name) || empty($email) || empty($pwd))
    {
        return true;
    }
    else
    {
        return false;
    }
}

function is_email_taken(object $pdo, string $email)
{
    if (get_email($pdo, $email))
    {
        return true;
    }
    else
    {
        return false;
    }
}