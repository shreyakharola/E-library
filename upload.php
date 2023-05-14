<?php 


$host= "localhost";
$user= "root";
$password= "";
$db= "e-library";

    try{
        $pdo =  new PDO("mysql:host=$host;dbname=$db",$user,$password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "connceted successfully";
        
     }catch(PDOException $e){
         die($e->getMessage());
     }


if($_GET['submitted']) {
    echo "<pre>";
    print_r($_GET);
    // die('data is coming');
    
    $book_name = $_GET['book_name'];
    $author_name = $_GET['author_name'];
    $book_description = $_GET['book_description'];
    $book_image = $_FILES["book_image"]["name"];
    $target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["book_image"]["name"]);
$uploadOk = 1;
$fileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // $book_image = $_FILES['book_image'];
    
     echo $book_name;
     echo $author_name;
     echo $book_description; 
     echo $book_image;
    //  echo $book_image;
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
if($fileType $fileType != "jpg" && $fileType != "jpeg" && $fileType != "png") {
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
  }

    $query = "INSERT INTO addbook (book_name,author_name,description_book,book_image) VALUES (:book_name,:author_name,:book_description, :book_image)";
    $stmt = $pdo->prepare($query);
   $result = $stmt->execute([
        ':book_name' => $book_name,
        ':author_name' => $author_name,
        ':book_description' => $book_description,
        ':book_image' => $book_image
      ]);

      if($result) {
        echo "book added successfully";
      }
      else {
        echo "some error occured.";
      }
    }

     echo "The file ". htmlspecialchars( basename( $_FILES["book_upload"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
    ?>




