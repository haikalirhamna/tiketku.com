<?php
require '../php/connectdb.php';

$id = ($_GET['id']);

mysqli_query($connect,("DELETE FROM orderlist WHERE id = $id"));

header('location: ../auth/pay-bills.php');
?>