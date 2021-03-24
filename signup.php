<?php
session_start();
$con = mysqli_connect('localhost','root');


if($con){
//	echo" connection succesful";
//$result= mysqli_query($con, $qy);
	if($con) {
	$message1 = "Your contact information is saved successfully";
	//echo $message1;
	echo '<script>alert("Your request is received . We will contact you soon...");</script>';
    echo '<script>location.href = "project1.php"</script>'; 
	}
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
	echo" duplicate data";
}else{
	$qy = "insert into sign(username , email , password , mobileno , address) values('$username' , '$email' , '$password' ,  '$mobileno' , '$address' )";
	mysqli_query($con, $qy);


}
?>