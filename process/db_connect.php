<?php
$servername = "adserver.cmpxqpkk4nrk.ap-southeast-1.rds.amazonaws.com";
$username = "admin";
$password = "ArtBGl0bal123!";
$dbname = "artb_ad_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
