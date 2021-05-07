<!DOCTYPE html>
<html>
<head>
  <title>VIEW STUDENT</title>
      <?php include 'tablelinks.php';?>
      <?php include 'tablestyles.php';?>
</head>
<body>
  <div class="main-div">
  <h1>student list</h1>
    <div class="center-div">

      <table>
        <thead>
          <tr>
            <th>student_id</th>
            <th>First name</th>
            <th>Last name</th>
            <th>Report</th>
            <th>YOA</th>
            <th>Phone</th>
            <th>DOB</th>
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
                    <td><?php echo $res['name'];?></td>
                    <td><?php echo $res['last_name'];?></td>
                    <td><?php echo $res['report'];?></td>
                    <td><?php echo $res['yoa'];?></td>
                    <td><?php echo $res['parent'];?></td>
                    <td><?php echo $res['dob'];?></td>
                    <td><?php echo $res['gender'];?></td>
                    <td><i class="fa fa-edit" aria-hidden="true"></i></td>
                      <td><i class="fa fa-trash" aria-hidden="true"></i></td>
                    <td><i class="fa fa-id-badge" aria-hidden="true"></i></td>

                    </tr>
            <?php
              }
            ?>
          </tbody>
        </thead>

            </table>

            <div class="table-responsive">
      </div>
    </div>
  </div>



</body>
</html>
