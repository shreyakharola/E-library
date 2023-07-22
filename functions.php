<?php
session_start();

// Function to add login success message for a user
function addLoginSuccessMessage($username) {
    $_SESSION['login_messages'][] = array(
        'username' => $username,
        'message' => 'You have logged in successfully!',
    );
}

// Function to display login success messages for all users
function displayLoginSuccessMessages() {
    if (isset($_SESSION['login_messages']) && is_array($_SESSION['login_messages'])) {
        foreach ($_SESSION['login_messages'] as $message) {
            echo '<script>alert("' . $message['message'] . ' Welcome, ' . $message['username'] . '!")</script>';
        }
        
        // Clear the success messages from the session after displaying them
        unset($_SESSION['login_messages']);
    }
}
?>