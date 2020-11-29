


<?php 
$msg="";
include "db.php";
if(isset($_COOKIE['logcookie']))
{
$logid=$_COOKIE['logcookie'];
$link=mysqli_connect(HOST,USERNAME,PASSWORD,DBNAME);

$result=mysqli_query($link,"select * from login where logid='$logid'");
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
 $qry="update login set logid='$logid',name='$name',email='$email',pwd='$pwd',mobile=$mobile where logid='$logid'";
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


}


?>
















<!DOCTYPE html>
<html lang="en">
<head>
  <title>profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

  <body style="background-color: aliceblue">
        <div class="container-fluid">
        <?php
        include ("header2.php");
        ?>
    


  
  <form>
    <div class="row" style="background-color:lightpink">
    <div class="col-sm-3"></div>
  <div class="col-sm-6">
    <h2 align="center">PROFILE</h2>
       <label >Login id:</label>
      <input type="text" class="form-control"  value="<?php if(isset($_COOKIE['logcookie'])) echo $row[0] ?>" placeholder="login id" name="logid"><br>
    
     <label >Name:</label>
      <input type="text" class="form-control" value="<?php if(isset($_COOKIE['logcookie'])) echo $row[1] ?>" placeholder="Enter Name" name="txt_name">
    <br>
    
    
      <label >Email:</label>
      <input type="email" class="form-control" value="<?php if(isset($_COOKIE['logcookie'])) echo $row[2] ?>" placeholder="Enter email" name="txt_email">
    <br>
    
      <label>Password:</label>
      <input type="password" class="form-control" value="<?php if(isset($_COOKIE['logcookie'])) echo $row[3] ?>" placeholder="Enter password" name="txt_pwd">
    <br>
    <label>Confirm Password:</label>
      <input type="password" class="form-control" value="<?php if(isset($_COOKIE['logcookie'])) echo $row[3] ?>" placeholder="Confirm password" name="txt_cpwd">
    <br>
    <label >Phone no:</label>
      <input type="text" class="form-control" value="<?php if(isset($_COOKIE['logcookie'])) echo $row[4] ?>" placeholder="Enter Phone" name="txt_phone">
  
<br>
    
    <button type="submit" name="btn_reg" value="Update">Submit</button><br><br>

    <?php
      
      
    echo "$msg";
    ?>
  <br><br>

  </form>
</div>
</div class="col-sm-3"></div></div>


  
         

    
     <?php
        include ("footer.php");
        ?>
  </body>
</html>
