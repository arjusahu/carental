<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="view port" content="width= device-width, initial-scale= 1">
        <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="http://ajax.googlleapis.com/ajax/libs/jquery3.4.0/jquery.min.js" type="text/javascript"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js" type="text/javascript"></script>
        <title>WELCOME</title>
    </head>
    <body style="background-color: aliceblue;height:300px;">
        <div class="container-fluid" >
        <?php
        include ("header2.php");
        echo "<br>";
        
        ?>


        <div class="row" style="background-color: darkkhaki;height:400px;"> 
        
         
<?php
include "db.php";
echo "<div class='col-sm-2'></div>";

$bookingid= $_SESSION['bid'];

//echo $bookingid;
$link1=mysqli_connect(HOST,USERNAME,PASSWORD,DBNAME);
  $qry1="update booking set status='Booking successfull' where bookingid='$bookingid'";
  mysqli_query($link1,$qry1);
  echo "<h1> &nbsp;&nbsp; YOUR CAR IS SUCCESSFULLY BOOKED</h1>";

echo "<h3>";

$link=mysqli_connect(HOST,USERNAME,PASSWORD,DBNAME);
  $qry="select * from booking where bookingid='$bookingid'";
  $result=mysqli_query($link,$qry);
  
  if(mysqli_affected_rows($link)>0)
  {
  //echo "<font color='green'>record inserted</font>";
  echo "<div class='col-sm-2'><font color='brown'>";
//echo "<table border='1'width='100%'>";
                 echo"Booking id:<br>Login id:<br>Carname:<br>Booking date:<br>Pickup time:<br>Days<br>Location:<br>Price:<br>Status:<br>";

  echo "</font></div>";
  
while($row=mysqli_fetch_assoc($result))
{
                   $r1=$row['bookingid'];
                    $r2=$row['logid'];
                    $r3=$row['carname'];
                    $r4=$row['bookingdate'];
                    $r5=$row['pickuptime'];
                    $r6=$row['days'];
                    $r7=$row['location'];
                    $r8=$row['price'];
                    $r9="successfully booked";
                    echo "<div class='col-sm-6'>";
                 // echo "<tr>";
                  echo "<td>$r1</td><br>";
                  echo "<td>$r2</td><br>";
                  echo "<td>$r3</td><br>";
                  echo "<td>$r4</td><br>";
                  echo "<td>$r5</td><br>";
                  echo "<td>$r6</td><br>";
                  echo "<td>$r7</td><br>";
                  echo "<td>$r8</td><br>";
                  echo "<td>$r9</td><br>";
                  //echo "<td><a href='deleteadminbooking.php?id=$r1'>Delete</a></td>";
                  //echo "</tr>";
                   echo "</div>";

}
//echo"</table>";
}
echo "</h3>";
 ?>
</div>
<div class="col-sm-6"></div>
</div>
 <?php
        include ("footer.php");
        ?>
    </body>
</html>
