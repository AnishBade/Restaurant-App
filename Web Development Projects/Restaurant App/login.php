<?php




 

  if(isset($_POST['customer_name']) && isset($_POST['phone_number'])) {
    if(strlen($_POST['customer_name'])<1 || strlen($_POST['phone_number'])<1){
            $_SESSION['failure']= 'Please Enter name and number!!!';
            header('Location:index.php');
            return;
    }
    
      
      else if(!is_numeric($_POST['phone_number']) || strlen($_POST['phone_number']<10 )){
        $_SESSION['failure']='Enter valid phone number!!!';
        header('Location:index.php');
        return;
    
  }
     
    
  else{
    header('Location:profile_page.php');
    return;
  }
  
 }


?>