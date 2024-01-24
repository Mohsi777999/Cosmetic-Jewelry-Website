<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cart Section</title>
  <link rel="stylesheet" href="./styling.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
  <?php
  include('navbar.php');
  ?>
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center border rounded bg-light my-5">
        <h1>MY CART</h1>
      </div>

      <div class="col-lg-9">
        <table class="table">
          <thead class="text-center">
            <tr>
              <th scope="col">Serial No.</th>
              <th scope="col">Product Name</th>
              <th scope="col">Product Price</th>
              <th scope="col">Quantity</th>
              <th scope="col">Total</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody class="text-center">
            <?php
            if (isset($_SESSION['cart'])) {
              foreach ($_SESSION['cart'] as $key => $value) {
                $sr = $key + 1;
                echo "
            <tr>
            <td>$sr</td>
            <td>$value[Product_Name]</td>
            <td>$value[Product_Price]<input type='hidden' class='iprice' value='$value[Product_Price]'></td>
            <td><input class='text-center iquantity' onchange='subTotal()' type='number' value='$value[Quantity]' min='0' max='10'></td>
            <td class='itotal'></td>
            <td>
            <form action = 'manage_cart.php' method='POST'>
            <button name='Remove_Product' class='btn btn-sm btn-outline-danger'>REMOVE</button>
            <input type='hidden' name='Product_Name' value='$value[Product_Name]'>
            </form>
            </td>
            </tr>
            ";
                $orderedpr[] = $value['Product_Price'];
              }
            }


            ?>
          </tbody>
        </table>
      </div>

      <div class="col-lg-3">
        <div class=".border bg-light rounded p-4">
          <h4> Grand Total</h4>
          <h5 class="text-right" id="gtotal"></h5>
          <br>
          <form method="POST">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
              <label class="form-check-label" for="flexRadioDefault2">
                Cash On Delivery
              </label>
            </div>
            <br>
            <a href="http://localhost/php%20project/checkoutpage.php" class="btn btn-primary btn-block" name="order">
            Make Purchase
            </a>
          </form>
        </div>
      </div>

    </div>
  </div>

  <?php

  if (isset($_POST['order'])) {
    // Loop through collected product names and insert them
    foreach ($orderedpr as $pr) {
      $insert = "INSERT INTO `revenue`(`total_revenue`) VALUES ('$pr')";
      mysqli_query($conn, $insert);
    }

  }

  ?>

  <script>
    var gt = 0;
    var iprice = document.getElementsByClassName('iprice');
    var iquantity = document.getElementsByClassName('iquantity');
    var itotal = document.getElementsByClassName('itotal');
    var gtotal = document.getElementById('gtotal');

    function subTotal() {
      gt = 0;
      for (i = 0; i < iprice.length; i++) {
        itotal[i].innerText = (iprice[i].value) * (iquantity[i].value);

        gt = gt + (iprice[i].value) * (iquantity[i].value);
      }
      gtotal.innerText = gt;
    }

    subTotal();
  </script>

  <script src="script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>