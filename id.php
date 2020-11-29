<?php
session_start();
?>

<?php
//$msg="";
include "db.php";
if(isset($_GET['btn_reg']))
{
 
$bookingid=$_GET['bookingid'];
$logid=$_COOKIE['logcookie'];
$carname=$_GET['carname'];
$bookingdate=$_GET['bookingdate'];
$days=$_GET['days'];
$location=$_GET['location'];
$pickuptime=$_GET['pickuptime'];
$_SESSION['bid']=$bookingid;
$_SESSION['day']=$days;
$_SESSION['caname']=$carname;

$link1=mysqli_connect(HOST,USERNAME,PASSWORD,DBNAME);
  $qry1="select * from booking where logid='$logid' and bookingdate='$bookingdate' and days='$days' and 
  location='$location'";

   $result1=mysqli_query($link1,$qry1);
  if(mysqli_affected_rows($link1)>0)
                 {
  while($row=mysqli_fetch_assoc($result1))
  {
    $id=$row['bookingid'];
  }
$_SESSION['bid']=$id;
echo $id;
}
else "error";



$link=mysqli_connect(HOST,USERNAME,PASSWORD,DBNAME);
  $qry="insert into booking(bookingid,logid,carname,bookingdate,pickuptime,days,location) 
  values('$bookingid','$logid','$carname','$bookingdate','$pickuptime','$days','$location')";
  $result=mysqli_query($link,$qry);
  
  if(mysqli_affected_rows($link)>0)
  {
  echo "<font color='green'>record inserted</font>";
  

  }
  else
  {
    echo "<font color='red'>error in inserting the record</font>";
   echo mysqli_error($link);
  }


 
  
 // header ("location:payment.php");
  //echo $logid;
 // echo $carname;
  }
  if(isset($_GET['id']))
{
  $v=$_GET['id'];
//$v=$_GET['id'];
setcookie("name2","$v");
}

  
  
?>



<!DOCTYPE html>
    <head>
       <title></title>
       <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
    <style type="text/css">

    h2 {
      margin-top: 0%;
      margin-left: 43%;
      font-family: 'ZCOOL XiaoWei', serif;
      font-weight: 600;
      font-size: 40px;
    }
    #box {
      color: black;
      height: 550px;
      width: 450px;
      position: absolute;
      top: 15%;
      left: 37%;
      padding: 20px 20px 20px 60px ;
      font-family: 'ZCOOL XiaoWei', serif;
      font-weight: 400;
      font-size: 20px;
      border-radius: 20px;
      background-image: url(bt.jpg);
      background-color: white;
      background-repeat: no-repeat;
      background-size: cover;
    }
    input[type=text] {
      border: none;
      border-bottom: 1px solid green;
      padding: 10px 5px 5px 5px;
      margin-top: 10%;
      margin-left: 5%;
      
      color: black;
      background: transparent;
          }

    textarea {
      border: none;
      border-bottom: 1px solid green;
      padding: 10px 5px 5px 5px;
      margin-top: 10%;
      margin-left: 5%;
      background: transparent;
      color: black;
          }
          
    select{
      border: none;
      border-bottom: 1px solid green;
      padding: 10px 5px 5px 5px;
      margin-top: 10%;
      margin-left: 5%;
      background: transparent;
      color: black;
          }   

    input[type=Number] {
      border: none;
      border-bottom: 1px solid green;
      padding: 10px 5px 5px 5px;
      margin-top: 10%;

      margin-left: 5%;
      background: transparent;
      color: black;
          }
            
   /* input[type=radio] {
      margin-top: 15%;
      margin-bottom: 10%; 
          }*/

    input[type=submit] {
      font-weight: 100;
      font-size: 20px;
      margin-left: 40%;
      margin-top: 10%;
      border-radius: 5px;

    }       

    input[type=date]{
      border: none;
        border-bottom: 1px solid green;                
      color: black;
       margin-top: 10%;
      padding: 10px 5px 5px 5px;
      background: transparent;
      width: 200px;
    }
    ::placeholder {
      color: grey;
      opacity: 1;
    
    }                 
  </style>
  
  
    </head>
    <body style="background-color: aliceblue">
        <div class="container-fluid">
            
            <?php include("header2.php"); ?>
            <div class="row" style="background-color: skyblue">
                <div class="col-sm-12" style="height:1000px"><br><br>
                    
                <h2><B> BOOKING FORM<B></h2>
  <ul>
  <div id="box">
    <form>
    <table>
      
      <tr>
        <td>booking id</td>
        <td><input type="number" placeholder="Booking id" name="bookingid" required /></td>
      </tr>   
        <tr>
        <td>Login id</td>
        <td><input type="text" placeholder="login id" name="loginid" value="<?php 
        if(isset($_GET['id'])) echo $_COOKIE['logcookie']; ?>" readonlr /></td>
      </tr>
      <tr>
        <td>Car name</td>
        <td><input type="text" placeholder="car name" name="carname" value="<?php 
        if(isset($_GET['id'])) echo $_GET['id']; ?>" readonly /></td>
      </tr>
           <td>BookingDate </td>
        <td><input type="date" placeholder="Booking Date" name="bookingdate" required /></td>
      </tr>
      <td>Pick up time </td>
        <td><input type="text" placeholder="hh:mm " name="pickuptime" required/></td>
      </tr>
             <td>No of days</td>
        <td><input type="number" placeholder="No of Days" name="days" required /></td>
      </tr>
          <td>near by location</td>
        <td><select name="location">
          <option > select location</option>
          <option > Airport terminal 1</option>
            <option > Airport terminal 2</option>
              <option >kanpur central</option>
          
        
        </td>
     <!-- </tr>
      
      <tr>
        <td>Total price</td>
        <td><input type="text" placeholder="Total price" name="totalprice" required /></td>
      </tr>
      <tr>
        <td>
      <tr>
        <td>Status </td>
        <td><textarea name="status" value="status"placeholder="status"></textarea></td>
      </tr>-->
      
      
      
      <!--<tr>
        <td>gender</td>
        <td><input type="radio" name="gender" value="male" />Male
          <input type="radio" name="gender" value="female" />Female</td>
      </tr>-->
      
    
      
    </table>
    <input type="submit" name="btn_reg" value="procceed"></input><br>
   
    
      <!--<tr>
        <td><?php //echo "$msg"; ?></td>
      </tr>-->
      
    
  </form>
  </div>
  </ul>
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                </div>
                
            </div>
             <?php include("footer.php"); ?>   
            
        </div>
        
        
        
    </body>
</html>
