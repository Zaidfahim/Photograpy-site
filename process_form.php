<?php
// Establish connection to MySQL database
$servername = "localhost";
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$dbname = "enquiries"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$event = $_POST['event'];
$package = $_POST['package'];
$location = $_POST['location'];
$eventdate = $_POST['eventdate'];
$message = $_POST['message'];

// SQL query to insert form data into a table (assuming table name is 'approval_form_data')
$sql = "INSERT INTO approval_form (name, email, phone, event, package, location, event_date, message)
        VALUES ('$name', '$email', '$phone', '$event', '$package', '$location', '$eventdate', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
