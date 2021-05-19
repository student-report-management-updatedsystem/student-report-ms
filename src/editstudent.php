<html>
<head>
  <title>
     EDIT STUDENT FORM
  </title>

<style>

div {
  width: 98%;
  padding: 15px;
  margin: 5px 0 22px 0;
  background-color:white;
  border-radius:12px;
  text-align: center;
}

input[type=text], input[type=password],input[ type  ="tel"],input[ type  ="date"],input[ type  ="file"],input[ type  ="number"]
{
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

.button
{
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
  width:40%;

}

.button1
{
  background-color: DodgerBlue;
  color: white;

  border-radius: 12px;
}

.button1:hover
{
  background-color: #4CAF50;
  color: white;
}
</style>


</head>


<body style="background-color:white;
            font-family:Arial, Helvetica, sans-serif;
            color:#49524B;">


<form method="POST">

<div> EDIT STUDENT
</div>
<br>

<?php

include 'auth.php';


$id=$_GET['id'];
$selectquery = "select * from student where id=$id";

$query = mysqli_query($conn,$selectquery);

while($res=mysqli_fetch_array($query))
{?>

  <table align="center">

    <tr align="left">
      <th>
           <label for="fname">STUDENT ID</label>
      </th>
      <th></th>
      <th>
          <input type="text" style="width:265px; height:30px;" placeholder="studentid" id="stdid"
           name="stdid" value="<?php echo $res['student_id']; ?>" readonly Required /><br>
      </th>
    </tr>


    <tr align="left">
      <th>
           <label for="fname">FIRST NAME</label>
      </th>
      <th></th>
      <th>
          <input type="text" style="width:265px; height:30px;" placeholder="First Name"id="fname"   name="fname" value="<?php echo $res['name']; ?>" Required /><br>
      </th>
    </tr>


    <tr align="left">
      <th>
           <label for="lname">LAST NAME</label>
      </th>
      <th></th>
      <th>
          <input type="text" style="width:265px; height:30px;" id="lname" name="lname"placeholder="Second Name" value="<?php echo $res['last_name']; ?>" Required /><br>
      </th>
   </tr>


  <tr align="left">
    <th>
      <label for="report">REPORT</label>
    </th><th></th>
    <th><select name="report" id="report"
      style=
    "width:95%;padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;" required>
      <value="<?php echo $res['report']; ?>">
      <option value="excellent">Excellent</option>

      <option value="good">Good</option>

      <option value="average">Average</option>

      <option value="poor">Poor</option>
    </select>
  <br>
      </th>
   </tr>

    <tr align="left"><th>
    YEAR OF ADMISSION  </th><th></th><th><input type="number" name="yoa" min="2005" max="2021"steps="4"maxlength="4"style="width:265px; height:30px; " value="<?php echo $res['yoa']; ?>" required/><br>
      </th>
   </tr>


  <tr align="left">
    <th>
    PARENT PHONE NO</th>
   <th>
   </th>
   <th><input type  ="tel" style="width:265px; height:30px;" name="phone"placeholder="Ten Digits"  maxlength="10"pattern="[0-9]{10}" value="<?php echo $res['parent']; ?>" required/><br>
      </th>
   </tr>


  <tr align="left">
    <th>
    DOB
  </th><th></th><th><input style="width:265px; height:30px;" type="date" name="dob"  value="<?php echo $res['dob']; ?>" required/><br>
      </th>
   </tr>

  <tr align="left"><th>
    GENDER </th><th></th><th><input type="radio" id="male" name="gender" value="male" required>
    <label for="male">Male</label>
    <input type="radio" id="female" name="gender" value="female">
    <label for="female">Female</label>
    <input type="radio" id="other" name="gender" value="other">
    <label for="other">Other</label><br>
  </th></tr>




  </table>


<i><h5 style="color:red; text-align: center;">*All fields are mandatory</h5></i>

&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
<button name="Update" class="button button1">Update</button>
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
</body>
</html>
