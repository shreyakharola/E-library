<?php 
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-library home page</title>
    <link rel="stylesheet" href="elibrary.css">
  </head>
  <body>
    <nav class="topnav" class="fixed-top">
        <div class="container-fluid">
            <span onclick="window.location.href = 'login_elibrary.html';"><img src="logocow.png" alt=""></span>
          <span class="topnavhead" onclick="window.location.href = 'login_elibrary.html';">E-library</span>
           <img src="user.png" alt="" onclick="window.location.href = 'myprofile.html';" class="user_icon">
            
       
        </div>
      </nav>
     <main>
      <form action="connection.php" method="post" enctype="multipart/form-data">
        <label for="book_name">Book Name:</label>
        <input type="text" id="book_name" name="book_name" required><br><br>
      
        <label for="author_name">Author Name:</label>
        <input type="text" id="author_name" name="author_name" required><br><br>
      
        <label for="book_image">Book Image:</label>
        <input type="file" id="book_image" name="book_image" value="upload_image"><br><br>
        <label for="book_image">Book:</label>
        <input type="file" id="book_pdf" name="book_pdf" value="upload_file">
        <input type="submit" value="Save">
      </form>
    </main>

    <?php
    $folder = "/uploads";
    echo $_FILES["book_image"];
?>
    </body>
    </html>