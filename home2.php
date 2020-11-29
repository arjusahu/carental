  
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="view port" content="width= device-width, initial-scale= 1">
        <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="http://ajax.googlleapis.com/ajax/libs/jquery3.4.0/jquery.min.js" type="text/javascript"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js" type="text/javascript"></script>
        <title>WELCOME</title>
       
<script>
  a=new Array("carhd7.jpg","carhd9.jpg");
  x=0;
 function ChangeImage()
 {
document.images[1].src=a[x];
x++;
if(x==2)
    x=0;


 }
function start()
{

    setInterval("ChangeImage()",1000);
}

</script>
            
    </head>
    <body style="background-color: aliceblue" onload="start()" >
        <div class="container-fluid">
        <?php
        include ("header.php");
        echo "<br>";
        
        ?>
        <div class="row" style="background-color:skyblue;height:200px;width:1600px" >
            <div class="col-sm-12"  >
                <img src="carhd7.jpg">
                <!--<div class=”image-slider-wrapper”>
        <ul id=”image_slider”>
            <li><img src="carhd7.jpg"></li>
            <li><img src="carhd9.jpg"></li>
            <li><img src="carhd10.jpg"></li>-->
            
        </ul> 
    </div>
                 </div>
     
 </div>
 
        <div class="row" style="background-color:skyblue">
            <div class="col-sm-8" >

         <img src="carhd3.gif" height="400px" /></div>
     
     <div class="col-sm-4">

         <img src="quotecar4.png" height="400" width="400"/></div>
     </div>
            
        </div>


        <?php
        include ("footer.php");
        ?>
    </body>
</html>

