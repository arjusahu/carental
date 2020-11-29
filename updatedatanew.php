<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

  <body style="background-color:skyblue">
        <div class="container-fluid">
        <?php
        include ("adminheader.php");
        ?>
    


  
  <form action="/action_page.php">
    <div class="row">
    <div class="col-sm-3"></div>
  <div class="col-sm-6">
    <h2 align="center">PROFILE</h2>
       <label >Login id:</label>
      <input type="text" class="form-control"  placeholder="
      login id" name="logid"><br>
    
     <label >Name:</label>
      <input type="text" class="form-control" value="" placeholder="Enter Name" name="txt_name">
    <br>
    
    
      <label >Email:</label>
      <input type="email" class="form-control" value="" placeholder="Enter email" name="txt_email">
    <br>
    
      <label>Password:</label>
      <input type="password" class="form-control" value="" placeholder="Enter password" name="txt_pwd">
    <br>
    <label>Confirm Password:</label>
      <input type="password" class="form-control" value="" placeholder="Confirm password" name="txt_cpwd">
    <br>
    <label >Phone no:</label>
      <input type="text" class="form-control" value="" placeholder="Enter Phone" name="txt_phone">
  
<br>
    
    <button type="submit" name="btn_reg" value="Update">Submit</button><br>

    <?php
      //echo "$_COOKIE['mycookie']";
    //echo "$msg";
    ?>
  

  </form>
</div>
</div class="col-sm-3"></div></div>


  
         

    
     <?php
        include ("footer.php");
        ?>
  </body>
</html>
