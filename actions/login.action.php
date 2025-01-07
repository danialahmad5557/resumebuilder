<?php
session_start(); // Start the session
require '../assets/class/database.class.php';
require '../assets/class/function.class.php';

global $db; // Assuming $db is initialized in database.class.php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $post = $_POST;

    if (!empty($post['email_id']) && !empty($post['password'])) {
        $email_id = $db->real_escape_string($post['email_id']);
        $password = $db->real_escape_string($post['password']);

        // Check if the email exists in the database
        $result = $db->query("SELECT * FROM users WHERE email_id = '$email_id'");
        
        // Fetch the user record if exists
        if ($result && $user = $result->fetch_assoc()) {
            // Verify password with hashed password in the database
            if (password_verify($password, $user['password'])) {
                // Set user authentication session
                $fn->setAuth($user);
                // Set success message
                $_SESSION['message'] = ['type' => 'success', 'text' => 'Login successful!'];
                header('Location: /resumebuilder/myresumes.php');
                exit;
            } else {
                // Password is incorrect
                $_SESSION['message'] = ['type' => 'error', 'text' => 'Invalid email or password!'];
                header('Location: /resumebuilder/login.php');
                exit;
            }
        } else {
            // Email doesn't exist
            $_SESSION['message'] = ['type' => 'error', 'text' => 'Invalid email or password!'];
            header('Location: /resumebuilder/login.php');
            exit;
        }
    } else {
        // If form fields are empty
        $_SESSION['message'] = ['type' => 'error', 'text' => 'Please fill out all fields!'];
        header('Location: /resumebuilder/login.php');
        exit;
    }
} else {
    // Redirect if no POST data
    header('Location: /resumebuilder/login.php');
    exit;
}
?>