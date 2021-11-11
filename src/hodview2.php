<!DOCTYPE html>
<html>
<head>
  <title>VIEW STUDENT</title>
      <?php include 'tablelinks.php';?>
      <?php include 'tablestyles.php';?>
      <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
      <link rel="stylesheet" href="../viewstudent.css">
</head>
<body>
  <div class="sidebar">
    <div class="sidebar-brand">
      <h2><span class="lab la-accusoft"></span> ABC School</h2>
    </div>

    <div class="sidebar-menu">
      <ul>
        <li>
          <a class="active"><span class="las la-school"></span>
            <span>Dashboard</span></a>
        </li>

        <li>
          <a href="../index.php"><span class="las la-user-minus"></span>
            <span>Logout</span></a>
        </li>
        <li>
           <div id="clock">
             <div id="time">
               <div>
                 <span id="hour">00</span>
                 <span>hours</span>
               </div>
               <div>
                 <span id="minute">00</span>
                 <span>minutes</span>
               </div>
               <div>
                 <span id="second">00</span>
                 <span>seconds</span>
               </div>
             </div>
           </div>
        </li>
      </ul>
    </div>
  </div>

  <div class="main-content">
     <header>
       <h2>
         <label for="">
           <span class="las la-bars"></span>
         </label>

         Dashboard
       </h2>

       <form class="search" action="../search2.php" method="post" >
       <div class="search-wrapper">
       <button type="submit" ><i class="las la-search"></i></button>
       <input type="text" name="valueToSearch" placeholder="Search Here"required/></br>
        </div>
      </form>

       <div class="user-wrapper">
         <img src="https://img.icons8.com/pastel-glyph/64/000000/user-male--v1.png" width="40px" height="40px"/>
         <div>
           <h4>Arya Anju Anjali Adarsh</h4>
           <small>Super Admin</small>
         </div>
       </div>
     </header>
     <main>
       <div class="main-div">
       <h1 class="student_list">Student List</h1>
           <table>
             <thead>
               <tr>
                 <th>student_id</th>
                 <th>name</th>
                 <th>YOA</th>
                 <th>Phone</th>
                 <th>gender</th>
                 <th>class</th>
                 <th colspan="3">operation</th>

               </tr>
               <tbody>
                 <?php

                 include 'auth.php';
                 $selectquery =" select * from `kg-2` ORDER BY name ASC";
                 $query = mysqli_query($conn,$selectquery);

                   while($res=mysqli_fetch_array($query))
                   {?>
                     <tr>
                         <td><?php echo $res['student_id']; ?></td>
                         <td><?php echo $res['name'];?> <?php echo $res['last_name'];?></td>
                         <td><?php echo $res['yoa'];?></td>
                         <td><?php echo $res['parent'];?></td>
                         <td><?php echo $res['gender'];?></td>
                         <td><?php echo $res['class'];?></td>
                         <td><a href="student2.php?id=<?php echo $res['id']; ?>"><i class="fa fa-id-badge" aria-hidden="true"></i></td>

                         </tr>

                 <?php
                   }
                 ?>
               </tbody>
             </thead>

                 </table>
       </div>
     </div>
     </main>
     <script>
        var hours = document.getElementById("hour");
        var minutes = document.getElementById("minute");
        var seconds = document.getElementById("second");
        function clock()
        {
          var h = new Date().getHours();
          var m = new Date().getMinutes();
          var s = new Date().getSeconds();

          hours.innerHTML = h;
          minutes.innerHTML = m;
          seconds.innerHTML = s;
        }
        var interval = setInterval( clock, 1000);
     </script>
</body>
</html>
