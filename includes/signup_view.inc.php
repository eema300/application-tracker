<?php

declare(strict_types = 1);

// function for echoing the http code for the signup page
// if user input data for some but not all fields and submits
// the data is kept but the user is still told to finish inputing data
function signup_inputs() 
{
    // <label for="name">Name:</label><br>
	// <input type="text" name="name"><br><br>
	// <label for="email">Email:</label><br>
	// <input type="text" name="email"><br><br>
	// <label for="password">Password:</label><br>
	// <input type="password" name="pwd"><br><br>

    if (isset($_SESSION["signup_data"]["name"]))
    {
        echo '<label for="name">Name:</label><br>
	    <input type="text" name="name" value="'. $_SESSION["signup_data"]["name"] . '" ><br><br>';
    }
    else
    {
        echo '<label for="name">Name:</label><br>
	    <input type="text" name="name"><br><br>';
    }

    if (isset($_SESSION["signup_data"]["email"]) && !isset($_SESSION["errors_signup"]["email_taken"]))
    {
        echo '<label for="email">Email:</label><br>
	    <input type="text" name="email" value="' . $_SESSION["signup_data"]["email"] . '"><br><br>';
    }
    else
    {
        echo '<label for="email">Email:</label><br>
	    <input type="text" name="email"><br><br>';
    }

    echo '<label for="password">Password:</label><br>
	    <input type="password" name="pwd"><br><br>';
}

// checks if any errors where detected, and outputs them to the user
function check_signup_errors()
{
    if (isset($_SESSION["errors_signup"]))
    {
        $errors = $_SESSION["errors_signup"];

        echo "<br>";

        foreach($errors as $error)
        {
            echo $error . "<br>";
        }

        unset($_SESSION["errors_signup"]);
    }
}