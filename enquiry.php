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
        <div class="row">
            <div class="col-sm-12" style="height:300px">
                <h1>ENQUIRY INFO</h1>
                <?php
                 include('db.php');
                 $link=mysqli_connect(HOST,USERNAME,PASSWORD,DBNAME);
                 $result=mysqli_query($link,"select * from contact");
                 if(mysqli_affected_rows($link)>0)
                 {

                 echo "<table border='1'width='100%'>";
                 echo"<tr><h4><th>Logid</th><th>Name</th><th>Email</th><th>Contact</th><th>Message</th><th></th></tr>";

                 while($row=mysqli_fetch_array($result))
                 {
                  echo "<tr>";
                  echo "<td>$row[0]</td>";
                  echo "<td>$row[1]</td>";
                  echo "<td>$row[2]</td>";
                  echo "<td>$row[3]</td>";
                  echo "<td>$row[4]</td>";
                  
                  
                  echo "<td><a href='enquirydelete.php?id=$row[2]'>Delete</a></td>";//row[1] is email
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