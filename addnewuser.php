<?php

include "connection.php";
$username = $_GET['username'];
$password = $_GET['password'];
$firstname = $_GET['firstname'];
$lastname = $_GET['lastname'];
$email = $_GET['email'];
$billingaddress = $_GET['billingaddress'];


$result = mysqli_query($conn,"INSERT INTO userinformation (userID, Username, Password, Firstname, Lastname, Email, Address) VALUES (NULL, '$username','$password','$firstname','$lastname','$email','$billingaddress')");
//or die("Failed to query database".mysqli_error($conn));

header("refresh:5;url=Signup.php");
echo '';

exit();