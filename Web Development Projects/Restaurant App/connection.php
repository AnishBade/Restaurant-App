<?php
$username="root";
$password="";
$server='localhost';
$db='restaurant_database';
$con=mysqli_connect($server,$username,$password,$db);
if($con){
    ?>

   

<script>alert('Connection Successful')</script>
<?php
 #echo 'Connection Successful';
}
else{
   # echo 'Connection Failed';
    die('Coonnection error'.mysqli_connect_error());
}
?>