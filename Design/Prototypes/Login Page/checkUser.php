<?php

$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get post request variables
$email = $_POST["email"];
$password =  $_POST["password"];
$mode = $_POST["mode"];
$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$username = $_POST["username"];

// Make a sql query to see if the user exists (This is useful for both login and signup)
$sql = "SELECT email FROM users WHERE EmailAddress = $email;";
$userExists = !empty(mysqli_query($conn, $sql));

if ($mode == "login") {
    // Make sure the user exists
    if ($userExists) {
        // Get a user matching the email/password pair
        $sql = "SELECT username FROM users WHERE EmailAddress = $email AND Password = $password";
        $result = mysqli_query($conn, $sql);
        // If nothing was returned, the password is wrong
        if (empty($result)) {
            echo "Wrong password!";
        } else {
            echo $result;
        }
    } else {
        echo "User not found! Check your email address and try again.";
    }
} else if ($mode == "signup") {
    // Check if the user exists
    if ($userExists) {
        echo "A user already exists with that email";
    } else {
        // Insert the new info into the database
        $sql = "INSERT INTO users (FirstName, LastName, Username, Password, EmailAddress) VALUES ($firstName, $lastName, $username, $password, $email)";
        mysqli_query($conn, $sql);
        echo "Successfully created new user. Please log in.";
    }
}
