<?php
require 'connection.php';
$_SESSION = [];
session_unset();
session_destroy();
echo '<script>alert("You have logged out SUCCESSFULLY!!"); window.location.href = "elibrary.php";</script>';
