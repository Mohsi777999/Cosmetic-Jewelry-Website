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
    <link rel="stylesheet" href="./whiteform.css">
</head>

<body>

    <div class="admin-dashboard-parent">

        <?php include('admin-sidebar.php') ?>

        <div class="admin-panel">

            <div class="container my-4 admin-header">
                <h1>ADD NEW PRODUCT</h1>
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
                        <form method="POST" enctype="multipart/form-data">
                            <label for="username">Product Name</label>
                            <input type="text" placeholder="Add New Product Here" name="newpro" required>

                            <label for="password">Product Price</label>
                            <input type="text" placeholder="Add Product Price Here" name="proprice" required>

                            <div class="form-group py-3">
                                <label for="productprice">Product Image</label>
                                <input type="file" class="form-control" name="proimg" required>
                            </div>

                            <div class="form-group">
                                <label for="productprice">Product Category</label>
                                <select name="category_id" class="my-3 p-2" required>
                                    <?php while ($category = mysqli_fetch_assoc($categories_result)) { ?>
                                        <option value="<?php echo $category['id']; ?>">
                                            <?php echo $category['category_name']; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>

                            <button class="button" type="submit" name="add" required>Add New Product</button>
                        </form>
                    </div>
                </div>

            </div>

        </div>

    </div>


    <!-- PHP PART  -->

    <?php

    if (isset($_POST['add'])) {

        $category_id = $_POST['category_id'];
        $product_name = $_POST['newpro'];
        $product_price = $_POST['proprice'];

        $file_name = $_FILES['proimg']['name'];
        $temp_name = $_FILES['proimg']['tmp_name'];
        $folder = 'img/' . $file_name;

        $sqlcat = "INSERT INTO `products`(`product_name`, `product_price`, `category_id`,`product_img`) VALUES ('$product_name','$product_price','$category_id','$file_name')";

        $result = mysqli_query($conn, $sqlcat);

        if (move_uploaded_file($temp_name, $folder)) {
        } else {
            echo "<script>Product Added Failed</script>";
        }

    }

    ?>

    <script src="./script.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>