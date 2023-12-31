<!DOCTYPE html>
<html lang="in">

<?php session_start(); ?>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>ES Teh Cimone</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="image/logo_esteh.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body class="d-flex flex-column">
    <main class="flex-shrink-0">
        <!--Navigasi-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-5">
                <a class="navbar-brand d-flex align-items-center" href="home.php">
                    <img src="image/esteh_logo.png" alt="Logo"
                        style="height: 100px; width: auto; margin-right: 10px;"><b>ES TEH CIMONE</b>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><span
                        class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="home.php"><i class="fa-solid fa-house"></i>
                            </a></li>
                        <li class="nav-item"><a class="nav-link" href="produkmenu.php">Produk Menu</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.php">Tentang Kami</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.php">Kontak</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownSignUp" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Daftar/Masuk
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownSignUp">
                                <li><a class="dropdown-item" href="signup.php">Daftar</a></li>
                                <li><a class="dropdown-item" href="login.php">Masuk</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </main>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>
