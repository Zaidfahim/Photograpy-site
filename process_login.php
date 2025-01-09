<?php
// Retrieve form data
$username = $_POST['username'];
$password = $_POST['password'];

// Hardcoded username and password
$correctUsername = "admin";
$correctPassword = "Admin123";

// Check if entered credentials match
if ($username === $correctUsername && $password === $correctPassword) {
    // Redirect to success page
    header("Location: Select_option.html");
    exit(); // Ensure that no further code is executed after the redirect
} else {
    echo "Invalid username or password";
}
?>
