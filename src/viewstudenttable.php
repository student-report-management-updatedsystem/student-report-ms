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
          <a href="../panel.php" class="active"><span class="las la-school"></span>
            <span>Dashboard</span></a>
        </li>
        <li>
          <a href="../src/viewstudenttable.php"><span class="las la-user-graduate"></span>
            <span>View</span></a>
        </li>
        <li>
          <a href="../src/addstudent.php"><span class="las la-graduation-cap"></span>
            <span>Add</span></a>
        </li>
        <li>
          <a href=""><span class="las la-user-minus"></span>
            <span>Delete</span></a>
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

       <form class="search" action="../search.php" method="post" >
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
                 <th>name of student</th>
                 <th>YOA</th>
                 <th>Phone</th>
                 <th>gender</th>
                 <th colspan="3">operation</th>

               </tr>
               <tbody>
                 <?php

                 include 'auth.php';
                 $selectquery =" select * from student";
                 $query = mysqli_query($conn,$selectquery);

                   while($res=mysqli_fetch_array($query))
                   {?>
                     <tr>
                         <td><?php echo $res['student_id']; ?></td>
                         <td><?php echo $res['name'];?> <?php echo $res['last_name'];?></td>
                         <td><?php echo $res['yoa'];?></td>
                         <td><?php echo $res['parent'];?></td>
                         <td><?php echo $res['gender'];?></td>
                         <td><i class="fa fa-edit" aria-hidden="true"></i></td>
                           <td><a href="deletestudent.php?id=<?php echo $res['id']; ?>"<i class="fa fa-trash" aria-hidden="true"></i></td>
                         <td><a href="student.php?id=<?php echo $res['id']; ?>"><i class="fa fa-id-badge" aria-hidden="true"></i></td>

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

</body>
</html>
