<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Panel Page</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="panel.css">
    <?php include 'src/tablelinks.php';?>
    <?php include 'src/tablestyles.php';?>
  </head>
  <body>
    <div class="sidebar">
      <div class="sidebar-brand">
        <h2><span class="lab la-accusoft"></span> ABC School</h2>
      </div>

      <div class="sidebar-menu">
        <ul>
          <li>
            <a href="" class="active"><span class="las la-school"></span>
              <span>Dashboard</span></a>
          </li>
          <li>
            <a href="src/viewstudenttable.php"><span class="las la-user-graduate"></span>
              <span>View</span></a>
          </li>
          <li>
            <a href="src/addstudent.php"><span class="las la-graduation-cap"></span>
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


         <div class="user-wrapper">
           <img src="https://img.icons8.com/pastel-glyph/64/000000/user-male--v1.png" width="40px" height="40px"/>
           <div>
             <h4>Arya Anju Anjali Adarsh</h4>
             <small>Super Admin</small>
           </div>
         </div>
       </header>

                <br><br><br><br><br><br><br><br>
                <div class="main-div">
                <h1>STUDENT LIST</h1>
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
$conn= new mysqli("localhost","root","","miniproject");
    $name = $_POST['valueToSearch'];


    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

$res = mysqli_query($conn, "SELECT * FROM student WHERE name LIKE '%{$name}%' OR last_name LIKE '%{$name}%'");


while ($row = mysqli_fetch_array($res))
{
?>

<tr>
<td><?php echo $row['student_id']; ?></td>
<td><?php echo $row['name'];?> <?php echo $row['last_name'];?></td>
<td><?php echo $row['yoa'];?></td>
<td><?php echo $row['parent'];?></td>
<td><?php echo $row['gender'];?></td>
<td><i class="fa fa-edit" aria-hidden="true"></i></td>
<td><i class="fa fa-trash" aria-hidden="true"></i></td>
<td><a href="student0.php?id=<?php echo $row['id']; ?>"><i class="fa fa-id-badge" aria-hidden="true"></i></td>

</tr>

 <?php
}mysqli_close($conn);
?>
</tbody>
</thead>

</table>
</div>
</body>
</html>
