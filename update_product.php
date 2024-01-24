<?php include('config.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product</title>
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
                <h1>UPDATE PRODUCT</h1>
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
                            <label for="username">Product Name For Update</label>
                            <input type="text" placeholder="Update Product Name Here" name="pronameu" required>

                            <label for="password">Product Price For Update</label>
                            <input type="text" placeholder="Update Product Price Here" name="propriceu" required>

                            <div class="form-group py-3">
                                <label for="productprice">Product Image For Update</label>
                                <input type="file" class="form-control" name="proimgu" required>
                            </div>

                            <div class="form-group">
                                <label for="productprice">Change Product Category For Update</label>
                                <select name="category_id" class="my-3 p-2" required>
                                    <?php while ($category = mysqli_fetch_assoc($categories_result)) { ?>
                                        <option value="<?php echo $category['id']; ?>">
                                            <?php echo $category['category_name']; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>

                            <label for="username">Product Id</label>
                            <input type="number" placeholder="Enter Product Id Here In Order To Update" required name="proidu">

                            <button class="button" type="submit" name="update" required>Update Product</button>
                        </form>
                    </div>
                </div>

            </div>


            <div class="container products-data">
                <div class="heading">
                    <h1>FIND ID OF PRODUCT IN ORDER TO UPDATE</h1>
                </div>

                <div class="products-data-table mb-5 table-responsive">

                    <table class="table">
                        <thead>
                            <tr>
                                <th colspan="1.5">id</th>
                                <th>product_name</th>
                                <th>product_price</th>
                                <th>product_img</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            $allpro = "SELECT `id`, `product_name`, `product_price`, `product_img` FROM `products`";
                            $resultallpro = mysqli_query($conn, $allpro);
                            while ($rowpro = mysqli_fetch_array($resultallpro)) { ?>
                                <tr>
                                    <th scope="row">
                                        <?php echo $rowpro['id']; ?>
                                    </th>
                                    <th scope="row">
                                        <?php echo $rowpro['product_name']; ?>
                                    </th>
                                    <th scope="row">
                                        <?php echo $rowpro['product_price']; ?>
                                    </th>
                                    <th scope="row">
                                        <?php echo $rowpro['product_img']; ?>
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

    if (isset($_POST['update'])) {

        $category_id = $_POST['category_id'];
        $product_name = $_POST['pronameu'];
        $product_price = $_POST['propriceu'];
        $pro_id = $_POST['proidu'];

        $file_name = $_FILES['proimgu']['name'];
        $temp_name = $_FILES['proimgu']['tmp_name'];
        $folder = 'img/' . $file_name;

        $sqlupdate = "UPDATE `products` SET `product_name`='$product_name',`product_price`='$product_price',`category_id`='$category_id',`product_img`='$file_name' WHERE `id`='$pro_id'";

        $resultupdate = mysqli_query($conn, $sqlupdate);

        if ($resultupdate == true) {
            header("Location:home.php");
        } else {
            echo "<script>Product Updated Failed</script>";
        }

    }

    ?>

    <script src="./script.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>