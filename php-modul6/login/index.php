<!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head><title>LOGIN</title></head>
   <style media="screen">
   body {
  background-image: url(computer_keyboard_mouse_laptop_mac_apple_66734_300x168.jpg);
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
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
            echo "<h1>NIS atau Password salah !</h1>";
          }
        }

        if (isset($_GET["notif"])) {
          if ($_GET["notif"] == "success") {
            echo "<h1>Login Sukses</h1>";
          }
        }

        if (isset($_POST['submit'])) {
          echo do_login($_POST['nis'], $_POST['password']);
        }
    ?>
      <h1>LOGIN</h1>
      <form action="function.php" method="post" class= "id">
        NIS: <input type="text" name="nis"><br>
        Password: <input type="password" name="password"><br>
        <input type="submit" name="submit" class="ij" value="SIGN IN">
      </form>
      
   </body>
 </html>

 
