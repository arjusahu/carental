

<?php
session_start();
?>
<?php


include "db.php";
//echo "payment;";
$id= $_SESSION['bid'];
//echo "iiiddd";
//echo "<br>";
$day=$_SESSION['day'];
//echo $day;
//echo "<br>";

$name=$_SESSION['caname'];
//echo "$name";
//echo "<br>";

$link=mysqli_connect(HOST,USERNAME,PASSWORD,DBNAME);
  $qry="select * from car where name='$name'";
  $result=mysqli_query($link,$qry);
  
  if(mysqli_affected_rows($link)>0)
  {
  //echo "<font color='green'>record inserted</font>";
  

  
  
while($row=mysqli_fetch_assoc($result))
{
$r=$row["price1"];
//echo $r;
//echo "<br>";
$rr=$row["price2"];
//echo "<br>";

$rrr= $row["price3"];
//echo $rrr;

}
}
else
  {
   // echo "<font color='red'>error in inserting the record</font>";
   echo mysqli_error($link);
  }
//header("location:final.php");

if($day==1)
	$price=$r;
else if($day==2)
	$price=$rr;
else if($day==3)
	$price=$rrr;
else
{
	$price=(int)$rrr+($day-3)*(int)$r;
}
$link=mysqli_connect(HOST,USERNAME,PASSWORD,DBNAME);
  $qry="update booking set price='$price' where bookingid='$id'";
  mysqli_query($link,$qry);
  


//echo "<br>";
//echo $price;
if(isset($_GET['pay']))
header("location:final.php");

?>

<!DOCTYPE html >
<head>
    <style>


        #mode{
           color:black;
          background-color:skyblue;
           padding: 10px 5px 5px 5px;
           border: 4px solid maroon;
           border-radius: 5px;




        }
    </style>
    </head>
<body style="background-color: aliceblue;height:600px">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


 <?php
        include ("header2.php");
        echo "<br>";
        
        ?>

<div class="row" style="background-color: pink;height:600px">
	    <div class="col-sm-3"></div>
    <div class="col-sm-9">
    	<h1><font color="brown">Total price is<?php echo " $price" ?></font></h1><br>

        <select id="mode" >
            <option><h4>-------:Select the mode of payment:------</h4></option>
            <option>Credit</option>
            <option>Debit</option>
        </select><br><br>

    <div class="row">
        <div class="col-xs-12 col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Payment Details
                    </h3>
                    <div class="checkbox pull-right">
                        <label>
                            <input type="checkbox" />
                            Remember
                        </label>
                    </div>
                </div>
                <div class="panel-body">
                    <form role="form">
                    <div class="form-group">
                        <label for="cardNumber">
                            CARD NUMBER</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="cardNumber" placeholder="Valid Card Number"
                                required autofocus />
                            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-7 col-md-7">
                            <div class="form-group">
                                <label for="expityMonth">
                                    EXPIRY DATE</label>
                                <div class="col-xs-6 col-lg-6 pl-ziro">
                                    <input type="text" class="form-control" id="expityMonth" placeholder="MM" required />
                                </div>
                                <div class="col-xs-6 col-lg-6 pl-ziro">
                                    <input type="text" class="form-control" id="expityYear" placeholder="YY" required /></div>
                            </div>
                        </div>
                        <div class="col-xs-5 col-md-5 pull-right">
                            <div class="form-group">
                                <label for="cvCode">
                                    CV CODE</label>
                                <input type="password" class="form-control" id="cvCode" placeholder="CV" required />
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="#"><span class="badge pull-right"><span class="glyphicon glyphicon-usd"></span><?php echo $price ?></span> Final Payment</a>
                </li>
            </ul>
            <br/>
            <a href="final.php" class="btn btn-success btn-lg btn-block" role="button" name="pay">Pay</a>
        </div>
    </div>
</div>
</div>
</div>
 <?php
        include ("footer.php");
        echo "<br>";
        
        ?>

</body>
</html>