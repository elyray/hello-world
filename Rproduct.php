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
<div class="row" >
       <div class="col-md-3" style="background-color: black;"></div>
       <div class="col-md-6"><h1>Reserve Products</h1>
       <br>
<table class="table table-dark">
  <thead>
    <tr style="background-color: green;">
      <th scope="col"></th>
      <th scope="col">Name of Products</th>
      <th scope="col">Quality</th>
      <th scope="col">Price</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
</div></th>
      <td style="background-color: green;">Promatrix</td>
      <td>4</td>
      <td>3500</td>
    </tr>
    <tr>
      <th scope="row"><div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
</div></th>
      <td style="background-color: green;">Promatrix7</td>
      <td style="background-color: gray;">4</td>
      <td style="background-color: gray;">5000</td>
    </tr>
    <tr>
      <th scope="row"><div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
</div></th>
      <td style="background-color: green;">NCH GYM T-SHIRT</td>
      <td style="background-color: dimgrey;">4</td>
      <td style="background-color: dimgrey;">P2300</td>
    </tr>
  </tbody>
</table>
     <a class="btn btn-dark btn-lg float-right" href= "products.php" role="button">Back</a>&nbsp;
      <button type="Cancel" class="btn btn-dark btn-lg float-right">Cancel Reservation</button>
<br><br>
</div>
<div class="col-md-3" style="background-color: black;"></div>
</div>

 </form>