<?php 
include "db.php";
$email=$_GET['id'];
//echo "$email";

$link=mysqli_connect(HOST,USERNAME,PASSWORD,DBNAME);
mysqli_query($link,"delete from login where email='$email'");
mysqli_close($link);
header("location:userdata.php");


 ?>