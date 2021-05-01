<?php
 session_start();
 if(!isset($_SESSION['adminloginid'])){
   header("location: admin_login.php");
 }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Panel Page</title>
    <link rel="stylesheet" href="main/css/bootstrap-responsive.css">
    <style>

      body{
        margin: o;
        padding: 0;
      }
      div.header{
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0 60px;
        background-image: linear-gradient(to right,#2a2a72, #009ffd);
      }
      div.header button{
        padding: 10px;
        margin: 15px;
      }
    </style>
  </head>
  <body>
     <div class="header">
       <h2>Welcome to ABC panel - <?php echo($_SESSION['adminloginid']) ?></h2>
       <form class="" method="POST">
         <button type="button" name="logout">LOG OUT</button>
       </form>
     </div>
     <?php
      if (isset($_POST['logout'])) {
        session_destroy();
        header("location: admin_login.php");
      }
      ?>
  </body>
</html>
