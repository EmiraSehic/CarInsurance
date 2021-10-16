<?php
session_start();
$conn = mysqli_connect("localhost","root","","login_register");


$data = array();


$data['Numb'] = $_POST['Numb'];
$data['Snaga_vozila'] = $_POST['Snaga_vozila'];
$data['Tip_registracije'] = $_POST['Tip_registracije'];
$data['Tip_vozila'] = $_POST['Tip_vozila'];
$data['user_id'] = $_SESSION['id'];
$data['Tip_goriva'] = $_POST['Tip_goriva'];
$data['Godiste'] = $_POST['Godiste'];

include("../bin/functions.php");

var_dump($_POST);

if(insert($conn,$data)){
     header("location: ../dashboard.php?car_inserted");
}else{
     header("location: ../dashboard.php?car_error");
}





?>