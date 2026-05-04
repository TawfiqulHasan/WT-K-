<?php
$host = "localhost"; // Database server
$user = "root";      // Database username
$pass = "";          // Database password
$dbname = "webtech-k"; // Database name

$conn = mysqli_connect($host, $user, $pass, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>