<?php
$hostname = "127.0.0.1";
$username = "root";
$password = "Root@12345";
$dbname = "sample_database";
$port = 3306;  // Change if necessary

$conn = new mysqli($hostname, $username, $password, $dbname, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
// else {
//     echo "Connection successful";
// }
?>
