<?php include('config.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Category</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./adminstyle.css">
    <link rel="stylesheet" href="./whiteform.css">
</head>

<body>

    <div class="admin-dashboard-parent">

        <?php include('admin-sidebar.php') ?>

        <div class="admin-panel">

            <div class="container my-4 admin-header">
                <h1>DELETE CATEGORY</h1>
            </div>

            <div class="hamburger-admin">
                <span></span>
                <span></span>
                <span></span>
            </div>

            <div class="container dashboard-boxes-parent my-5 py-5">
                <div class="main">
                    <div class="content">
                        <form method="POST">
                            <label for="username">Category Id</label>
                            <input type="number" placeholder="Please Enter Id Here In Order To Delete The Product"
                                name="catdelid" required>

                            <button class="button" type="submit" name="deletecat" required>Delete Category</button>
                        </form>
                    </div>

                    <!-- PHP Part  -->

                    <?php

                    if (isset($_POST['deletecat'])) {

                        $catdel_id = $_POST['catdelid'];

                        $sqldelcat = "DELETE FROM `products` WHERE `category_id` = '$catdel_id'";
                        $resultdelcat = mysqli_query($conn, $sqldelcat);

                        if ($resultdelcat == true) {
                            $sqlcatdel = "DELETE FROM `categories` WHERE `id` = '$catdel_id'";
                            $resultcatdel = mysqli_query($conn, $sqlcatdel);
                            header("Location:home.php");
                        } else {
                            echo "<script>alert('Category Deletion Failed')</script>";
                        }
                    }
                    ?>


                    <div class="container products-data">
                        <div class="heading">
                            <h1>PLEASE FIND RESPECTIVE ID FOR CATEGORY FROM GIVEN TABLE</h1>
                        </div>

                        <div class="products-data-table">

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th colspan="1.5">id</th>
                                        <th>category_name</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                    $allcat = "SELECT `id`, `category_name` FROM `categories`";
                                    $resultallcat = mysqli_query($conn, $allcat);
                                    while ($rowcat = mysqli_fetch_array($resultallcat)) { ?>
                                        <tr>
                                            <th scope="row">
                                                <?php echo $rowcat['id']; ?>
                                            </th>
                                            <th scope="row">
                                                <?php echo $rowcat['category_name']; ?>
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