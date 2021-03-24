<?php
session_start();
include 'output.php';
$con = mysqli_connect('localhost','root');
if($con){
	echo"Your order submitted";
}else{
	echo " no connection";
}

mysqli_select_db($con,'signin');
$days = $_POST['days'];
$quantity = $_POST['quantity'];
$tiffin = $_POST['tiffin'];
$time = $_POST['time'];
$date = $_POST['date'];


$q = "select * from ordermeals where days = '$days' && quantity = '$quantity' && tiffin = '$tiffin' && date = '$date' ";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);
if($num == 1){
	echo" duplicate data";
}else{
	$qy = "insert into ordermeals(days , quantity , tiffin , time , date) values('$days' , '$quantity' , '$tiffin' ,  '$time' , '$date' )";
	mysqli_query($con, $qy);
	}
?>