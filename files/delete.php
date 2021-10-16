<?php
session_start();
$conn = mysqli_connect("localhost","root","","login_register");

error_reporting(0);


$id=$_GET['nu'];
$query="DELETE FROM users WHERE id= '$id'";
$data=mysqli_query($conn,$query);

if($data)
{
	header('location: dashboard.php');
	
	
}	
else
{

	echo"<font color='red'>Neuspješno brisanje registracije";

}

?>