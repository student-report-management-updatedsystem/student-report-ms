<?php

include 'auth.php';

$id=$_GET['id'];
$selectquery =" select * from student where id=$id";
$query = mysqli_query($conn,$selectquery);
$r=mysqli_fetch_array($query);
$file=$r['file'];
$filename="simages/$file";

unlink($filename);
$deletequery = "delete from student where id=$id";

$query = mysqli_query($conn,$deletequery);


header("location: viewstudenttable.php");

?>
