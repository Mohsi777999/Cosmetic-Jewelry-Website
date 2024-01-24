<?php
include('config.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--
    - google font link
  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="./styling.css">
    <title>Hello, world!</title>
</head>

<body>

    <div class="container mobile-nav">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="./home.php"><img src="./img/logo.png" alt="logo" width="40px"
                    height="50px">&nbsp;Navbar</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="./home.php">Home</a>
                    </li>

                    <?php
                    $allcatmobile = "SELECT * FROM `categories`";
                    $allcatresultmobile = mysqli_query($conn, $allcatmobile);
                    ?>

                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Category
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <div class="list-1 mobilecat">
                                <?php
                                while ($allcatrowsm = mysqli_fetch_array($allcatresultmobile)) {
                                    $cat_idm = $allcatrowsm['id'];
                                    $cat_namem = $allcatrowsm['category_name'];
                                    ?>
                                    <li class="px-2"><a href="cat<?php echo $cat_idm; ?>.php">
                                            <?php echo $cat_namem; ?>
                                        </a></li>
                                    <?php
                                }
                                ?>
                            </div>
                        </ul>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="./product.php">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About us</a>
                    </li>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" id="searchinput" placeholder="Search"
                            aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </ul>

            </div>

        </nav>
    </div>

    <header>

        <div class="container navigation-bar">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="./home.php"><img src="./img/logo.png" alt="logo" width="40px"
                        height="50px">&nbsp;JENNEY</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="./home.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" onmouseover="hovershow()" id="category-hover" href="#">Category</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./product.php">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./contact.php">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./aboutus.php">About us</a>
                        </li>
                    </ul>

                    <div class="header-top-actions">

                        <form class="d-flex">
                            <input class="form-control me-2" type="search" id="searchinputdesktop" placeholder="Search"
                                aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>

                    </div>

            </nav>

        </div>
        </div>


        <!-- Categories dropdown code start here  -->

        <?php
        $allcat = "SELECT * FROM `categories`";
        $allcatresult = mysqli_query($conn, $allcat);
        ?>

        <div class="dropdown-overlay" id="drop">
            <div class="categories-list">
                <ul class="container catnames">
                    <?php
                    while ($allcatrows = mysqli_fetch_array($allcatresult)) {
                        $cat_id = $allcatrows['id'];
                        $cat_name = $allcatrows['category_name'];
                        ?>
                        <li><a href="cat<?php echo $cat_id; ?>.php">
                                <?php echo $cat_name; ?>
                            </a></li>
                        <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
        <!-- Categories dropdown code end here  -->


        <div class="container next-bar">
            <div class="social-links">

                <ul class="social-link d-flex py-5">

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">
                            <ion-icon name="logo-facebook"></ion-icon>
                        </a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">
                            <ion-icon name="logo-twitter"></ion-icon>
                        </a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">
                            <ion-icon name="logo-linkedin"></ion-icon>
                        </a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">
                            <ion-icon name="logo-instagram"></ion-icon>
                        </a>
                    </li>

                </ul>

            </div>
            <div class="brand-name pb-2">
                <h1>JENNEY'S COSMETIC & JEWELRY</h1>
            </div>
            <div class="header-user-actions pb-2">

                <button class="action-btn" id="useradmin" onclick="openForm()">
                    <ion-icon name="person-outline"></ion-icon>
                </button>


                <!-- This code shows the number of products on cart icon that are present in cart by user  -->

                <?php
                $count = 0;
                if (isset($_SESSION['cart'])) {
                    $count = count($_SESSION['cart']);
                }

                ?>

                <!-- This code end here while the icon is appear below -->

                <button class="action-btn position-relative">
                    <a href="mycart.php">
                        <ion-icon name="bag-handle-outline"></ion-icon>

                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            <?php echo $count; ?>
                    </a>
                </button>

            </div>
        </div>

    </header>

    <div class="user-admin-modal" id="uamodal">
        <div class="user">
            <h3><a href="./signup_form.php">User</a></h3>
        </div>
        <div class="admin">
            <h3><a href="./admin_login.php">Admin</a></h3>
        </div>
    </div>

    <!--
    - ionicon link
  -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="script.js"></script>
</body>

</html>