<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$server = "localhost";
$user = "root";
$password = ""; 
$dbname = "formdb";

// Create connection
$con = mysqli_connect($server, $user, $password, $dbname);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully<br>";

// Test insertion with hard-coded values
$sql = "INSERT INTO formvalidationdata (name, email, password, message) 
        VALUES ('Test Name', 'test@example.com', 'password123', 'Test message')";

if (mysqli_query($con, $sql)) {
    echo "Test data inserted successfully";
} else {
    echo "Error: " . mysqli_error($con);
}

mysqli_close($con);
?>