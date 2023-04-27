<?php
session_start();

if (!isset($_SESSION['roles']) == 'admin') {
    header('location: home.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Mazer Admin Dashboard</title>

    <link rel="stylesheet" href="../css/app.css">
    <link rel="stylesheet" href="../css/app-dark.css">
    <link rel="shortcut icon" href="../assets/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet"
        type="text/css" />

    <link rel="stylesheet" href="../css/iconly.css">

</head>

<body>
    <script src="../js/initTheme.js"></script>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active" style="position: fixed;">
                <div class="sidebar-header position-relative">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="logo">
                            <a href="../index.php">Tiketku.com</a>
                        </div>
                        <div class="sidebar-toggler  x">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>

                        <li class="sidebar-item">
                            <a href="dashboard.php" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a href="table-datatable.php" class='sidebar-link'>
                                <i class="bi bi-grid-1x2-fill"></i>
                                <span>Order status</span>
                            </a>
                        </li>
                        <li class="sidebar-item active ">
                            <a href="file-uploder.php" class='sidebar-link'>
                                <i class="bi bi-cloud-arrow-up-fill"></i>
                                <span>File Uploader</span>
                            </a>
                        </li>
                        <li class="sidebar-item  ">
                            <a href="../php/logout.php" class='sidebar-link'>
                                <i class="bi bi-power"></i>
                                <span>Log out</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>Product Input</h3>
                        <p class="text-subtitle text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Ducimus, molestiae.</p>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Input</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <section class="section">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Input here</h4>
                    </div>

                    <div class="card-body">
                        <form action="../php/product-upload.php" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="basicInput">Title</label>
                                        <input type="text" class="form-control" id="basicInput"
                                            placeholder="Enter Your Product" name="title">
                                    </div>

                                    <div class="form-group">
                                        <label for="basicInput">location</label>
                                        <input type="text" class="form-control" id="basicInput"
                                            placeholder="Enter Your Product" name="location">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="basicInput">Price</label>
                                        <input type="number" class="form-control" id="basicInput"
                                            placeholder="Enter Your Product" name="price">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="basicInput">Image</label>
                                        <input type="file" class="form-control" id="basicInput"
                                            placeholder="Enter Your Product" name="img">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="basicInput">Description</label>
                                        <input type="text" class="form-control" id="basicInput"
                                            placeholder="Enter Your Product" name="description">
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit" name="upload">upload</button>
                        </form>
                    </div>
                </div>
            </section>
        </div>

        <footer>
            <div class="footer clearfix mb-0 text-muted">
                <div class="float-start">
                    <p>2021 &copy;</p>
                </div>
            </div>
        </footer>
    </div>
    </div>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/app.js"></script>

</body>

</html>