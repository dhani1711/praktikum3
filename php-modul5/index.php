<?php
  session_start();
  if (isset($_SESSION["user"])) {
    header("location:beranda.php");
  }
  include("function.php");
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head><title>LOGIN</title></head>
   <style media="screen">
   body {
  background-image: url(computer_keyboard_mouse_laptop_mac_apple_66734_300x168.jpg);
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100%;
  display: block;
  text-align :center;
  position: center;
  padding-top: 150px;
  font-size: 25px;
}

   </style>
   <body>
     <?php
        if (isset($_GET["error"])) {
          if ($_GET["error"] == "wrong") {
            echo "<h1>Username dan Password salah !</h1>";
          }
        }

        if (isset($_GET["notif"])) {
          if ($_GET["notif"] == "logout") {
            echo "<h1>Berhasil Logout! </h1>";
          }
        }

        if (isset($_POST['submit'])) {
          echo do_login($_POST['username'], $_POST['password']);
        }
      ?>
      <h1>LOGIN</h1>
      <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" class= "id">
        Username: <input type="text" name="username" id= "ib"><br>
        Password: <input type="password" name="password"><br>
        <input type="submit" name="submit" class="ij" value="SIGN IN">
      </form>
   </body>
 </html>
