<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!--
    - google font link
  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="./styling.css">
    <title>JENNEY's COSMETIC & JEWELRY</title>
</head>

<body>

    <?php
    include('navbar.php');
    ?>

    <!-- Banner Start From Here  -->

    <div class="container my-3 banner">
        <div class="carousel slide" data-bs-ride="carousel" id="carouselExampleIndicators"
            style="box-shadow: 0px 7px 25px;">
            <div class="carousel-indicators">
                <button aria-label="Slide 1" class="active" data-bs-slide-to="0"
                    data-bs-target="#carouselExampleIndicators" type="button"></button> <button aria-label="Slide 2"
                    data-bs-slide-to="1" data-bs-target="#carouselExampleIndicators" type="button"></button> <button
                    aria-label="Slide 3" data-bs-slide-to="2" data-bs-target="#carouselExampleIndicators"
                    type="button"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img alt="" class="d-block w-100" src="./img/wall1.jpg">
                    <div class="carousel-caption">
                        <h5 class="animated bounceInRight" style="animation-delay: 0.5s">Base Makeup</h5>
                        <p class="animated bounceInLeft d-none d-md-block para" style="animation-delay: 1s">GO AND
                            EXPLORE NOW</p>
                        <p class="animated bounceInRight" style="animation-delay: 1.5s"><a href="./cat32.php">VISIT</a>
                        </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img alt="..." class="d-block w-100" src="./img/wall2.jpg">
                    <div class="carousel-caption">
                        <h5 class="animated bounceInRight" style="animation-delay: 0.5s">Face Makeup</h5>
                        <p class="animated bounceInLeft d-none d-md-block para" style="animation-delay: 1s">EXPLORE NEW
                            ARRIVALS</p>
                        <p class="animated bounceInRight" style="animation-delay: 1.5s"><a href="./cat34.php">VISIT</a>
                        </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img alt="..." class="d-block w-100" src="./img/wall3.jpg">
                    <div class="carousel-caption">
                        <h5 class="animated bounceInRight" style="animation-delay: 0.5s">Fashion Jewelry</h5>
                        <p class="animated bounceInLeft d-none d-md-block para" style="animation-delay: 1s">CHECK FOR
                            DISCOUNT</p>
                        <p class="animated bounceInRight" style="animation-delay: 1.5s"><a href="./cat42.php">VISIT</a>
                        </p>
                    </div>
                </div>

            </div>
            <button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#carouselExampleIndicators"
                type="button"><span aria-hidden="true" class="carousel-control-prev-icon"></span> <span
                    class="visually-hidden">Previous</span></button> <button class="carousel-control-next"
                data-bs-slide="next" data-bs-target="#carouselExampleIndicators" type="button"><span aria-hidden="true"
                    class="carousel-control-next-icon"></span> <span class="visually-hidden">Next</span></button>
        </div>

    </div>

    <!-- Banner End Here -->



    <!-- Trending products  -->

    <div class="heading">
        <h3>TRENDING PRODUCTS</h3>
    </div>

    <div class="product-main">
        <div class="container product-wrapper">

            <?php
            $query = "SELECT * FROM products ORDER BY id ASC LIMIT 8 OFFSET 10";
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


    <!-- Big Deal  -->


    <div class="container big-deal">
        <div class="image">
            <img src="./img/big-deal.jpg" alt="bigdeal">
        </div>
        <div class="services">
            <div class="heading">
                <h4>OUR SERVICES</h4>
            </div>
            <div class="service-container">

                <a href="#" class="service-item">

                    <div class="service-icon">
                        <ion-icon name="boat-outline"></ion-icon>
                    </div>

                    <div class="service-content">

                        <h3 class="service-title">Worldwide Delivery</h3>
                        <p class="service-desc">For Order Over $100</p>

                    </div>

                </a>

                <a href="#" class="service-item">

                    <div class="service-icon">
                        <ion-icon name="rocket-outline"></ion-icon>
                    </div>

                    <div class="service-content">

                        <h3 class="service-title">Next Day delivery</h3>
                        <p class="service-desc">UK Orders Only</p>

                    </div>

                </a>

                <a href="#" class="service-item">

                    <div class="service-icon">
                        <ion-icon name="call-outline"></ion-icon>
                    </div>

                    <div class="service-content">

                        <h3 class="service-title">Best Online Support</h3>
                        <p class="service-desc">Hours: 8AM - 11PM</p>

                    </div>

                </a>

                <a href="#" class="service-item">

                    <div class="service-icon">
                        <ion-icon name="arrow-undo-outline"></ion-icon>
                    </div>

                    <div class="service-content">

                        <h3 class="service-title">Return Policy</h3>
                        <p class="service-desc">Easy & Free Return</p>

                    </div>

                </a>

                <a href="#" class="service-item">

                    <div class="service-icon">
                        <ion-icon name="ticket-outline"></ion-icon>
                    </div>

                    <div class="service-content">

                        <h3 class="service-title">30% money back</h3>
                        <p class="service-desc">For Order Over $100</p>

                    </div>

                </a>

            </div>
        </div>
    </div>



    <!-- New products  -->

    <div class="heading">
        <h3>NEW ARRIVALS</h3>
    </div>

    <div class="product-main">
        <div class="container product-wrapper">

            <?php
            $query = "SELECT * FROM products ORDER BY id DESC LIMIT 8";
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




    <!-- Deal of the day  -->

    <div class="container product-featured">

        <h2 class="title">Deal of the day</h2>

        <div class="showcase-wrapper has-scrollbar">

            <div class="showcase-container">

                <div class="showcase">

                    <div class="showcase-banner">
                        <img src="./img/offer.jpg" alt="shampoo, conditioner & facewash packs" class="showcase-img">
                    </div>

                    <div class="showcase-content">

                        <div class="showcase-rating">
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star-outline"></ion-icon>
                            <ion-icon name="star-outline"></ion-icon>
                        </div>

                        <a href="#">
                            <h3 class="showcase-title">Hair Serum</h3>
                        </a>

                        <p class="showcase-desc">
                            Hair Serum Special Offer Just Go And Explore Only In
                        </p>

                        <form action="product.php" method="POST">

                            <div class="price-box">
                                <p class="price">500.00</p>

                                <del>950.00</del>
                            </div>

                            <button type="submit" name="" class="btn btn-info" style="width: 60%;">Explore</button>

                        </form>

                        <div class="countdown-box">

                            <p class="countdown-desc">
                                Hurry Up! Offer ends in:
                            </p>

                            <div class="countdown">

                                <div class="countdown-content">

                                    <p class="display-number" id="display-number-5">360</p>

                                    <p class="display-text">Days</p>

                                </div>

                                <div class="countdown-content">
                                    <p class="display-number" id="display-number-6">24</p>
                                    <p class="display-text">Hours</p>
                                </div>

                                <div class="countdown-content">
                                    <p class="display-number" id="display-number-7">59</p>
                                    <p class="display-text">Min</p>
                                </div>

                                <div class="countdown-content">
                                    <p class="display-number" id="display-number-8">00</p>
                                    <p class="display-text">Sec</p>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="showcase-container">

                <div class="showcase">

                    <div class="showcase-banner">
                        <img src="./img/offer2.jpg" alt="Rose Gold diamonds Earring" class="showcase-img">
                    </div>

                    <div class="showcase-content">

                        <div class="showcase-rating">
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star-outline"></ion-icon>
                            <ion-icon name="star-outline"></ion-icon>
                        </div>

                        <h3 class="showcase-title">
                            <a href="#" class="showcase-title">Vince Sun Block</a>
                        </h3>

                        <p class="showcase-desc">
                        Vince Sun Block Special Offer Just Go And Explore Only In
                        </p>

                        <form action="product.php" method="POST">

                            <div class="price-box">
                                <p class="price">800.00</p>
                                <del>1500.00</del>
                            </div>

                            <button type="submit" class="btn btn-info" style="width: 60%;">Explore</button>
                            <input type="hidden" name="Product_Name" value="Microphone">
                            <input type="hidden" name="Product_Price" value="360">

                        </form>

                        <div class="countdown-box">

                            <p class="countdown-desc">Hurry Up! Offer ends in:</p>

                            <div class="countdown">
                                <div class="countdown-content">
                                    <p class="display-number" id="display-number-1">360</p>
                                    <p class="display-text">Days</p>
                                </div>

                                <div class="countdown-content">
                                    <p class="display-number" id="display-number-2">24</p>
                                    <p class="display-text">Hours</p>
                                </div>

                                <div class="countdown-content">
                                    <p class="display-number" id="display-number-3">59</p>
                                    <p class="display-text">Min</p>
                                </div>

                                <div class="countdown-content">
                                    <p class="display-number" id="display-number-4">00</p>
                                    <p class="display-text">Sec</p>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>


    <!-- Testimonials  -->

    <div class="container testimonial py-5">
        <h2 class="title">TESTIMONIALS</h2>

        <div class="testimonial-parent">
            <div class="testimonial-card">

                <img src="./img/testimonial-1.jpg" alt="alan doe" class="testimonial-banner" width="80" height="80">

                <p class="testimonial-name">Alan Doe</p>

                <p class="testimonial-title">CEO & Founder Invision</p>

                <img src="./img/quotes.svg" alt="quotation" class="quotation-img" width="26">

                <p class="testimonial-desc">
                    Lorem ipsum dolor sit amet consectetur Lorem ipsum
                    dolor dolor sit amet.
                </p>

            </div>

            <div class="testimonial-card">

                <img src="./img/testimonial-1.jpg" alt="alan doe" class="testimonial-banner" width="80" height="80">

                <p class="testimonial-name">Alan Doe</p>

                <p class="testimonial-title">CEO & Founder Invision</p>

                <img src="./img/quotes.svg" alt="quotation" class="quotation-img" width="26">

                <p class="testimonial-desc">
                    Lorem ipsum dolor sit amet consectetur Lorem ipsum
                    dolor dolor sit amet.
                </p>

            </div>

            <div class="testimonial-card">

                <img src="./img/testimonial-1.jpg" alt="alan doe" class="testimonial-banner" width="80" height="80">

                <p class="testimonial-name">Alan Doe</p>

                <p class="testimonial-title">CEO & Founder Invision</p>

                <img src="./img/quotes.svg" alt="quotation" class="quotation-img" width="26">

                <p class="testimonial-desc">
                    Lorem ipsum dolor sit amet consectetur Lorem ipsum
                    dolor dolor sit amet.
                </p>

            </div>

        </div>

    </div>

    <?php include('footer.php') ?>


    <!--
    - ionicon link
  -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="script.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
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

        const daysDisplay = document.getElementById("display-number-1");
        const hoursDisplay = document.getElementById("display-number-2");
        const minutesDisplay = document.getElementById("display-number-3");
        const secondsDisplay = document.getElementById("display-number-4");
        const daysDisplay2 = document.getElementById("display-number-5");
        const hoursDisplay2 = document.getElementById("display-number-6");
        const minutesDisplay2 = document.getElementById("display-number-7");
        const secondsDisplay2 = document.getElementById("display-number-8");

        let days = 360;
        let hours = 24;
        let minutes = 59;
        let seconds = 0;

        function updateCountdown() {
            seconds--;
            if (seconds < 0) {
                seconds = 59;
                minutes--;
                if (minutes < 0) {
                    minutes = 59;
                    hours--;
                    if (hours < 0) {
                        hours = 23;
                        days--;
                    }
                }
            }

            daysDisplay.textContent = days;
            hoursDisplay.textContent = ("0" + hours).slice(-2);
            minutesDisplay.textContent = ("0" + minutes).slice(-2);
            secondsDisplay.textContent = ("0" + seconds).slice(-2);

            daysDisplay2.textContent = days;
            hoursDisplay2.textContent = ("0" + hours).slice(-2);
            minutesDisplay2.textContent = ("0" + minutes).slice(-2);
            secondsDisplay2.textContent = ("0" + seconds).slice(-2);
        }

        setInterval(updateCountdown, 1000); 
    </script>
</body>

</html>