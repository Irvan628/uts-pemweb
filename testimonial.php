<?php include 'header.php'; ?>
<?php include 'koneksi.php'; ?>

<div id="testimonials" class="container">
    <div class="sectionhead wow bounceInUp" data-wow-duration="2s">
        <span class="bigicon icon-bubbles"></span>
        <h3>Apa kata mereka tentang saya</h3>
        <h4>Ini adalah hasil masukan dari form yang telah saya buat</h4>
        <hr class="separetor">
    </div>
    <div class="row">
        <?php
        // Query untuk mengambil data dari tabel testimonies
        $sql = "SELECT * FROM testimonies ORDER BY id DESC"; // Urutkan dari yang terbaru
        $result = $conn->query($sql);

        // Cek apakah ada data yang ditemukan
        if ($result->num_rows > 0) {
            // Loop melalui data dan tampilkan
            while ($row = $result->fetch_assoc()) {
                ?>
                <div class="col-md-6 wow bounceIn" data-wow-duration="2s">
                    <div class="quote">
                        <blockquote>
                            <p><?php echo htmlspecialchars($row['testimoni']); ?></p>
                        </blockquote>
                        <h5><?php echo htmlspecialchars($row['nama']); ?></h5>
                        <p><?php echo htmlspecialchars($row['email']); ?></p> <!-- Menampilkan email (opsional) -->
                    </div>
                </div>
                <?php
            }
        } else {
            echo "<p class='text-center'>Belum ada testimoni yang tersedia.</p>";
        }
        ?>
    </div>
</div>

<?php include 'footer.php'; ?>
