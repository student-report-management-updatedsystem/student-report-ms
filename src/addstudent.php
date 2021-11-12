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
          <a  class="active"><span class="las la-school"></span>
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

  <div class="main-content" style="background: #f1f5f9;">
     <header>
       <h2>
         <label for="">
           <span class="las la-bars"></span>
         </label>

         Dashboard
       </h2>


       <div class="user-wrapper">
         <img src="https://img.icons8.com/pastel-glyph/64/000000/user-male--v1.png" width="40px" height="40px"/>
         <div>
           <h4></h4>
           <small></small>
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
             <th style="padding-bottom: 15px;">
                  <label for="stdid">STUDENT ID</label>
             </th>
             <th></th>
             <th>
                 <input type="text" style="background-color: white; width:265px; height:30px;" placeholder="studentid" id="stdid"
                 value="AS01-<?php $prefix= md5(rand(1,10)); echo strip_tags(substr($prefix ,0,4));?>" name="stdid" readonly Required /><br>
             </th>
           </tr>

<!--- FIRST NAME-->
           <tr align="left">
             <th style="padding-bottom: 15px;">
                  <label for="fname">FIRST NAME</label>
             </th>
             <th></th>
             <th>
                 <input type="text" style="background-color: white; width:265px; height:30px;" placeholder="First Name"id="fname"   name="fname" Required /><br>
             </th>
           </tr>

<!--- LAST NAME-->
           <tr align="left">
             <th style="padding-bottom: 15px;">
                  <label for="lname">LAST NAME</label>
             </th>
             <th></th>
             <th>
                 <input type="text" style="background-color: white; width:265px; height:30px;" id="lname" name="lname"placeholder="Second Name"  Required /><br>
             </th>
          </tr>

<!--- DOB-->

          <tr align="left">
            <th style="padding-bottom: 15px;">
            DOB
          </th><th></th><th><input style="background-color: white; width:265px; height:30px;" type="date" max="2017-06-01"name="dob" required/><br>
              </th>
           </tr>

<!--GENDER-->

           <tr align="left"><th style="padding-bottom: 15px;">
             GENDER </th><th></th><th><input type="radio" id="Male" name="gender" value="Male" required>
             <label for="Male">Male</label>
             <input type="radio" id="Female" name="gender" value="Female">
             <label for="Female">Female</label>
             <input type="radio" id="Other" name="gender" value="Other">
             <label for="Other">Other</label><br>
           </th></tr>

<!--PHONE NUMBER-->

           <tr align="left">
             <th style="padding-bottom: 15px;">
             PARENT PHONE NO</th>
            <th>
            </th>
            <th><input type  ="tel" style="background-color: white; width:265px; height:30px;" name="phone"placeholder="Ten Digits"  maxlength="10"pattern="[0-9]{10}" required/><br>
               </th>
            </tr>

<!--CLASS-->

<tr align="left">
<th style="padding-bottom: 15px;">
<label for="class">CLASS</label>
</th><th></th>
<th><select name="class" placeholder="Choose from the options" id="class"
style=
      "background-color: white; width:95%;padding: 15px;
      margin: 5px 0 22px 0;
      display: inline-block;
      border: none;" required>
<option value="" disabled selected></option>
<option value="kg-1">KG-1</option>
<option value="kg-2">KG-2</option>

          </select>
        <br>
            </th>
</tr>

<!--YOA-->
             <tr align="left"><th style="padding-bottom: 15px;">
             YEAR OF ADMISSION  </th><th></th><th><input type="number" name="yoa" placeholder="Choose the Year" min="2005" max="2021"step="1"maxlength="4"style="background-color: white; width:265px; height:30px; "required/><br>
               </th>
              </tr>

<!--GRADE-->

              <tr align="left">
              <th style="padding-bottom: 15px;">
              <label for="grade">GRADE</label>
              </th><th></th>
              <th><select name="grade" placeholder="Choose from the options" id="grade"
              style=
                    "background-color: white; width:95%;padding: 15px;
                    margin: 5px 0 22px 0;
                    display: inline-block;
                    border: none;" required>
              <option value="" disabled selected></option>
              <option value="A+">A+</option>
              <option value="A">A</option>
              <option value="B+">B+</option>
              <option value="B">B</option>
              <option value="C+">C+</option>
              <option value="C">C</option>
              <option value="D+">D+</option>
              <option value="D">D</option>
                        </select>
                      <br>
                          </th>
             </tr>

<!--REPORT-->
         <tr align="left">
           <th style="padding-bottom: 15px;">
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


<!--PHOTO-->


         <tr align="left">
             <th style="padding-bottom: 15px;">
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



<!--PHP CODE-->
<?php

include 'auth.php';

if(isset($_POST['savestudent']))
{
    $stdid=$_POST['stdid'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];
    $phone=$_POST['phone'];
    $class=$_POST['class'];
    $yoa=$_POST['yoa'];
    $grade=$_POST['grade'];
    $report=$_POST['report'];
    $img=$_POST['img'];
    $image_name = $_FILES['img']['name'] ;

    move_uploaded_file($_FILES['img']['tmp_name'], "simages/".$image_name);

if( $class =="kg-1")
{
    $insertquery="INSERT INTO `kg-1`(`student_id`, `name`, `last_name`,`dob`, `gender`, `parent`, `yoa`,`class`, `grade`,`report`,`file`)
    VALUES ('$stdid', '$fname','$lname','$dob','$gender','$phone','$yoa','$class','$grade','$report','$image_name')";
    $insertqueryy="INSERT INTO `roles` (`role`, `userName`, `password`, `class`) VALUES ('student', '$fname', '$dob', `KG-1`)";

}
else {

  $insertquery="INSERT INTO `kg-2`(`student_id`, `name`, `last_name`,`dob`, `gender`, `parent`, `yoa`,`class`, `grade`,`report`,`file`)
  VALUES ('$stdid', '$fname','$lname','$dob','$gender','$phone','$yoa','$class','$grade','$report','$image_name')";
  $insertqueryy="INSERT INTO `roles` (`role`, `userName`, `password`, `class`) VALUES ('student', '$fname', '$dob', `KG-2`)";

}

mysqli_query($conn,$insertquery);

if(mysqli_query($conn,$insertqueryy))
{
  echo '<script>alert("New student added successfully")</script>';
}



}


?>
