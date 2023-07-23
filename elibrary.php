<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-library</title>
    <link rel="stylesheet" href="elibrary.css">
    <!-- <link rel="icon" href="./favicon.ico" type="image/x-icon"> -->
  </head>
  <body>
  <div class="bgimg-1">
  <nav class="topnav" class="fixed-top">
      <div class="container-fluid">
          <span onclick="window.location.href = 'elibrary.php';" class="topnavhead"><img src="logocow.png" class="logo_cow" alt=""></span>
        <span onclick="window.location.href = 'elibrary.php';" class="topnavhead" >E-library</span>
        </div>
      </nav>
      <div class="content_elibrary">
     <div>WELCOME!!!</div>
      <span>To the new world of books...</span>
      
      <span><button onclick="window.location.href = 'login_page.php';"class="signin"> Signin/Signup</button></span>
    </div>
    </div>
<?php include('includes/footer.php');?>