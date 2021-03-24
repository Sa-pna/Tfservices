<?php
session_start();
$con = mysqli_connect('localhost','root');

mysqli_select_db($con,'signin');
if (isset($_POST['submit']))
{
	$email = $_POST['email'];
	$password = $_POST['password'];
	$q = "select * from sign  where email='$email' && password='$password'";
	$result = mysqli_query($con, $q);
	$num = mysqli_num_rows($result);
	if($num == 1)
	{
		header('location:project1.php');
	}
	else{
		echo "login failed";
		header('location:project1.php');

	}

}
?>

