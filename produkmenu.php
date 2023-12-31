<?php include "header.php";
require "database.php";
// untk cek apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    // Jika tidak, arahkan ke halaman login
    header('Location: login.php');
    exit;
}
?>

<!--Bagian Banner-->
<section class="py-5" id="features">
    <div id="bannerCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#bannerCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#bannerCarousel" data-slide-to="1" class="active"></li>
            <li data-target="#bannerCarousel" data-slide-to="2" class="active"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="image/banner_esteh2.png" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="image/banner_esteh3.png" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="image/banner_esteh1.png" alt="Third slide">
            </div>
        </div>
    </div>
</section>
<!--Bagian harga produk-->
<section class="bg-light py-5">
    <div class="container px-5 my-5">
        <div class="text-center mb-5">
            <h1 class="fw-bolder">MENU</h1>
            <p class="lead fw-normal text-muted mb-0">Pilih minuman, sesuai keinginanmu sekarang!</p>
        </div>
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-6 col-xl-4">
                <div class="card mb-5 mb-xl-0">
                    <div class="card-body p-5">
                        <div class="small text-uppercase fw-bold text-muted">Small Es Teh Original</div>
                        <div class="mb-3">
                            <span class="display-4 fw-bold">Rp 5</span>
                            <span class="text-muted">000.</span>
                        </div>
                        <img class="img-fluid rounded mb-5 mb-lg-0" src="image/esteh_original_produkmenu.png"
                            alt="Es Teh Original Small" />
                        <div class="d-grid"><a class="btn btn-outline-primary" href="#!">Masukan Keranjang</a></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4">
                <div class="card mb-5 mb-xl-0">
                    <div class="card-body p-5">
                        <div class="small text-uppercase fw-bold">
                            <i class="bi bi-star-fill text-warning"></i>
                            Reguler Es Teh Original
                        </div>
                        <div class="mb-3">
                            <span class="display-4 fw-bold">Rp 7</span>
                            <span class="text-muted">500.</span>
                        </div>
                        <img class="img-fluid rounded mb-5 mb-lg-0" src="image/esteh_original_produkmenu.png"
                            alt="Es Teh Original Medium" />
                        <div class="d-grid"><a class="btn btn-primary" href="#!">Masukan Keranjang</a></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4">
                <div class="card">
                    <div class="card-body p-5">
                        <div class="small text-uppercase fw-bold text-muted">Large Es Teh Original</div>
                        <div class="mb-3">
                            <span class="display-4 fw-bold">Rp 10</span>
                            <span class="text-muted">000.</span>
                        </div>
                        <img class="img-fluid rounded mb-5 mb-lg-0" src="image/esteh_original_produkmenu.png"
                            alt="Es Teh Original Large" />
                        <div class="d-grid"><a class="btn btn-outline-primary" href="#!">Masukan Keranjang</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4">
                <div class="card mb-5 mb-xl-0">
                    <div class="card-body p-5">
                        <div class="small text-uppercase fw-bold text-muted">Small Es Teh Lemon</div>
                        <div class="mb-3">
                            <span class="display-4 fw-bold">Rp 6</span>
                            <span class="text-muted">000.</span>
                        </div>
                        <img class="img-fluid rounded mb-5 mb-lg-0" src="image/esteh_lemon_produkmenu.png"
                            alt="Es Teh Lemon Small" />
                        <div class="d-grid"><a class="btn btn-outline-primary" href="#!">Masukan Keranjang</a></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4">
                <div class="card mb-5 mb-xl-0">
                    <div class="card-body p-5">
                        <div class="small text-uppercase fw-bold">
                            <i class="bi bi-star-fill text-warning"></i>
                            Reguler Es Teh Lemon
                        </div>
                        <div class="mb-3">
                            <span class="display-4 fw-bold">Rp 9</span>
                            <span class="text-muted">000.</span>
                        </div>
                        <img class="img-fluid rounded mb-5 mb-lg-0" src="image/esteh_lemon_produkmenu.png"
                            alt="Es Teh Lemon Medium" />
                        <div class="d-grid"><a class="btn btn-primary" href="#!">Masukan Keranjang</a></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4">
                <div class="card">
                    <div class="card-body p-5">
                        <div class="small text-uppercase fw-bold text-muted">Large Es Teh Lemon</div>
                        <div class="mb-3">
                            <span class="display-4 fw-bold">Rp 12</span>
                            <span class="text-muted">000.</span>
                        </div>
                        <img class="img-fluid rounded mb-5 mb-lg-0" src="image/esteh_lemon_produkmenu.png"
                            alt="Es Teh Lemon Large" />
                        <div class="d-grid"><a class="btn btn-outline-primary" href="#!">Masukan Keranjang</a></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4">
                <div class="card mb-5 mb-xl-0">
                    <div class="card-body p-5">
                        <div class="small text-uppercase fw-bold text-muted">Small Es Teh Oolong</div>
                        <div class="mb-3">
                            <span class="display-4 fw-bold">Rp 6</span>
                            <span class="text-muted">000.</span>
                        </div>
                        <img class="img-fluid rounded mb-5 mb-lg-0" src="image/esteh_oolong_produkmenu.png"
                            alt="Es Teh Lemon Small" />
                        <div class="d-grid"><a class="btn btn-outline-primary" href="#!">Masukan Keranjang</a></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4">
                <div class="card mb-5 mb-xl-0">
                    <div class="card-body p-5">
                        <div class="small text-uppercase fw-bold">
                            <i class="bi bi-star-fill text-warning"></i>
                            Reguler Es Teh Oolong
                        </div>
                        <div class="mb-3">
                            <span class="display-4 fw-bold">Rp 9</span>
                            <span class="text-muted">000.</span>
                        </div>
                        <img class="img-fluid rounded mb-5 mb-lg-0" src="image/esteh_oolong_produkmenu.png"
                            alt="Es Teh Lemon Medium" />
                        <div class="d-grid"><a class="btn btn-primary" href="#!">Masukan Keranjang</a></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4">
                <div class="card">
                    <div class="card-body p-5">
                        <div class="small text-uppercase fw-bold text-muted">Large Es Teh Oolong</div>
                        <div class="mb-3">
                            <span class="display-4 fw-bold">Rp 12</span>
                            <span class="text-muted">000.</span>
                        </div>
                        <img class="img-fluid rounded mb-5 mb-lg-0" src="image/esteh_oolong_produkmenu.png"
                            alt="Es Teh Lemon Large" />
                        <div class="d-grid"><a class="btn btn-outline-primary" href="#!">Masukan Keranjang</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</main>
<?php include "footer.php"; ?>
