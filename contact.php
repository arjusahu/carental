
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
  $qry="insert into contact values('$logid','$name','$email','$number','$msg')";
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
    </head>
    <body style="background-color: aliceblue">
        <div class="container-fluid">
        <?php
        include ("header.php");
        echo "<br>";
        
        ?>
        <label style="background-image:url('carr.jpg'); width: 1400px;height:600px">
        <div class="row" >
            <div class="col-sm-12" ><br><br><br>

        <h3  align="center"> <font color="red">you can contact us at 8888999955 or mail </font></h3></div>
        <div class="row">
            <div class="col-sm-5" ></div>
                <div class="col-sm-4" style="height: 500px">
           <form>
         <input type="text" name="logid" placeholder="login id" style="border-radius: 4px" /><br><br>
           
            <input type="text" name="txt_name" placeholder="name" style="border-radius: 4px" /><br><br>
                    <input type="email" name="txt_email" placeholder="email" style="border-radius: 4px" /><br><br>
                
                
                    <input type="txt" name="txt_phone" placeholder="phone no" style="border-radius: 4px"/><br><br>
            
                   <textarea rows="3" cols="21" name="msg" placeholder="message" style="border-radius: 4px" ></textarea>textarea><br><br>
           

    


<input type="submit" name="btn_reg" value="submit"/><br><br>
<?php echo $msgg ?>

         </form></div>

        <div class="col-sm-3">
        </div>
    </div>
</label>


        <?php
        include ("footer.php");
        ?>
    </body>
</html>

