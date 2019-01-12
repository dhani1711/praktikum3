 <?php
  session_start();
  include("function.php");
  echo check_login();
  ?>

  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head><title>praktik login session</title></head>
    <style media="screen">
      body{
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100%;
        background-image: url(computer_keyboard_mouse_laptop_mac_apple_66734_300x168.jpg);
      }
    </style>
    <body>
      <h1>Selamat Datang</h1>
      <h3><a href="profil.php">Edit Profil</a></h3>
      <h3><a href="logout.php">Logout!</a></h3>
    </body>
  </html>
