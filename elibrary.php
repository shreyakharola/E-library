<?php session_start();?> 
<?php include('includes/header.php');?>
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