<?php

include 'auth.php';

$id=$_GET['id'];
$selectquery =" select * from `kg-2` where id=$id";
$query = mysqli_query($conn,$selectquery);
$r=mysqli_fetch_array($query);
$file=$r['file'];
$filename="simages/$file";

unlink($filename);
$deletequery = "delete from `kg-2` where id=$id";

$query = mysqli_query($conn,$deletequery);


header("location: viewstudenttable2.php");

?>
