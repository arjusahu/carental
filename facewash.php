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
    <style>

        .d{
            
  background-color: lightgrey;
  width: 300px;
  border: 15px solid green;
  padding: 50px;
  margin: 20px;


        }
    </style>
    <body style="background-color: aliceblue">
        <div class="container-fluid">
        <?php
        include ("header.php");
        ?>
        <div class="row">
        	<div class="col-sm-12" style="background-color: white">
<?php
include "db.php";
$link=mysqli_connect(HOST,USERNAME,PASSWORD,DBNAME);
$result=mysqli_query($link,"select * from car");
	if(mysqli_affected_rows($link)>0)
	{
		$x=0;
		while($r=mysqli_fetch_assoc($result))
		{
if($x==0)
	
echo "<div class='row' style='background-color: lavender'>";
echo "<div class='col-sm-6'>";//outer

  echo "<div class='row' style='' class='d'>";//inner 1
   echo "<div class='col-sm-4' style=''>";
         echo "<img src='$r[carimage]' class='img-responsive' style='height:100px;width:170px'>";
         echo "</div>";
        echo "<div class='col-sm-8'>";
        echo "<p style='background-color:maroon'>";
        echo "<font color='maroon'>".$r['name']."</font>";
         echo "<br>";

           echo $r['color'];
            echo "<br>";
          echo $r['seat'];
            echo "<br>";
            echo $r['des'];
            echo "</p>";
             echo "<br>";


             echo "</div>";
    echo "</div>";//end inner 2
    echo "<div class='row'>";//inner 1
      echo "<div class='col-sm-2' style=>";
       $m= $r['price1'];
       echo "<input type='submit' value='$m' name='Book now'/>";
      echo "</div>";
          echo "<div class='col-sm-2' style=>";
//echo "<br>";
       //echo "</div>";
       $n=$r['price2'];
       echo "<input type='submit' value='$n' name='Book now'/></div>";
      echo "<div class='col-sm-2' style=>";
//echo "<br>";
      $l=$r['price3'];
       echo "<input type='submit' value='$l' name='Book now'/>";
      
      
         echo "</div>";
         echo "<div class='col-sm-6' style=>";
//echo "<br>";
         echo "<font color='white'><input type='submit' value='book' name='Book now' style='background-color:purple;height:30px;width:70px'/></font>";
        
    

         echo "</div>";
      
           echo "</div>";
           
            echo "<div class='row'>";//inner 1
      echo "<div class='col-sm-2' style=>";
      echo "<small>per 10kms</small>";
      echo "</div>";
       echo "<div class='col-sm-2' style=>";
      echo "<small>per 20kms</small>";
      echo "</div>";
       echo "<div class='col-sm-8' style=>";
      echo "<small>above 20kms</small>";
      echo "</div>";

 echo "</div>";

           //echo "<br>";

/*echo "<div class='row'>";//inner 1
echo "<div class='col-sm-4' style=>";
echo "<select>";
echo "<option value='location'> -:nearby location:-</option>";
echo "<option value='location'> Airport-terminal1</option>";
echo"<option value='location'> Airport terminal2</option>";
echo "<option value='location'> Kanpur Central</option>";
echo "</select>";
echo "</div>";
echo "<div class='col-sm-8' style=>";
echo "<font color='white'><input type='submit' value='book' name='Book now' style='background-color:purple'/></font>";
echo "</div>";
echo "</div>";*/



echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";








echo "</div>";//outer end
$x++;
if($x==2)
{
	echo "</div>";
	$x=0;
}
}
	}
else
{
	echo "<h3> Product not availaible </h3>";
}

?>
</div>
</div>


 <?php
        include ("footer.php");
        ?>
    </div>
</body>
</html>




















