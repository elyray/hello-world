<?php
include_once "header.php";
?>

<!DOCTYPE html>
<html>

<style>
  body{
    width: 100%;
    height:100%;
  }
  .bodyContainer{
    width:80%;
    height:60%;
    text-align: center;
    margin-left:10%;
  }

  .form1{
    float:left;
    text-align:left;
    width: 50%;
    height:30%;
  }

  .form2{
    float:right;
    text-align:left;
    width: 25%;
    height: 30%;
  }

</style>
 
      
<body>
  <div class="bodyContainer">
     
     <div class ="form1">
            <h1>
            <?php
              echo"<font color='yellow'>Welcome to NCH GYM!</font>"
            ?></h1>
   <p class=" text-white">Living a healthy lifestyle is not just a fad. For some, it's a way of life.
                   </p>
                   <p class=" text-white">At The Gym we want you to exercise your options to suit your needs. Whether you want to trim down or tone up, have more energy for your family, for work, or for play, or to just look and feel better.</p><img src ="image/hpic1.png" width="800" height="400">
     </div>
     
         <div class="form2" style="background-color: #FFC300;">
             <br><img src ="image/nchgym.png" width="100%" height="auto" ><br>
      
           <form>
              <label>Username</label>
                 <input type="text" class="form-control" placeholder="" required="" name="Uname">
              <label>Password</label>
                 <input type="password" class="form-control" placeholder="" required="" name="Pass">
                 <br>
          <a href="forgotPass.php" class="link-button"><h5>Forgot Password?</h5></a>
                 <br> 
                <button type="submit" name="submit" class="btn btn-dark btn-lg btn-block">LOGIN</button>
                <br><br>
              <label><h5>Want to be a Member?&nbsp;&nbsp;</h5></label>
          <a href="signUp.php" class="link-button"><h5>Click here!</h5></a>
            </form>
         </div>
  </div>
    </body>
    </html>

<?php
include_once "footer.php";
?>    