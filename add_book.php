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
            <span onclick="window.location.href = 'login_elibrary.html';"><img src="logocow.png" alt=""></span>
          <span class="topnavhead" onclick="window.location.href = 'login_elibrary.html';">E-library</span>
           <img src="user.png" alt="" onclick="window.location.href = 'myprofile.html';" class="user_icon">
            

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
      
    

   
      <form action="upload.php" method="get" enctype="multipart/form-data" accept="image/x-png,image/gif,image/jpeg">
        <label for="book_name">Book Name:</label>
        <input type="text" id="book_name" name="book_name" required><br><br>
        <label for="author_name">Author Name:</label>
        <input type="text" id="author_name" name="author_name" required><br><br>
        <label for="book_description">book_description:</label>
        <input type="text" id="book_description" name="book_description" style="height:200px" required><br><br>
        <!-- <label for="book_image">Upload Book Image:</label>
        <input type="file" id="book_image" name="book_image" value="upload_image" required><br><br>
        <label for="book_pdf" required>Upload Book:</label>
        <input type="file" id="book_pdf" name="book_pdf" value="upload_file" required> -->

        <label for="fileToUpload">Book Upload:</label>
        <input type="file" name="fileToUpload" id="fileToUpload">

        <div class="addbook_submit">
        <button class="add_book_button" type="submit" value="submit" name="submitted">Submit</button>
        </div>     
      </form>
      </div>
  

    </body>
    </html>
    