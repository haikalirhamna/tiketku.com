<?php
require '../php/connectdb.php';

$id = ($_GET['id']);

mysqli_query($connect,("UPDATE orderlist SET status = 1 WHERE id = $id"));

header('location: ../auth/pay-bills.php');
?>