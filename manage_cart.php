<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['Add_To_Cart'])) {

        if (isset($_SESSION['cart'])) {
            $myproducts = array_column($_SESSION['cart'], 'Product_Name');
            if (in_array($_POST['Product_Name'], $myproducts)) {
                echo "<script>
                alert('Product Already Added');
                window.location.href='home.php';
                </script>";
            } else {
                $count = count($_SESSION['cart']);
                $_SESSION['cart'][$count] = array('Product_Name' => $_POST['Product_Name'], 'Product_Price' => $_POST['Product_Price'], 'Quantity' => 1);
                echo "<script>
                alert('Product Added');
                window.location.href='home.php';
                </script>";
            }
        } else {
            $_SESSION['cart'][0] = array('Product_Name' => $_POST['Product_Name'], 'Product_Price' => $_POST['Product_Price'], 'Quantity' => 1);
            echo "<script>
                alert('Product Added');
                window.location.href='home.php';
                </script>";
        }

    }

    if (isset($_POST['Remove_Product'])) {
        foreach ($_SESSION['cart'] as $key => $value) {
            if ($value['Product_Name'] == $_POST['Product_Name']) {
                unset($_SESSION['cart'][$key]);
                $_SESSION['cart'] = array_values($_SESSION['cart']);
                echo "<script>
            alert('Product Removed');
            window.location.href='mycart.php';
            </script>";
            }
        }
    }



}

?>