<?php
// Sertakan koneksi ke database dan file header
include 'koneksi.php';
include 'header.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = filter_var($_POST['nama'] ?? '', FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL);
    $testimoni = filter_var($_POST['testimoni'] ?? '', FILTER_SANITIZE_STRING);
    if (!empty($nama) && !empty($email) && !empty($testimoni)) {
        $stmt = $conn->prepare("INSERT INTO testimonies (nama, email, testimoni) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $nama, $email, $testimoni);

        if ($stmt->execute()) {
            echo "<script>alert('Testimoni berhasil disimpan!'); window.location.replace('contact.php');</script>";
        } else {
            echo "<div class='alert alert-danger text-center'>Terjadi kesalahan saat menyimpan data. Silakan coba lagi.</div>";
        }

        // Menutup statement
        $stmt->close();
    } else {
        // Pesan jika ada field yang kosong
        echo "<script>alert('Semua field harus diisi!');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Berikan Testimoni Anda</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>

<div class="container" style="margin-top: 100px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg p-4" style="border-radius: 15px; background-color: #f8f9fa;">
                <h2 class="text-center mb-4" style="font-weight: bold; color: #007bff;">Berikan Testimoni Anda</h2>
                <p class="text-center mb-4">Kami sangat menghargai masukan dan pengalaman Anda.</p>
                
                <!-- Form Testimoni -->
                <form action="contact.php" method="post">
                    <div class="form-group mb-3">
                        <label for="nama" style="font-weight: bold;">Nama:</label>
                        <input type="text" class="form-control shadow-sm" id="nama" name="nama" required style="border-radius: 8px;">
                    </div>
                    <div class="form-group mb-3">
                        <label for="email" style="font-weight: bold;">Email:</label>
                        <input type="email" class="form-control shadow-sm" id="email" name="email" required style="border-radius: 8px;">
                    </div>
                    <div class="form-group mb-4">
                        <label for="testimoni" style="font-weight: bold;">Testimoni:</label>
                        <textarea class="form-control shadow-sm" id="testimoni" name="testimoni" rows="5" required style="border-radius: 8px;"></textarea>
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary btn-lg shadow-sm" style="border-radius: 50px; padding: 10px 30px; font-weight: bold;">Kirim Testimoni</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

<?php
// Sertakan file footer
include 'footer.php';
?>
