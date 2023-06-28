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
            <span onclick="window.location.href = 'login_elibrary.html';" class="topnavhead"><img src="logocow.png" class="logo_cow" alt=""></span>
          <span onclick="window.location.href = 'login_elibrary.html';" class="topnavhead" >E-library</span>
          <button class="my_collection" onclick="window.location.href = 'my_collection.html';" >My collection</button>
        </div>
      </nav>

  
      <div class="container">
        <div class="box">
            <img src="" alt="">
            <table>
              <tbody>
                  <tr>
                      <td>Name</td>
                      <td>:</td>
                      <td>ImDezCode</td>
                  </tr>
                  <tr>
                      <td>Email</td>
                      <td>:</td>
                      <td>imdezcode@gmail.com</td>
                  </tr>
                  <tr>
                      <td>Address</td>
                      <td>:</td>
                      <td>Dehradun, Uttrakhand</td>
                  </tr>
                  <tr>
                      <td>Hobbies</td>
                      <td>:</td>
                      <td>Diving, Reading Book</td>
                  </tr>
                  <tr>
                      <td>Job</td>
                      <td>:</td>
                      <td>Web Developer</td>
                  </tr>
                  <!-- <tr>
                    <td><a href="edit_profile.html">Edit</a></td>
                  </tr> -->
              </tbody>
          </table>
          <button class="edit_profile" href="edit_profile.html">Edit</button>
        </div>
        <div class="About">
            <ul>
                <h3>Bio</h3>
                <p style="font-size: small;">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its
                    layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using
                    'Content here, content here', making it look like readable English. Many desktop publishing packages and web page
                    editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites
                    still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose
                    (injected humour and the like).</p>
            </ul>
            <ul>
              <div class="contact">
                <h3>Contact</h3>
                <li>Email: example@gmail.com</li>
                <li>Contact no.: 1234567899</li>
                <li>Address: Dehradun,Uttrakhand</li>
              </div>
            </ul>
        </div>
    </div>
    <?php include('includes/footer.php');?>