

<?php
$msgg="";
include "db.php";
if(isset($_GET['btn_reg']))
{
  $logid=$_GET['logid'];
$name=$_GET['txt_name'];
$email=$_GET['txt_email'];
$msg=$_GET['msg'];

$number=$_GET['txt_phone'];

 $link=mysqli_connect(HOST,USERNAME,PASSWORD,DBNAME);
  $qry="insert into feedback values('$logid','$name','$email','$number','$msg')";
  mysqli_query($link,$qry);
  if(mysqli_affected_rows($link)>0)
  {
  $msgg="<font color='green'>record inserted</font>";
  

  }
  else
  {
    $msgg="<font color='red'>error in inserting the record</font>";
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
          label
          {

            color:green;
          }
        </style>
    </head>
    <body style="background-color: aliceblue">
        <div class="container-fluid">
        <?php
        include ("header2.php");
        echo "<br>";
        
        ?>
        <form>
        <div class="row" style="background-image:url('car12.jpg'); width: 1400px;height:600px" >
           <div class="col-sm-4"></div>
  <div class="col-sm-4">
    <h2 align="center"><font color="red">FEEDBACK</font></h2>
       <label >Login id:</label>
      <input type="text" class="form-control"  value="" placeholder="login id" name="logid"><br>
    
     <label >Name:</label>
      <input type="text" class="form-control" value="" placeholder="Enter Name" name="txt_name">
    <br>
    
    
      <label >Email:</label>
      <input type="email" class="form-control" value="" placeholder="Enter email" name="txt_email">
    <br>
    
      
    <br>
    <label >Phone no:</label>
      <input type="text" class="form-control" value="" placeholder="Enter Phone" name="txt_phone">
  
<br>
<label >Feedback:</label>
<textarea name="msg"  rows="2" cols="57" placeholder="feedback" style="border-radius: 4px"></textarea><br><br>


<font color="white"><input type="submit" name="btn_reg" value="submit" style="background-color:green;width:100px"/></font><br><br>
<?php echo $msgg ?>

         </form></div>

        <div class="col-sm-4">
        </div>
    </div>
</label>


        <?php
        include ("footer.php");
        ?>
    </body>
</html>

