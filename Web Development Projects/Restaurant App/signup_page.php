<?php 
session_start();
require_once 'pdo.php';
//$res=false;
if(isset($_POST['cancel'])){
    header('Location:index.php');
    return;
}
if(isset($_POST['create'])){
if(isset($_POST['customer_name']) && isset($_POST['phone_number']) && isset($_POST['email_address']) && isset($_POST['address']) && isset($_POST['age'])){
    if(strlen($_POST['customer_name']>1) && strlen($_POST['phone_number'])>1 && strlen($_POST['email_address'])>1 && strlen($_POST['address'])>1 ){
    
    $sql="INSERT INTO customers(Name,Email,Address,Phone_number,Age) VALUES+(:nam,:email,:add,:numbe,:ag)";
    $stmt=$pdo->prepare($sql);
    $stmt->execute(array(
        ':nam'=>$_POST['customer_name'],
        ':email'=>$_POST['email_address'],
        ':numbe'=>$_POST['phone_number'],
        ':ag'=>$_POST['age'],    
        ':add'=>$_POST['address']));
    $_SESSION['customer_name']=$_POST['customer_name'];
    header('Location:profile_page.php');
    return;

 }


 else{

     $_SESSION['failure']='All fields must be filled';
 }
}
}
/*if($res){
    ?>
    <script>
        alert("Data inserted successfullly");
    </script>
    <?php
}else{
    ?>
    <script>
        alert("Data not inserted ")
    </script>
    <?php
}
*/
?>

<html>
    <head>
        <link rel=stylesheet href="style.css">
        <title>signup page</title>
        
    </head>
    <body>
        <header>
            <h1>CREATE YOUR NEW ACCOUNT</h1>
        </header>
        <section id="whole">
       
            <section id="signup">
        
            <form action="" method="POST">
                      <?php 
        if(isset($_SESSION['failure'])){
        echo "<p style=color:red>".$_SESSION['failure']."</p>";
            unset($_SESSION['failure']);
        }
       ?>
                    <span>Name: </span> 
                    <span id="signup_textbox"><input type=text placeholder='Enter you name' name="customer_name" ></span>
                    
                <div><br>Email address: <input type="email"  placeholder='Enter you email address' name='email_address'></label></div><br>
                <div>Phone Number:<input type="number" placeholder="you contact number" name='phone_number' >  </div>
                    <br>
                    <span>Address:</span>
                    <span id="address"> <input type="text" placeholder="Enter you address" name='address' ></span>
                    <br><br>
                        Age:
                    <span id="ages">                   
                        <select name="age">
                            <option value="15-20" >15-20</option> 
                            <option value="20-25" selected>20-25</option>
                            <option value="25-30" >25-30</option>
                            <option value="above 30" >above 30</option>
                            
                        
                        </select>
                    </span>
                   <p>
                    <input type="submit" name="create" value="Create" id="signup_button" >
                    </p>
                    
            </form>
            <form method="post">
               
                <input type="submit" name="cancel" value="Cancel" >
            </form>
            </section>
        
           
        </section>
        <script src="restaurant.js"></script>
        </body>
</html>
