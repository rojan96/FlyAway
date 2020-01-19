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

<body style="font-family: 'Yatra One'; background-color: #161b21">
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
    <div class="container">
        <div class="jumbotron">
            <h1 class="display-3">Your upcoming flights:</h1>
            <h1 class="display-4">

            </h1>
        </div>


    <table class="table table-striped" style="width:100%; color:#F4A950">
        <tr>
            <th>Username</th>
            <th>Booking ID</th>
            <th>Flight ID</th>
            <th>Departure city</th>
            <th>Destination city</th>
            <th>Departure date</th>
        </tr>
        <?php
        if (isset($_SESSION['Username'])) {
            $accountinfo = $_SESSION['Username'];
            $result = mysqli_query($conn, "select userID, Username, Password, Firstname, Lastname, Email, Address FROM userinformation WHERE Username = '$accountinfo' ");
            while ($row = $result->fetch_assoc()) {
                $userID = $row["userID"];
                $username = $row["Username"];
                $firstname = $row["Firstname"];
                $lastname = $row["Lastname"];
                $email = $row["Email"];
                $address = $row["Address"];
            }
        }



        $bookingID = 'No upcoming flights found.';
        $bookinginfo = mysqli_query($conn,"select bookingID, userID, flightID FROM bookinginfo WHERE userID = '$userID'");
        if($bookinginfo->num_rows>0)
        {
        while ($row = $bookinginfo->fetch_assoc()) {
        $flightID = $row["flightID"];
        $bookingID = $row['bookingID'];
        $flightinfo = mysqli_query($conn, "select FlightID, Departurecity, Destinationcity, Departuredate FROM flightinformation WHERE FlightID = '$flightID'");
            while ($row = $flightinfo->fetch_assoc()) {
                $Departurecity = $row['Departurecity'];
                $Destinationcity = $row['Destinationcity'];
                $Departuredate = $row['Departuredate'];


                ?>
                <tr>
                    <td> <?php echo $username; ?></td>
                    <td><?php echo $bookingID ?></td>
                    <td><?php echo $flightID ?></td>
                    <td><?php echo $Departurecity ?></td>
                    <td><?php echo $Destinationcity ?></td>
                    <td><?php echo $Departuredate ?></td>
                </tr>


    <?php
    }

    }
            echo ' </table>';
    }
    ?>
    <?php
//                echo $username. " ".$bookingID. " ".$flightID." ".$Departurecity. " ".$Destinationcity. " ".$Departuredate."<br>";

        //
        //
        //$flightinfo = mysqli_query($conn,"select FlightID, Departurecity, Destinationcity, Departuredate FROM flightinformation WHERE FlightID = '$flightID'");
        //while ($row = $flightinfo->fetch_assoc()) {
        //    $Departurecity = $row['Departurecity'];
        //    $Destinationcity = $row['Destinationcity'];
        //    $Departuredate = $row['Departuredate'];
        ////
        ////}
        //if ($flightinfo->num_rows>0)
        //    {
        //    while ($row = $flightinfo->fetch_assoc()) {
        //        echo '<h2>Your upcoming flights:</h2><br>'.$row['Departurecity']." ".$row['Destinationcity']." ".$row['Departuredate'];
        //    }
        //}

        ?>

    </div>
</body>

<!--<html>-->
<!--<body>-->
<!--<h2>Your upcoming flights:</h2>-->
<!--<br>-->
<!---->
<!--</body>-->
<!--</html>-->
