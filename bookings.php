<?php

session_start();
include "connection.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FlyAway</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-flat.css">
    <link href="https://fonts.googleapis.com/css?family=Yatra+One" rel="stylesheet">
</head>

<body style="font-family: 'Yatra One'; background-color: #161b21; color:#F4A950;">
    <nav class="navbar navbar-expand-sm navbar-light bg-light " >
        <a class="navbar-brand" href="index.php" style="color:#161b21 ">FlyAway</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
                aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php" style="color:#161b21 ">Home <span class="sr-only">(current)</span></a>
                </li>

                <?php
                if (isset($_SESSION['Username']))
                {
                    echo ' <div class="nav-item "> <a class="nav-link" href="useraccount.php" style="color#161b21">Account</a></div>';
                    echo ' <div class="nav-item "> <a class="nav-link" href="dashboard.php" style="color#161b21">Dashboard</a></div>';
                    echo ' <div class="nav-item "> <a class="nav-link" href="logout.php" style="color#161b21">Log out</a></div>';

                }
                else
                {
                    echo ' <div class="nav-item "> <a class="nav-link" href="Signup.php" style="color#161b21">Sign up or Log in</a></div>';
                }
                ?>

            </ul>
        </div>
    </nav>

    <h2 class="display-2">Upcoming Flights:</h2>

        <div class="container-fluid">
    <div class="jumbotron">
        <h1 class="display-4">

   <?php
       if (isset($_SESSION['Username'])) {
            $accountinfo = $_SESSION['Username'];
            $flightinfo = mysqli_query($conn, "select FlightID, Departurecity, Destinationcity, Departuredate FROM flightinformation");

            echo '<table class="table" > <tr><th > </th><th>Departure city </th> <th>Destination city </th> <th>Departure date </th><th></th></tr>';
            if($flightinfo->num_rows>0) {
                while ($row = $flightinfo->fetch_assoc()) {
                    $FlightID = $row['FlightID'];
                    $Departurecity = $row['Departurecity'];
                    $Destinationcity = $row['Destinationcity'];
                    $Departuredate = $row['Departuredate'];

                    ?>

                     <form class="form-inline my-2 my-lg-0 ml-auto" action="bookflight.php" method="POST" style="text-align: center">

                         <tr ><td><input type="radio" name="flight" value = "<?php echo $FlightID; ?>" checked="checked " hidden></td> <?php echo ''."\n".'<td> '.$Departurecity."</td><td >".$Destinationcity." </td><td >".$Departuredate."</td>"; ?>
                         <td ><button class="btn btn-outline-success my-2 my-sm-0" name="submit" type="submit" >Book This Flight</button></td></tr>
                     </form>


        <?php
                }
            }
            echo '</table>';
        }
    ?>
        </h1>
    </div>
        </div>
</body>

