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
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Mrs+Saint+Delafield&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mrs+Saint+Delafield&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&family=Quicksand:wght@300&family=Roboto:wght@300;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
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
             <h1 class="heading">Welcome To <span>ABC PVT</span></h1>
             <h1 class="heading">SCHOOL</h1>
             <h6>You are welcome to the ABC School's student report management system.
               This is a software solution designed to help schools track and manage all their student data – everything from thier admission year, student id, profile and more.
               Since student play a major part of an institution, this system will help the institution to keep track of all the students details in one stretch.
               This will also reduce the involvement of many pen paper work. If you want to get details of any student,
             it can be searched up within minutes rather than looking upon huge heap of files.</h6>
          </div>
          <div class="col-lg-6">
            <img src="images/homepage_img.png" class="image" alt="">
          </div>
        </div>
      </div>
    </section>
    <section id="about-project">
      <h1 class="h" >About Project</h1>
      <h4 class="h-1">school report management system</h4>
      <div class="row r-1">
        <div class="col-lg-6 pic_3">
          <img src="images/pic_3.png" alt="">
        </div>
        <div class="col-lg-6 about">
          <h3 class="h-2">Our Vision</h3>
          <div class="p-2">
            <p class="p-1">This system provides us a simple
interface for maintainance of student information.It can be used by educational
institutes or colleges to maintain the records of students easily. Throughout the project the focus has been on presenting information in an easy and
intelligible manner.The system provides facilitiies to create profiles of students
thus reducing paperwork and automating the record genreration process in an
educational institution.The vision of Student information System is to allow the administrator of
any organization to edit and find out the personal details of a student and
allows the student to keep up to date his profile .It’ll also facilitate keeping all
the records of students, such as their id, name, year of admission, phone
number, DOB etc. So all the information about an student will be available in a
few seconds.</p>
          </div>
        </div>
      </div>
  </section>
  <footer>
    <div class="row">
      <div class="col-lg-6 f-c-4">
        <h5 class="f-p-1"><i class="las la-university"></i>Student Report Management System</h5>
        <p class="f-p">Lorem ipsum dolor sit amet
          <p class="f-p">consectetur adipiscing elit</p>
          <p class="f-p">labore et dolore magna aliqua</p>
          <p class="f-p">sed do eiusmod tempor incididunt ut</p>
      </div>
      <div class="col-lg-6">
        <div class="footer-content">
          <h5 class="f-c-1">Project Done By </h5>
          <p class="f-c-2"><i class="las la-female" ></i>Anju Suresh</p>
          <p class="f-c-2"><i class="las la-female"></i>E Anjali Shankar</p>
          <p class="f-c-2"><i class="las la-male"></i>Adarsh S Kumar</p>
          <p class="f-c-2"><i class="las la-female"></i>Arya Suresh</p>
        </div>
      </div>
    </div>
  </footer>
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
