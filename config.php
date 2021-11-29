<?php

if(isset($_POST['submit']))
{
$conn = mysqli_connect('sql103.epizy.com','epiz_30057050','qJjDX2pxrV8fx4w','epiz_30057050_test');

if(!$conn)
{
	die('Connection failed!'.mysqli_error($conn));
}

$name = $_POST['name'] ?? "" ;
$email = $_POST['email'] ?? "";
$passes = $_POST['number_of_passes'] ?? "";



$sql = "INSERT INTO register(name, email, number_of_passes) VALUES('$name', '$email','$passes')";

if(mysqli_query($conn,$sql))
{
	//echo "Registerd Successfully";
     // print_r($_POST);
	 echo "<script>alert('Wow! User Registration Completed.')</script>";
}
else
{
	echo mysqli_error($conn);
}
}
?>