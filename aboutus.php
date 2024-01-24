<?php include('config.php') ?>
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./styling.css">
    <title>About Us</title>
</head>

<body>

    <?php include('navbar.php') ?>

    <div class="container about">
        <h1 class="title">About us</h1>
        <div class="about-content">
            <div class="image">
                <img src="./img/Business-Growth.35669a6dc0a2308c8203.png">
            </div>

            <div class="content">
                <p>At Jenny's Cosmetic & Jewelry, we understand that true beauty lies not just on the surface, but in the way
                    you feel when you shine from within. We're your partner in unveiling that brilliance, offering a
                    curated collection of cosmetics and jewelry designed to empower your unique glow. </p>

                <p>
                    Our story began with a passion for artistry and a belief that every individual deserves to feel
                    confident and radiant. We meticulously select each product, from luxuriously smooth lipsticks to
                    handcrafted gemstone earrings, ensuring meticulous quality and timeless elegance. </p>


                <p>
                    We invite you to join us in a world where confidence meets creativity, and where self-expression
                    takes center stage. Step into our curated haven, explore our dazzling collections, and experience
                    the transformative power of feeling utterly, authentically you. </p>

                <a href="./home.php" class="btn btn-outline-primary readmore">Read More</a>
            </div>
        </div>
    </div>

    <?php include('footer.php') ?>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>