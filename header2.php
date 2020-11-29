





<?php 
if(isset($_COOKIE['logcookie']))
{
    $m=$_COOKIE['logcookie'];
     
}
    ?>




<!DOCTYPE html>
<html>
    <head>
        <title></title>
       

            
        
    </head>

    <body>
        <div class="row">
            <div class="col-sm-3" > <img src="logo.png" align="center" class="img-responsive"style="height: 120px;width: 150px"></div>
                <div class="col-sm-9" id="p" > 
            <font color="red" style="text-shadow: 2px 2px;"><h1><i>DON'T DREAM IT,DRIVE IT.</i></h1></font></div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <nav class="navbar navbar-inverse">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="home.php">HOME</a>
                        </div>
                        <ul class="nav navbar-nav">
                            <li>
                                <a class="navbar-nav"href="bookinginfo.php">YOUR BOOKING</a>
                                    <ul>
                                        <li></a>
                                        <li></a>
                                        <li></a>
                                    </ul>
                            </li>
                            <li>
                            
                            <li><a href="updatedata.php">PROFILE</a></li>
                            <li><a href="feedback.php">FEEDBACK</a></li>
                            <li><a href="available2.php">AVAILABLE COLLECTION</a></li>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><span class="glyphicon glyphicon-user"><font color="white"><h4><?php echo "Welcome ".$m ?></h4></font></span></li>
                            <li><a href="home.php"><span class="glyphicon glyphicon-user"></span>LOG OUT</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </body>
</html>