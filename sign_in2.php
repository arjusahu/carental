
<?php
$msg="";
include "db.php";
if(isset($_GET['btn_reg']))
{
  $logid=$_GET['logid'];

$pwd=$_GET['txt_pwd'];
}



 $link=mysqli_connect(HOST,USERNAME,PASSWORD,DBNAME);
  
  mysqli_query($link,"");
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
    </head>
    <body>
        <div class="container-fluid">
        <?php
        include ("header.php");
        ?>
	<div class="row"  style="background-image:url('car10.jpg');">
		<div class="col-sm-4"></div>
		<div class="col-sm-5" style="height:500px">
    <h1 ><font color="red">LOG IN</font></h1>
      
      <input type="text" name="logid" placeholder="username" style="border-radius: 4px"/>
      <br><br>


<input type="password" name="txt_pwd" value="password" style="border-radius: 4px"/>

<br><br>
<input type="checkbox" name="check" value=""><font color="red">forgot password</font>

<br>
<td><br><input type="submit" name="check" value="log in"></td>
<br>
<input type="checkbox" name="check" value=""><font color="red">remember me</font></td>
</div>
<div class="col-sm-3"></div>
</div>

		 <?php
        include ("footer.php");
        ?>
	</body>
