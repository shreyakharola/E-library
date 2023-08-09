<?php session_start();?> 
<?php include('includes/header.php');?>
  <body>

    <!-- navbar -->
    <nav class="topnav" class="fixed-top">
      <div class="container-fluid">
        <span onclick="window.location.href = 'login_elibrary.php';" class="topnavhead"><img src="logocow.png" class="logo_cow" alt=""></span>
        <span onclick="window.location.href = 'login_elibrary.php';" class="topnavhead" >E-library</span>
      </div>
    </nav>
    <main>
      <!-- sidenav -->
      <div class="sidenav">
        <a href="login_elibrary.php">Home</a>
        <a href="myprofile.html">My Profile</a>
        <a href="about.php">About</a>
        <a href="about.php">Contact</a>
      </div>
      <!-- main  -->
        <div class="first_row">
        <h4>My collection (10) <i class="arrow right"></i></h4>
        <section class="my_collection_section">
            <div class="pic-container">
              <div class="pic-row">
                <img onclick="window.location.href = 'book_description.php';" class="book_cover" src="book1.jpg">
                <img class="book_cover" src="book2.jpg">
                <img class="book_cover" src="book3.jpg">
                <img class="book_cover" src="book1.jpg">
                <img class="book_cover" src="book2.jpg">
                <img class="book_cover" src="book3.jpg">
              </div>
            </div>
          </section>
        </div>

        <div class="second_row">
            <h4>Recently viewed <i class="arrow right"></i></h4>
            <section class="my_collection_section">
                <div class="pic-container">
                  <div class="pic-row">
                    <img onclick="window.location.href = 'book_description.php';" class="book_cover" src="book1.jpg">
                    <img class="book_cover" src="book2.jpg">
                    <img class="book_cover" src="book3.jpg">
                    <img class="book_cover" src="book1.jpg">
                    <img class="book_cover" src="book2.jpg">
                    <img class="book_cover" src="book3.jpg">
                  </div>
                </div>
              </section>
            </div>

      </main>
      <?php include('includes/footer.php');?>