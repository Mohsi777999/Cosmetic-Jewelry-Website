<?php include('config.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Product</title>
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
                <h1>DELETE PRODUCT</h1>
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
                            <label for="username">Product Id</label>
                            <input type="number" placeholder="Please Enter Id Here In Order To Delete The Product"
                                name="productid" required>

                            <button class="button" type="submit" name="delete" required>Delete Product</button>
                        </form>
                    </div>

                    <!-- PHP Part  -->

                    <?php

                    if (isset($_POST['delete'])) {

                        $product_id = $_POST['productid'];

                        $sqldelpro = "DELETE FROM `products` WHERE `id` = '$product_id'";

                        $resultdelpro = mysqli_query($conn, $sqldelpro);

                        if ($resultdelpro == true) {
                            header("Location:home.php");
                        } else {
                            echo "<script>alert('Product Deletion Failed')</script>";
                        }
                    }
                    ?>


                    <div class="container products-data">
                        <div class="heading">
                            <h1>PLEASE FIND RESPECTIVE ID FOR PRODUCT FROM GIVEN TABLE</h1>
                        </div>

                        <div class="products-data-table">

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th colspan="1.5">id</th>
                                        <th>product_name</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                    $allpro = "SELECT `id`, `product_name` FROM `products`";
                                    $resultallpro = mysqli_query($conn, $allpro);
                                    while ($rowpro = mysqli_fetch_array($resultallpro)) { ?>
                                        <tr>
                                            <th scope="row">
                                                <?php echo $rowpro['id']; ?>
                                            </th>
                                            <th scope="row">
                                                <?php echo $rowpro['product_name']; ?>
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