<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-library</title>
    <link rel="stylesheet" href="elibrary.css">
    
  </head>
  <body>
    <nav class="topnav" class="fixed-top">
      <div class="container-fluid">
          <span onclick="window.location.href = 'elibrary.php';" class="topnavhead"><img src="logocow.png" class="logo_cow" alt=""></span>
        <span onclick="window.location.href = 'elibrary.php';" class="topnavhead" >E-library</span>
        </div>
      </nav>
      <div id="login-form-wrap">
        <h2 class="login_header">Login</h2>
        <form id="login-form" action="login_conn.php" method="post">
          <p>
          <input type="text" id="username" name="username" placeholder="Username/email" required><i class="validation"><span></span><span></span></i>
          </p>
          <p>
          <input type="password" id="password" name="password" placeholder="password" required><i class="validation"><span></span><span></span></i>
          </p>
          <p>
          <input type="submit" id="login" value="Login" name="login">
          </p>
        </form>
        <div id="create-account-wrap">
          <p>forgot password? <a href="#">Click here</a></p>  
          <p>Not a member? <a href="registration_form.html">Register</a></p>
          <h4 style="color: grey;">OR</h4>
         <a href="#" class="google"><i class="fa fa-google fa-fw">
                      </i> Login with Google+
                    </a>
                  
        </div><!--create-account-wrap-->
      <!--login-form-wrap-->
                  
            <!-- google login  -->
      <!-- partial -->
      
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