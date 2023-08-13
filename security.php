
<?php
session_start();

// Check if the user is not logged in and is trying to access a protected page
if (!isset($_SESSION['username']) && !in_array(basename($_SERVER['PHP_SELF']), ['login_page.php', 'registration_form.php'])) {
    header("Location: login_page.php"); // Redirect to login page
    exit();
}
?>