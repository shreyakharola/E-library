<?php include('includes/header.php');?>
  <body>
    <nav class="topnav" class="fixed-top">
        <div class="container-fluid">
          <span onclick="window.location.href = 'elibrary.php';" class="topnavhead"><img src="logocow.png" class="logo_cow" alt=""></span>
          <span onclick="window.location.href = 'elibrary.php';" class="topnavhead" >E-library</span>
        </div>
      </nav>
      <div id="login-form-wrap">
        <h2 style="margin: 10px">Register</h2>
        <form action="registration_conn.php" method="POST" id="login-form">
          <p>
            <input type="text" id="firstname" name="firstname" placeholder="firstname" required><i class="validation"><span></span><span></span></i>
            </p>
            <p>
              <input type="text" id="lastname" name="lastname" placeholder="lastname" required><i class="validation"><span></span><span></span></i>
              </p>
          <p>
          <input type="text" id="username" name="username" placeholder="Username/email" required><i class="validation"><span></span><span></span></i>
          </p>
          <p>
          <input type="email" id="email" name="email" placeholder="email" required><i class="validation"><span></span><span></span></i>
          </p>
          <p>
          <input type="password" id="password" name="password" placeholder="password" required><i class="validation"><span></span><span></span></i>
          </p>
          <p>
          <input type="password" id="password" name="confirm_password" placeholder="confirm password" required><i class="validation"><span></span><span></span></i>
          </p>
          
          <label for="usertype"><b>User Type</b></label>
          <input type="radio" name="usertype" value="user" id="choice-1">
              <label for="choice-1">User</label>
          <input type="radio" name="usertype" value="admin" id="choice-2">
              <label for="choice-2">Admin</label>
          <p>
          <input type="submit" id="register" value="Register"  name="submitted">
          </p>
         
        </form>
        <div>
          <p>Already have an account?<a style="color:rgb(76, 202, 252)" href="login_page.php">Login</a><p> 
          </div>
                  