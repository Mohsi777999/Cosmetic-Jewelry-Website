<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Page</title>
    <link rel="stylesheet" href="./styling.css">
</head>

<body>
    <div id="form">
        <h1 id="heading">Checkout</h1>
        <form method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>

            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob" required><br><br>

            <label for="address">Address</label>
            <input type="text" id="address" name="address" required><br><br>

            <label for="contact">Contact No:</label>
            <input type="number" id="contact" name="contact" required><br><br>

            <label for="category">Product Category:</label>
            <input type="text" id="category" name="category" placeholder="Ex: Base makeup" required>
            <br><br>

            <h3>Write a Review:</h3>
            <textarea name="review" id="review" cols="30" rows="2"></textarea><br><br>

            <input type="submit" name="submit" id="btn" value="submit">
        </form>
    </div>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $dob = $_POST['dob'];
        $address = $_POST['address'];
        $contact = $_POST['contact'];
        $category = $_POST['category'];
        $review = $_POST['review'];

        $sqlcheck = "INSERT INTO checkout_page (Name, Email, Dob, Address, Contact, Category, Remarks) VALUES ('$name', '$email', '$dob', '$address', '$contact', '$category', '$review')";

        $result = mysqli_query($conn, $sqlcheck);

        if ($result) {
            echo "<script> alert('Thank you for ordering') </script>";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
    ?>
</body>

</html>