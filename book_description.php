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

        <div class="row">
          <div class="column1">
            <img src="book1.jpg" alt="book1" width="200" height="300">
            <div class="rating">
              <h4 style="float: left; font-size: x-small;">Ratings:</h4>
              <input type="radio" id="star5" name="rating" value="5" /><label for="star5"></label>
              <input type="radio" id="star4" name="rating" value="4" /><label for="star4"></label>
              <input type="radio" id="star3" name="rating" value="3" /><label for="star3"></label>
              <input type="radio" id="star2" name="rating" value="2" /><label for="star2"></label>
              <input type="radio" id="star1" name="rating" value="1" /><label for="star1"></label>
          </div>      
        </div>

      <div class="column2">
        <div class="book">
          <h3>About the Book</h3>
          <p class="about_book">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla at dui vitae velit ultricies semper vel nec magna. In hac habitasse platea dictumst. Sed euismod nunc non ipsum interdum, vel lacinia velit tempor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nullam id enim vel nisl aliquet tempus. Nullam bibendum pretium pharetra. In auctor, neque eu feugiat imperdiet, orci velit euismod ipsum, a sollicitudin nunc libero sed arcu. In pulvinar interdum magna, eget malesuada neque consequat vitae. Sed eleifend faucibus sapien vel fringilla. Vestibulum malesuada tincidunt ligula, vitae placerat leo varius vel. Duis congue odio ipsum, a dignissim mi maximus non.</p>
          <br><p class="downloads">Downloads: 1000</p><br>
  <button class="download-btn">Download</button>
</div>
<?php include('includes/footer.php');?>