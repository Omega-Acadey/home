</<?php

session_start();

 ?>

 <!DOCTYPE html>
   <head>
     <title>Home Page</title>
     <style>
.Home{
  font-family: bahnschrift;
  font-weight: bold;
}
</style>
   </head>
   <body>

     <a href="logout.php"> LOGOUT </a>
   <h1 class="Home">Welcome <?php echo $_SESSION['username']; ?></h1>

   </body>
 </html>
