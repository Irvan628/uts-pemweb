<?php
include 'koneksi.php';
include 'header.php';

$sql = "SELECT id, nama, deskripsi, keterangan FROM about";
$result = $conn->query($sql);
?>

<div id="about" class="container">
    <?php
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo '<div class="col-md-6">';
            echo '<div class="row">';
            echo '<h2 class="wow fadeInDown" data-wow-duration="2s">' . $row["nama"] . '</h2>';
            echo '<h4 class="wow fadeInUp" data-wow-duration="3s">' . $row["deskripsi"] . '</h4>';
            echo '<p class="wow fadeInDown" data-wow-duration="3s">' . $row["keterangan"] . '</p>';
            echo '</div>';
            echo '</div>';
        }
    } else {
        echo '<p>No entries found.</p>';
    }
    ?>
    
    <!-- Menampilkan gambar Irvan dengan ukuran yang diperkecil -->
    <div class="col-md-6 wow fadeInUp myphoto" data-wow-duration="4s">
        <img src="img/fotoirvan.png" alt="Irvan" style="width: 60%; height: auto;">
    </div>
</div>

<?php
// Sertakan footer
include 'footer.php';
