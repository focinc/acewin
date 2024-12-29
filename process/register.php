<?php

// Error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// database connection
include 'db_connect.php';

// Function to generate a 10-digit alphanumeric user ID
function generateUserID()
{
    return substr(uniqid(), -10);
}

// Initialize variables to store form data
$user_id = $full_name = $phone_number = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $full_name = $_POST['full_name'];
    $phone_number = $_POST['phone_number'];
    $user_id = generateUserID();

    // query
    $stmt = $conn->prepare("SELECT * FROM artb_ad_db.blckwin_T_DAT_users WHERE phone_number = ?");

    // bind parameters
    $stmt->bind_param("s", $phone_number);

    // checks if the prepared statement was successfully created
    if (!$stmt->execute()) {
        echo "Error in preparing statement: " . $stmt->error;
        exit();
    }

    // get the result
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {

        $row = $result->fetch_assoc();

        if (trim($row["phone_number"]) === trim($phone_number)) {
            header("Location: https://blockwin.fun/acewin?error=phoneexisted");
            exit();
        } else {
            // query
            $stmt = $conn->prepare("INSERT INTO artb_ad_db.blckwin_T_DAT_users (userid, full_name, phone_number) VALUES (?, ?, ?)");

            // bind parameters
            $stmt->bind_param("sss", $user_id, $full_name, $phone_number);

            // checks if the prepared statement was successfully created
            if (!$stmt->execute()) {
                echo "Error in preparing statement: " . $stmt->error;
                exit();
            }

            header("Location: https://blockwin.fun/acewin");
            exit();
        }
    }
}
