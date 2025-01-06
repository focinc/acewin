<?php
$servername = "adserver.cmpxqpkk4nrk.ap-southeast-1.rds.amazonaws.com";
$username = "devy";
$password = "admin2024!";
$dbname = "BLCKWINFUN";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}