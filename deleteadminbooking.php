<?php 
include "db.php";
$name=$_GET['id'];
//echo "$email";

$link=mysqli_connect(HOST,USERNAME,PASSWORD,DBNAME);
mysqli_query($link,"delete from booking where bookingid='$name'");
mysqli_close($link);
header("location:adminbooking.php");


 ?>