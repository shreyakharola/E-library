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

      <main class="book_upload">  
      <form action="upload.php" method="post" enctype="multipart/form-data" accept="image/x-png,image/gif,image/jpeg" id="addbook_form">
        <label for="book_name">Book Name:</label><br><br>
        <input type="text" id="book_name" name="book_name" required><br><br>
        <label for="author_name">Author Name:</label><br><br>
        <input type="text" id="author_name" name="author_name" required><br><br>
        <label for="book_description">book_description:</label><br><br>
        <textarea id="book_textarea" rows="8" cols="100" name="book_description" style="background-color:#ddd; font-size:15px" required>    Write Book Description............. </textarea><br><br>
        <label for="fileToUpload">Book Upload:</label>
        <input type="file" name="book_image" id="fileToUpload">
        <div class="addbook_submit">
        <button class="add_book_button" type="submit" value="submit" name="submitted">Submit</button>
        </div>     
      </form>
    </main>
      </div>
      
      <?php include('includes/footer.php');?>
    