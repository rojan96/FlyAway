<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-flat.css">


</head>
<body>

<div class="jumbotron">
    <h1 class="display-3">Your Profile info</h1>
    <p class="lead">
        <?php
        include('connection.php');
        // userID, username, pasword, firstname, lastname, email, address
        $sql = "SELECT * FROM useraccount ";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
// output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                echo "id: " . $row["userID"]." " .$row["firstname"]. " " . $row["lastname"]." ". $row["email"]." ". $row["address"]. "<br>";
            }
        }

        else {
            echo "0 results";
        }
        $conn->close();
        ?>
    </p>
    <hr class="my-2">
    <p>More info</p>
    <p class="lead">
        <a class="btn btn-primary btn-lg" href="Jumbo action link" role="button">Jumbo action name</a>
    </p>
</div>



</body>
</html>