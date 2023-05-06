<?php 
session_start();
$conn = mysqli_connect("localhost","root","","e-library");

//check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else
 {
      echo "connected SUCCESSFULLY!!!";
 }

if(isset($_POST['submit']))
{
    $book_name = $_POST['book_name'];
    $author_name = $_POST['author_name'];
    $book_description = $_POST['book_description'];
    $book_image = $_FILES['book_image']['name'];
    $book_pdf = $_FILES['book_pdf']['name'];

    $query = "INSERT INTO addbook (book_name,author_name,description_book,book_image,book_pdf) VALUES ('$book_name','$author_name','$book_description','$book_image','$book_pdf')";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        move_uploaded_file($_FILES["book_image"]["tmp_name"], "uploads/book_image/".$_FILES["submit"]["name"]);
        move_uploaded_file($_FILES["book_image"]["tmp_name"], "uploads/book_pdf/".$_FILES["submit"]["name"]);
        $_SESSION['status'] = "Record Stored SUCCESSFULLY";
        header('location:add_book.php');

    }
    else
    {
        $_SESSION['status'] = "OOPS!!!Record NOT inserted";
        header('location:add_book.php');


    }

}
?>