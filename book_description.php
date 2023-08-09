<?php
require_once 'connection.php';

if (isset($_GET['book_name'])) {
    $book_name = urldecode($_GET['book_name']);

    // Fetch the full book details based on the book name
    $query = "SELECT * FROM addbook WHERE book_name = :book_name";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':book_name', $book_name, PDO::PARAM_STR);
    $stmt->execute();
    $book = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$book) {
        echo "Page not found";
        // Optionally, you can redirect to a 404 error page here
        // header("HTTP/1.0 404 Not Found");
        // include('404.php');
        // exit;
    }

?>
<?php include('includes/header.php');?>

  
  <body>
    <nav class="topnav" class="fixed-top">
        <div class="container-fluid">
            <span onclick="window.location.href = 'login_elibrary.php';" class="topnavhead"><img src="logocow.png" class="logo_cow" alt=""></span>
          <span onclick="window.location.href = 'login_elibrary.php';" class="topnavhead" >E-library</span>
        </div>
      </nav>
<?php echo '
      <article>
        <div class="row" style="margin: 30px auto auto 30px;">
          <div class="column1">
            <img src="' . $book['book_image'] . '"  alt="' . $book['book_name'] . '" width="200" height="300">    
        </div>

      <div class="column2">
        <div class="book">
          <h1>About the Book</h1>
          <p class="about_book">' . $book['book_description'] . '</p>
          <p class="downloads">Genre:' . $book['book_genre'] . '</p>
          <a href="' . $book['book_image'] . '" download><button class="download-btn">Download Image</button></a>
</div>
</div>
</article>
';

    // Include the footer file here
    include('includes/footer.php');
} else {
    // Invalid book name
    header("HTTP/1.0 400 Bad Request");
    exit;
}
?>