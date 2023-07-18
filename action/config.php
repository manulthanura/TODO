<?php 

date_default_timezone_set('Asia/Colombo');

// Database configuration

$server = "localhost";
$user = "root";
$password = "";
$database = "todo";

// Create database connection
$conn = mysqli_connect($server, $user, $password, $database);

// Check connection
if (!$conn) {
    die(header("Location: ../error-500.php"));
}

?>