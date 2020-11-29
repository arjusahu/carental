<?php
$msg="";
include "db.php";
if(isset($_POST['btn_reg']))
{
 $logid=$_POST['logid'];
 $pwd=$_POST['txt_pwd'];

//$pwd=$_GET['txt_pwd'];

    setcookie("logcookie",$logid);

    $link=mysqli_connect(HOST,USERNAME,PASSWORD,DBNAME);
  $qry="select * from login where logid='$logid' and pwd='$pwd'";
  mysqli_query($link,$qry);
  if(mysqli_affected_rows($link)>0)
header("location:login2.php");
else
$msg= "please check your username and id ";
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
        <form method="post">
        <div class="container-fluid">
        <?php
        include ("header.php");
        ?>
	<div class="row"  style="background-image:url('car10.jpg');">
		<div class="col-sm-4"></div>
		<div class="col-sm-5" style="height:500px">
    <h1 ><font color="red">LOG IN</font></h1>
      
      <input type="text" name="logid" placeholder="username" value="<?php if(isset($_POST['logid'])) echo $_POST['logid'];?>" style="border-radius: 4px"/>
      <br><br>


<input type="password" name="txt_pwd" value="password" style="border-radius: 4px"/>

<br>
<!--<input type="checkbox" name="check" value=""><font color="red">forgot password</font>

<br>-->
<td><br ><font color="white" ><input type="submit" name="btn_reg" value="log in" style="background-color:rebeccapurple;width:100px;"></font></td>
<br>
<!--<a href="" ><font color="red">remember me</font></td><br>-->
<?php
echo $msg;
?>
</div>
<div class="col-sm-3"></div>
</div>
</form>

		 <?php
        include ("footer.php");
        ?>
	</body>
