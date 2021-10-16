<?php
session_start();
$conn = mysqli_connect("localhost","root","","login_register");

error_reporting(0);


$Numb=$_GET['nu'];
$query="DELETE FROM CAR WHERE Numb= '$Numb'";
$data=mysqli_query($conn,$sql);

if($data)
{
	header('location: dashboard.php');
	
	
}	
else
{

	echo"<font color='red'>Neuspješno brisanje registracije";

}

?>