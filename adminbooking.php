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
    <body style="background-color: aliceblue">
        <div class="container-fluid">
        <?php
        include ("adminheader.php");
        echo "<br>";
        
        ?>
        
        <div class="row" >
            <div class="col-sm-12" style="height: 1000px">
                <h1> booking info</h1>

                <?php
                 include('db.php');
                 $link=mysqli_connect(HOST,USERNAME,PASSWORD,DBNAME);
                 $result=mysqli_query($link,"select * from booking");
                 if(mysqli_affected_rows($link)>0)
                 {

                 echo "<table border='1'width='100%'>";
                 echo"<tr><th>Booking id</th><th>Login id</th><th>Carname</th><th>Booking date</th><th>Pickup time</th><th>Days</th><th>Location</th><th>Price</th><th>Status</th><th></th></tr>";

                 while($row=mysqli_fetch_assoc($result))
                 {


                    $r1=$row['bookingid'];
                    $r2=$row['logid'];
                    $r3=$row['carname'];
                    $r4=$row['bookingdate'];
                    $r5=$row['pickuptime'];
                    $r6=$row['days'];
                    $r7=$row['location'];
                  echo "<tr>";
                  echo "<td>$r1</td>";
                  echo "<td>$r2</td>";
                  echo "<td>$r3</td>";
                  echo "<td>$r4</td>";
                  echo "<td>$r5</td>";
                  echo "<td>$r6</td>";
                  echo "<td>$r7</td>";
                  echo "<td></td>";
                  echo "<td></td>";
                  echo "<td><a href='deleteadminbooking.php?id=$r1'>Delete</a></td>";
                  echo "</tr>";


                 }
                 echo"</table>";
                 }
                 else
                 {
                  echo "<h4>no record found</h4>";
              }
               ?>
           
        </div>
    </div>



        <?php
        include ("footer.php");
        ?>
    </body>
</html>

