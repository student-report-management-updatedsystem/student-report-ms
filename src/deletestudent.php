<?php

include 'auth.php';

$id=$_GET['id'];
$deletequery = "delete from student where id=$id";

$query = mysqli_query($conn,$deletequery);


    header('location:viewstudenttable.php');





 ?>
