<?php
include "header.php";
require "database.php";

$signup_error = '';
$signup_success = '';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    // Menangkap dan sanitasi input dari form
    $fullname = $conn->real_escape_string(trim($_POST['fullname']));
    $email = $conn->real_escape_string(trim($_POST['email']));
    $password = $conn->real_escape_string(trim($_POST['password']));
    $confirm_password = $conn->real_escape_string(trim($_POST['confirm_password']));

    // Cek apakah kedua password cocok
    if ($password !== $confirm_password) {
        $signup_error = 'Password tidak cocok.';
    } else {
        // Hash password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // SQL statement untuk mencegah SQL injection
        $stmt = $conn->prepare("INSERT INTO database_pelanggan(nama_pelanggan, username, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $fullname, $email, $hashed_password);

        if ($stmt->execute()) {
            $signup_success = 'Pendaftaran berhasil. Silakan <a href="login.php">login</a>.';
        } else {
            $signup_error = 'Terjadi kesalahan: ' . $stmt->error;
        }

        $stmt->close();
        $conn->close();
    }
} ?>

<!--Bagian form daftar-->
<section class="py-5">
    <div class="container px-5">
        <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
            <div class="text-center mb-5">

                <body class="hold-transition register-page">
                    <div class="register-box text-center">
                        <div class="register-logo">
                            <a href="home.php" class="fw-bolder">
                                <h1><b>Es Teh</b> Cimone
                            </a>
                        </div>
                        <?php if ($signup_error): ?>
                            <div class="alert alert-danger">
                                <?php echo $signup_error; ?>
                            </div>
                        <?php endif; ?>

                        <?php if ($signup_success): ?>
                            <div class="alert alert-success">
                                <?php echo $signup_success; ?>
                            </div>
                        <?php endif; ?>
                        <div class="row gx-5 justify-content-center">
                            <div class="col-lg-8 col-xl-4">
                                <p class="signup-box-msg">Daftar untuk melihat produk menu</p>
                                <form action="signup.php" method="post" id="signupform">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="fullname" placeholder="Full name"
                                            required>
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-user"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="email" class="form-control" name="email" placeholder="Email"
                                            required>
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-envelope"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="password" class="form-control" name="password"
                                            placeholder="Password" required>
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-lock"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="password" class="form-control" name="confirm_password"
                                            placeholder="Retype password" required>
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-lock"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="icheck-primary">
                                                <input type="checkbox" id="agreeTerms" name="terms" value="agree"
                                                    required>
                                                <label for="agreeTerms">
                                                    I agree to the terms
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-4">
                                            <button type="submit" name="submit"
                                                class="btn btn-primary btn-block">Register</button>
                                        </div>

                                    </div>
                                </form>
                                <a href="login.php" class="text-center">I already have a membership</a>
                            </div>

                        </div>
                    </div>


                    <script src="../../plugins/jquery/jquery.min.js"></script>
                    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
                    <script src="../../dist/js/adminlte.min.js?v=3.2.0"></script>
                    <script>
                        document.addEventListener('DOMContentLoaded', function () {
                            document.getElementById('signupForm').addEventListener('submit', function (event) {
                                if (!this.checkValidity()) {
                                    event.preventDefault();
                                    event.stopPropagation();
                                    alert('Please fill in all required fields.');
                                }
                                this.classList.add('was-validated');
                            }, false);
                        });
                    </script>
                </body>
            </div>
        </div>
    </div>
</section>
<?php include "footer.php"; ?>
