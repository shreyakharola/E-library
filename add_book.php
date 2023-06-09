<?php session_start();?> 

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
            <span onclick="window.location.href = 'login_elibrary.html';" class="topnavhead"><img src="logocow.png" class="logo_cow" alt=""></span>
          <span onclick="window.location.href = 'login_elibrary.html';" class="topnavhead" >E-library</span>
 </div>
      </nav>
     <div class="addbook_form">
      <?php 
      if(isset($_SESSION['status']) && $_SESSION != '')
      {
        ?>
        <div class="alert"> <?php echo $_SESSION['status']; ?>
          <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
             This is an alert box.
        </div>

        <?php
        unset($_SESSION['status']);
      }
      ?>

      <main class="book_upload">  
      <form action="upload.php" method="post" enctype="multipart/form-data" accept="image/x-png,image/gif,image/jpeg" id="addbook_form">
        <label for="book_name">Book Name:</label>
        <input type="text" id="book_name" name="book_name" placeholder="Enter Book name" required><br><br>
        <label for="author_name">Author Name:</label>
        <input type="text" id="author_name" name="author_name" placeholder="Enter Author name" required><br><br>
        <label for="book_description">Book description:</label>
        <textarea type="text" class="description-input" name="book_description" placeholder="Write Book Description" rows="8" cols="200" required></textarea><br><br><br>
        <label for="fileToUpload">Book Upload:</label>
        <input type="file" name="book_image" id="fileToUpload">
        <div class="addbook_submit">
        <button class="add_book_button" type="submit" value="submit" name="submitted">Submit</button>
        </div>     
      </form>
    </main>
      </div>
      
      <?php include('includes/footer.php');?>
    