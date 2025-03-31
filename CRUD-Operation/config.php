<?php
$host = "127.0.0.1";
$username = "root";
$password = "nikhhilcomline"; // Use the password you set earlier
$dbname = "phpcrud";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully!";
}
?>
