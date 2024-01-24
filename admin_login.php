<?php include('config.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="./whiteform.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <div class="main adminform">
        <div class="content">
            <form method="POST">
                <label for="username">Admin Username</label>
                <input type="text" placeholder="Username" name="adminname" required>

                <label for="password">Admin Password</label>
                <input type="text" placeholder="Password" name="adminpass" required>

                <button class="button" type="submit" name="dash" required>Login</button>
            </form>
        </div>
    </div>


    <?php

    if (isset($_POST['dash'])) {

        $admin_name = $_POST['adminname'];
        $admin_pass = $_POST['adminpass'];

        $sqladmin = "SELECT * FROM `admin` WHERE `admin-name` = '$admin_name' AND `admin-password` = '$admin_pass'";
        $result = mysqli_query($conn, $sqladmin);

        if ($result == true) {
            session_start();
            $_SESSION['admin_name'] = $admin_name;
            $_SESSION['admin_pass'] = $admin_pass;
            header("Location:dash.php");
        } else{
            echo "<script>alert('Invalid Admin Name or Admin Password')</script>";
        }

    }
    ?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>