<?php
session_start();

if (!isset($_SESSION['login'])) {
    header('location: ../guest/auth-login.php');
    exit();
}

require '../php/connectdb.php';

$user_id = ($_SESSION['login']);

// get orderList

$getData = mysqli_query($connect,("SELECT * from orderlist WHERE user_id = $user_id"));
// $Orderlist = mysqli_fetch_assoc($getData);
// $check = mysqli_fetch_array($getData);
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
                <a class="btn btn-primary" href="../auth/home.php">Kembali</a>
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
                    <h3>Details Pesanan</h3>
                    <p class="text-subtitle text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Ducimus, molestiae.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <section class="section">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>NIK</th>
                                    <th>Nama</th>
                                    <th>Destinasi</th>
                                    <th>Lokasi</th>
                                    <th>Qty</th>
                                    <th>Harga Total</th>
                                    <th>Pembayaran</th>
                                    <th>Status</th>
                                    <th>Edit Pesanan</th>
                                    <th>Batalkan</th>
                                    <th>Bayar</th>
                                </tr>
                            </thead>
                            <?php 
                                foreach ($getData as $item) {
                                    echo "<tbody>
                                        <tr>
                                            <td>$item[NIK]</td>
                                            <td>$item[name]</td>
                                            <td>$item[product_name]</td>
                                            <td>$item[location]</td>
                                            <td>$item[qty]</td>
                                            <td>$item[price]</td>
                                            <td>$item[bills]</td>";
                                            if ($item['status'] == '0') {
                                                echo "<td>Belum Dibayar</td>";
                                            }
                                            elseif ($item['status'] == '1') {
                                                echo "<td>Sudah Dibayar</td>";
                                            }
                                            else {
                                                echo "<td>Dibatalkan</td>";
                                            }
                                            echo "
                                            <td><a href='edit-order.php?id=$item[id]' class='badge bg-success'>Edit Pesanan</a></td>
                                            <td><a href='../php/delete-order.php?id=$item[id]'class='badge bg-danger'>Batalkan Pesanan</a></td>
                                            <td><a href='../php/update_order.php?id=$item[id]'class='badge bg-success'>Bayar</a></td>
                                        </tr>
                                    </tbody>";
                                }

                            ?>
                        </table>
                    </div>
                    <button onclick="window.print()" id="print-page">Cetak</button>
                </div>
            </section>
        </div>
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
    <!-- <script src="">
        var btnPrint = document.querySelector('#print-page');
        btnPrint.addEventListener('click', function () {
            window.print();
        });
    </script> -->
</body>

</html>