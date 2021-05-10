<?php
	require 'auth.php';
?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Student</title>
    <style media="screen">
      *{font-family:'arial'};
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

  </head>
  <body>

    <?php
	include('auth.php');
	$id=$_GET['id'];


  $selectquery =" select * from student where id= $id";
  $query = mysqli_query($conn,$selectquery);

  while($res=mysqli_fetch_array($query))
  {?>

<center style="margin-top:20px;"><h4><i class="icon-edit icon-large" ></i> Student Information</h4></center>
<hr>
<center><img src="simages/<?php echo $res['file'];?>" style="width:250px; height:250px; border-radius:28px;" alt=""/>
<br><br>

<table>
<tr>
<td> Student ID : </td>
<td style="padding: 10px;
				border-top: 1px solid #fafafa;
				text-align: center;
				color: #7d7d7d;"> <?php echo $res['student_id']; ?></td>
</tr>
<tr>
<td> Full Name :  </td>
<td style="padding: 10px;
				text-align: center;
				color: #7d7d7d;"> <?php echo $res['name']; ?> <?php echo $res['last_name']; ?></td>
</tr>
<tr>
<td> Gender:  </td>
<td style="padding: 10px;
				text-align: center;
				color: #7d7d7d;"> <?php echo $res['gender']; ?></td>
</tr>
<tr>
<td> D.O.B:  </td>
<td style="padding: 10px;
				text-align: center;
				color: #7d7d7d;"> <?php echo $res['dob']; ?></td>
</tr>
<tr>
<td> Admission Year :  </td>
<td style="padding: 10px;
				text-align: center;
				color: #7d7d7d;"> <?php echo $res['yoa']; ?></td>
</tr>
<tr>
<td> Parent Phone:  </td>
<td style="padding: 10px;
				text-align: center;
				color: #7d7d7d;"> <?php echo $res['parent']; ?></td>
</tr>
<tr>
<td> Report :  </td>
<td style="padding: 10px;
				text-align: center;
				color: #7d7d7d;"> <?php echo $res['report']; ?></td>
</tr>


</table>
<br>

</center>

<?php
}
?>
  </body>
</html>
