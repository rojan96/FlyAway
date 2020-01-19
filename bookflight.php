<?php
session_start();
include "connection.php";
$flight = $_POST['flight'];
$nameuser = $_SESSION['Username'];


$userIDget = mysqli_query($conn, "SELECT * FROM userinformation where Username = '$nameuser'");
$row = mysqli_fetch_array($userIDget);
$userID = $row['userID'];
//echo $nameuser." ".$flight. " ".$userID;

$result = mysqli_query($conn,"INSERT INTO `bookinginfo` (`bookingID`, `userID`, `flightID`) VALUES (NULL, '$userID', '$flight')");
header("refresh:5; url=dashboard.php");
echo 'Booking Successful. You\'ll be redirected in about 5 secs. If not, click <a href="dashboard.php">here</a>.';
//

