<?php
include "header.php";
require "database.php";

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$login_error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Cek database dengan email
    $stmt = $conn->prepare("SELECT * FROM database_pelanggan WHERE username = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    // Jika pengguna ditemukan
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        // Verifikasi password
        if (password_verify($password, $user['password'])) {
            $_SESSION['username'] = $user['username'];
            header('Location: produkmenu.php');
            exit;
        } else {
            // Password tidak cocok
            $login_error = 'Username atau password salah.';
        }
    } else {
        // Jika pengguna tidak ditemukan
        $login_error = 'Anda belum terdaftar, silahkan <a href="signup.php">Daftar dahulu disini</a>';
    }
    $stmt->close();
}
?>

<!--Bagian form daftar-->
<section class="py-5">
    <div class="container px-5">
        <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
            <div class="text-center mb-5">

                <body class="hold-transition login-page">
                    <div class="login-box text-center">
                        <?php if ($login_error): ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo $login_error; ?>
                            </div>
                        <?php endif; ?>

                        <div class="card card-outline card-primary">
                            <div class="card-header text-center">
                                <a href="produkmenu.php" class="fw-bolder">
                                    <h1><b>Es Teh</b>Cimone
                                </a>
                            </div>
                            <div class="row gx-5 justify-content-center">
                                <div class="col-lg-8 col-xl-4">
                                    <p class="login-box-msg">Masuk untuk melihat produk menu</p>
                                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"
                                        id="loginForm">
                                        <div class="input-group mb-3">
                                            <input type="email" name="email" class="form-control" placeholder="Email"
                                                required>
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-envelope"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="password" name="password" class="form-control"
                                                placeholder="Password" required>
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="fas fa-lock"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-8">
                                                <div class="icheck-primary">
                                                    <input type="checkbox" id="remember">
                                                    <label for="remember">Remember Me</label>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                </body>
            </div>
        </div>
    </div>
</section>
<?php include "footer.php"; ?>
