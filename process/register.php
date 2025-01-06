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

    if (isset($_POST['fllnm']) && isset($_POST['ctctnmb'])) {
        $full_name = $_POST['fllnm'];
        $phone_number = $_POST['ctctnmb'];
        $user_id = generateUserID();

        // Check if the phone number already exists
        $stmt = $conn->prepare("SELECT * FROM registrations WHERE phone_number = ?");
        $stmt->bind_param("s", $phone_number);

        if (!$stmt->execute()) {
            echo "Error in executing query: " . $stmt->error;
            exit();
        }

        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // Phone number exists
            header("Location: https://blockwin.fun/acewin?stats=phoneexisted");
            exit();
        } else {
            // Insert new record
            $stmt = $conn->prepare("INSERT INTO registrations (userid, full_name, phone_number) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $user_id, $full_name, $phone_number);

            if (!$stmt->execute()) {
                echo "Error in executing query: " . $stmt->error;
                exit();
            }

            // Redirect to success page
            header("Location: https://blockwin.fun/acewin?stats=success");
            exit();
        }
    }
}