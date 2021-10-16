<?php

$conn = mysqli_connect("localhost","root","","login_register");

    if(isset($_POST['submit']))
    {

        $username = $_POST['username'];
        $password = ($_POST['password']);
        $address= $_POST['address'];
        $phone = $_POST['phone'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];

        $query = "INSERT INTO users (username,password,firstname,lastname,phone,address) VALUES ('$username','$password','$firstname','$lastname','$phone', '$address')";
        
        if(mysqli_query($conn, $query)) {
            header("location:../reg_pot.html");
        }
    
    }
