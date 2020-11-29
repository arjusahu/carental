<?php 
$msg="";
include "db.php";
if(isset($_GET['id']))
{
$email=$_GET['id'];
$link=mysqli_connect(HOST,USERNAME,PASSWORD,DBNAME);

$result=mysqli_query($link,"select * from login where email='$email'");
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
 $qry="update login set logid='$logid',name='$name',email='$email',pwd='$pwd',mobile=$mobile where email='$email'";
  mysqli_query($link,"$qry");
 
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
header("location:userdata.php");

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
    <body style="background-color:skyblue">
        <div class="container-fluid">
        <?php
        include ("adminheader.php");
        ?>
        <div class="row">
          <div class="col-sm-5"></div>
          <div class="col-sm-4" style="height:500px">
     <h1 >UPDATE</h1>
     <form>
        <input type="text" name="logid" value="<?php if(isset($_GET['id'])) echo $row[0]; ?>" style="border-radius: 4px" /><br><br>
        
    
          <input type="text" name="txt_name" value="<?php if(isset($_GET['id'])) echo $row[1]; ?>" style="border-radius: 4px" /><br><br>
        
          <input type="email" name="txt_email" value="<?php if(isset($_GET['id']))
        echo $row[2]; ?>" placeholder="email" style="border-radius: 4px" readonly/><br><br>

        
          <input type="password" name="txt_pwd" value="<?php if(isset($_GET['id'])) echo $row[3]; ?>" placeholder="password" style="border-radius: 4px"/><br><br>

        
          <input type="password" name="txt_cpwd" value="<?php if(isset($_GET['id'])) echo $row[3]; ?>"  style="border-radius: 4px"/><br><br>

        
  <input type="number" name="txt_phone" value="<?php if(isset($_GET['id'])) echo $row[4]; ?>"  style="border-radius: 4px"/></td><br><br>


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
