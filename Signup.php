<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign up or Log in</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-flat.css">
    <link href="https://fonts.googleapis.com/css?family=Yatra+One" rel="stylesheet">
</head>

<body style="font-family: 'Yatra One'; background-color: #161b21; color: #F4A950">
<!--Code for navigation bar-->
<nav class="navbar navbar-expand-sm navbar-light bg-light " >
    <a class="navbar-brand" href="index.php" style="color:#161b21 ">FlyAway</a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
            aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="index.php" style="color:#161b21 ">Home <span class="sr-only">(current)</span></a>
            </li>
        </ul>
<!--Code for Log in Bar-->
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <form class="form-inline my-2 my-lg-0 ml-auto" action="login.php" method="POST">
                <input class="form-control mr-sm-2" id="username" name="username"  type="text" placeholder="Username">
                <input class="form-control mr-sm-2" id="password" name="password" type="password" placeholder="Password">
                <button class="btn btn-outline-success my-2 my-sm-0" name="submit" type="submit" >Log in</button>
            </form>
        </ul>
    </div>
</nav>


<!--Code for Sign up form.-->
        <div class ="col-lg-12 col-md-12 col-sm-12" style="padding:3%; background-image: url('images/jumbotron_main.jpg'")>
            <form class="form-horizontal" action="addnewuser.php">
                <fieldset>

                    <!-- Form Name -->
                    <legend>No account? Sign up.</legend>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="username">User Name</label>
                        <div class="col-md-4">
                            <input id="textinput" name="username" type="text" placeholder="Pick a cool one." class="form-control input-md" required="">

                        </div>
                    </div>

                    <!-- Password input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="password">Password</label>
                        <div class="col-md-4">
                            <input id="passwordinput" name="password" type="password" placeholder="Enter 8 or more alphabets, numbers and symbols." class="form-control input-md" required="">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="firstname">First Name</label>
                        <div class="col-md-4">
                            <input id="textinput" name="firstname" type="text" placeholder="" class="form-control input-md" required="">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="lastname">Last Name</label>
                        <div class="col-md-4">
                            <input id="textinput" name="lastname" type="text" placeholder="" class="form-control input-md">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="email">Email</label>
                        <div class="col-md-4">
                            <input id="textinput" name="email" type="text" placeholder="123@gmail.com " class="form-control input-md">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="billingaddress">Billing Address</label>
                        <div class="col-md-4">
                            <input id="textinput" name="billingaddress" type="text" placeholder="123 abc street, City, Country, Zipcode" class="form-control input-md">

                        </div>
                    </div>

                    <!-- Button -->
                    <div class="form-group">

                        <div class="col-md-4">
                            <button id="singlebutton" name="singlebutton" class="btn btn-primary">Sign up!</button>
                        </div>
                    </div>

                </fieldset>
            </form>

        </div>

    </div>
<!--Contact Us Section-->

<div id="Contact"></div>
<div class="jumbotron" style="background-color: #161b21 ">
    <h4 class="display-4" style="color:#F4A950; text-align: center">Contact Us</h4>
    <p style="color:gray; text-align: center; color:white"> <a href="https://www.fb.com">Facebook</a></p>
    <p style="color:gray; text-align: center;color:#F4A950"> <a href="https://www.instagram.com"> Instagram </a></p>
    <h5 style="text-align: center; color:white;">2019 ©  Fly Away, Inc. All rights reserved.</h5>


</div>
</body>
</html>




