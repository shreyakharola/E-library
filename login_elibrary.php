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
          <span onclick="window.location.href = 'login_elibrary.php';" class="topnavhead"><img src="logocow.png" class="logo_cow" alt=""></span>
        <span onclick="window.location.href = 'login_elibrary.php';" class="topnavhead" >E-library</span>
           <img src="user.png" alt="" onclick="window.location.href = 'myprofile.php';" class="user_icon">
            <button class="addbook" onclick="window.location.href = 'add_book.php';">Add book</button>
            <button class="logout" onclick="window.location.href = 'logout.php';">Log out</button>
        </div>
      </nav>

    
<main style="margin: 10px;">
      <header style="margin: 60px;">
       <h2>Books of all kinds</h2>
      </header>

        <!-- A div with container id to hold the card -->
        <div id="card_container" >
            
  
          <!-- A div with card class for the card  -->
          <div class="card">
            <img onclick="window.location.href = 'book_description.php';" src="book1.jpg" alt="Harry Potter" class="card_image">
      
            <!-- A div with card__details class to hold the details in the card  -->
            <div class="card__details">
      
              <!-- Span with genre class for the genre -->
              <span class="genre">Fiction</span>
              <span class="genre">Mystry</span>
              
      
              <!-- A div with name class for the name of the card -->
              <div class="name">Heart Spring Mountain</div>
              <span class="author">Robin MacArthur</span>
              <p>In this evocative first novel, a young woman returns to her rural Vermont hometown in the wake of a devastating storm to search for home but  ... </p>
      
              <button class="read_more" onclick="window.location.href = 'book_description.php';">Read more</button>
            </div>
      
      
          </div>

          <div class="card">
            <img onclick="window.location.href = 'book_description.php';" src="book2.jpg" alt="To kill a mockingbird" class="card_image">
      
            <!-- A div with card__details class to hold the details in the card  -->
            <div class="card__details">
      
              <!-- Span with genre class for the genre of book -->
              <span class="genre">Thriller</span>
              <span class="genre">Domestic Fiction</span>
      
              <!-- A div with name class for the name of the card -->
              <div class="name">To kill a mockingbird</div>
              <span class="author">Harper Lee</span>
              <p>To Kill a Mockingbird is primarily an example of Southern Gothic fiction in that it takes place in the South, contains both dark and comedic elements, </p>
      
              <button class="read_more">Read more</button>
            </div>
      
      
          </div>

          
          <div class="card">
            <img onclick="window.location.href = 'book_description.php';" src="book3.jpg" alt="Harry Potter" class="card_image">
      
            <!-- A div with card__details class to hold the details in the card  -->
            <div class="card__details">
      
              <!-- Span with genre class for the genre -->
              <span class="genre">Fiction</span>
              <span class="genre">Thriller</span>
      
              <!-- A div with name class for the name of the card -->
              <div class="name">Harry Potter</div>
              <span class="author">J.K. Howling</span>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consectetur sodales morbi dignissim sed diam
                pharetra
                vitae ipsum odio.</p>
      
              <button class="read_more">Read more</button>
            </div>
      

           
        
        
            </div>
            <div class="card">
              <img onclick="window.location.href = 'book_description.php';" src="book2.jpg" alt="Harry Potter" class="card_image">
        
              <!-- A div with card__details class to hold the details in the card  -->
              <div class="card__details">
        
                <!-- Span with genre class for the genre -->
                <span class="genre">Nature</span>
        
                <span class="genre">Lake</span>
        
                <!-- A div with name class for the name of the card -->
                <div class="name">Harry Potter</div>
                <span class="author">J.K. Howling</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consectetur sodales morbi dignissim sed diam
                  pharetra
                  vitae ipsum odio.</p>
        
                <button class="read_more">Read more</button>
              </div>
          </div>
 <!-- card 5 -->
 <div class="card">
  <img onclick="window.location.href = 'book_description.php';" src="book1.jpg" alt="Harry Potter" class="card_image">

  <!-- A div with card__details class to hold the details in the card  -->
  <div class="card__details">

    <!-- Span with genre class for the genre -->
    <span class="genre">Nature</span>

    <span class="genre">Lake</span>

    <!-- A div with name class for the name of the card -->
    <div class="name">Harry Potter</div>
    <span class="author">J.K. Howling</span>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consectetur sodales morbi dignissim sed diam
      pharetra
      vitae ipsum odio.</p>

    <button class="read_more">Read more</button>
  </div>
        </div>
       <!-- card 6 -->
  <div class="card">
    <img onclick="window.location.href = 'book_description.php';" src="book2.jpg" alt="Harry Potter" class="card_image">
  
    <!-- A div with card__details class to hold the details in the card  -->
    <div class="card__details">
  
      <!-- Span with genre class for the genre -->
      <span class="genre">Nature</span>
      <span class="genre">Lake</span>
  
      <!-- A div with name class for the name of the card -->
      <div class="name">Harry Potter</div>
      <span class="author">J.K. Howling</span>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consectetur sodales morbi dignissim sed diam
        pharetra
        vitae ipsum odio.</p>
  
      <button class="read_more">Read more</button>
    </div>
</div>
     <!-- card 7 -->
  <div class="card">
    <img onclick="window.location.href = 'book_description.php';" src="book1.jpg" alt="Harry Potter" class="card_image">
  
    <!-- A div with card__details class to hold the details in the card  -->
    <div class="card__details">
  
      <!-- Span with genre class for the genre -->
      <span class="genre">Nature</span>
  
      <span class="genre">Lake</span>
  
      <!-- A div with name class for the name of the card -->
      <div class="name">Harry Potter</div>
      <span class="author">J.K. Howling</span>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consectetur sodales morbi dignissim sed diam
        pharetra
        vitae ipsum odio.</p>
  
      <button class="read_more">Read more</button>
    </div>
    </div>
  </main>
      </body>
      </html>
      
      