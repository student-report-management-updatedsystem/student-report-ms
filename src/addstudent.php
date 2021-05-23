<html>
<head>
  <title>
     ADD STUDENT FORM
  </title>
  <link rel="stylesheet" href="../addstudent.css">
  <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
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
          <a href="../index.php"><span class="las la-user-minus"></span>
            <span>Logout</span></a>
        </li>
      </ul>
    </div>
  </div>

  <div class="main-content" style="background: #f1f5f9;">
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
       <input class="search_input" type="text" name="valueToSearch" placeholder="Search Here"required/></br>
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


     <main style="padding-top: 70px;">
       <div class="form" >
         <form method="POST" enctype="multipart/form-data">

         <div class="add">ADD NEW STUDENT
         </div>
         <br>


         <center>

         <table align="center">

           <tr align="left">
             <th>
                  <label for="fname">STUDENT ID</label>
             </th>
             <th></th>
             <th>
                 <input type="text" style="background-color: white; width:265px; height:30px;" placeholder="studentid" id="stdid"
                 value="AS01-<?php $prefix= md5(rand(1,10)); echo strip_tags(substr($prefix ,0,4));?>" name="stdid" readonly Required /><br>
             </th>
           </tr>


           <tr align="left">
             <th>
                  <label for="fname">FIRST NAME</label>
             </th>
             <th></th>
             <th>
                 <input type="text" style="background-color: white; width:265px; height:30px;" placeholder="First Name"id="fname"   name="fname" Required /><br>
             </th>
           </tr>


           <tr align="left">
             <th>
                  <label for="lname">LAST NAME</label>
             </th>
             <th></th>
             <th>
                 <input type="text" style="background-color: white; width:265px; height:30px;" id="lname" name="lname"placeholder="Second Name"  Required /><br>
             </th>
          </tr>


         <tr align="left">
           <th>
             <label for="report">REPORT</label>
           </th><th></th>
           <th><select name="report" placeholder="Choose from the options" id="report"
             style=
           "background-color: white; width:95%;padding: 15px;
           margin: 5px 0 22px 0;
           display: inline-block;
           border: none;" required>
             <option value="" disabled selected></option>
             <option value="Excellent">Excellent</option>

             <option value="Good">Good</option>

             <option value="Average">Average</option>

             <option value="Poor">Poor</option>
           </select>
         <br>
             </th>
          </tr>

           <tr align="left"><th>
           YEAR OF ADMISSION  </th><th></th><th><input type="number" name="yoa" placeholder="Choose the Year" min="2005" max="2021"steps="4"maxlength="4"style="background-color: white; width:265px; height:30px; "required/><br>
             </th>
          </tr>


         <tr align="left">
           <th>
           PARENT PHONE NO</th>
          <th>
          </th>
          <th><input type  ="tel" style="background-color: white; width:265px; height:30px;" name="phone"placeholder="Ten Digits"  maxlength="10"pattern="[0-9]{10}" required/><br>
             </th>
          </tr>


         <tr align="left">
           <th>
           DOB
         </th><th></th><th><input style="background-color: white; width:265px; height:30px;" type="date" max="2017-06-01"name="dob" required/><br>
             </th>
          </tr>

         <tr align="left"><th>
           GENDER </th><th></th><th><input type="radio" id="Male" name="gender" value="Male" required>
           <label for="Male">Male</label>
           <input type="radio" id="Female" name="gender" value="Female">
           <label for="Female">Female</label>
           <input type="radio" id="Other" name="gender" value="Other">
           <label for="Other">Other</label><br>
         </th></tr>


         <tr align="left">
             <th>
          UPLOAD PHOTO
         </th>
         <th>

         </th>
         <th><input style="background-color: white; "type="file" name="img" multiple required>
         </th>
         </tr>

         </table>

         <i><h5 style="color:red; text-align: center;">*All fields are mandatory</h5></i>

         &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
         <center>
           <button name="savestudent" class="button button1">Save Student</button>
         </center>
       </form></center>

         </div>
         </div >

     </main>

</body>
</html>

<?php

include 'auth.php';

if(isset($_POST['savestudent'])){
    $stdid=$_POST['stdid'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $report=$_POST['report'];
    $yoa=$_POST['yoa'];
    $phone=$_POST['phone'];
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];
    $img=$_POST['img'];

    $image_name = $_FILES['img']['name'] ;

    move_uploaded_file($_FILES['img']['tmp_name'], "simages/".$image_name);

    $insertquery="insert into student(`student_id`, `name`, `last_name`, `report`, `yoa`, `parent`, `dob`, `gender`, `file`)
    VALUES ('$stdid', '$fname','$lname','$report','$yoa','$phone','$dob','$gender','$image_name')";



mysqli_query($conn,$insertquery);

echo '<script>alert("New student added successfully")</script>';

}


?>
