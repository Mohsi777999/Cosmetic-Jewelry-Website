<?php include('config.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Category</title>
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
                <h1>UPDATE CATEGORY</h1>
            </div>

            <div class="hamburger-admin">
                <span></span>
                <span></span>
                <span></span>
            </div>

            <?php
            $sql = "SELECT * FROM `categories`";
            $categories_result = mysqli_query($conn, $sql);
            ?>

            <div class="container dashboard-boxes-parent my-5 py-5">
                <div class="main">
                    <div class="content">
                        <form method="POST">
                            <label for="username">Category Name For Update</label>
                            <input type="text" placeholder="Update Category Name" name="catnameu" required>

                            <label for="password">Category Id</label>
                            <input type="number" placeholder="Enter Category Id In Order To Update" name="catid" required>

                            <button class="button" type="submit" name="updatecat" required>Update Category</button>
                        </form>
                    </div>
                </div>

            </div>


            <div class="container products-data">
                <div class="heading">
                    <h1>CATEGORIES DATA</h1>
                </div>

                <div class="products-data-table mb-5">

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


    <!-- PHP PART  -->

    <?php

    if (isset($_POST['updatecat'])) {

        $catnameu = $_POST['catnameu'];
        $catid = $_POST['catid'];

        $sqlupdatecat = "UPDATE `categories` SET `category_name`='$catnameu' WHERE `id`='$catid'";

        $resultupdatecat = mysqli_query($conn, $sqlupdatecat);

        if ($resultupdatecat == true) {
            header("Location:home.php");
        } else {
            echo "<script>Category Updated Failed</script>";
        }

    }

    ?>

    <script src="./script.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>