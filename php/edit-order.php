<?php
        session_start();

        require '../php/connectdb.php';

        // get value orderlist
        $qty = ($_POST['qty']);
        $price = (($_POST['price'])*($_POST['qty']));
        $NIK = ($_POST['NIK']);
        $name = ($_POST['name']);
        $bills = ($_POST['bills']);

        // upload value

        if (isset($_POST['checkout'])) {

        mysqli_query($connect, "UPDATE orderlist SET qty = '$qty', NIK = '$NIK', name = '$name', price = '$price', status = '0', bills = '$bills', date = NOW()");

        }

        header('location: ../auth/pay-bills.php');