<?php include('config.php') ?>

<?php

session_start();

if (!isset($_SESSION['admin_name'])) {
    header('Location: admin_login.php');
    exit;
}

?>

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
                <h1>ADMIN DASHBOARD PANEL</h1>
            </div>

            <div class="hamburger-admin">
                <span></span>
                <span></span>
                <span></span>
            </div>

            <div class="container dashboard-boxes-parent my-5 py-5">

                <?php
                $sqloverallpro = "SELECT COUNT(product_name) AS total_products FROM products";
                $result = mysqli_query($conn, $sqloverallpro);

                $row = mysqli_fetch_array($result);
                $total_products = $row['total_products'];

                $sqloverallrev = "SELECT SUM(total_revenue) AS total_rev FROM revenue";
                $resultrev = mysqli_query($conn, $sqloverallrev);

                $row = mysqli_fetch_array($resultrev);
                $total_rev = $row['total_rev'];

                $sqloverallsell = "SELECT COUNT(total_revenue) AS total_sell FROM revenue";
                $resultsell = mysqli_query($conn, $sqloverallsell);

                $row = mysqli_fetch_array($resultsell);
                $total_sell = $row['total_sell'];
                ?>

                <div class="dashboard-box">
                    <h3>OVERALL PRODUCTS</h3>
                    <h1>
                        <?php echo $total_products; ?>
                    </h1>
                </div>

                <?php
                $sqloverallcat = "SELECT COUNT(category_name) AS total_categories FROM categories";
                $result = mysqli_query($conn, $sqloverallcat);

                $row = mysqli_fetch_array($result);
                $total_categories = $row['total_categories'];
                ?>

                <div class="dashboard-box">
                    <h3>OVERALL CATEGORIES</h3>
                    <h1>
                        <?php echo $total_categories; ?>
                    </h1>
                </div>
                <div class="dashboard-box">
                    <h2>SELLED PRODUCTS</h2>
                    <h1>
                        <?php echo $total_sell; ?>
                    </h1>
                </div>
                <div class="dashboard-box">
                    <h3>TOTAL REVENUE</h3>
                    <h1>
                        <?php echo $total_rev; ?>&nbsp;PKR
                    </h1>
                </div>
            </div>

            <div class="container products-data">
                <div class="heading">
                    <h1>PRODUCTS DATA</h1>
                </div>

                <div class="products-data-table table-responsive">

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">product_name</th>
                                <th scope="col">product_price</th>
                                <th scope="col">category_id</th>
                                <th scope="col">product_img</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $sqlprodata = "SELECT * FROM products";
                            $result = mysqli_query($conn, $sqlprodata);

                            while ($rowpro = mysqli_fetch_array($result)) { ?>
                                <tr>
                                    <td>
                                        <?php echo $rowpro['id']; ?>
                                    </td>
                                    <td>
                                        <?php echo $rowpro['product_name']; ?>
                                    </td>
                                    <td>
                                        <?php echo $rowpro['product_price']; ?>
                                    </td>
                                    <td>
                                        <?php echo $rowpro['category_id']; ?>
                                    </td>
                                    <td>
                                        <?php echo $rowpro['product_img']; ?>
                                    </td>
                                </tr>
                                <?php
                            } ?>

                        </tbody>
                    </table>

                </div>

            </div>


            <div class="container products-data">
                <div class="heading">
                    <h1>ORDER DATA</h1>
                </div>

                <div class="products-data-table table-responsive">

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Date of birth</th>
                                <th scope="col">Address</th>
                                <th scope="col">Contact</th>
                                <th scope="col">Category</th>
                                <th scope="col">Remarks</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $sqlcheck = "SELECT * FROM checkout_page";
                            $resultcheck = mysqli_query($conn, $sqlcheck);

                            while ($rowcheck = mysqli_fetch_array($resultcheck)) { ?>
                                <tr>
                                    <td>
                                        <?php echo $rowcheck['id']; ?>
                                    </td>
                                    <td>
                                        <?php echo $rowcheck['Name']; ?>
                                    </td>
                                    <td>
                                        <?php echo $rowcheck['Email']; ?>
                                    </td>
                                    <td>
                                        <?php echo $rowcheck['Dob']; ?>
                                    </td>
                                    <td>
                                        <?php echo $rowcheck['Address']; ?>
                                    </td>
                                    <td>
                                        <?php echo $rowcheck['Contact']; ?>
                                    </td>
                                    <td>
                                        <?php echo $rowcheck['Category']; ?>
                                    </td>
                                    <td>
                                        <?php echo $rowcheck['Remarks']; ?>
                                    </td>
                                </tr>
                                <?php
                            } ?>

                        </tbody>
                    </table>

                </div>

            </div>



            <div class="container clients-data">

                <div class="heading">
                    <h1>CONTACT DATA</h1>
                </div>

                <div class="clients-data-table table-responsive">

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">name</th>
                                <th scope="col">email</th>
                                <th scope="col">number</th>
                                <th scope="col">message</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sqlcontact = "SELECT * FROM texts";
                            $result = mysqli_query($conn, $sqlcontact);

                            while ($rowcont = mysqli_fetch_array($result)) { ?>
                                <tr>
                                    <td>
                                        <?php echo $rowcont['id']; ?>
                                    </td>
                                    <td>
                                        <?php echo $rowcont['name']; ?>
                                    </td>
                                    <td>
                                        <?php echo $rowcont['email']; ?>
                                    </td>
                                    <td>
                                        <?php echo $rowcont['number']; ?>
                                    </td>
                                    <td>
                                        <?php echo $rowcont['message']; ?>
                                    </td>
                                </tr>
                                <?php
                            } ?>
                        </tbody>
                    </table>

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