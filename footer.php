    <footer>
        <div class="container">
            <span class="bigicon icon-speedometer"></span>
            <div class="footerlinks">
                <ul>
                    <li><a href="#hero">Beranda</a></li>
                    <li><a href="#about">Tentang</a></li>
                    <li><a href="#services">Layanan</a></li>
                    <li><a href="#portfolio">Portofolio</a></li>
                    <li><a href="#testimonials">Testimoni</a></li>
                    <li><a href="mailto:irvanck5@gmail.com">Kontak</a></li>
                </ul>
            </div>
            <div class="copyright">
                <p>© 2023 Portfolio. Hak Cipta Dilindungi.</p>
            </div>
            <div class="footersocial wow fadeInUp" data-wow-duration="3s">
                <ul>
                    <li><a href="#"><span class="icon-social-facebook"></span></a></li>
                    <li><a href="#"><span class="icon-social-twitter"></span></a></li>
                    <li><a href="#"><span class="icon-social-youtube"></span></a></li>
                    <li><a href="#"><span class="icon-social-dribbble"></span></a></li>
                    <li><a href="#"><span class="icon-social-tumblr"></span></a></li>
                </ul>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
        function toggleMode() {
            var body = document.body;
            var toggleButton = document.getElementById("toggle-mode");
            body.classList.toggle("dark-mode");
            body.classList.toggle("light-mode");
            if (body.classList.contains("dark-mode")) {
                toggleButton.innerHTML = '<span class="btnicon icon-sun"></span>Mode Terang';
            } else {
                toggleButton.innerHTML = '<span class="btnicon icon-moon"></span>Mode Gelap';
            }
        }
    </script>
</body>
</html>
