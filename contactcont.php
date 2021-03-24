<?php
session_start();
$con = mysqli_connect('localhost','root');
if($con){
	echo" connection succesful";
}else{
	echo " no connection";
}

mysqli_select_db($con,'signin');


$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$q = "select * from contact where name ='$name' &&  email = '$email' && message = '$message' ";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == 1){
	echo" duplicate data";
}else{
	$qy = "insert into contact(name , email , message) values('$name' , '$email' , '$message' )";
	mysqli_query($con, $qy);
}
?>