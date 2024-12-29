<?php

// Error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// database connection
include 'db_connect.php';

// Function to generate a 10-digit alphanumeric user ID
function generateUserID()
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

    $length = 12;
    $userID = '';

    // Generate a random ID
    for ($i = 0; $i < $length; $i++) {
        $userID .= $characters[rand(0, strlen($characters) - 1)];
    }

    return $userID;
}

// Initialize variables to store form data
$user_id = $full_name = $phone_number = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "Form submitted successfully.";

    if (isset($_POST['full_name']) && isset($_POST['phone_number'])) {
        $full_name = $_POST['full_name'];
        $phone_number = $_POST['phone_number'];
        $user_id = generateUserID();

        // Check if the phone number already exists
        $stmt = $conn->prepare("SELECT * FROM blckwin_T_DAT_users WHERE phone_number = ?");
        $stmt->bind_param("s", $phone_number);

        if (!$stmt->execute()) {
            echo "Error in executing query: " . $stmt->error;
            exit();
        }

        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // Phone number exists
            header("Location: https://blockwin.fun/acewin?error=phoneexisted");
            exit();
        } else {
            // Insert new record
            $stmt = $conn->prepare("INSERT INTO blckwin_T_DAT_users (userid, full_name, phone_number) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $user_id, $full_name, $phone_number);

            if (!$stmt->execute()) {
                echo "Error in executing query: " . $stmt->error;
                exit();
            }

            // Redirect to success page
            header("Location: https://blockwin.fun/acewin");
            exit();
        }
    }
}
