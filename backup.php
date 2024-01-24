<?php include('config.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./adminstyle.css">
</head>

<body>

    <div class="admin-dashboard-parent">

        <?php include('admin-sidebar.php') ?>

        <div class="admin-panel">

            <div class="container my-4 admin-header">
                <h1>BACKUP YOUR DATABASE</h1>
            </div>

            <div class="hamburger-admin">
                <span></span>
                <span></span>
                <span></span>
            </div>

            <div class="container dashboard-boxes-parent my-5 py-5">

                <div class="note">
                    <h3 class="py-3">NOTE</h3>
                    <p style="font-size:20px;">If you want to make a backup of your database in order to safeguard it
                        against potential data
                        loss or corruption then you should now about your servername, username, password and database
                        name to download a copy of your database .</p>
                    <h3 class="py-3">DETAILS</h3>
                    <h6>Your Servername is: <strong>localhost</strong></h6>
                    <h6>Your Username is: <strong>root</strong></h6>
                    <h6>Your Password is: <strong>Leave it empty</strong></h6>
                    <h6>Your Database name is: <strong>ecombase</strong></h6>
                    <h3 class="py-3">HOW TO DOWNLOAD</h3>
                    <p style="font-size:20px;">Click below backup database button to redirect another page where you
                        have to fill details that is mentioned above .</p>
                    <a href="http://localhost/php%20project/bmd/"><button class="btn btn-primary btn-lg my-3">Backup Database</button></a>
                </div>

            </div>

        </div>

    </div>

    </div>

    <script src="./script.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>