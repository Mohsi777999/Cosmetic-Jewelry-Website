<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link rel="stylesheet" href="./styling.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <style>

   </style>
</head>

<body>

   <?php
   include("navbar.php");
   ?>

   <section class="form-container">

      <form method="POST" class="box">
         <h3>send us message!</h3>
         <input type="text" name="name" placeholder="Enter Your Name" required maxlength="20" class="box">
         <input type="number" name="number" placeholder="Enter Your Number" required class="box">
         <input type="email" name="email" placeholder="Enter Your Email" required maxlength="50" class="box">
         <textarea name="msg" placeholder="Enter Your Message" required class="box" cols="30" rows="10"></textarea>
         <button type="submit" class="btn btn-primary btn-lg" name="send" required>Send Message</button>
      </form>

   </section>


   <?php

   if (isset($_POST['send'])) {

      $name = $_POST['name'];
      $email = $_POST['email'];
      $number = $_POST['number'];
      $message = $_POST['msg'];

      $sql = "INSERT INTO `texts`(`name`, `email`, `number`, `message`) VALUES ('$name','$email','$number','$message')";
      $result = mysqli_query($conn, $sql);
      if ($result == true) {
         header('Location:home.php');
      }
   }

   ?>

   <?php include('footer.php') ?>

   <script src="script.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"></script>
</body>

</html>