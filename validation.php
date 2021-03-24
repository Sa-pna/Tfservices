<?php
session_start();
$con = mysqli_connect("localhost","root");
if($con){
	echo " connection succesfull";
}else{
	echo " no connection";
}

mysqli_select_db($con,'signin');
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['psw'];
$mobileno = $_POST['mobileno'];
$address = $_POST['address'];

$q = "select * from sign where username ='$username' &&  email = '$email' && password = '$password' && mobileno = '$mobileno' && address = '$address' ";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == 1){

	$SESSION['username'] = $username;
	header('location:project1.php');
}else{
	header('location:project1.php');
	
}
?>