<?php
$servername = "localhost";
$username = "root";
$password = ""; // Update with your actual password
$database = "dbcrypto";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Now, you can use $con for your database queries
?>


