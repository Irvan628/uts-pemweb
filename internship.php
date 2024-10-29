<?php include 'header.php'; ?>
<?php include 'koneksi.php'; ?>
<style>
    /* Background gradient untuk header */
    .sectionhead {
        background: linear-gradient(135deg, #007bff, #00c6ff);
        color: #fff;
        padding: 30px 0;
        border-radius: 8px;
        margin-bottom: 30px;
        text-align: center;
    }
    .sectionhead h2 {
        font-weight: bold;
        font-size: 2rem;
        margin-bottom: 10px;
    }
    .sectionhead p {
        font-size: 1.1rem;
    }

    /* Styling card dengan tinggi seragam */
    .row {
        display: flex;
        flex-wrap: wrap;
    }
    .card-custom {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        min-height: 350px; /* Atur tinggi minimum card */
        border-radius: 10px;
        background: #fff;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        padding: 20px;
        position: relative;
    }
    .card-custom:hover {
        transform: translateY(-10px);
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
    }
    .card-title {
        color: #007bff;
        font-weight: 600;
        display: flex;
        align-items: center;
        font-size: 1.3rem;
    }
    .card-title i {
        margin-right: 8px;
        color: #ff6600;
    }
    .card-subtitle {
        font-style: italic;
        color: #666;
        margin-top: 5px;
    }
    .card-text {
        color: #555;
        font-size: 1rem;
        line-height: 1.6;
    }

    /* Animasi */
    .fade-in {
        opacity: 0;
        animation: fadeInAnimation 1s forwards;
    }
    @keyframes fadeInAnimation {
        0% { opacity: 0; }
        100% { opacity: 1; }
    }
</style>

<div class="sectionhead">
    <h2>Pengalaman Internship</h2>
    <p>Berikut adalah beberapa pengalaman internship dan posisi lainnya yang pernah saya jalani.</p>
</div>

<div class="container">
    <div class="row">
        <?php
        // Query untuk mengambil data dari tabel experiences
        $sql = "SELECT * FROM experiences ORDER BY start_date DESC";
        $result = $conn->query($sql);

        // Cek apakah ada data yang ditemukan
        if ($result->num_rows > 0) {
            // Loop untuk menampilkan setiap pengalaman
            while ($row = $result->fetch_assoc()) {
                ?>
                <div class="col-md-6 mb-4 fade-in">
                    <div class="card card-custom">
                        <div class="card-body">
                            <h5 class="card-title"><i class="fa fa-briefcase"></i><?php echo htmlspecialchars($row['position']); ?></h5>
                            <p class="card-subtitle">
                                <?php 
                                echo date("F Y", strtotime($row['start_date'])) . " - ";
                                echo $row['end_date'] ? date("F Y", strtotime($row['end_date'])) : 'Present';
                                ?>
                            </p>
                            <p class="card-subtitle"><?php echo htmlspecialchars($row['organization']); ?>, <?php echo htmlspecialchars($row['location']); ?></p>
                            <hr>
                            <p class="card-text"><?php echo htmlspecialchars($row['description']); ?></p>
                        </div>
                    </div>
                </div>
                <?php
            }
        } else {
            echo "<p class='text-center'>Tidak ada pengalaman internship yang tersedia saat ini.</p>";
        }
        ?>
    </div>
</div>

<?php include 'footer.php'; ?>
