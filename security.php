<?php

  session_start();

//checking if the session exists
//if the session is not set it redirects the user to the login form/page

  if(! isset($_SESSION["logged"])){
      header("location:login_page.php");
  }

?>