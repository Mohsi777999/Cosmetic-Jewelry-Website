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
                <h1>CLIENTS DATA</h1>
            </div>

            <div class="hamburger-admin">
                <span></span>
                <span></span>
                <span></span>
            </div>

            <div class="container dashboard-boxes-parent my-5 py-5">

                <div class="container products-data">

                    <div class="products-data-table">

                        <table class="table table-responsive">
                            <thead>
                                <tr>
                                    <th colspan="1.5">id</th>
                                    <th>username</th>
                                    <th>email</th>
                                    <th>password</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $allclients = "SELECT * FROM `users`";
                                $resultallclients = mysqli_query($conn, $allclients);
                                while ($rowclients = mysqli_fetch_array($resultallclients)) { ?>
                                    <tr>
                                        <th scope="row">
                                            <?php echo $rowclients['id']; ?>
                                        </th>
                                        <th scope="row">
                                            <?php echo $rowclients['username']; ?>
                                        </th>
                                        <th scope="row">
                                            <?php echo $rowclients['email']; ?>
                                        </th>
                                        <th scope="row">
                                            <?php echo $rowclients['password']; ?>
                                        </th>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </tbody>
                        </table>

                    </div>

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