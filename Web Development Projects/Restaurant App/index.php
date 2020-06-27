<?php
require_once('pdo.php');
session_start();

if( isset($_POST['login'])){

 

  if(isset($_POST['customer_name']) && isset($_POST['phone_number'])) {
    if(strlen($_POST['customer_name'])<1 || strlen($_POST['phone_number'])<1){
            $_SESSION['failure']= 'Please Enter name and number!!!';
            header('Location:index.php');
            return;
    }
    
      
      else if(!is_numeric($_POST['phone_number']) || strlen($_POST['phone_number'])!==10 ){
        $_SESSION['failure']='Enter valid phone number!!!';
        header('Location:index.php');
        return;
    
  }
      
      
      $sql = "SELECT Phone_number FROM customers 
    WHERE Phone_number=:num";



$stmt = $pdo->prepare($sql);
$stmt->execute(array(':num' => $_POST['phone_number']));
$row = $stmt->fetch(PDO::FETCH_ASSOC);

    if($row !==false){
       
       header('Location:profile_page.php');
       return;
    
    }
    else{
        
        $_SESSION['failure']='No account associated found';
        
        
     
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
             <?php 
       if(isset($_SESSION['failure'])){
           echo "<p style=color:red>".$_SESSION['failure']."</p>";
           unset($_SESSION['failure']);
       }
       ?>
         <form action="" method="post">
             <span >Name:</span>
             <span id="name_box"><input type="text" id="name" placeholder="Enter your Full Name" name="customer_name"></span>
            
             <div><label><br>Phone Number: <input type="text" id="phone_number" name="phone_number" ></label></div>                      
           <br>
           <div><input type="submit" id="loginButton" value="Login" name="login"></div>

          

          </form>   
      
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

