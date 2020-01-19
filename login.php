<?php
        include "connection.php";
        $username = $_POST['username'];
        $password = $_POST['password'];

        $username = stripcslashes($username);
        $password = stripcslashes($password);

        if (empty($username) || empty($password))
        {
            header("Location: Signup.php?error=emptyfields&uid=".$username);
            exit();
        }

        $result = mysqli_query($conn,"select * from userinformation where Username = '$username' and Password = '$password'")
                            or die("Failed to query database".mysqli_error($conn));
        $row = mysqli_fetch_array($result);
        if ($row['Username'] == $username && $row['Password']==$password)
        {
            session_start();
            $_SESSION['Username'] = $row['Username'];
            header("Location: index.php?login=success");
            exit();
        }
        else
        {
            header("Location: index.php?error=wrongcredentials");
            exit();
        }
