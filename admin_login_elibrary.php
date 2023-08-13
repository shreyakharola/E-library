<?php
// Connect to the database
require_once 'connection.php';
 include('security.php');


// Number of books to display per page
$itemsPerPage = 5;

// Initialize the current page number
$currentPage = isset($_GET['page']) ? max(1, intval($_GET['page'])) : 1;

// Calculate the starting index for the SQL query
$startIndex = ($currentPage - 1) * $itemsPerPage;

// Initialize a variable to hold the search results
$searchResults = null;
$totalItems = 0;

// Check if the search form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the search query
    $searchQuery = isset($_POST['search_query']) ? trim($_POST['search_query']) : '';

    if (!empty($searchQuery)) {
        // Fetch data from the database based on the search query
        $query = "SELECT * FROM addbook 
                  WHERE book_name LIKE :searchQuery 
                  OR author_name LIKE :searchQuery 
                  OR book_genre LIKE :searchQuery 
                  OR book_description LIKE :searchQuery
                  LIMIT :startIndex, :itemsPerPage";
        $stmt = $pdo->prepare($query);
        $stmt->bindValue(':searchQuery', '%' . $searchQuery . '%');
        $stmt->bindValue(':startIndex', $startIndex, PDO::PARAM_INT);
        $stmt->bindValue(':itemsPerPage', $itemsPerPage, PDO::PARAM_INT);
        $stmt->execute();
        $searchResults = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Get the total number of search results
        $queryCount = "SELECT COUNT(*) FROM addbook 
                       WHERE book_name LIKE :searchQuery 
                       OR author_name LIKE :searchQuery 
                       OR book_genre LIKE :searchQuery 
                       OR book_description LIKE :searchQuery";
        $stmtCount = $pdo->prepare($queryCount);
        $stmtCount->bindValue(':searchQuery', '%' . $searchQuery . '%');
        $stmtCount->execute();
        $totalItems = $stmtCount->fetchColumn();
    }
} else {
    // Fetch all books with pagination
    $query = "SELECT * FROM addbook LIMIT :startIndex, :itemsPerPage";
    $stmt = $pdo->prepare($query);
    $stmt->bindValue(':startIndex', $startIndex, PDO::PARAM_INT);
    $stmt->bindValue(':itemsPerPage', $itemsPerPage, PDO::PARAM_INT);
    $stmt->execute();
    $searchResults = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Get the total number of items in the database
    $totalItems = $pdo->query("SELECT COUNT(*) FROM addbook")->fetchColumn();
}

// Calculate total number of pages
$totalPages = ceil($totalItems / $itemsPerPage);
?>

<?php include('includes/header.php');?>
<script>
function myFunction() {
  var dropdown = document.getElementById("myDropdown");
  if (dropdown) {
    dropdown.classList.toggle("show");
  }
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.user_icon')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

  <body>
    <nav class="topnav" class="fixed-top">
      <div class="container-fluid">
          <span onclick="window.location.href = 'login_elibrary.php';" class="topnavhead"><img src="logocow.png" class="logo_cow" alt=""></span>
        <span onclick="window.location.href = 'login_elibrary.php';" class="topnavhead" >E-library</span>
        
  </div>
<div class="dropdown">
 <img src="user.png" alt="" class="user_icon" onclick="myFunction()" > 
 <div id="myDropdown" class="dropdown-content"> 
     <a onclick="window.location.href = 'add_book.php';">Add book</a>  
     <a onclick="window.location.href = 'myprofile.php';">My profile</a> 
     <a onclick="window.location.href = 'my_collection.php';">My Collection</a> 
     <a onclick="window.location.href = 'about.php';">About Us</a> 
     <a onclick="window.location.href = 'logout.php';">Log out</a> 
    </div>
</div>
      </nav>
    <header>
      <div class="row_elibrary">
        <div class="column_1el">
        <h2 onclick="window.location.href = 'login_elibrary.php';" class="h2_login_elibrary">Books of all kinds</h2>
        </div>
        <div class="column_2el">
        <form method="POST" action="login_elibrary.php" class="search-form">
    <input type="text" name="search_query" placeholder="Search for books...">
    <button type="submit">Search</button>
</form>
</div>
</div>
    </header>
<main>
    <!-- A div with container id to hold the card -->
    <div id="card_container" >

        <?php

// Loop through each book and create the card dynamically
foreach ($searchResults as $book) {
    $book_name = $book['book_name'];
    $author_name = $book['author_name'];
    $book_genre = $book['book_genre'];
    $book_description = $book['book_description'];
    $book_image = $book['book_image'];

            // Output the card HTML with book details
            echo '
 <div class="card">
 <a href="book_description.php?book_name=' . urlencode($book_name) . '">
 <img src="' . $book_image . '" class="card_image">
</a>
 <!-- A div with card__details class to hold the details in the card  -->
                <div class="card__details">

                    <!-- Span with genre class for the genre -->
                    <span class="genre">' . $book_genre . '</span>
                    <!-- Note: You may need to modify the genre output based on how genres are stored in the database -->

                    <!-- A div with name class for the name of the card -->
                    <div class="name">' . $book_name . '</div>
                    <span class="author">' . $author_name . '</span>
                    <p class="limited-description">' . substr($book_description, 0, 100) . '...</p>
                    <!-- Full description (hidden initially) -->
                    <p class="full-description" style="display:none;">' . $book_description . '</p>

                    <button class="read_more" onclick="window.location.href = \'book_description.php\';">Read more</button>
                </div>
            </div>
            ';
        }
        ?>

    </div>
    <div class="pagination">
        <?php
        // Display "Previous" link
        if ($currentPage > 1) {
            $prevPage = $currentPage - 1;
            echo '<a href="login_elibrary.php?page=' . $prevPage . '"><<</a>';
        }

        // Display page numbers
        for ($page = 1; $page <= $totalPages; $page++) {
            if ($page === $currentPage) {
                echo '<a class="active" href="login_elibrary.php?page=<?= $page; ?>' . $page . '">' . $page . '</a>';
            } else { 
                echo '<a href="login_elibrary.php?page=' . $page . '">' . $page . '</a>';
            }
        }

        // Display "Next" link
        if ($currentPage < $totalPages) {
            $nextPage = $currentPage + 1;
            echo '<a href="login_elibrary.php?page=' . $nextPage . '">>></a>';
        }
        ?>
    </div>
</main>
<?php include('includes/footer.php'); ?>

