<?php 
   require('connection.inc.php');
   require('function.inc.php');
$name=get_safe_value($con,$_POST['name']);
$email=get_safe_value($con,$_POST['email']);
$password=get_safe_value($con,$_POST['password']);
$phone=get_safe_value($con,$_POST['mobile']);
 $added_on=date('Y-m-d h:i:s');

 $check_user=mysqli_num_rows(mysqli_query($con,"SELECT * from customer_users WHERE email='$email' "));
 if($check_user>0){
  echo "email_present";
 }else{
  mysqli_query($con,"INSERT INTO customer_users(name,email,password,phone,added_on) VALUES('$name','$email','$password','$phone','$added_on') ");
  echo "insert";
 }
 ?>
