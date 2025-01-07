<?php
session_start(); // Start the session
require '../assets/class/database.class.php';
require '../assets/class/function.class.php';

global $db; // Assuming $db is initialized in database.class.php

if ($_POST) {
    $post = $_POST;

    if ($post['otp'])) {
            $otp=$post['otp'];
            
        if $fn->getSession('otp')==$otp){
            $fn->setAlert('email is Verified');/
            $fn->redirect('change-password.php');
    }else {
       $fn->setError('Invalid OTP');
         $fn->redirect('verification.php');
    }
} else {
    
    $fn->setError('Please enter OTP');
    $fn->redirect('verification.php');
}
} else {
    $fn->redirect('verification.php');
}
?>