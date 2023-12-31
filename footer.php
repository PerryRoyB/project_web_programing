<!-- Footer-->
<script>
    document.addEventListener('DOMContentLoaded', (event) => {
        var bannerCarousel = new bootstrap.Carousel(document.querySelector('#bannerCarousel'), {
            interval: 3000,
            wrap: true
        });
    });
</script>
<footer class="bg-dark py-4 mt-auto">
    <div class="container px-5">
        <div class="row align-items-center justify-content-between flex-column flex-sm-row">
            <div class="col-auto mb-2 mb-sm-0">
                <!--Bagian media sosial-->
                <a href="https://www.facebook.com/" target="blank" class="text-white me-4">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://www.instagram.com/" target="blank" class="text-white me-4">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="https://www.twitter.com/" target="blank" class="text-white me-4">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="https://www.linkedin.com/" target="blank" class="text-white">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>
            <div class="col-auto">
                <!-- Privacy, Terms, Contact -->
                <a class="link-light small" href="#!">Privacy</a>
                <span class="text-white mx-1">&middot;</span>
                <a class="link-light small" href="#!">Terms</a>
                <span class="text-white mx-1">&middot;</span>
                <a class="link-light small" href="contact.php">Kontak</a>
            </div>
        </div>
        <div class="row align-items-center justify-content-center">
            <div class="col-auto text-center">
                <!--Copyright-->
                <div class="small text-white">Copyright &copy; Tugas Kelompok 2</div>
            </div>
        </div>
    </div>
</footer>
