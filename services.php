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
<div class ="form-group row">
              <div class="form-group col-sm-1">
                <label></label>
              </div>
             <div class="form-group col-lg-5 text-white">
               <h1>
           <?php
           echo"<font color='yellow'>TRAINING SERVICES</font>"
        ?></h1>
   <p class=" text-white">The gym offers a training services for gym buds for their work out.
                   </p></div>
           <div class="form-group col-lg-1"><label></label></div>
         <div class="form-group col-lg-2"></div> 
         </div>
         
         <form style="background-color: white;">
         <div class="form-row">
         <div class="col-md-1" style="background-color: black;"></div>
         <div class="col-md-2">
         <img src ="image/cardio.png" width="100%" height="300"></div>
         <div class="col-md-3"  style="background-color: black;"><br><img src ="image/barble.png" width="5%" height="30"><h2>CARDIO BOXING</h2>
<p>Cardio Kickboxing is a fusion of boxing, martial arts and aerobics usually done rhythmically to music. Offering an intense cross-training and total-body workout it utilizes the training routines used by combat athletes in martial arts,boxing and kickboxing.</p></div>
         <div class="col-md-3"></div>
         <div class="col-md-3" style="background-color: black;"></div>
         </div>
         </form> 
   
         <form style="background-color: white;">
         <div class="form-row">
         <div class="col-md-1" style="background-color: black;"></div>
         <div class="col-md-2">
         <img src ="image/martial.png" width="100%" height="300"></div>
         <div class="col-md-3"  style="background-color: black;"><br><img src ="image/barble.png" width="5%" height="30"><h2>MARTIAL ARTS</h2>
<p>Martial arts are codified systems and traditions of combat practices, which are practiced for a number of reasons: as self-defense, military and law enforcement applications, mental and spiritual development; as well as entertainment and the preservation of a nation's intangible cultural heritage.</p></div>
         <div class="col-md-3"></div>
         <div class="col-md-3" style="background-color: black;"></div>
         </div>
         </form> 

         <form style="background-color: white;">
         <div class="form-row">
         <div class="col-md-1" style="background-color: black;"></div>
         <div class="col-md-2">
         <img src ="image/Bbuild.png" width="100%" height="300"></div>
         <div class="col-md-3"  style="background-color: black;"><br><img src ="image/barble.png" width="5%" height="30"><h2>BODY BUILDING COACHING SERVICE</h2>
<p>Customized nutrition consultations, training, cardio plans, supplement recommendations, reverse dieting protocols for post competition, posing sessions and day of competition services; both in person and virtual options are available. </p></div>
         <div class="col-md-3"></div>
         <div class="col-md-3" style="background-color: black;"></div>
         </div>
         </form> 

         <form style="background-color: white;">
         <div class="form-row">
         <div class="col-md-1" style="background-color: black;"></div>
         <div class="col-md-2">
         <img src ="image/wservice.png" width="100%" height="300"></div>
         <div class="col-md-3"  style="background-color: black;"><br><img src ="image/barble.png" width="5%" height="30"><h2>WALK-IN SERVICE</h2>
<p>The use of all the equipment to work out and exercise under the rules and regulation of the gym without the help of personal trainers.</p></div>
         <div class="col-md-3"></div>
         <div class="col-md-3" style="background-color: black;"></div>
         </div>
         </form> 

         <form style="background-color: white;">
         <div class="form-row">
         <div class="col-md-1" style="background-color: black;"></div>
         <div class="col-md-2">
         <img src ="image/cfit.png" width="100%" height="300"></div>
         <div class="col-md-3"  style="background-color: black;"><br><img src ="image/barble.png" width="5%" height="30"><h2>CROSS FIT</h2>
<p>It is based on functional movements that reflect the aspects of several sports and types of exercise that is performed with high intensity. This program requires the help of a personal trainer.</p></div>
         <div class="col-md-3"></div>
         <div class="col-md-3" style="background-color: black;"></div>
         </div>
         </form> 

         <form style="background-color: white;">
         <div class="form-row">
         <div class="col-md-1" style="background-color: black;"></div>
         <div class="col-md-2">
         <img src ="image/athl.png" width="100%" height="300"></div>
         <div class="col-md-3"  style="background-color: black;"><br><img src ="image/barble.png" width="5%" height="30"><h2>ATHLETICS</h2>
<p>The business offers physical sports and games with a personal trainer.</p></div>
         <div class="col-md-3"></div>
         <div class="col-md-3" style="background-color: black;"></div>
         </div>
         </form> 

         <form style="background-color: white;">
         <div class="form-row">
         <div class="col-md-1" style="background-color: black;"></div>
         <div class="col-md-2">
         <img src ="image/model.png" width="100%" height="300"></div>
         <div class="col-md-3"  style="background-color: black;"><br><img src ="image/barble.png" width="5%" height="30"><h2>MODELING</h2>
<p>This type of program offers modeling program for men and women with the help of a personal trainer.</p></div>
         <div class="col-md-3"></div>
         <div class="col-md-3" style="background-color: black;"></div>
         </div>
         </form> 


</body>
</html>