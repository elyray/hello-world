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
            <label></label>
            
</form>


<form style="background-color: yellow;">
<div class = "form-row">
      <div class="col-lg-1" style="background-color: black;"><label></label></div>
            <div class="col-lg-4"></div>
            <div class="col-lg-5"></div>
            <div class="col-lg-2" style="background-color: black;"></div>
              
    </div>
</form>
<div class ="form-group row">
              <div class="form-group col-sm-1">
                <label></label>
              </div>
             <div class="form-group col-lg-5 text-white">
           <a href="gmail.php" class="link-button"><img src ="image/gmail.png" width="30" height="30"></a>&nbsp;
               <a href="twitt.php" class="link-button"><img src ="image/twitt.png" width="30" height="30"></a>&nbsp;
               <a href="fb.php" class="link-button"> <img src ="image/fb.png" width="30" height="30"></a><br><br>
               <h1>
           <?php
           echo"<font color='yellow'>Welcome to NCH GYM!</font>"
        ?></h1>
   <p class=" text-white">Living a healthy lifestyle is not just a fad. For some, it's a way of life.
                   </p>
                   <p class=" text-white">At The Gym we want you to exercise your options to suit your needs. Whether you want to trim down or tone up, have more energy for your family, for work, or for play, or to just look and feel better.</p><img src ="image/hpic1.png" width="800" height="400">
                    </div>
           <div class="form-group col-lg-1"><label></label></div>
         <div class="form-group col-lg-2" style="background-color: yellow;" action="Login.php">
             <br>   <img src ="image/nchgym.png" width="100%" height="auto" ><br>
           <br>
           <form>
            <label>Username</label>
             <input type="text" class="form-control" placeholder="" required="">
          <label>Password</label>
      <input type="password" class="form-control" placeholder="" required="">
                   <br>
                   <label>
     <h6><input type="checkbox" checked="checked" name="remember">Remember me</h6>
    </label><br>
          <a href="forgotPass.php" class="link-button"><h5>Forgot Password?</h5></a>
                  <br> 
                <button type="submit" class="btn btn-dark btn-lg btn-block">LOGIN</button>
                <br><br>
                 <label><h5>Want to be a Member?&nbsp;&nbsp;</h5></label>
                   <a href="signUp.php" class="link-button"><h5>Click here!</h5></a>
                   </form>
                     </div>
                     </div>  
                             
<form method='post' style="background-color: yellow;">
<div class = "row">
      <div class="col-md-1" style="background-color: black;"><label></label></div>
            <div class="col-md-4"></div>
            <div class="col-md-4"></div>
            <div class="col-md-3" style="background-color: black;"></div>
              
 </div>
</form>

<div class = "form-group row">
      <div class="col-lg-1"></div>
            <div class="col-lg-2"><a href="#"><h6 class=" text-white">Training Tips</h6></a></div>
            <div class="col-lg-1"></div>
           <div class="col-lg-2"><a href="#"><h6 class=" text-white">Group Training</h6></a></div>
           <div class="col-lg-1"></div>
            <div class="col-lg-2"><a href="#"><h6 class=" text-white">Personal Training</h6></a></div>
              
    </div>
    <form style="background-color: yellow;">
<div class = "form-row">
      <div class="col-lg-1" style="background-color: black;"><label></label></div>
            <div class="col-lg-2"></div>
            <div class="col-lg-1" style="background-color: black;"></div>
            <div class="col-lg-2"></div>
           <div class="col-lg-1" style="background-color: black;"></div>
            <div class="col-lg-2" ></div>
            <div class="col-lg-3" style="background-color: black;"></div>
            
              
 </div>
</form>

<div class = "form-group row">
      <div class="col-lg-1"></div>
            <div class="col-lg-1">
              <img src ="image/trainingtips.jpg" width="270" height="200">
            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-2"><img src ="image/gpic.png" width="270" height="200"></div>
           <div class="col-lg-1"></div>
            <div class="col-lg-2"><img src ="image/ppic.png" width="270" height="200"></div>
           <br>
    </div>
<br><br>
<div class = "form-group row">
      <div class="col-lg-1"></div>
            <div class="col-lg-2"><a href="#"><h6 class=" text-white">About Us</h6></a></div>
            <div class="col-lg-1"></div>
           <div class="col-lg-2"><a href="#"><h6 class=" text-white"></h6></a></div>
           <div class="col-lg-1"></div>
            <div class="col-lg-2"><a href="#"><h6 class=" text-white">Contact Us</h6></a></div>
    </div>
 <form style="background-color: yellow;">
<div class = "form-row">

      <div class="col-lg-1" style="background-color: black;"><label></label></div>
            <div class="col-lg-5"></div>
            <div class="col-lg-1" style="background-color: black;"></div>
            <div class="col-lg-3"></div>
            <div class="col-lg-2" style="background-color: black;"></div>
              
    </div>
</form>
      <div class = "form-group row">
      <div class="col-lg-1"></div>
            <div class="col-lg-3"><a href="#"><h7 class=" text-white">Northern Comfort Homes(NCH) Gym started in 2010</h7></a></div>
            <div class="col-lg-1"></div>
           <div class="col-lg-1"><a href="#"><h6 class=" text-white"></h6></a></div>
           <div class="col-lg-1"></div>
            <div class="col-lg-3"><a href="#"><h6 class=" text-white">New Lucban Extension Road Baguio City<br> Tel: 123-456-7890<br>Fax: 123-456-7890</h6></a></div>
              
    </div>           
</body>
</html>
<footer class="bg-dark text-white mt-4 fixed-bottom container">
      <div class="container py-1">
      <div class = "row">
        <div class = "col-lg-4"> Property by : 
        </div>
        <div class = "col-lg-4">
          NCH GYM 
          </div>
        <div class = "col-lg-4 text-right">
          GYM/ Physical Fitness Center
          </div>
        </div>
      </div>
    </footer>
    </div>

</body>
</html>