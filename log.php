<?php
session_start();
require_once('db.php');
$username=@$_POST['username'];
$email=@$_POST['email'];
$password=@$_POST['password'];
$phone_no=@$_POST['phone_no'];
$address=@$_POST['address'];


if (isset($_POST['submit'])){

  $query="INSERT INTO user (username,email,password) VALUES('$username','$email','$password')";
   mysqli_query($conn,$query);

header('location:register.php');
}

if (isset($_POST['login'])) {
	$username=@$_POST['username'];
	$password=@$_POST['password'];
	$sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
		$result = mysqli_query($conn, $sql) or die(mysqli_error());
  if ($row=mysqli_fetch_assoc($result)){
    $_SESSION['username']=$row['username'];

  }
	
	echo "<script>window.location='profile.php';</script>";

}

 





?>