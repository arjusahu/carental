<?php 
$msg="";
include "db.php";
if(isset($_GET['id']))
{
$email=$_GET['id'];
$link=mysqli_connect(HOST,USERNAME,PASSWORD,DBNAME);

$result=mysqli_query($link,"select * from signup where email='$email'");
$row=mysqli_fetch_array($result);
}
if(isset($_GET['btn_reg']))
{
  $logid=$_GET['logid'];
$name=$_GET['txt_name'];
$email=$_GET['txt_email'];
$pwd=$_GET['txt_pwd'];

$mobile=$_GET['txt_phone'];
$link=mysqli_connect(HOST,USERNAME,PASSWORD,DBNAME);
 


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
    </head>
    <body style="background-color: aliceblue">
        <div class="container-fluid">
        <?php
        include ("header2.php");
        ?>
        <div class="row" style="background-color:skyblue">
        	<div class="col-sm-5"></div>
        	<div class="col-sm-4" style="height:500px">
     <h1 >PROFILE</h1>
   
     <form>
		Login id :<input type="text" name="logid" placeholder="username" style="border-radius: 4px"/>
      <br><br>
					Name :<input type="text" name="txt_name" value="" placeholder="name" style="border-radius: 4px" /><br><br>
				
					Email :<input type="email" name="txt_email" value="" placeholder="email" style="border-radius: 4px" readonly/><br><br>

				
					Password :<input type="password" name="txt_pwd" value="" placeholder="password" style="border-radius: 4px"/><br><br>

				
					

				
	Number :<input type="number" name="txt_phone" value="" placeholder="number" style="border-radius: 4px"/></td><br><br>




	


<input type="submit" name="btn_reg" value="update"><br><br>


			<?php
		echo "$msg";
		?>
         </form>

		</div>
		<div class="col-sm-3">
		</div>
	</div>

		
		 <?php
        include ("footer.php");
        ?>
	</body>
</html>
