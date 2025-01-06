<?php
$servername = "148.135.137.171";
$username = "devy";
$password = "admin2024";
$dbname = "BLCKWINFUN";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}