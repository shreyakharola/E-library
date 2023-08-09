<?php
require_once 'connection.php';

if (isset($_POST['book_name'])) {
    $book_name = urldecode($_POST['book_name']);

    // Delete the book from the database
    $query = "DELETE FROM addbook WHERE book_name = :book_name";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':book_name', $book_name, PDO::PARAM_STR);
    $result = $stmt->execute();

    if ($result) {
        // Book successfully deleted from the database
        http_response_code(200); // Set the response status to 200 (OK)
        exit;
    } else {
        // Failed to delete the book from the database
        http_response_code(500); // Set the response status to 500 (Internal Server Error)
        exit;
    }
} else {
    // Invalid request
    http_response_code(400); // Set the response status to 400 (Bad Request)
    exit;
}
?>
