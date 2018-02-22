<?php
echo "<body style='background-color:black'>";
?>
<!DOCTYPE html>
<html lang = "en">
<head>
  <title>NCH GYM Fitness Center</title>
  <meta charset="utf-8">
  <meta name ="viewport" content="width=device-width, initial-scale=1">

  <link rel ="stylesheet" href="assets/bootstrap/4.0.0/css/bootstrap.min.css">
  
  <script src ="assets/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src ="assets/3.2.1/jquery-3.2.1.slim.min.js"></script>
  <script src ="assets/popper.js/1.12.9/popper.min.js"></script>
</head>

<body>
<form action = 'index.php' method = 'post' style="background-color: yellow;">
<div class ="form-group row">
  <div class ="col-md-4">
       <label></label>
       </div>
       <div class = "col-md-4">
       <h1>
       <?php 
echo "<font color='white'>NCH</font>";
echo"<font color='gray'>GYM</font>";

?> </h1>
<h5> <?php 
echo "<font color='yellow'>---------</font>";?>Gym/Physical Fitness Center</h5>
       </div>
       <div class = "col-md-4">
      



       <label></label>
       </div>
 </div>
     </div>
<div class = "form-row">
            <div class="col-lg-8"></div>
            <div class="col-lg-4"><a class="btn btn-dark" href="home.php" role="button" style="background-color: white;">
               <img src ="image/phone.png" width="50" height="50">
            </a>
             <a class="btn btn-dark " href= "product.php" role="button" style="background-color: white;">
               <img src ="image/message.png" width="50" height="50">
             </a>
              <a class="btn btn-dark" href= "product.php" role="button" style="background-color: white;">
                 <img src ="image/location.png" width="50" height="50">
              </a>
               <a class="btn btn-dark" href= "product.php" role="button" style="background-color: white;">
                  <img src ="image/home.png" width="50" height="50">
               </a>
            </div>
              
    </div>
    <br>


  <div class = "form-row"  style="background-color: black;">
      <div class="col-sm-3">
               <a class="btn btn-dark btn-lg btn-block" href="home.php" role="button" style="background-color: black;">HOME</a>
              </div>
            <div class="col-sm-3">
               <a class="btn btn-dark btn-lg btn-block" href= "products.php" role="button" style="background-color: black;">PRODUCTS</a>
               </div>

            <div class="col-sm-3">
                <a class="btn btn-dark btn-lg btn-block" href="services.php" role="button" style="background-color: black;">SERVICES</a>
                </div>

            <div class="col-sm-3">
              <a class="btn btn-dark btn-lg btn-block" href="about.php" role="button" style="background-color: black;">ABOUT US</a>
                    </div>
              
                    </div>
              
    </div>
            <label></label>
            
</form>


<form style="background-color:  yellow;" action="products.php">
<div class="row">
<div class="col-md-1" style="background-color: black;"></div>
<div class="col-sm-1" style="background-color: black;"></div>
 <div class="col-md-4" class="rounded float-right"><h1>&nbsp;&nbsp;&nbsp;&nbsp;Reserve Product</h1><br>
  <h2>PROMATRIX (2lbs.)</h2><br> 
   <h2>Quantity</h2> 
   <input type="number" placeholder="" required="" class="rounded float-center" style="width:60%;height:5%;">&nbsp;&nbsp;&nbsp;&nbsp;<br><br>
   <h2>Price</h2>
   <input type="number" readonly class="form-control-plaintext" value ="" style="width:60%;height:5%; background-color: yellow;" disabled="">
   <br><br><br>
    <button type="submit" class="btn btn-dark btn-lg" style="background-color: black;"><h2>Save</h2></button>
     &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
      <a class="btn btn-dark btn-lg" href= "products.php" role="button" style="background-color: black;"><h2>Cancel</h2></a><br><br>
 </div>
 <br>
<div class="col-md-3"><br><img src ="image/tumblr.png" width="100%" height="400"></div>
<br><br>
 <div class="col-md-2" style="background-color: black;"></div>
 <div class="col-md-1" style="background-color: black;"></div>
 <br><br><br><br>
 </div>
 </form>