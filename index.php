<?php
 require("connection.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABC School</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet">
  </head>
  <body>
    <section id="homepage">
      <div class="container">
        <nav class="navbar">
          <h5 class="navbar-brand">ABC</h5>
          <ul class="navbar-nav ml-auto">
            <button type="button" id="button" class="button btn-1">Login</button>
          </ul>
        </nav>
        <div class="row">
          <div class="col-lg-6">
             <h1 class="heading">Welcome to <span>ABC PVT</span></h1>
             <h1 class="heading">SCHOOL</h1>
             <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h6>
             <div class="btn-3">
               <a href="admin_login.php"><button type="button" class="btn-2" name="button">Login</button></a>
             </div>
          </div>
          <div class="col-lg-6">
            <img src="images/homepage_img.png" class="image" alt="">
          </div>
        </div>
      </div>
    </section>

    <!-- modal section -->
     <div class="bg-modal">
       <div class="modal-contents">
         <div class="close">+</div>
          <img class="pic_2" src="images/pic_2.png" alt="">
          <form method="POST">
            <input type="text" placeholder="Name" name="AdminName" >
            <input type="password" placeholder="PassWord" name="AdminPassword">
            <button type="submit" class="button" name="SignIn">Sign In</button>
          </form>
       </div>
     </div>
     <script>
       document.getElementById('button').addEventListener("click", function(){
         document.querySelector('.bg-modal').style.display = "flex";
       });
       document.querySelector('.close').addEventListener("click", function(){
         document.querySelector('.bg-modal').style.display = "none";
       });
     </script>
     <?php
     if (isset($_POST['SignIn']))
        {
          $query = "SELECT * FROM `user` WHERE 'username'='$_POST[AdminName]' AND 'password'='$_POST[AdminPassword]'";
          $result = mysqli_query($conn,$query);
          if(mysqli_num_rows($result)==1)
          {
            session_start();
            $_SESSION['adminloginid']=$_POST['AdminName'];
            header("location: panel.php");
          }
          else{
            echo"<script>alert('Incorrect Password');</script>";
          }
        }
      ?>
  </body>
</html>
