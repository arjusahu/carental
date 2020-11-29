<?php
$msg="";
include "db.php";
if(isset($_GET['btn_reg']))
{
  $logid=$_GET['logid'];
$name=$_GET['txt_name'];
$email=$_GET['txt_email'];
$pwd=$_GET['txt_pwd'];

$mobile=$_GET['txt_phone'];

 $link=mysqli_connect(HOST,USERNAME,PASSWORD,DBNAME);
  $qry="insert into login values('$logid','$name','$email','$pwd','$mobile')";
  mysqli_query($link,$qry);
  if(mysqli_affected_rows($link)>0)
  {
  $msg="<font color='green'>record inserted</font>";
  

  }
  else
  {
  	$msg="<font color='red'>error in inserting the record</font>";
   echo mysqli_error($link);
  }
  mysqli_close($link);
}







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
        <style>
          label{
            color:green;
          }
        </style>
    </head>
    <body style="background-color: aliceblue">
        <div class="container-fluid">
        <?php
        include ("header.php");
        ?>
        <form>
        <div class="row" style="background-image:url('car10.jpg'); width: 1400px;height:600px">
        	<div class="col-sm-4"></div>
  <div class="col-sm-4">
    <h2 align="center"><font color="red">SIGN UP</font></h2>
       <label >Login id:</label>
      <input type="text" class="form-control"  placeholder="
      login id" name="logid"><br>
    
     <label >Name:</label>
      <input type="text" class="form-control" value="" placeholder="Enter Name" name="txt_name" required/>
    <br>
    
    
      <label >Email:</label>
      <input type="email" class="form-control" value="" placeholder="Enter email" name="txt_email" required/>
    <br>
    
      <label>Password:</label>
      <input type="password" class="form-control" value="" placeholder="Enter password" name="txt_pwd" required/>
    <br>
    <label>Confirm Password:</label>
      <input type="password" class="form-control" value="" placeholder="Confirm password" name="txt_cpwd" required/>
    <br>
    <label >Phone no:</label>
      <input type="text" class="form-control" value="" placeholder="Enter Phone" name="txt_phone" required/>
  
<br>
    
    <button type="submit" name="btn_reg" value="Update" style="background-color:green;width:100px;"><font color="white">Submit</font></button><br><br>

			<?php
		echo "$msg";
		?>
         </form>

		</div>
		<div class="col-sm-4">
		</div>
	</div>

		
		 <?php
        include ("footer.php");
        ?>
	</body>
</html>