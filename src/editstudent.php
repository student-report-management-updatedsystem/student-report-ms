<html>
<head>
  <title>
     EDIT STUDENT FORM
  </title>
  <link rel="stylesheet" href="../editstudent.css">
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
  <main style="padding-top: 80px;">
    <form method="POST">

    <div class="edit-student"> EDIT STUDENT
    </div>
    <br>

    <?php

    include 'auth.php';


    $id=$_GET['id'];
    $selectquery = "select * from student where id=$id";

    $query = mysqli_query($conn,$selectquery);

    while($res=mysqli_fetch_array($query))
    {?>

      <table align="center" style="padding-left:300px;">

        <tr align="left">
          <th style="padding-bottom:14px;">
               <label for="fname">STUDENT ID</label>
          </th>
          <th></th>
          <th>
              <input type="text" style="width:265px; height:30px;" placeholder="studentid" id="stdid"
               name="stdid" value="<?php echo $res['student_id']; ?>" readonly Required /><br>
          </th>
        </tr>


        <tr align="left">
          <th style="padding-bottom:14px;">
               <label for="fname">FIRST NAME</label>
          </th>
          <th></th>
          <th>
              <input type="text" style="width:265px; height:30px;" placeholder="First Name"id="fname"   name="fname" value="<?php echo $res['name']; ?>" Required /><br>
          </th>
        </tr>


        <tr align="left">
          <th style="padding-bottom:14px;">
               <label for="lname">LAST NAME</label>
          </th>
          <th></th>
          <th>
              <input type="text" style="width:265px; height:30px;" id="lname" name="lname"placeholder="Second Name" value="<?php echo $res['last_name']; ?>" Required /><br>
          </th>
       </tr>


      <tr align="left">
        <th style="padding-bottom:14px;">
          <label for="report">REPORT</label>
        </th><th></th>
        <th><select name="report" id="report"
          style=
        "width:100%;padding: 15px;
        margin: 5px 0 22px 0;
        display: inline-block;
        border: none;
        background: #fff;" required>
          <value="<?php echo $res['report']; ?>">
          <option value="excellent">Excellent</option>

          <option value="good">Good</option>

          <option value="average">Average</option>

          <option value="poor">Poor</option>
        </select>
      <br>
          </th>
       </tr>

        <tr align="left"><th style="padding-bottom:14px; padding-right:5px;">
        YEAR OF ADMISSION  </th><th></th><th><input type="number" name="yoa" min="2005" max="2021"steps="4"maxlength="4"style="width:265px; height:30px; " value="<?php echo $res['yoa']; ?>" required/><br>
          </th>
       </tr>


      <tr align="left">
        <th style="padding-bottom:14px;">
        PARENT PHONE NO</th>
       <th>
       </th>
       <th><input type  ="tel" style="width:265px; height:30px;" name="phone"placeholder="Ten Digits"  maxlength="10"pattern="[0-9]{10}" value="<?php echo $res['parent']; ?>" required/><br>
          </th>
       </tr>


      <tr align="left">
        <th style="padding-bottom:14px;">
        DOB
      </th><th></th><th><input style="width:265px; height:30px;" type="date" name="dob"  value="<?php echo $res['dob']; ?>" required/><br>
          </th>
       </tr>

      <tr align="left"><th style="padding-bottom:14px; padding-right:5px;">
        GENDER </th><th></th><th><input type="radio" id="male" name="gender" value="male" required>
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label>
        <input type="radio" id="other" name="gender" value="other">
        <label for="other">Other</label><br>
      </th></tr>




      </table>


    <i><h5 style="color:red; text-align: center; padding:25px; padding-bottom:0px;">*All fields are mandatory</h5></i>

    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
    <center><button name="Update" class="button button1">Update</button></center>
    </form>
    <?php
    if(isset($_POST['Update'])){
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $report=$_POST['report'];
        $yoa=$_POST['yoa'];
        $phone=$_POST['phone'];
        $dob=$_POST['dob'];
        $gender=$_POST['gender'];


        $updatequery="UPDATE `student` SET `name`='$fname',`last_name`='$lname',`report`='$report',`yoa`='$yoa',`parent`='$phone',`dob`='$dob',`gender`='$gender' WHERE `id`=$id";



    $query=mysqli_query($conn,$updatequery);
    header("location: viewstudenttable.php");
    }
    ?>
    <?php
    }
    ?>


    </div >
    </div>
  </main>
</div>

</body>
</html>
