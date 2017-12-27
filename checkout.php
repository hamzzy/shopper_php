<?php
include('db.php');
session_start();


if (isset($_POST['checkout'])) {
    //$address=$_POST['address'];
	
  foreach ($_SESSION['cart'] as $key => $value) {
  	
      $name=$value['name'];
      $price=$value['price'];
      $total=$_SESSION['total'];
      $quantity=$value['quantity'];
      $user=$_SESSION['username'];
      

     $sql="INSERT INTO user_cart (product_name,product_price,user,quantity,amount_total,recieved) VALUES('$name','$price','$user','$quantity','$total','not yet')";
     mysqli_query($conn,$sql); 


  }
 // $user=$_SESSION["username"];
  //$sql="select product_name,Product_quantity from user_cart where username='$user'";







    //header("Content-type: application/pdf");
    //header("Content-Disposition: inline; filename=invoice.pdf");







}








?>