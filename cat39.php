<?php $category_name = 'Sun Protection';
$category_id = 39; ?>
<?php include('config.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo $category_name . ' ' . 'Products'; ?>
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="./styling.css">
</head>

<body>

    <?php include('navbar.php') ?>

    <h2 class="title text-center">
        <?php echo $category_name . ' ' . 'Products'; ?>
    </h2>

    <div class="product-main">
        <div class="container product-wrapper">

            <?php
            // Fetch products for the category
            $query = "SELECT * FROM products WHERE category_id = '$category_id'";
            $result = mysqli_query($conn, $query);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) { ?>

                    <div class="wsk-cp-product">
                        <form action="manage_cart.php" method="POST" class="formproduct">
                            <div class="wsk-cp-img">
                                <img src="img/<?php echo $row['product_img']; ?>" alt="Product" class="img-responsive" />
                            </div>
                            <div class="wsk-cp-text">
                                <div class="category">
                                    <button type="submit" name="Add_To_Cart" class="btn btn-info" style="width: 100%;">Add To
                                        Cart</button>
                                    <input type="hidden" name="Product_Name" value="<?php echo $row['product_name']; ?>">
                                    <input type="hidden" name="Product_Price" value="<?php echo $row['product_price']; ?>">
                                </div>
                                <div class="title-product">
                                    <h3>
                                        <?php echo $row['product_price']; ?>
                                    </h3>
                                </div>
                                <div class="title-product">
                                    <h3>
                                        <?php echo $row['product_name']; ?>
                                    </h3>
                                </div>
                            </div>
                        </form>
                    </div>

                    <?php
                }
            } else { ?>

                <div class="found">
                    <h2>NO PRODUCT FOUND IN CATEGORY ADD SOME PRODUCT</h2>
                </div>
                <?php
            }
            ?>

        </div>
    </div>

    <div class="seemore-btn pb-5">
        <button type="button" id="seemore" class="btn btn-primary" onclick="seeMore()">See More</button>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="./script.js"></script>
    <script>

        $(document).ready(function () {
            $("#searchinput").on("keyup", function () {
                var value = $(this).val().toLowerCase();
                $(".product-main .product-wrapper .wsk-cp-product").filter(function () {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });

        $(document).ready(function () {
            $("#searchinputdesktop").on("keyup", function () {
                var value = $(this).val().toLowerCase();
                $(".product-main .product-wrapper .wsk-cp-product").filter(function () {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });

    </script>
</body>

</html>