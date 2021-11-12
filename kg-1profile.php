<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Student</title>
		<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="student.css">
  </head>
  <body>

    <?php
	$conn = mysqli_connect("localhost","root","","miniproject");
	if(mysqli_connect_error())
	{
	  echo "cannot connect";
	}
	$username=$_GET['id'];


  $selectquery = "select * from `kg-1` where student_id LIKE '{$username}'";
  $query = mysqli_query($conn,$selectquery) or die("Error: " . mysqli_error($conn));

  while($res=mysqli_fetch_array($query))
  {?>
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
						<a href="index.php"><span class="las la-user-minus"></span>
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


				 <div class="user-wrapper">
					 <img src="https://img.icons8.com/pastel-glyph/64/000000/user-male--v1.png" width="40px" height="40px"/>
					 <div>
						 <h4><?php echo $res['name'];?></h4>
						 <small>Student</small>
					 </div>
				 </div>
			 </header>
			 <main>
				 <div class="view">
					 <center><div class="student"><h4 class="info"><i class="icon-edit icon-large" ></i> Student Information</h4></div></center>
					 <div class="contain_table">
						 <table class="main_table">
							<td>
								<div class="student_image"><img class="student_img" src="src/simages/<?php echo $res['file'];?>" /></div>
							</td>
							<td class="right_table" style="padding-right: 60px;">
								<div class="table">
									<table>
								 <tr>
								 <td> Student ID : </td>
								 <td style="padding: 10px;
												 border-top: 1px solid #fafafa;
												 color: #7d7d7d;"> <?php echo $res['student_id']; ?></td>
								 </tr>
								 <tr>
								 <td> Full Name :  </td>
								 <td style="padding: 10px;
												 color: #7d7d7d;"> <?php echo $res['name']; ?> <?php echo $res['last_name']; ?></td>
								 </tr>
								 <tr>
								 <td> D.O.B:  </td>
								 <td style="padding: 10px;
												 color: #7d7d7d;"> <?php echo $res['dob']; ?></td>
								 </tr>
								 <tr>
								 <td> Gender:  </td>
								 <td style="padding: 10px;
												 color: #7d7d7d;"> <?php echo $res['gender']; ?></td>
								 </tr>
								 <tr>
								 <td> Parent Phone:  </td>
								 <td style="padding: 10px;
												 color: #7d7d7d;"> <?php echo $res['parent']; ?></td>
								 </tr>
								 <tr>
								 <td> Admission Year :  </td>
								 <td style="padding: 10px;
												 color: #7d7d7d;"> <?php echo $res['yoa']; ?></td>
								 </tr>
								 <tr>
									 <td> GRADE:  </td>
									 <td style="padding: 10px;
													 color: #7d7d7d;"> <?php echo $res['grade']; ?></td>
									 </tr>
									 <tr>
								 <td> Report :  </td>
								 <td style="padding: 10px;
												 color: #7d7d7d;"> <?php echo $res['report']; ?></td>
								 </tr>


								 </table>
							 </div>

						 </td>
						</table>
					 </div>

					 </div>

	 				<?php
	 				}
	 				?>
				 </div>

			 </main>
		 </div>
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
