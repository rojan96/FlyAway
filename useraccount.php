<?php
session_start();
include 'connection.php';

if (isset($_SESSION['Username'])) {
    $accountinfo=$_SESSION['Username'];
    $result = mysqli_query($conn,"select userID, Username, Password, Firstname, Lastname, Email, Address FROM userinformation WHERE Username = '$accountinfo' ");
    while ($row = $result->fetch_assoc()) {
        $username = $row["Username"];
        $firstname = $row["Firstname"];
        $lastname = $row["Lastname"];
        $email = $row["Email"];
        $address = $row["Address"];
   }
//    $flightinfo = mysqli_query($conn,"select FROM flightinformation WHERE FlightID = '1' ");
//    while ($row = $flightinfo->fetch_assoc()) {
//        $FlightID = $row["FlightID"];
//        $Departurecity = $row["Departurecity"];
//        $Destinationcity = $row["Destinationcity"];
//        $Date = $row["Departuredate"];
//        $address = $row["Address"];
//    }

}

?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>
            <?php
            while ($row = $result->fetch_assoc()) {
                echo $row["Username"];
            }
            ?>
        </title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-flat.css">
        <link href="https://fonts.googleapis.com/css?family=Yatra+One" rel="stylesheet">
    </head>

    <body style="font-family: 'Yatra One'; background-color: #161b21">
<!--    Navigation Bar code-->
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
    <div class="row">
        <div class="card col-md-6" style="width: 18rem; align-content: center">
            <img class="card-img-top" src="images/userimg.png" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title"><?php echo $firstname . " " . $lastname ?>
                </h4>
                <p class="card-text"><?php
                    echo 'Username: ' . $username;
                    echo '<br>Email: ' . $email;
                    echo '<br>Address: ' . $address;
                    ?></p>
            </div>
        </div>


    </div>
</div>
    </body>

</html>