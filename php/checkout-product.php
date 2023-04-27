<?php
        session_start();

        require '../php/connectdb.php';

        // get value orderlist
        $user_id = ($_SESSION['login']);
        $product_name = ($_POST['product']);
        $location = ($_POST['location']);
        $qty = ($_POST['qty']);
        $price = (($_POST['price'])*($_POST['qty']));
        $NIK = ($_POST['NIK']);
        $name = ($_POST['name']);
        $bills = ($_POST['bills']);

        // upload value

        if (isset($_POST['checkout'])) {

        mysqli_query($connect, "INSERT INTO orderlist ( user_id, product_name, location, qty, NIK, name, price, status, bills, date)  VALUES ('$user_id', '$product_name', '$location', '$qty', '$NIK', '$name', '$price', '0', '$bills', NOW())");

        }

        header('location: ../auth/pay-bills.php');
?>