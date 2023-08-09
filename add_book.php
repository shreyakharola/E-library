<?php session_start();?> 
<?php include('includes/header.php');?>

  <body>
    <nav class="topnav" class="fixed-top">
        <div class="container-fluid">
            <span onclick="window.location.href = 'login_elibrary.php';" class="topnavhead"><img src="logocow.png" class="logo_cow" alt=""></span>
          <span onclick="window.location.href = 'login_elibrary.php';" class="topnavhead" >E-library</span>
 </div>
      </nav>
     <div class="addbook_form">
     

      <main class="book_upload">  
      <form action="upload.php" method="post" enctype="multipart/form-data" accept="image/x-png,image/gif,image/jpeg" id="addbook_form">
      <div class="row">
      <div class="column3">
      <label for="book_name">Book Name:</label>
      </div>
      <div class="column4">
        <input type="text" id="book_name" name="book_name" placeholder="Enter Book name" required>
        </div>
        </div>
        <br>
        <div class="row">
          <div class="column3">
        <label for="author_name">Author Name:</label>
        </div>
        <div class="column4">
        <input type="text" id="author_name" name="author_name" placeholder="Enter Author name" required>
        </div>
        </div>
        <br>
        <div class="row">
          <div class="column3">
        <label for="author_name">Book Genre:</label>
        </div>
        <div class="column4">
        <input type="text" id="author_name" name="book_genre" placeholder="Enter book genre" required>
        </div>
        </div>
        <br>
        <div class="row">
          <div class="column3">
        <label for="book_description">Book description:</label>
        </div>
        <div class="column4">
        <textarea type="text" class="description-input" name="book_description" placeholder="Write Book Description(not more than 25 words)" rows="8" cols="200" required></textarea>
        </div>
        </div>
        <label for="fileToUpload">Book Upload:</label>
        <input type="file" name="book_image" id="fileToUpload">
        <div class="addbook_submit">
        <button class="add_book_button" type="submit" value="submit" name="submitted">Submit</button>
        </div>      
      </form>
    </main>
      </div>

      <?php include('includes/footer.php');?>
    