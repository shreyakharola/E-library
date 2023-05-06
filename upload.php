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
    // $book_image = $_FILES['book_image'];
    
     echo $book_name;
     echo $author_name;
     echo $book_description; 
    //  echo $book_image;
    $query = "INSERT INTO addbook (book_name,author_name,description_book) VALUES (:book_name,:author_name,:book_description)";
    $stmt = $pdo->prepare($query);
   $result = $stmt->execute([
        ':book_name' => $book_name,
        ':author_name' => $author_name,
        ':book_description' => $book_description
    ]);
      if($result) {
        echo "book added successfully";
      }
      else {
        echo "some error occured.";
      }
    }
    ?>
