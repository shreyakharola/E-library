
<?php include('includes/header.php'); ?>
<?php session_start();

//checking if the session exists
//if the session is not set it redirects the user to the login form/page

  if(! isset($_SESSION["logged"])){
      header("location:login_page.php");
  }
  ?>
  <body>
    <nav class="topnav" class="fixed-top">
      <div class="container-fluid">
          <span onclick="window.location.href = 'elibrary.php';" class="topnavhead"><img src="logocow.png" class="logo_cow" alt=""></span>
        <span onclick="window.location.href = 'elibrary.php';" class="topnavhead" >E-library</span>
        </div>
      </nav>
      <div id="login-form-wrap">
        <h2 class="login_header">User Login</h2>
        <form id="login-form" action="login_conn.php" method="post">
          <p>
          <input type="text" id="username" name="username" placeholder="Username/email" required><i class="validation"><span></span><span></span></i>
          </p>
          <p>
          <input type="password" id="password" name="password" placeholder="password" required><i class="validation"><span></span><span></span></i>
          </p>
          <label for="user type"><b>User Type</b></label>
          <input type="radio" name="usertype" value="user" id="choice-1" >
              <label for="choice-1">User</label>
          <input type="radio" name="usertype" value="admin" id="choice-2">
              <label for="choice-2">Admin</label>


          <p>
          <input type="submit" id="login" value="Login" name="login">
          </p>
        </form>
        <div id="create-account-wrap">
          <p>forgot password? <a href="#">Click here</a></p>  
          <p>Not a member? <a class="register_link" href="registration_form.php">Register</a></p>
          <h4 style="color: black; margin:5px 0 20px;">OR</h4>
         <a href="#" class="google"><i class="fa fa-google fa-fw">
                      </i> Login with Google+
                    </a>
                  
        </div>
</div>

      <script>
        window.onscroll = function() {myFunction()};
        
        var header = document.getElementById("myHeader");
        var sticky = header.offsetTop;
        
        function myFunction() {
          if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
          } else {
            header.classList.remove("sticky");
          }
        }
   
        </script>
  </body>
</html>