<?php
$dbname = 'e-library';
$dbuser = 'root';
$dbpass = '';
$dbhost = 'localhost';
if(isset($_POST['submit'])){
  
  $book_name = $_POST['book_name'];
  $author_name = $_POST["author_name"];
  $description_book = $_POST["description_book"];
  $book_image = $_FILES["book_image"];
  $book_pdf = $_FILES["book_pdf"];

  // Connect to MySQL database
  $conn = mysqli_connect("localhost", "username", "password", "e-library");
  if (isset ( $book_name) || ( $author_name) || ( $description_book) || ($book_image) || ($book_pdf)){
  // Check connection
  if ($conn) {
    echo "welcome!!";
  }
  // Check if the form was submitted
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get input values from the form
    $book_name = $_POST["book_name"];
    $author_name = $_POST["author_name"];
    $description_book = $_POST["description_book"];
    $book_image = $_FILES["book_image"];
    $book_pdf = $_FILES["book_pdf"];
    // Save the image to the server
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["book_image"]["name"]);
    $move_uploaded_file($_FILES["book_image"]["tmp_name"], $target_file);

    // Insert data into the database
    $sql = "INSERT INTO books (book_name, author_name, description_book, book_image) VALUES ('$book_name', '$author_name', '$description_book' '$book_image')";

    if (mysqli_connect_error() <> 0) {
      echo "New book added successfully";
    } else {
      die("Connection failed: " . mysqli_connect_error());
    }
  }
} 
  // Close database connection
  mysqli_close($conn);
}
?>
