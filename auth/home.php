<?php
session_start();

if (!isset($_SESSION['login'])) {
    header('location: ../guest/auth-login.php');
    exit();
}

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
    <link href="../css/styles.css" rel="stylesheet" />
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar header">
        <div class="container">
            <a class="navbar-brand" href="#!">
                <img src="../assets/img/brand-logo.png" alt="" width="150px">
            </a>
            <div class="navbar-link">
                <a href="#" class="me-3">Jadi Patner Tiketku.com</a>
                <a href="pay-bills.php" class="me-3">Cek order</a>
                <a class="btn btn-primary" href="../php/logout.php">Keluar</a>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container position-relative">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="text-center text-white">
                        <!-- Page heading-->
                        <h1 class="mb-5">Mau kemana hari ini?</h1>
                        <!-- to get an API token!-->
                        <form class="form-subscribe" id="contactForm">
                            <!-- Email address input-->
                            <div class="row">
                                <div class="col position-relative auto-typing">
                                    <input type="text" name="location" id="searching"
                                        class="form-control top-0 bottom-0">
                                    <div class="row position-absolute top-0 bottom-0 text m-auto">
                                        <div class="col-auto">
                                            <label for="searching">
                                                <i class="bi bi-search col"></i>
                                            </label>
                                        </div>
                                        <div class="col m-auto dynamic-text">
                                            <ul>
                                                <li><span class="text-typing">Staycation di Bali</span></li>
                                                <li><span class="text-typing">Liburan ke Bandung</span></li>
                                                <li><span class="text-typing">Event di Jakarta</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto align-items-center"><button class="btn btn-primary btn-lg"
                                        id="submitButton" type="submit">Cari</button></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Icons Grid-->
    <section class="features-icons bg-light text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                        <div class="features-icons-icon d-flex"><i
                                class="bi bi-currency-dollar m-auto text-primary"></i></div>
                        <h3>Harga Ekonomis</h3>
                        <p class="lead mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, nam?</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                        <div class="features-icons-icon d-flex"><i class="bi bi-clipboard-data m-auto text-primary"></i>
                        </div>
                        <h3>Tujuan Populer</h3>
                        <p class="lead mb-0">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quasi, cumque?
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                        <div class="features-icons-icon d-flex"><i class="bi-terminal m-auto text-primary"></i></div>
                        <h3>Easy to Use</h3>
                        <p class="lead mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis, nemo!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Image Showcases-->
    <section class="showcase">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-lg-6 order-lg-2 text-white showcase-img"
                    style="background-image: url('../assets/img/bali.jpeg')"></div>
                <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                    <h2>Staycation di Bali</h2>
                    <p class="lead mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores incidunt illo
                        architecto? Tempore necessitatibus at atque, non recusandae quis quisquam.</p>
                </div>
            </div>
            <div class="row g-0">
                <div class="col-lg-6 text-white showcase-img"
                    style="background-image: url('../assets/img/bandung.jpg')"></div>
                <div class="col-lg-6 my-auto showcase-text">
                    <h2>Liburan ke Bandung</h2>
                    <p class="lead mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad quo omnis non quae
                        maiores ullam error vero itaque atque possimus!</p>
                </div>
            </div>
            <div class="row g-0">
                <div class="col-lg-6 order-lg-2 text-white showcase-img"
                    style="background-image: url('../assets/img/jakarta.jpg')"></div>
                <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                    <h2>Event di Jakarta</h2>
                    <p class="lead mb-0">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor voluptas
                        deserunt optio tempora delectus assumenda quidem accusamus, possimus deleniti. Non.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials-->
    <section class="testimonials text-center bg-light">
        <div class="container">
            <h2 class="mb-5">What people are saying...</h2>
            <div class="row">
                <div class="col-lg-4">
                    <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                        <img class="img-fluid rounded-circle mb-3" src="../assets/img/testimonials-1.jpg" alt="..." />
                        <h5>Margaret E.</h5>
                        <p class="font-weight-light mb-0">"Lorem ipsum dolor sit amet consectetur, adipisicing elit."
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                        <img class="img-fluid rounded-circle mb-3" src="../assets/img/testimonials-2.jpg" alt="..." />
                        <h5>Fred S.</h5>
                        <p class="font-weight-light mb-0">"Lorem ipsum dolor sit amet."</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                        <img class="img-fluid rounded-circle mb-3" src="../assets/img/testimonials-3.jpg" alt="..." />
                        <h5>Sarah W.</h5>
                        <p class="font-weight-light mb-0">"Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Libero maiores a autem!"</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- products -->
    <section class="products">
        <div class="container">
            <div class="row">
                <h2>Bingung mau liburan kemana?</h2>
                <p>pilih destinasi liburan yang cocok di sini.</p>
                <div class="row g-0 mb-4">
                    <div class="col-auto" id="btn-filter">
                        <?php

                        require '../php/connectdb.php';

                        $getData = mysqli_query($connect,('SELECT * from products ORDER BY upload_at DESC'));
                        $check = mysqli_num_rows($getData);

                        if ($check > 0) {
                            while ($row = mysqli_fetch_array($getData)) {
                                echo "<a href='product-list.php?location=$row[location]'><button class='btn btn-transparent me-1'>$row[location]</button></a>";
                            }
                        }

                        ?>
                    </div>
                </div>
                <div class="row g-0 mb-4">
                    <?php

                    require '../php/connectdb.php';

                    $getData = mysqli_query($connect,('SELECT * from products ORDER BY upload_at DESC'));
                    $check = mysqli_num_rows($getData);

                    if ($check > 0) {
                        while ($row = mysqli_fetch_assoc($getData)) {
                            $img_file = '../upload_files/'.$row['image_name'];
                            
                            echo "<div class='col-auto me-2'>
                                    <a href='checkout.php?id=$row[id]' class='link-primary' class='card-subtitle'>
                                        <div class='card px-0 m-0' style='width: 200px;'>
                                            <div class='card-img overflow-hidden'>
                                                <img src='$img_file' style='width: 200px; height: 200px; object-fit: cover;'>
                                            </div>
                                            <div class='card-body'>
                                                <p class='card-title'>$row[title]</p>
                                                <p class='card-subtitle'>$row[location]</p>
                                                <p class='card-subtitle'>Rp. $row[price]</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>";
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
    <!-- footer -->
    <footer class="call-to-action text-center" id="signup">
        <div class="container position-relative">
            <div class="row">
                <div class="col-xl-6">
                    <div class="col-auto h-100 text-center text-lg-start my-auto">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item"><a href="#!">About</a></li>
                            <li class="list-inline-item">⋅</li>
                            <li class="list-inline-item"><a href="#!">Contact</a></li>
                            <li class="list-inline-item">⋅</li>
                            <li class="list-inline-item"><a href="#!">Terms of Use</a></li>
                            <li class="list-inline-item">⋅</li>
                            <li class="list-inline-item"><a href="#!">Privacy Policy</a></li>
                        </ul>
                        <p class="text-white small mb-4 mb-lg-0">&copy; Your Website 2022. All Rights Reserved.</p>
                    </div>
                    <div class="col-lg-6 h-100 text-center text-lg-start my-auto">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item me-4">
                                <a href="#!"><i class="bi-facebook fs-3"></i></a>
                            </li>
                            <li class="list-inline-item me-4">
                                <a href="#!"><i class="bi-twitter fs-3"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!"><i class="bi-instagram fs-3"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
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