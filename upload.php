<?php 

$host = "localhost";
$user = "root";
$password = "";
$db = "e-library";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die($e->getMessage());
}

if(isset($_POST['submitted'])) {
    $book_name = $_POST['book_name'];
    $author_name = $_POST['author_name'];
    $book_description = $_POST['book_description'];
    
    $book_image = isset($_FILES["book_image"]["name"]) ? $_FILES["book_image"]["name"] : "";
    $target_dir = "uploads/";
    $timestamp = time();
    $target_file = $target_dir . $timestamp . "_" . basename($book_image);
    $uploadOk = 1;
    $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["book_image"]["size"] > 5000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if($fileType != "jpg" && $fileType != "jpeg" && $fileType != "png") {
        echo "Sorry, only JPG, JPEG, and PNG files are allowed.";
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        if (move_uploaded_file($_FILES["book_image"]["tmp_name"], $target_file)) {
            $filename = basename($_FILES["book_image"]["name"]);
            $filesize = $_FILES["book_image"]["size"];
            $filetype = $_FILES["book_image"]["type"];

            $query = "INSERT INTO addbook (book_name, author_name, description_book, book_image) VALUES (:book_name, :author_name, :book_description, :book_image)";
            $stmt = $pdo->prepare($query);
            $result = $stmt->execute([
                ':book_name' => $book_name,
                ':author_name' => $author_name,
                ':book_description' => $book_description,
                ':book_image' => $book_image
            ]);

            if($result) {
                echo "book added successfully";
            } else {
                echo "some error occurred.";
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}


?>
