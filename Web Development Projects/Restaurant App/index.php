<?php

$failure=false;
if( isset($_POST['login'])){

  if(isset($_POST['customer_name']) && isset($_POST['phone_number']) ){
    if(strlen($_POST['customer_name'])>1 && strlen($_POST['phone_number'])>1){
    header('Location:profile_page.html');
    return;
    }
  
  else{
    $failure= '"Please Enter name and number!!!"';
  }
 }
}
?>


<!DOCTYPE html>
<html>
    <head>
        <link rel=stylesheet href="style.css">
        <title>Bade's Restaurant</title>
        
    </head>
    <body>
        <header>
            <h1>HEALTHYFOODS.COM</h1>
            <h3 class="welcome">Welcome to Bade's Group of Hospitality</h3>
        </header>
        <br><br><br>
        
         <section id="channel">   
        
        
         <p class="login">
    
       <span id="login">Login</span> to your account:
         </p>
    

       <section id="login_area">
     
         <form action="" method="post">
             <span >Name:</span>
             <span id="name_box"><input type="text" id="name" placeholder="Enter your Full Name" name="customer_name"></span>
            
             <div><label><br>Phone Number: <input type="number" id="phone_number" name="phone_number" ></label></div>                      
           <br>
           <div><input type="submit" id="loginButton" value="Login" name="login"></div>

          

          </form>   
       <?php 
       if($failure!=false){
           echo "<p style=color:orange>$failure</p>";
       }
       ?>
     </section>
        </section>
        <br>
        <h3>
          Don't have an account?<br>
          <a href="signup_page.php">Click here to create one</a><br>
        </h3>
            <script src="restaurant.js"></script>
    </body>
</html>

