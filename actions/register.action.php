<?php
session_start();
require '../assets/class/database.class.php';
require '../assets/class/function.class.php';

global $db; // Assuming $db is initialized in database.class.php

// Check if the user is already logged in, redirect to login page or dashboard
if (isset($_SESSION['user_id'])) {
    // If the user is logged in, redirect to the login page or dashboard
    header('Location: /resumebuilder/login.php');
    exit;
}

if ($_POST) {
    $post = $_POST;

    // Ensure all form fields are filled
    if (!empty($post['full_name']) && !empty($post['email_id']) && !empty($post['password'])) {
        $full_name = $db->real_escape_string($post['full_name']);
        $email_id = $db->real_escape_string($post['email_id']);
        $password = password_hash($db->real_escape_string($post['password']), PASSWORD_BCRYPT);

        // Check if the email already exists in the database
        $checkQuery = "SELECT * FROM users WHERE email_id = '$email_id'";
        $checkResult = $db->query($checkQuery);

        if ($checkResult->num_rows > 0) {
            // Email already exists, show error and redirect back to registration page
            $_SESSION['error'] = "The email '$email_id' is already registered!";
            header('Location: /resumebuilder/register.php');
            exit;
        } else {
            try {
                // Insert the new user into the database
                $insertQuery = "INSERT INTO users (full_name, email_id, password) VALUES ('$full_name', '$email_id', '$password')";
                $db->query($insertQuery);

                // Set a success message and redirect to login page
                $_SESSION['success'] = "You have registered successfully! Please log in.";
                header('Location: /resumebuilder/login.php');
                exit;
            } catch (Exception $error) {
                // Handle any unexpected database errors
                $_SESSION['error'] = "Database error: " . $error->getMessage();
                header('Location: /resumebuilder/register.php');
                exit;
            }
        }
    } else {
        // If any form fields are missing, show an error
        $_SESSION['error'] = 'Please fill out all fields!';
        header('Location: /resumebuilder/register.php');
        exit;
    }
} else {
    // If no POST data is received, redirect to registration page
    header('Location: /resumebuilder/register.php');
    exit;
}
?>
