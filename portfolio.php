<?php include 'header.php' ?>
<?php
include 'koneksi.php'; 
$query = "SELECT image, title, description FROM portfolio";
$result = mysqli_query($conn, $query);
?>
    <div id="portfolio">
        <div class="sectionhead wow bounceInUp" data-wow-duration="2s">
            <span class="bigicon icon-rocket"></span>
            <h3>Services</h3>
            <hr class="separetor">
        </div>
        <div class="portfolioitems container">
    <div class="row">
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-duration="3s">
                <img src="<?php echo $row['image']; ?>" alt="<?php echo $row['title']; ?>" class="rounded-circle img-rounded">
                <h4><?php echo $row['title']; ?></h4>
                <p><?php echo $row['description']; ?></p>
            </div>
        <?php } ?>
    </div>
</div>

<?php
// Menutup koneksi database
mysqli_close($conn);
?>
    </div>

            
        
    <?php include 'footer.php' ?>
    