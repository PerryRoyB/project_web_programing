<?php include "header.php";
require "database.php";

$submit_success = '';
$submit_error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Data yang didapat dari form
    $nama_lengkap = $conn->real_escape_string($_POST['nama_lengkap']);
    $email = $conn->real_escape_string($_POST['email']);
    $no_telepon = $conn->real_escape_string($_POST['no_telepon']);
    $cerita_momen = $conn->real_escape_string($_POST['cerita_momen']);

    // Query untuk memasukkan data
    $query = "INSERT INTO dukung_kami (nama_lengkap, email, no_telepon, cerita_momen) VALUES (?, ?, ?, ?)";

    // Persiapan dan bind
    if ($stmt = $conn->prepare($query)) {
        $stmt->bind_param("ssss", $nama_lengkap, $email, $no_telepon, $cerita_momen);

        // Menjalankan dan memeriksa hasil query
        if ($stmt->execute()) {
            $submit_success = 'Terima kasih atas cerita Anda.';
        } else {
            $submit_error = 'Terjadi kesalahan, mohon ulangi: ' . $stmt->error;
        }

        // Menutup statement
        $stmt->close();
    } else {
        $submit_error = 'Terjadi kesalahan, mohon ulangi kembali: ' . $conn->error;
    }

    // Menutup koneksi
    $conn->close();
} ?>

<!-- Bagian Halaman Kontak-->
<section class="py-5">
    <div class="container px-5">
        <!-- Formulir Kontak-->
        <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
            <?php if ($submit_success !== ''): ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $submit_success; ?>
                </div>
            <?php endif; ?>
            <?php if ($submit_error !== ''): ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $submit_error; ?>
                </div>
            <?php endif; ?>
            <div class="text-center mb-5">
                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-envelope"></i>
                </div>
                <h1 class="fw-bolder">Dukung kami</h1>
                <p class="lead fw-normal text-muted mb-0">Kami senang mendengar cerita dari penikmat</p>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-8 col-xl-6">
                    <form id="contactForm" method="post" action="contact.php">
                        <!--Input nama-->
                        <div class="form-group">
                            <label for="nama_lengkap">Nama Lengkap :</label>
                            <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" required>
                        </div>

                        <!--Input email-->
                        <div class="form-group">
                            <label for="email">Email :</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>

                        <!--Input no telepon-->
                        <div class="form-group">
                            <label for="no_telepon">No Telepon :</label>
                            <input type="tel" class="form-control" id="no_telepon" name="no_telepon" required>
                        </div>

                        <!--Input pesan-->
                        <div class="form-group">
                            <label for="cerita_momen">Cerita Momen :</label>
                            <textarea class="form-control" id="cerita_momen" name="cerita_momen" rows="5"
                                required></textarea>
                        </div>

                        <!--Tombol kirim-->
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Kirim Cerita Anda</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Bagian hubungi kami-->
        <section class="py-5">
            <div class="container-fluid px-5">
                <div class="row gx-5">
                    <!--Bagian kiri untuk alamat dan no telepon -->
                    <div class="col-lg-6">
                        <div class="row gx-5 row-cols-1 row-cols-lg-2">
                            <div class="col mb-2">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3">
                                    <i class="bi bi-telephone"></i>
                                </div>
                                <div class="h5">Hubungi kami</div>
                                <p class="text-muted mb-0">Hubungi pada saat jam operasional di <a
                                        href="tel:085258589100">085258589100</a>.</p>
                            </div>
                            <div class="col mb-2">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3">
                                    <i class="bi bi-geo-alt"></i>
                                </div>
                                <div class="h5">Alamat kami</div>
                                <p class="text-muted mb-0">Jl. Gatot Subroto No.8, Cimone, Kec. Karawaci, Kota
                                    Tangerang, Banten 15114</p>
                            </div>
                            <div class="col mb-2">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3">
                                    <i class="bi bi-clock"></i>
                                </div>
                                <div class="h5">Jam Buka</div>
                                <p class="text-muted mb-0">Senin s/d Sabtu
                                    <br> 09:00 s/d 21:00
                                    <br> Minggu
                                    <br> Tutup
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Bagian kanan untuk maps-->
                <div class="col-lg-6 d-flex justify-content-center">
                    <iframe id="googleMapsFrame"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3335.479906472507!2d106.6082106876597!3d-6.187394135201942!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fed92813c0fd%3A0xbc4ad5911aa639b9!2sUniversitas+Bina+Sarana+Informatika+Kampus+Tangerang+(UBSI+Tangerang)!5e0!3m2!1sid!2sid!4v1702982293277!5m2!1sid!2sid"
                        width="450%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
    </div>
</section>
</div>
</section>

<script>
    document.getElementById('googleMapsFrame').addEventListener('click', function () {
        window.open('https://www.google.com/maps/place/Universitas+Bina+Sarana+Informatika+Kampus+Tangerang+(UBSI+Tangerang)/@-6.1873941,106.6082107,17z', '_blank');
    });
</script>
<?php include "footer.php"; ?>
