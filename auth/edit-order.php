<?php
session_start();

if (!isset($_SESSION['login'])) {
    header('location: ../guest/auth-login.php');
    exit();
}

require '../php/connectdb.php';

$id = ($_GET['id']);
$getData = mysqli_query($connect,("SELECT * from orderlist WHERE id = '$id' "));
$File_order = mysqli_fetch_assoc($getData);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Tiketku.com</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="../assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet"
        type="text/css" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet"
        type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="../css/app.css" rel="stylesheet" />
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar header position-static">
        <div class="container">
            <a class="navbar-brand" href="#!">
                Tiketku.com
            </a>
            <div class="navbar-link">
                <a class="btn btn-primary" href="../php/logout.php">Keluar</a>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <!-- products -->
    <div class="page-heading px-4">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>Check Details Pesanan</h3>
                        <p class="text-subtitle text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Ducimus, molestiae.</p>
                    </div>
                </div>
            </div>
            <section class="section">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"></h4>
                    </div>

                    <div class="card-body">
                        <form action="../php/edit-order.php" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="basicInput">Destinasi Wisata</label>
                                        <input type="text" class="form-control" value="<?=$File_order['product_name']; ?>" name="product" readonly></input>
                                    </div>

                                    <div class="form-group">
                                        <label for="basicInput">Lokasi Wisata</label>
                                        <input type="text" class="form-control" value="<?=$File_order['location']; ?>" name="location" readonly></input>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="basicInput">Harga</label>
                                        <input class="form-control" name="price" value="<?=$File_order['price']; ?>" readonly></input>
                                    </div>
                                    <div class="form-group">
                                        <label for="basicInput">Pembayaran</label>
                                        <select class="form-control" name="bills" id="" required>
                                            <option value="Virtual Account">Virtual Account</option>
                                            <option value="Uang Digital">Uang Digital</option>
                                            <option value="Tranfer Bank">Tranfer Bank</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="basicInput">NIK</label>
                                        <input type="text" class="form-control" name="NIK" required></input>
                                    </div>
                                    <div class="form-group">
                                        <label for="basicInput">qty</label>
                                        <input type="number" class="form-control" name="qty" required></input>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="basicInput">Nama Pengunjung</label>
                                        <input type="text" class="form-control" name="name" required></input>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit" name="checkout" value="<?= $File_order['id']?>">Lanjutkan</button>
                            <a class="btn btn-primary" href="../auth/home.php">Kembali</a>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    <!-- footer -->
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <script src="../js/auto-typing.js"></script>
    <script src="../js/scroll.js"></script>
    <script src="../js/filter.js"></script>
</body>

</html>